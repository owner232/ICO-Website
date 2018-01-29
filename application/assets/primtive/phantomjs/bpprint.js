/*
PhantomJS sample script for diagram rendering into PNG.
The rendered page is http://localhost/primitives/CasePrintPreview.html and it is configured to 
render diagram in primitives.common.PageFitMode.PrintPreview mode.
See pageFitMode option of famDiagram and orgDiagram configuration classes.

In that mode digram elements are displayed in regular form and split into printable size panels. 
See option printPreviewPageSize of famDiagram and orgDiagram configuration classes. 
By default print preview page size set to {612, 792}
Diagram is layout to avoid elements overlaping of page boundaries. 

Rendering is done in PhantomJS at server side. PhantomJS is a headless WebKit scriptable with a JavaScript API. 
It has fast and native support for various web standards: DOM handling, CSS selector, JSON, Canvas, and SVG.
It supports majority of operating systems and has a lot of examples to try.

In order to run following example you have to change address to any web page containing 
Basic Primitives Diagram in print preview mode.
Then download and unpack PhantomJS binaries from http://phantomjs.org/ and set system 
path to its executable phantomjs.

run following script in command line
> phantomjs bprpint.js
you have to see names of generated PNG images
every image file has suffix containing page column underscore page row.
*/
var page = require('webpage').create(),
    system = require('system'),
    address = 'http://localhost/primitives/CasePrintPreview.html',
	output = 'family',
	format = 'png';
    page.viewportSize = { width: 10000, height: 2000 };
	
function evaluate(page, func) {
    var args = [].slice.call(arguments, 2);
    var fn = "function() { return (" + func.toString() + ").apply(this, " + JSON.stringify(args) + ");}";
    return page.evaluate(fn);
}

page.open(address, function (status) {
    if (status !== 'success') {
        console.log('Unable to load the address!');
        phantom.exit(1);
    } else {
        window.setTimeout(function () {
            var pageNumber = 0;
            while (true) {
                var pageInfo = evaluate(page, function (pageNumber) {
                    /* In print preview mode digram draws rectangles of page boundaries
                    so we search for them and render them one by one into separate files
                    for the sake of convinience every rectangle has data attribute having page column and row.
                    In ordeer to change rectangle style see .bp-printpreview class in css.
                    */
                    var diagram = jQuery(jQuery('.bp-printpreview')[pageNumber]);
                    if (diagram.length > 0) {
                        var offset = diagram.offset();
                        return {
                            top: offset.top,
                            left: offset.left,
                            width: diagram.width(),
                            height: diagram.height(),
                            row: diagram.data("row"),
                            column: diagram.data("column")
                        };
                    }
                    return { top: 0, left: 0, width: 0, height: 0 };
                }, pageNumber);

                page.clipRect = pageInfo;

                console.log('');
                if (page.clipRect.width > 0 && page.clipRect.height > 0) {
                    var filename = output + pageInfo.column + "_" + pageInfo.row + "." + format;
                    console.log(filename);
                    page.render(filename);
                } else {
                    phantom.exit();
                }
                pageNumber += 1;
            }
        }, 2000);
    }
});


