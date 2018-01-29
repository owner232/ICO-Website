/**
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
"use strict";
var CURRENT_URL = window.location.href.split('#')[0].split('?')[0],
        $BODY = $('body'),
        $MENU_TOGGLE = $('#menu_toggle'),
        $SIDEBAR_MENU = $('#sidebar-menu'),
        $SIDEBAR_FOOTER = $('.sidebar-footer'),
        $LEFT_COL = $('.left_col'),
        $RIGHT_COL = $('.right_col'),
        $NAV_MENU = $('.nav_menu'),
        $FOOTER = $('footer');


// Sidebar
function init_sidebar() {
// TODO: This is some kind of easy fix, maybe we can improve this
    var setContentHeight = function () {
        // reset height
        $RIGHT_COL.css('min-height', $(window).height());

        var bodyHeight = $BODY.outerHeight(),
                footerHeight = $BODY.hasClass('footer_fixed') ? -10 : $FOOTER.height(),
                leftColHeight = $LEFT_COL.eq(1).height() + $SIDEBAR_FOOTER.height(),
                contentHeight = bodyHeight < leftColHeight ? leftColHeight : bodyHeight;

        // normalize content
        contentHeight -= $NAV_MENU.height() + footerHeight;

        $RIGHT_COL.css('min-height', contentHeight);
    };

    $SIDEBAR_MENU.find('a').on('click', function (ev) {
        var $li = $(this).parent();

        if ($li.is('.active')) {
            $li.removeClass('active active-sm');
            $('ul:first', $li).slideUp(function () {
                setContentHeight();
            });
        } else {
            // prevent closing menu if we are on child menu
            if (!$li.parent().is('.child_menu')) {
                $SIDEBAR_MENU.find('li').removeClass('active active-sm');
                $SIDEBAR_MENU.find('li ul').slideUp();
            } else
            {
                if ($BODY.is(".nav-sm"))
                {
                    $SIDEBAR_MENU.find("li").removeClass("active active-sm");
                    $SIDEBAR_MENU.find("li ul").slideUp();
                }
            }
            $li.addClass('active');

            $('ul:first', $li).slideDown(function () {
                setContentHeight();
            });
        }
    });

// toggle small or large menu 
    $MENU_TOGGLE.on('click', function () {

        if ($BODY.hasClass('nav-md')) {
            $SIDEBAR_MENU.find('li.active ul').hide();
            $SIDEBAR_MENU.find('li.active').addClass('active-sm').removeClass('active');
            $(".breadcrumb_content").attr('style', 'margin-left: 70px !important;');
        } else {
            $SIDEBAR_MENU.find('li.active-sm ul').show();
            $SIDEBAR_MENU.find('li.active-sm').addClass('active').removeClass('active-sm');
            $(".breadcrumb_content").removeAttr('style');
        }

        $BODY.toggleClass('nav-md nav-sm');

        setContentHeight();
    });

    // check active menu
    $SIDEBAR_MENU.find('a[href="' + CURRENT_URL + '"]').parent('li').addClass('current-page');

    $SIDEBAR_MENU.find('a').filter(function () {
        return this.href == CURRENT_URL;
    }).parent('li').addClass('current-page').parents('ul').slideDown(function () {
        setContentHeight();
    }).parent().addClass('active');

    setContentHeight();

    // fixed sidebar
    if ($.fn.mCustomScrollbar) {
        $('.menu_fixed').mCustomScrollbar({
            autoHideScrollbar: true,
            theme: 'minimal',
            mouseWheel: {preventDefault: true}
        });
    }
}
;
// /Sidebar

var randNum = function () {
    return (Math.floor(Math.random() * (1 + 40 - 20))) + 20;
};
function toggleFullScreen() {
    if ((document.fullScreenElement && document.fullScreenElement !== null) ||
            (!document.mozFullScreen && !document.webkitIsFullScreen)) {
        if (document.documentElement.requestFullScreen) {
            document.documentElement.requestFullScreen();
        } else if (document.documentElement.mozRequestFullScreen) {
            document.documentElement.mozRequestFullScreen();
        } else if (document.documentElement.webkitRequestFullScreen) {
            document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
        }
    } else {
        if (document.cancelFullScreen) {
            document.cancelFullScreen();
        } else if (document.mozCancelFullScreen) {
            document.mozCancelFullScreen();
        } else if (document.webkitCancelFullScreen) {
            document.webkitCancelFullScreen();
        }
    }
}

// Progressbar
if ($(".progress .progress-bar")[0]) {
    //$('.progress .progress-bar').progressbar();
}
// /Progressbar

// Table
$('table input').on('ifChecked', function () {
    checkState = '';
    $(this).parent().parent().parent().addClass('selected');
    countChecked();
});
$('table input').on('ifUnchecked', function () {
    checkState = '';
    $(this).parent().parent().parent().removeClass('selected');
    countChecked();
});

var checkState = '';

$('.bulk_action input').on('ifChecked', function () {
    checkState = '';
    $(this).parent().parent().parent().addClass('selected');
    countChecked();
});
$('.bulk_action input').on('ifUnchecked', function () {
    checkState = '';
    $(this).parent().parent().parent().removeClass('selected');
    countChecked();
});
$('.bulk_action input.check-all').on('ifChecked', function () {
    checkState = 'all';
    countChecked();
});
$('.bulk_action input.check-all').on('ifUnchecked', function () {
    checkState = 'none';
    countChecked();
});

$('.bulk_action_order input').on('ifChecked', function () {
    checkState = '';
    $(this).parent().parent().parent().addClass('selected');
    bulkActionOrder();
});
$('.bulk_action_order input').on('ifUnchecked', function () {
    checkState = '';
    $(this).parent().parent().parent().removeClass('selected');
    bulkActionOrder();
});
$('.bulk_action_order input.check-all').on('ifChecked', function () {
    checkState = 'all';
    bulkActionOrder();
});
$('.bulk_action_order input.check-all').on('ifUnchecked', function () {
    checkState = 'none';
    bulkActionOrder();
});
$('.bulk_action_product_list input').on('ifChecked', function () {
    checkState = '';
    $(this).parent().parent().parent().addClass('selected');
    bulkActionProductList();
});
$('.bulk_action_product_list input').on('ifUnchecked', function () {
    checkState = '';
    $(this).parent().parent().parent().removeClass('selected');
    bulkActionProductList();
});
$('.bulk_action_product_list input.check-all').on('ifChecked', function () {
    checkState = 'all';
    bulkActionProductList();
});
$('.bulk_action_product_list input.check-all').on('ifUnchecked', function () {
    checkState = 'none';
    bulkActionProductList();
});

function bulkActionProductList() {
    if (checkState === 'all') {
        $(".bulk_action_product_list input[name='table_records']").iCheck('check');
    }
    if (checkState === 'none') {
        $(".bulk_action_product_list input[name='table_records']").iCheck('uncheck');
    }

    var checkCount = $(".bulk_action_product_list input[name='table_records']:checked").length;

    if (checkCount) {
        $('.column-title').hide();
        $('.bulk-actions').show();
        var actions = '<select class="select_custom form-control input-inline input-small input-sm">' +
                '<option value="">Select...</option>' +
                '<option value="Published">Published</option>' +
                '<option value="Not_Published">Not Published</option>' +
                '<option value="Trash">Trash</option>' +
                '</select><button class="btn btn-sm btn-default order-table-group-action-submit"><i class="fa fa-check"></i> Submit</button>' +
                '<span class="order-bulk-separator-buttons"></span><button type="button" class="btn btn-default btn-sm order-table-group-action-icon-button" title="Delete"><i class="fa fa-trash-o"></i></button>';
        $('.action-cnt').html(checkCount + ' Records Selected &nbsp; &nbsp; ' + actions);
    } else {
        $('.column-title').show();
        $('.bulk-actions').hide();
    }
}

function bulkActionOrder() {
    if (checkState === 'all') {
        $(".bulk_action_order input[name='table_records']").iCheck('check');
    }
    if (checkState === 'none') {
        $(".bulk_action_order input[name='table_records']").iCheck('uncheck');
    }

    var checkCount = $(".bulk_action_order input[name='table_records']:checked").length;

    if (checkCount) {
        $('.column-title').hide();
        $('.bulk-actions').show();
        var actions = '<select class="select_custom form-control input-inline input-small input-sm">' +
                '<option value="">Select...</option>' +
                '<option value="Pending">Pending</option>' +
                '<option value="Shipped">Shipped</option>' +
                '<option value="Cancel">On Hold</option>' +
                '<option value="Close">Close</option>' +
                '</select><button class="btn btn-sm btn-default order-table-group-action-submit"><i class="fa fa-check"></i> Submit</button>' +
                '<span class="order-bulk-separator-buttons"></span><button type="button" class="btn btn-default btn-sm order-table-group-action-icon-button" title="Delete"><i class="fa fa-trash-o"></i></button>';
        $('.action-cnt').html(checkCount + ' Records Selected &nbsp; &nbsp; ' + actions);
    } else {
        $('.column-title').show();
        $('.bulk-actions').hide();
    }
}

function countChecked() {
    if (checkState === 'all') {
        $(".bulk_action input[name='table_records']").iCheck('check');
    }
    if (checkState === 'none') {
        $(".bulk_action input[name='table_records']").iCheck('uncheck');
    }

    var checkCount = $(".bulk_action input[name='table_records']:checked").length;

    if (checkCount) {
        $('.column-title').hide();
        $('.bulk-actions').show();
        var actions = '<button type="button" class="btn btn-primary btn-xs" title="View"><i class="fa fa-search"></i></button> ' +
                '<button type="button" class="btn btn-info btn-xs" title="Edit"><i class="fa fa-pencil"></i></button> ' +
                '<button type="button" class="btn btn-danger btn-xs" title="Delete"><i class="fa fa-trash-o"></i></button>';
        $('.action-cnt').html(checkCount + ' Records Selected &nbsp; &nbsp; ' + actions);
    } else {
        $('.column-title').show();
        $('.bulk-actions').hide();
    }
}

//hover and retain popover when on popover content
var originalLeave = $.fn.popover.Constructor.prototype.leave;
$.fn.popover.Constructor.prototype.leave = function (obj) {
    var self = obj instanceof this.constructor ?
            obj : $(obj.currentTarget)[this.type](this.getDelegateOptions()).data('bs.' + this.type);
    var container, timeout;

    originalLeave.call(this, obj);

    if (obj.currentTarget) {
        container = $(obj.currentTarget).siblings('.popover');
        timeout = self.timeout;
        container.one('mouseenter', function () {
            //We entered the actual popover – call off the dogs
            clearTimeout(timeout);
            //Let's monitor popover content instead
            container.one('mouseleave', function () {
                $.fn.popover.Constructor.prototype.leave.call(self, self);
            });
        });
    }
};

$('body').popover({
    selector: '[data-popover]',
    trigger: 'click hover',
    delay: {
        show: 50,
        hide: 400
    }
});


function gd(year, month, day) {
    return new Date(year, month - 1, day).getTime();
}


function init_flot_chart() {

    if (typeof ($.plot) === 'undefined') {
        return;
    }

    var arr_data1 = [
        [gd(2012, 1, 1), 17],
        [gd(2012, 1, 2), 74],
        [gd(2012, 1, 3), 6],
        [gd(2012, 1, 4), 39],
        [gd(2012, 1, 5), 20],
        [gd(2012, 1, 6), 85],
        [gd(2012, 1, 7), 7]
    ];

    var arr_data2 = [
        [gd(2012, 1, 1), 82],
        [gd(2012, 1, 2), 23],
        [gd(2012, 1, 3), 66],
        [gd(2012, 1, 4), 9],
        [gd(2012, 1, 5), 119],
        [gd(2012, 1, 6), 6],
        [gd(2012, 1, 7), 9]
    ];

    var arr_data3 = [
        [0, 1],
        [1, 9],
        [2, 6],
        [3, 10],
        [4, 5],
        [5, 17],
        [6, 6],
        [7, 10],
        [8, 7],
        [9, 11],
        [10, 35],
        [11, 9],
        [12, 12],
        [13, 5],
        [14, 3],
        [15, 4],
        [16, 9]
    ];

    var chart_plot_02_data = [];

    var chart_plot_03_data = [
        [0, 1],
        [1, 9],
        [2, 6],
        [3, 10],
        [4, 5],
        [5, 17],
        [6, 6],
        [7, 10],
        [8, 7],
        [9, 11],
        [10, 35],
        [11, 9],
        [12, 12],
        [13, 5],
        [14, 3],
        [15, 4],
        [16, 9]
    ];


    for (var i = 0; i < 30; i++) {
        chart_plot_02_data.push([new Date(Date.today().add(i).days()).getTime(), randNum() + i + i + 10]);
    }


    var chart_plot_01_settings = {
        series: {
            lines: {
                show: false,
                fill: true
            },
            splines: {
                show: true,
                tension: 0.4,
                lineWidth: 1,
                fill: 0.5
            },
            points: {
                radius: 0,
                show: true
            },
            shadowSize: 2
        },
        grid: {
            verticalLines: true,
            hoverable: true,
            clickable: true,
            tickColor: "#d5d5d5",
            borderWidth: 1,
            color: '#fff'
        },
        colors: ["#2177a5", "#36c6d3"],
        xaxis: {
            tickColor: "rgba(51, 51, 51, 0.06)",
            mode: "time",
            tickSize: [1, "day"],
            tickLength: 1,
            axisLabel: "Date",
            axisLabelUseCanvas: true,
            axisLabelFontSizePixels: 12,
            axisLabelFontFamily: 'Verdana, Arial',
            axisLabelPadding: 10
        },
        yaxis: {
            ticks: 2,
            tickColor: "rgba(51, 51, 51, 0.06)",
        },
        tooltip: false
    }

    var chart_plot_02_settings = {
        grid: {
            show: true,
            aboveData: true,
            color: "#35aa47",
            labelMargin: 10,
            axisMargin: 0,
            borderWidth: 0,
            borderColor: null,
            minBorderMargin: 5,
            clickable: true,
            hoverable: true,
            autoHighlight: true,
            mouseActiveRadius: 100
        },
        series: {
            lines: {
                show: true,
                fill: true,
                lineWidth: 2,
                steps: false
            },
            points: {
                show: true,
                radius: 4.5,
                symbol: "circle",
                lineWidth: 3.0
            }
        },
        legend: {
            position: "ne",
            margin: [0, -30],
            noColumns: 0,
            labelBoxBorderColor: null,
            labelFormatter: function (label, series) {
                return label + '&nbsp;&nbsp;';
            },
            width: 40,
            height: 1
        },
        colors: ['#35aa47', '#3F97EB', '#72c380', '#6f7a8a', '#f7cb38', '#5a8022', '#2c7282'],
        shadowSize: 0,
        tooltip: true,
        tooltipOpts: {
            content: "%s: %y.0",
            xDateFormat: "%d/%m",
            shifts: {
                x: -30,
                y: -50
            },
            defaultTheme: false
        },
        yaxis: {
            min: 0
        },
        xaxis: {
            mode: "time",
            minTickSize: [3, "day"],
            timeformat: "%d/%m/%y",
            min: chart_plot_02_data[0][0],
            max: chart_plot_02_data[20][0]
        }
    };

    var chart_plot_03_settings = {
        series: {
            curvedLines: {
                apply: true,
                active: true,
                monotonicFit: true
            }
        },
        colors: ["#5bc0de"],
        grid: {
            borderWidth: {
                top: 0,
                right: 0,
                bottom: 1,
                left: 1
            },
            borderColor: {
                bottom: "#7F8790",
                left: "#7F8790"
            }
        }
    };


    if ($("#chart_plot_01").length) {
        $.plot($("#chart_plot_01"), [arr_data1, arr_data2], chart_plot_01_settings);
    }


    if ($("#chart_plot_02").length) {
        $.plot($("#chart_plot_02"),
                [{
                        label: "Email Sent",
                        data: chart_plot_02_data,
                        lines: {
                            fillColor: "rgba(150, 202, 89, 0.12)"
                        },
                        points: {
                            fillColor: "#fff"}
                    }], chart_plot_02_settings);

    }

    if ($("#chart_plot_03").length) {
        $.plot($("#chart_plot_03"), [{
                label: "Registrations",
                data: chart_plot_03_data,
                lines: {
                    fillColor: "rgba(150, 202, 89, 0.12)"
                },
                points: {
                    fillColor: "#fff"
                }
            }], chart_plot_03_settings);

    }
    ;

}


/* STARRR */

function init_starrr() {

    if (typeof (starrr) === 'undefined') {
        return;
    }

    $(".stars").starrr();

    $('.stars-existing').starrr({
        rating: 4
    });

    $('.stars').on('starrr:change', function (e, value) {
        $('.stars-count').html(value);
    });

    $('.stars-existing').on('starrr:change', function (e, value) {
        $('.stars-count-existing').html(value);
    });

}
;


function init_JQVmap() {

    if (typeof (jQuery.fn.vectorMap) === 'undefined') {
        return;
    }


    if ($('#world-map-gdp').length) {

        $('#world-map-gdp').vectorMap({
            map: 'world_en',
            backgroundColor: null,
            color: '#fff',
            hoverOpacity: 0.7,
            selectedColor: '#666666',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#E6F2F0', '#36c6d3'],
            normalizeFunction: 'polynomial'
        });

    }

    if ($('#usa_map').length) {

        $('#usa_map').vectorMap({
            map: 'usa_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#666666',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#E6F2F0', '#36c6d3'],
            normalizeFunction: 'polynomial'
        });

    }

}
;


function init_skycons() {

    if (typeof (Skycons) === 'undefined') {
        return;
    }
    var icons = new Skycons({
        "color": "rgb(54, 198, 211)"
    }),
            list = [
                "clear-day", "clear-night", "partly-cloudy-day",
                "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                "fog"
            ],
            i;

    for (i = list.length; i--; )
        icons.set(list[i], list[i]);

    icons.play();

}


function init_chart_doughnut() {

    if (typeof (Chart) === 'undefined') {
        return;
    }

    if ($('.canvasDoughnut').length) {

        var chart_doughnut_settings = {
            type: 'doughnut',
            tooltipFillColor: "rgba(51, 51, 51, 0.55)",
            data: {
                labels: [
                    "China",
                    "Germany",
                    "Other",
                    "U.K",
                    "U.S.A"
                ],
                datasets: [{
                        data: [15, 15, 35, 20, 30],
                        backgroundColor: [
                            "#BDC3C7",
                            "#b06ccc",
                            "#ed6b75",
                            "#35aa47",
                            "#36c6d3"
                        ],
                        hoverBackgroundColor: [
                            "#CFD4D8",
                            "#B370CF",
                            "#E95E4F",
                            "#36CAAB",
                            "#49A9EA"
                        ]
                    }]
            },
            options: {
                legend: false,
                responsive: false
            }
        }

        $('.canvasDoughnut').each(function () {

            var chart_element = $(this);
            var chart_doughnut = new Chart(chart_element, chart_doughnut_settings);

        });

    }

}

function init_gauge() {

    if (typeof (Gauge) === 'undefined') {
        return;
    }

    var chart_gauge_settings = {
        lines: 12,
        angle: 0,
        lineWidth: 0.4,
        pointer: {
            length: 0.75,
            strokeWidth: 0.032,
            color: '#9b9b9b'
        },
        limitMax: 'false',
        colorStart: '#36c6d3',
        colorStop: '#1abb9c',
        strokeColor: '#F0F3F3',
        generateGradient: true
    };


    if ($('#chart_gauge_01').length) {

        var chart_gauge_01_elem = document.getElementById('chart_gauge_01');
        var chart_gauge_01 = new Gauge(chart_gauge_01_elem).setOptions(chart_gauge_settings);

    }


    if ($('#gauge-text').length) {

        chart_gauge_01.maxValue = 4000;
        chart_gauge_01.animationSpeed = 32;
        chart_gauge_01.set(3200);
        chart_gauge_01.setTextField(document.getElementById("gauge-text"));

    }

    if ($('#chart_gauge_02').length) {

        var chart_gauge_02_elem = document.getElementById('chart_gauge_02');
        var chart_gauge_02 = new Gauge(chart_gauge_02_elem).setOptions(chart_gauge_settings);

    }


    if ($('#gauge-text2').length) {

        chart_gauge_02.maxValue = 9000;
        chart_gauge_02.animationSpeed = 32;
        chart_gauge_02.set(2400);
        chart_gauge_02.setTextField(document.getElementById("gauge-text2"));

    }


}

/* SPARKLINES */

function init_sparklines() {

    if (typeof (jQuery.fn.sparkline) === 'undefined') {
        return;
    }

    $(".sparkline_one").sparkline([2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 5, 6, 4, 5, 6, 3, 5, 4, 5, 4, 5, 4, 3, 4, 5, 6, 7, 5, 4, 3, 5, 6], {
        type: 'bar',
        height: '125',
        barWidth: 13,
        colorMap: {
            '7': '#a1a1a1'
        },
        barSpacing: 2,
        barColor: '#35aa47'
    });


    $(".sparkline_two").sparkline([2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 5, 6, 7, 5, 4, 3, 5, 6], {
        type: 'bar',
        height: '40',
        barWidth: 9,
        colorMap: {
            '7': '#a1a1a1'
        },
        barSpacing: 2,
        barColor: '#5bc0de'
    });


    $(".sparkline_three").sparkline([2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 5, 6, 7, 5, 4, 3, 5, 6], {
        type: 'line',
        width: '200',
        height: '40',
        lineColor: '#5bc0de',
        fillColor: 'rgba(223, 223, 223, 0.57)',
        lineWidth: 2,
        spotColor: '#5bc0de',
        minSpotColor: '#5bc0de'
    });


    $(".sparkline11").sparkline([2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 6, 2, 4, 3, 4, 5, 4, 5, 4, 3], {
        type: 'bar',
        height: '40',
        barWidth: 8,
        colorMap: {
            '7': '#a1a1a1'
        },
        barSpacing: 2,
        barColor: '#5bc0de'
    });


    $(".sparkline22").sparkline([2, 4, 3, 4, 7, 5, 4, 3, 5, 6, 2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 6], {
        type: 'line',
        height: '40',
        width: '200',
        lineColor: '#5bc0de',
        fillColor: '#ffffff',
        lineWidth: 3,
        spotColor: '#34495E',
        minSpotColor: '#34495E'
    });


    $(".sparkline_bar").sparkline([2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 5, 6, 4, 5, 6, 3, 5], {
        type: 'bar',
        colorMap: {
            '7': '#a1a1a1'
        },
        barColor: '#5bc0de'
    });


    $(".sparkline_area").sparkline([5, 6, 7, 9, 9, 5, 3, 2, 2, 4, 6, 7], {
        type: 'line',
        lineColor: '#5bc0de',
        fillColor: '#5bc0de',
        spotColor: '#4578a0',
        minSpotColor: '#728fb2',
        maxSpotColor: '#6d93c4',
        highlightSpotColor: '#ef5179',
        highlightLineColor: '#8ba8bf',
        spotRadius: 2.5,
        width: 85
    });


    $(".sparkline_line").sparkline([2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 5, 6, 4, 5, 6, 3, 5], {
        type: 'line',
        lineColor: '#5bc0de',
        fillColor: '#ffffff',
        width: 85,
        spotColor: '#34495E',
        minSpotColor: '#34495E'
    });


    $(".sparkline_pie").sparkline([1, 1, 2, 1], {
        type: 'pie',
        sliceColors: ['#5bc0de', '#ccc', '#75BCDD', '#D66DE2']
    });


    $(".sparkline_discreet").sparkline([4, 6, 7, 7, 4, 3, 2, 1, 4, 4, 2, 4, 3, 7, 8, 9, 7, 6, 4, 3], {
        type: 'discrete',
        barWidth: 3,
        lineColor: '#5bc0de',
        width: '85',
    });


}
;


/* AUTOCOMPLETE */

function init_autocomplete() {

    if (typeof (autocomplete) === 'undefined') {
        return;
    }
    var countries = {AD: "Andorra", A2: "Andorra Test", AE: "United Arab Emirates", AF: "Afghanistan", AG: "Antigua and Barbuda", AI: "Anguilla", AL: "Albania", AM: "Armenia", AN: "Netherlands Antilles", AO: "Angola", AQ: "Antarctica", AR: "Argentina", AS: "American Samoa", AT: "Austria", AU: "Australia", AW: "Aruba", AX: "Åland Islands", AZ: "Azerbaijan", BA: "Bosnia and Herzegovina", BB: "Barbados", BD: "Bangladesh", BE: "Belgium", BF: "Burkina Faso", BG: "Bulgaria", BH: "Bahrain", BI: "Burundi", BJ: "Benin", BL: "Saint Barthélemy", BM: "Bermuda", BN: "Brunei", BO: "Bolivia", BQ: "British Antarctic Territory", BR: "Brazil", BS: "Bahamas", BT: "Bhutan", BV: "Bouvet Island", BW: "Botswana", BY: "Belarus", BZ: "Belize", CA: "Canada", CC: "Cocos [Keeling] Islands", CD: "Congo - Kinshasa", CF: "Central African Republic", CG: "Congo - Brazzaville", CH: "Switzerland", CI: "Côte d’Ivoire", CK: "Cook Islands", CL: "Chile", CM: "Cameroon", CN: "China", CO: "Colombia", CR: "Costa Rica", CS: "Serbia and Montenegro", CT: "Canton and Enderbury Islands", CU: "Cuba", CV: "Cape Verde", CX: "Christmas Island", CY: "Cyprus", CZ: "Czech Republic", DD: "East Germany", DE: "Germany", DJ: "Djibouti", DK: "Denmark", DM: "Dominica", DO: "Dominican Republic", DZ: "Algeria", EC: "Ecuador", EE: "Estonia", EG: "Egypt", EH: "Western Sahara", ER: "Eritrea", ES: "Spain", ET: "Ethiopia", FI: "Finland", FJ: "Fiji", FK: "Falkland Islands", FM: "Micronesia", FO: "Faroe Islands", FQ: "French Southern and Antarctic Territories", FR: "France", FX: "Metropolitan France", GA: "Gabon", GB: "United Kingdom", GD: "Grenada", GE: "Georgia", GF: "French Guiana", GG: "Guernsey", GH: "Ghana", GI: "Gibraltar", GL: "Greenland", GM: "Gambia", GN: "Guinea", GP: "Guadeloupe", GQ: "Equatorial Guinea", GR: "Greece", GS: "South Georgia and the South Sandwich Islands", GT: "Guatemala", GU: "Guam", GW: "Guinea-Bissau", GY: "Guyana", HK: "Hong Kong SAR China", HM: "Heard Island and McDonald Islands", HN: "Honduras", HR: "Croatia", HT: "Haiti", HU: "Hungary", ID: "Indonesia", IE: "Ireland", IL: "Israel", IM: "Isle of Man", IN: "India", IO: "British Indian Ocean Territory", IQ: "Iraq", IR: "Iran", IS: "Iceland", IT: "Italy", JE: "Jersey", JM: "Jamaica", JO: "Jordan", JP: "Japan", JT: "Johnston Island", KE: "Kenya", KG: "Kyrgyzstan", KH: "Cambodia", KI: "Kiribati", KM: "Comoros", KN: "Saint Kitts and Nevis", KP: "North Korea", KR: "South Korea", KW: "Kuwait", KY: "Cayman Islands", KZ: "Kazakhstan", LA: "Laos", LB: "Lebanon", LC: "Saint Lucia", LI: "Liechtenstein", LK: "Sri Lanka", LR: "Liberia", LS: "Lesotho", LT: "Lithuania", LU: "Luxembourg", LV: "Latvia", LY: "Libya", MA: "Morocco", MC: "Monaco", MD: "Moldova", ME: "Montenegro", MF: "Saint Martin", MG: "Madagascar", MH: "Marshall Islands", MI: "Midway Islands", MK: "Macedonia", ML: "Mali", MM: "Myanmar [Burma]", MN: "Mongolia", MO: "Macau SAR China", MP: "Northern Mariana Islands", MQ: "Martinique", MR: "Mauritania", MS: "Montserrat", MT: "Malta", MU: "Mauritius", MV: "Maldives", MW: "Malawi", MX: "Mexico", MY: "Malaysia", MZ: "Mozambique", NA: "Namibia", NC: "New Caledonia", NE: "Niger", NF: "Norfolk Island", NG: "Nigeria", NI: "Nicaragua", NL: "Netherlands", NO: "Norway", NP: "Nepal", NQ: "Dronning Maud Land", NR: "Nauru", NT: "Neutral Zone", NU: "Niue", NZ: "New Zealand", OM: "Oman", PA: "Panama", PC: "Pacific Islands Trust Territory", PE: "Peru", PF: "French Polynesia", PG: "Papua New Guinea", PH: "Philippines", PK: "Pakistan", PL: "Poland", PM: "Saint Pierre and Miquelon", PN: "Pitcairn Islands", PR: "Puerto Rico", PS: "Palestinian Territories", PT: "Portugal", PU: "U.S. Miscellaneous Pacific Islands", PW: "Palau", PY: "Paraguay", PZ: "Panama Canal Zone", QA: "Qatar", RE: "Réunion", RO: "Romania", RS: "Serbia", RU: "Russia", RW: "Rwanda", SA: "Saudi Arabia", SB: "Solomon Islands", SC: "Seychelles", SD: "Sudan", SE: "Sweden", SG: "Singapore", SH: "Saint Helena", SI: "Slovenia", SJ: "Svalbard and Jan Mayen", SK: "Slovakia", SL: "Sierra Leone", SM: "San Marino", SN: "Senegal", SO: "Somalia", SR: "Suriname", ST: "São Tomé and Príncipe", SU: "Union of Soviet Socialist Republics", SV: "El Salvador", SY: "Syria", SZ: "Swaziland", TC: "Turks and Caicos Islands", TD: "Chad", TF: "French Southern Territories", TG: "Togo", TH: "Thailand", TJ: "Tajikistan", TK: "Tokelau", TL: "Timor-Leste", TM: "Turkmenistan", TN: "Tunisia", TO: "Tonga", TR: "Turkey", TT: "Trinidad and Tobago", TV: "Tuvalu", TW: "Taiwan", TZ: "Tanzania", UA: "Ukraine", UG: "Uganda", UM: "U.S. Minor Outlying Islands", US: "United States", UY: "Uruguay", UZ: "Uzbekistan", VA: "Vatican City", VC: "Saint Vincent and the Grenadines", VD: "North Vietnam", VE: "Venezuela", VG: "British Virgin Islands", VI: "U.S. Virgin Islands", VN: "Vietnam", VU: "Vanuatu", WF: "Wallis and Futuna", WK: "Wake Island", WS: "Samoa", YD: "People's Democratic Republic of Yemen", YE: "Yemen", YT: "Mayotte", ZA: "South Africa", ZM: "Zambia", ZW: "Zimbabwe", ZZ: "Unknown or Invalid Region"};

    var countriesArray = $.map(countries, function (value, key) {
        return {
            value: value,
            data: key
        };
    });

    // initialize autocomplete with custom appendTo
    $('#autocomplete-custom-append').autocomplete({
        lookup: countriesArray
    });

}
;

/* AUTOSIZE */

function init_autosize() {

    if (typeof $.fn.autosize !== 'undefined') {

        autosize($('.resizable_textarea'));

    }

}
;

/* PARSLEY */

function init_parsley() {

    if (typeof (parsley) === 'undefined') {
        return;
    }
    $/*.listen*/('parsley:field:validate', function () {
        validateFront();
    });
    $('#demo-form .btn').on('click', function () {
        $('#demo-form').parsley().validate();
        validateFront();
    });
    var validateFront = function () {
        if (true === $('#demo-form').parsley().isValid()) {
            $('.bs-callout-info').removeClass('hidden');
            $('.bs-callout-warning').addClass('hidden');
        } else {
            $('.bs-callout-info').addClass('hidden');
            $('.bs-callout-warning').removeClass('hidden');
        }
    };

    $/*.listen*/('parsley:field:validate', function () {
        validateFront();
    });
    if ($('#demo-form2').html() !== undefined)
        $('#demo-form2 .btn').on('click', function () {
            $('#demo-form2').parsley().validate();
            validateFront();
        });
    if ($('#demo-form2').html() !== undefined)
        var validateFront = function () {
            if (true === $('#demo-form2').parsley().isValid()) {
                $('.bs-callout-info').removeClass('hidden');
                $('.bs-callout-warning').addClass('hidden');
            } else {
                $('.bs-callout-info').addClass('hidden');
                $('.bs-callout-warning').removeClass('hidden');
            }
        };

    try {
        hljs.initHighlightingOnLoad();
    } catch (err) {
    }

}
;


/* INPUTS */

function onAddTag(tag) {
    alert("Added a tag: " + tag);
}

function onRemoveTag(tag) {
    alert("Removed a tag: " + tag);
}

function onChangeTag(input, tag) {
    alert("Changed a tag: " + tag);
}

//tags input
function init_TagsInput() {

    if (typeof $.fn.tagsInput !== 'undefined') {

        $('#tags_1').tagsInput({
            width: 'auto'
        });

    }

}
;

/* SELECT2 */

function init_select2() {

    if (typeof (select2) === 'undefined') {
        return;
    }
    $(".select2_single").select2({
        placeholder: "Select a state",
        allowClear: true
    });
    $(".select2_group").select2({});
    $(".select2_multiple").select2({
        maximumSelectionLength: 4,
        placeholder: "With Max Selection limit 4",
        allowClear: true
    });

}
;

/* WYSIWYG EDITOR */

function init_wysiwyg() {

    if (typeof ($.fn.wysiwyg) === 'undefined') {
        return;
    }

    function init_ToolbarBootstrapBindings() {
        var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
            'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
            'Times New Roman', 'Verdana'
        ],
                fontTarget = $('[title=Font]').siblings('.dropdown-menu');
        $.each(fonts, function (idx, fontName) {
            fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));
        });
        $('a[title]').tooltip({
            container: 'body'
        });
        $('.dropdown-menu input').on('click',function () {
            return false;
        })
                .change(function () {
                    $(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
                })
                .keydown('esc', function () {
                    this.value = '';
                    $(this).change();
                });

        $('[data-role=magic-overlay]').each(function () {
            var overlay = $(this),
                    target = $(overlay.data('target'));
            overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
        });

        if ("onwebkitspeechchange" in document.createElement("input")) {
            var editorOffset = $('#editor').offset();

            $('.voiceBtn').css('position', 'absolute').offset({
                top: editorOffset.top,
                left: editorOffset.left + $('#editor').innerWidth() - 35
            });
        } else {
            $('.voiceBtn').hide();
        }
    }

    function showErrorAlert(reason, detail) {
        var msg = '';
        if (reason === 'unsupported-file-type') {
            msg = "Unsupported format " + detail;
        } else {
            console.log("error uploading file", reason, detail);
        }
        $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
                '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
    }

    $('.editor-wrapper').each(function () {
        var id = $(this).attr('id');	//editor-one

        $(this).wysiwyg({
            toolbarSelector: '[data-target="#' + id + '"]',
            fileUploadError: showErrorAlert
        });
    });


    window.prettyPrint;
    prettyPrint();

}
;

/* CROPPER */

function init_cropper() {


    if (typeof ($.fn.cropper) === 'undefined') {
        return;
    }

    var $image = $('#image');
    var $download = $('#download');
    var $dataX = $('#dataX');
    var $dataY = $('#dataY');
    var $dataHeight = $('#dataHeight');
    var $dataWidth = $('#dataWidth');
    var $dataRotate = $('#dataRotate');
    var $dataScaleX = $('#dataScaleX');
    var $dataScaleY = $('#dataScaleY');
    var options = {
        aspectRatio: 16 / 9,
        preview: '.img-preview',
        crop: function (e) {
            $dataX.val(Math.round(e.x));
            $dataY.val(Math.round(e.y));
            $dataHeight.val(Math.round(e.height));
            $dataWidth.val(Math.round(e.width));
            $dataRotate.val(e.rotate);
            $dataScaleX.val(e.scaleX);
            $dataScaleY.val(e.scaleY);
        }
    };


    // Tooltip
    $('[data-toggle="tooltip"]').tooltip();


    // Cropper
    $image.on({
        'build.cropper': function (e) {
            console.log(e.type);
        },
        'built.cropper': function (e) {
            console.log(e.type);
        },
        'cropstart.cropper': function (e) {
            console.log(e.type, e.action);
        },
        'cropmove.cropper': function (e) {
            console.log(e.type, e.action);
        },
        'cropend.cropper': function (e) {
            console.log(e.type, e.action);
        },
        'crop.cropper': function (e) {
            console.log(e.type, e.x, e.y, e.width, e.height, e.rotate, e.scaleX, e.scaleY);
        },
        'zoom.cropper': function (e) {
            console.log(e.type, e.ratio);
        }
    }).cropper(options);


    // Buttons
    if (!$.isFunction(document.createElement('canvas').getContext)) {
        $('button[data-method="getCroppedCanvas"]').prop('disabled', true);
    }

    if (typeof document.createElement('cropper').style.transition === 'undefined') {
        $('button[data-method="rotate"]').prop('disabled', true);
        $('button[data-method="scale"]').prop('disabled', true);
    }


    // Download
    if (typeof $download[0].download === 'undefined') {
        $download.addClass('disabled');
    }


    // Options
    $('.docs-toggles').on('change', 'input', function () {
        var $this = $(this);
        var name = $this.attr('name');
        var type = $this.prop('type');
        var cropBoxData;
        var canvasData;

        if (!$image.data('cropper')) {
            return;
        }

        if (type === 'checkbox') {
            options[name] = $this.prop('checked');
            cropBoxData = $image.cropper('getCropBoxData');
            canvasData = $image.cropper('getCanvasData');

            options.built = function () {
                $image.cropper('setCropBoxData', cropBoxData);
                $image.cropper('setCanvasData', canvasData);
            };
        } else if (type === 'radio') {
            options[name] = $this.val();
        }

        $image.cropper('destroy').cropper(options);
    });


    // Methods
    $('.docs-buttons').on('click', '[data-method]', function () {
        var $this = $(this);
        var data = $this.data();
        var $target;
        var result;

        if ($this.prop('disabled') || $this.hasClass('disabled')) {
            return;
        }

        if ($image.data('cropper') && data.method) {
            data = $.extend({}, data); // Clone a new one

            if (typeof data.target !== 'undefined') {
                $target = $(data.target);

                if (typeof data.option === 'undefined') {
                    try {
                        data.option = JSON.parse($target.val());
                    } catch (e) {
                        console.log(e.message);
                    }
                }
            }

            result = $image.cropper(data.method, data.option, data.secondOption);

            switch (data.method) {
                case 'scaleX':
                case 'scaleY':
                    $(this).data('option', -data.option);
                    break;

                case 'getCroppedCanvas':
                    if (result) {

                        // Bootstrap's Modal
                        $('#getCroppedCanvasModal').modal().find('.modal-body').html(result);

                        if (!$download.hasClass('disabled')) {
                            $download.attr('href', result.toDataURL());
                        }
                    }

                    break;
            }

            if ($.isPlainObject(result) && $target) {
                try {
                    $target.val(JSON.stringify(result));
                } catch (e) {
                    console.log(e.message);
                }
            }

        }
    });

    // Keyboard
    $(document.body).on('keydown', function (e) {
        if (!$image.data('cropper') || this.scrollTop > 300) {
            return;
        }

        switch (e.which) {
            case 37:
                e.preventDefault();
                $image.cropper('move', -1, 0);
                break;

            case 38:
                e.preventDefault();
                $image.cropper('move', 0, -1);
                break;

            case 39:
                e.preventDefault();
                $image.cropper('move', 1, 0);
                break;

            case 40:
                e.preventDefault();
                $image.cropper('move', 0, 1);
                break;
        }
    });

    // Import image
    var $inputImage = $('#inputImage');
    var URL = window.URL || window.webkitURL;
    var blobURL;

    if (URL) {
        $inputImage.change(function () {
            var files = this.files;
            var file;

            if (!$image.data('cropper')) {
                return;
            }

            if (files && files.length) {
                file = files[0];

                if (/^image\/\w+$/.test(file.type)) {
                    blobURL = URL.createObjectURL(file);
                    $image.one('built.cropper', function () {

                        // Revoke when load complete
                        URL.revokeObjectURL(blobURL);
                    }).cropper('reset').cropper('replace', blobURL);
                    $inputImage.val('');
                } else {
                    window.alert('Please choose an image file.');
                }
            }
        });
    } else {
        $inputImage.prop('disabled', true).parent().addClass('disabled');
    }


}
;

/* CROPPER --- end */

/* KNOB */

function init_knob() {

    if (typeof ($.fn.knob) === 'undefined') {
        return;
    }

    $(".knob").knob({
        change: function (value) {
            //console.log("change : " + value);
        },
        release: function (value) {
            //console.log(this.$.attr('value'));
            console.log("release : " + value);
        },
        cancel: function () {
            console.log("cancel : ", this);
        },
        /*format : function (value) {
         return value + '%';
         },*/
        draw: function () {

            // "tron" case
            if (this.$.data('skin') === 'tron') {

                this.cursorExt = 0.3;

                var a = this.arc(this.cv) // Arc
                        ,
                        pa // Previous arc
                        , r = 1;

                this.g.lineWidth = this.lineWidth;

                if (this.o.displayPrevious) {
                    pa = this.arc(this.v);
                    this.g.beginPath();
                    this.g.strokeStyle = this.pColor;
                    this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, pa.s, pa.e, pa.d);
                    this.g.stroke();
                }

                this.g.beginPath();
                this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
                this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, a.s, a.e, a.d);
                this.g.stroke();

                this.g.lineWidth = 2;
                this.g.beginPath();
                this.g.strokeStyle = this.o.fgColor;
                this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
                this.g.stroke();

                return false;
            }
        }

    });

    // Example of infinite knob, iPod click wheel
    var v, up = 0,
            down = 0,
            i = 0,
            $idir = $("div.idir"),
            $ival = $("div.ival"),
            incr = function () {
                i++;
                $idir.show().html("+").fadeOut();
                $ival.html(i);
            },
            decr = function () {
                i--;
                $idir.show().html("-").fadeOut();
                $ival.html(i);
            };
    $("input.infinite").knob({
        min: 0,
        max: 20,
        stopper: false,
        change: function () {
            if (v > this.cv) {
                if (up) {
                    decr();
                    up = 0;
                } else {
                    up = 1;
                    down = 0;
                }
            } else {
                if (v < this.cv) {
                    if (down) {
                        incr();
                        down = 0;
                    } else {
                        down = 1;
                        up = 0;
                    }
                }
            }
            v = this.cv;
        }
    });

}
;

/* INPUT MASK */

function init_InputMask() {

    if (typeof ($.fn.inputmask) === 'undefined') {
        return;
    }

    $(":input").inputmask();

}
;

/* COLOR PICKER */

function init_ColorPicker() {

    if (typeof ($.fn.colorpicker) === 'undefined') {
        return;
    }

    $('.demo1').colorpicker();
    $('.demo2').colorpicker();

    $('#demo_forceformat').colorpicker({
        format: 'rgba',
        horizontal: true
    });

    $('#demo_forceformat3').colorpicker({
        format: 'rgba',
    });

    $('.demo-auto').colorpicker();

}
;


/* ION RANGE SLIDER */

function init_IonRangeSlider() {

    if (typeof ($.fn.ionRangeSlider) === 'undefined') {
        return;
    }

    $("#range_27").ionRangeSlider({
        type: "double",
        min: 1000000,
        max: 2000000,
        grid: true,
        force_edges: true
    });
    $("#range").ionRangeSlider({
        hide_min_max: true,
        keyboard: true,
        min: 0,
        max: 5000,
        from: 1000,
        to: 4000,
        type: 'double',
        step: 1,
        prefix: "$",
        grid: true
    });
    $("#range_25").ionRangeSlider({
        type: "double",
        min: 1000000,
        max: 2000000,
        grid: true
    });
    $("#range_26").ionRangeSlider({
        type: "double",
        min: 0,
        max: 10000,
        step: 500,
        grid: true,
        grid_snap: true
    });
    $("#range_31").ionRangeSlider({
        type: "double",
        min: 0,
        max: 100,
        from: 30,
        to: 70,
        from_fixed: true
    });
    $(".range_min_max").ionRangeSlider({
        type: "double",
        min: 0,
        max: 100,
        from: 30,
        to: 70,
        max_interval: 50
    });
    $(".range_time24").ionRangeSlider({
        min: +moment().subtract(12, "hours").format("X"),
        max: +moment().format("X"),
        from: +moment().subtract(6, "hours").format("X"),
        grid: true,
        force_edges: true,
        prettify: function (num) {
            var m = moment(num, "X");
            return m.format("Do MMMM, HH:mm");
        }
    });

}
;


/* DATERANGEPICKER */

function init_daterangepicker() {

    if (typeof ($.fn.daterangepicker) === 'undefined') {
        return;
    }

    var cb = function (start, end, label) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    };

    var optionSet1 = {
        startDate: moment().subtract(29, 'days'),
        endDate: moment(),
        minDate: '01/01/2012',
        maxDate: '12/31/2015',
        dateLimit: {
            days: 60
        },
        showDropdowns: true,
        showWeekNumbers: true,
        timePicker: false,
        timePickerIncrement: 1,
        timePicker12Hour: true,
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        opens: 'left',
        buttonClasses: ['btn btn-default'],
        applyClass: 'btn-small btn-primary',
        cancelClass: 'btn-small',
        format: 'MM/DD/YYYY',
        separator: ' to ',
        locale: {
            applyLabel: 'Submit',
            cancelLabel: 'Clear',
            fromLabel: 'From',
            toLabel: 'To',
            customRangeLabel: 'Custom',
            daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
            monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            firstDay: 1
        }
    };

    $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
    $('#reportrange').daterangepicker(optionSet1, cb);
    $('#reportrange').on('show.daterangepicker', function () {
        console.log("show event fired");
    });
    $('#reportrange').on('hide.daterangepicker', function () {
        console.log("hide event fired");
    });
    $('#reportrange').on('apply.daterangepicker', function (ev, picker) {
        console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
    });
    $('#reportrange').on('cancel.daterangepicker', function (ev, picker) {
        console.log("cancel event fired");
    });
    $('#options1').on('click',function () {
        $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
    });
    $('#options2').on('click',function () {
        $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
    });
    $('#destroy').on('click',function () {
        $('#reportrange').data('daterangepicker').remove();
    });

}

function init_daterangepicker_right() {

    if (typeof ($.fn.daterangepicker) === 'undefined') {
        return;
    }

    var cb = function (start, end, label) {
        $('#reportrange_right span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    };

    var optionSet1 = {
        startDate: moment().subtract(29, 'days'),
        endDate: moment(),
        minDate: '01/01/2012',
        maxDate: '12/31/2020',
        dateLimit: {
            days: 60
        },
        showDropdowns: true,
        showWeekNumbers: true,
        timePicker: false,
        timePickerIncrement: 1,
        timePicker12Hour: true,
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        opens: 'right',
        buttonClasses: ['btn btn-default'],
        applyClass: 'btn-small btn-primary',
        cancelClass: 'btn-small',
        format: 'MM/DD/YYYY',
        separator: ' to ',
        locale: {
            applyLabel: 'Submit',
            cancelLabel: 'Clear',
            fromLabel: 'From',
            toLabel: 'To',
            customRangeLabel: 'Custom',
            daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
            monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            firstDay: 1
        }
    };

    $('#reportrange_right span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

    $('#reportrange_right').daterangepicker(optionSet1, cb);

    $('#reportrange_right').on('show.daterangepicker', function () {
        console.log("show event fired");
    });
    $('#reportrange_right').on('hide.daterangepicker', function () {
        console.log("hide event fired");
    });
    $('#reportrange_right').on('apply.daterangepicker', function (ev, picker) {
        console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
    });
    $('#reportrange_right').on('cancel.daterangepicker', function (ev, picker) {
        console.log("cancel event fired");
    });

    $('#options1').on('click',function () {
        $('#reportrange_right').data('daterangepicker').setOptions(optionSet1, cb);
    });

    $('#options2').on('click',function () {
        $('#reportrange_right').data('daterangepicker').setOptions(optionSet2, cb);
    });

    $('#destroy').on('click',function () {
        $('#reportrange_right').data('daterangepicker').remove();
    });

}

function init_daterangepicker_single_call() {

    if (typeof ($.fn.daterangepicker) === 'undefined') {
        return;
    }

    $('#single_cal1').daterangepicker({
        singleDatePicker: true,
        singleClasses: "picker_1"
    }, function (start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
    });
    $('#single_cal2').daterangepicker({
        singleDatePicker: true,
        singleClasses: "picker_2"
    }, function (start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
    });
    $('#single_cal3').daterangepicker({
        singleDatePicker: true,
        singleClasses: "picker_3"
    }, function (start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
    });
    $('#single_cal4').daterangepicker({
        singleDatePicker: true,
        singleClasses: "picker_4"
    }, function (start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
    });


}


function init_daterangepicker_reservation() {

    if (typeof ($.fn.daterangepicker) === 'undefined') {
        return;
    }

    $('#reservation').daterangepicker(null, function (start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
    });

    $('#reservation-time').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
            format: 'MM/DD/YYYY h:mm A'
        }
    });

}

/* SMART WIZARD */

function init_SmartWizard() {

    if (typeof ($.fn.smartWizard) === 'undefined') {
        return;
    }

    $('#wizard').smartWizard();

    $('#wizard_verticle').smartWizard({
        transitionEffect: 'slide'
    });

    $('.buttonNext').addClass('btn btn-info');
    $('.buttonPrevious').addClass('btn btn-default');
    $('.buttonFinish').addClass('btn btn-primary');

}
;


/* VALIDATOR */

function init_validator() {

    if (typeof (validator) === 'undefined') {
        return;
    }

    // initialize the validator function
    validator.message.date = 'not a real date';

    // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
    $('form')
            .on('blur', 'input[required], input.optional, select.required', validator.checkField)
            .on('change', 'select.required', validator.checkField)
            .on('keypress', 'input[required][pattern]', validator.keypress);

    $('.multi.required').on('keyup blur', 'input', function () {
        validator.checkField.apply($(this).siblings().last()[0]);
    });

    $('form').submit(function (e) {
        e.preventDefault();
        var submit = true;

        // evaluate the form using generic validaing
        if (!validator.checkAll($(this))) {
            submit = false;
        }

        if (submit)
            this.submit();

        return false;
    });

}
;



/* CUSTOM NOTIFICATION */

function init_CustomNotification() {

    var cnt = 10;
    var TabbedNotification = function (options) {
        var message = "<div id='ntf" + cnt + "' class='text alert-" + options.type + "' style='display:none'><h2><i class='fa fa-bell'></i> " + options.title +
                "</h2><div class='close'><a href='javascript:;' class='notification_close'><i class='fa fa-close'></i></a></div><p>" + options.text + "</p></div>";

        if (!document.getElementById('custom_notifications')) {
            alert('doesnt exists');
        } else {
            $('#custom_notifications ul.notifications').append("<li><a id='ntlink" + cnt + "' class='alert-" + options.type + "' href='#ntf" + cnt + "'><i class='fa fa-bell animated shake'></i></a></li>");
            $('#custom_notifications #notif-group').append(message);
            cnt++;
            CustomTabs(options);
        }
    };

    var CustomTabs = function (options) {
        $('.tabbed_notifications > div').hide();
        $('.tabbed_notifications > div:first-of-type').show();
        $('#custom_notifications').removeClass('dsp_none');
        $('.notifications a').on('click',function (e) {
            e.preventDefault();
            var $this = $(this),
                    tabbed_notifications = '#' + $this.parents('.notifications').data('tabbed_notifications'),
                    others = $this.closest('li').siblings().children('a'),
                    target = $this.attr('href');
            others.removeClass('active');
            $this.addClass('active');
            $(tabbed_notifications).children('div').hide();
            $(target).show();
        });
    };

    CustomTabs();

    var tabid = '';
    var idname = '';

    $(document).on('click', '.notification_close', function (e) {
        idname = $(this).parent().parent().attr("id");
        tabid = idname.substr(-2);
        $('#ntf' + tabid).remove();
        $('#ntlink' + tabid).parent().remove();
        $('.notifications a').first().addClass('active');
        $('#notif-group div').first().css('display', 'block');
    });

}
;

/* EASYPIECHART */

function init_EasyPieChart() {

    if (typeof ($.fn.easyPieChart) === 'undefined') {
        return;
    }

    $('.chart').easyPieChart({
        easing: 'easeOutElastic',
        delay: 3000,
        barColor: '#5bc0de',
        trackColor: '#fff',
        scaleColor: false,
        lineWidth: 20,
        trackWidth: 16,
        lineCap: 'butt',
        onStep: function (from, to, percent) {
            $(this.el).find('.percent').text(Math.round(percent));
        }
    });
    var chart = window.chart = $('.chart').data('easyPieChart');
    $('.js_update').on('click', function () {
        chart.update(Math.random() * 200 - 100);
    });

    //hover and retain popover when on popover content
    var originalLeave = $.fn.popover.Constructor.prototype.leave;
    $.fn.popover.Constructor.prototype.leave = function (obj) {
        var self = obj instanceof this.constructor ?
                obj : $(obj.currentTarget)[this.type](this.getDelegateOptions()).data('bs.' + this.type);
        var container, timeout;

        originalLeave.call(this, obj);

        if (obj.currentTarget) {
            container = $(obj.currentTarget).siblings('.popover');
            timeout = self.timeout;
            container.one('mouseenter', function () {
                //We entered the actual popover – call off the dogs
                clearTimeout(timeout);
                //Let's monitor popover content instead
                container.one('mouseleave', function () {
                    $.fn.popover.Constructor.prototype.leave.call(self, self);
                });
            });
        }
    };

    $('body').popover({
        selector: '[data-popover]',
        trigger: 'click hover',
        delay: {
            show: 50,
            hide: 400
        }
    });

}
;


function init_charts() {

    if (typeof (Chart) === 'undefined') {
        return;
    }

    Chart.defaults.global.legend = {
        enabled: false
    };

    if ($('#canvas_line').length) {

        var canvas_line_00 = new Chart(document.getElementById("canvas_line"), {
            type: 'line',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                        label: "My First dataset",
                        backgroundColor: "rgba(38, 185, 154, 0.31)",
                        borderColor: "rgba(38, 185, 154, 0.7)",
                        pointBorderColor: "rgba(38, 185, 154, 0.7)",
                        pointBackgroundColor: "rgba(38, 185, 154, 0.7)",
                        pointHoverBackgroundColor: "#fff",
                        pointHoverBorderColor: "rgba(220,220,220,1)",
                        pointBorderWidth: 1,
                        data: [31, 74, 6, 39, 20, 85, 7]
                    }, {
                        label: "My Second dataset",
                        backgroundColor: "rgba(3, 88, 106, 0.3)",
                        borderColor: "rgba(3, 88, 106, 0.70)",
                        pointBorderColor: "rgba(3, 88, 106, 0.70)",
                        pointBackgroundColor: "rgba(3, 88, 106, 0.70)",
                        pointHoverBackgroundColor: "#fff",
                        pointHoverBorderColor: "rgba(151,187,205,1)",
                        pointBorderWidth: 1,
                        data: [82, 23, 66, 9, 99, 4, 2]
                    }]
            },
        });

    }


    if ($('#canvas_line1').length) {

        var canvas_line_01 = new Chart(document.getElementById("canvas_line1"), {
            type: 'line',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                        label: "My First dataset",
                        backgroundColor: "rgba(38, 185, 154, 0.31)",
                        borderColor: "rgba(38, 185, 154, 0.7)",
                        pointBorderColor: "rgba(38, 185, 154, 0.7)",
                        pointBackgroundColor: "rgba(38, 185, 154, 0.7)",
                        pointHoverBackgroundColor: "#fff",
                        pointHoverBorderColor: "rgba(220,220,220,1)",
                        pointBorderWidth: 1,
                        data: [31, 74, 6, 39, 20, 85, 7]
                    }, {
                        label: "My Second dataset",
                        backgroundColor: "rgba(3, 88, 106, 0.3)",
                        borderColor: "rgba(3, 88, 106, 0.70)",
                        pointBorderColor: "rgba(3, 88, 106, 0.70)",
                        pointBackgroundColor: "rgba(3, 88, 106, 0.70)",
                        pointHoverBackgroundColor: "#fff",
                        pointHoverBorderColor: "rgba(151,187,205,1)",
                        pointBorderWidth: 1,
                        data: [82, 23, 66, 9, 99, 4, 2]
                    }]
            },
        });

    }


    if ($('#canvas_line2').length) {

        var canvas_line_02 = new Chart(document.getElementById("canvas_line2"), {
            type: 'line',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                        label: "My First dataset",
                        backgroundColor: "rgba(38, 185, 154, 0.31)",
                        borderColor: "rgba(38, 185, 154, 0.7)",
                        pointBorderColor: "rgba(38, 185, 154, 0.7)",
                        pointBackgroundColor: "rgba(38, 185, 154, 0.7)",
                        pointHoverBackgroundColor: "#fff",
                        pointHoverBorderColor: "rgba(220,220,220,1)",
                        pointBorderWidth: 1,
                        data: [31, 74, 6, 39, 20, 85, 7]
                    }, {
                        label: "My Second dataset",
                        backgroundColor: "rgba(3, 88, 106, 0.3)",
                        borderColor: "rgba(3, 88, 106, 0.70)",
                        pointBorderColor: "rgba(3, 88, 106, 0.70)",
                        pointBackgroundColor: "rgba(3, 88, 106, 0.70)",
                        pointHoverBackgroundColor: "#fff",
                        pointHoverBorderColor: "rgba(151,187,205,1)",
                        pointBorderWidth: 1,
                        data: [82, 23, 66, 9, 99, 4, 2]
                    }]
            },
        });

    }


    if ($('#canvas_line3').length) {

        var canvas_line_03 = new Chart(document.getElementById("canvas_line3"), {
            type: 'line',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                        label: "My First dataset",
                        backgroundColor: "rgba(38, 185, 154, 0.31)",
                        borderColor: "rgba(38, 185, 154, 0.7)",
                        pointBorderColor: "rgba(38, 185, 154, 0.7)",
                        pointBackgroundColor: "rgba(38, 185, 154, 0.7)",
                        pointHoverBackgroundColor: "#fff",
                        pointHoverBorderColor: "rgba(220,220,220,1)",
                        pointBorderWidth: 1,
                        data: [31, 74, 6, 39, 20, 85, 7]
                    }, {
                        label: "My Second dataset",
                        backgroundColor: "rgba(3, 88, 106, 0.3)",
                        borderColor: "rgba(3, 88, 106, 0.70)",
                        pointBorderColor: "rgba(3, 88, 106, 0.70)",
                        pointBackgroundColor: "rgba(3, 88, 106, 0.70)",
                        pointHoverBackgroundColor: "#fff",
                        pointHoverBorderColor: "rgba(151,187,205,1)",
                        pointBorderWidth: 1,
                        data: [82, 23, 66, 9, 99, 4, 2]
                    }]
            },
        });

    }


    if ($('#canvas_line4').length) {

        var canvas_line_04 = new Chart(document.getElementById("canvas_line4"), {
            type: 'line',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                        label: "My First dataset",
                        backgroundColor: "rgba(38, 185, 154, 0.31)",
                        borderColor: "rgba(38, 185, 154, 0.7)",
                        pointBorderColor: "rgba(38, 185, 154, 0.7)",
                        pointBackgroundColor: "rgba(38, 185, 154, 0.7)",
                        pointHoverBackgroundColor: "#fff",
                        pointHoverBorderColor: "rgba(220,220,220,1)",
                        pointBorderWidth: 1,
                        data: [31, 74, 6, 39, 20, 85, 7]
                    }, {
                        label: "My Second dataset",
                        backgroundColor: "rgba(3, 88, 106, 0.3)",
                        borderColor: "rgba(3, 88, 106, 0.70)",
                        pointBorderColor: "rgba(3, 88, 106, 0.70)",
                        pointBackgroundColor: "rgba(3, 88, 106, 0.70)",
                        pointHoverBackgroundColor: "#fff",
                        pointHoverBorderColor: "rgba(151,187,205,1)",
                        pointBorderWidth: 1,
                        data: [82, 23, 66, 9, 99, 4, 2]
                    }]
            },
        });

    }


    // Line chart

    if ($('#lineChart').length) {

        var ctx = document.getElementById("lineChart");
        var lineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                        label: "My Second dataset",
                        backgroundColor: "#5bc0de",
                        borderColor: "#3498DB",
                        pointBorderColor: "#3498DB",
                        pointBackgroundColor: "#fff",
                        pointHoverBackgroundColor: "#fff",
                        pointHoverBorderColor: "rgba(151,187,205,1)",
                        pointBorderWidth: 1,
                        data: [152, 23, 26, 9, 69, 9, 4]
                    }]
            },
        });

    }

    // Bar chart

    if ($('#mybarChart').length) {

        var ctx = document.getElementById("mybarChart");
        var mybarChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                        label: '# of Votes',
                        backgroundColor: "#3498db",
                        data: [45, 30, 40, 28, 92, 50, 45]
                    }, {
                        label: '# of Votes',
                        backgroundColor: "#5cb85c",
                        data: [41, 56, 25, 48, 72, 34, 12]
                    }]
            },
            options: {
                scales: {
                    yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                }
            }
        });

    }


    // Doughnut chart

    if ($('#canvasDoughnut').length) {

        var ctx = document.getElementById("canvasDoughnut");
        var data = {
            labels: [
                "Dark Grey",
                "Purple Color",
                "Gray Color",
                "Green Color",
                "Blue Color"
            ],
            datasets: [{
                    data: [70, 180, 120, 160, 120],
                    backgroundColor: [
                        "#5cb85c",
                        "#9B59B6",
                        "#BDC3C7",
                        "#5bc0de",
                        "#3498DB"
                    ],
                    hoverBackgroundColor: [
                        "#34495E",
                        "#B370CF",
                        "#CFD4D8",
                        "#36CAAB",
                        "#49A9EA"
                    ]

                }]
        };

        var canvasDoughnut = new Chart(ctx, {
            type: 'doughnut',
            tooltipFillColor: "rgba(51, 51, 51, 0.55)",
            data: data
        });

    }

    // Radar chart

    if ($('#canvasRadar').length) {

        var ctx = document.getElementById("canvasRadar");
        var data = {
            labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
            datasets: [{
                    label: "My First dataset",
                    backgroundColor: "rgba(80, 193, 207, 0.2)",
                    borderColor: "rgba(80, 193, 207, 0.8)",
                    pointBorderColor: "rgba(80, 193, 207, 0.8)",
                    pointBackgroundColor: "#fff",
                    pointHoverBackgroundColor: "#fff",
                    pointHoverBorderColor: "rgba(220,220,220,1)",
                    data: [45, 89, 50, 61, 56, 55, 40]
                }, {
                    label: "My Second dataset",
                    backgroundColor: "rgba(92, 184, 92, 0.2)",
                    borderColor: "rgba(92, 184, 92, 0.85)",
                    pointColor: "rgba(92, 184, 92, 0.85)",
                    pointStrokeColor: "rgba(92, 184, 92, 1)",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(92, 184, 92, 0.8)",
                    data: [28, 48, 40, 19, 96, 27, 100]
                }]
        };

        var canvasRadar = new Chart(ctx, {
            type: 'radar',
            data: data,
        });

    }


    // Pie chart
    if ($('#pieChart').length) {

        var ctx = document.getElementById("pieChart");
        var data = {
            datasets: [{
                    data: [80, 90, 110, 140, 150],
                    backgroundColor: [
                        "#5cb85c",
                        "#9B59B6",
                        "#ed6b75",
                        "#5bc0de",
                        "#3498DB"
                    ],
                    label: 'My dataset' // for legend
                }],
            labels: [
                "Green",
                "Purple",
                "Red",
                "Light blue",
                "Blue"
            ]
        };

        var pieChart = new Chart(ctx, {
            data: data,
            type: 'pie',
            otpions: {
                legend: false
            }
        });

    }


    // PolarArea chart

    if ($('#polarArea').length) {

        var ctx = document.getElementById("polarArea");
        var data = {
            datasets: [{
                    data: [140, 80, 120, 160, 120],
                    backgroundColor: [
                        "#5cb85c",
                        "#9B59B6",
                        "#BDC3C7",
                        "#5bc0de",
                        "#3498DB"
                    ],
                    label: 'My dataset'
                }],
            labels: [
                "Green",
                "Purple",
                "Gray",
                "Light blue",
                "Blue"
            ]
        };

        var polarArea = new Chart(ctx, {
            data: data,
            type: 'polarArea',
            options: {
                scale: {
                    ticks: {
                        beginAtZero: true
                    }
                }
            }
        });

    }
}

/* CALENDAR */

function  init_calendar() {

    if (typeof ($.fn.fullCalendar) === 'undefined') {
        return;
    }

    var date = new Date(),
            d = date.getDate(),
            m = date.getMonth(),
            y = date.getFullYear(),
            started,
            categoryClass;

    var calendar = $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay,listMonth'
        },
        selectable: true,
        selectHelper: true,
        select: function (start, end, allDay) {
            $('#fc_create').click();

            var started = start;
            var ended = end;

            $(".antosubmit").on("click", function () {
                var title = $("#title").val();
                if (end) {
                    ended = end;
                }
                categoryClass = $("#event_type").val();
                var color = $('input[name=color]:checked').val();
                if (title) {
                    calendar.fullCalendar('renderEvent', {
                        title: title,
                        start: started,
                        end: end,
                        color: color,
                        allDay: allDay
                    },
                            true // make the event "stick"
                            );
                }

                $('#title').val('');

                calendar.fullCalendar('unselect');

                $('.antoclose').click();

                return false;
            });
        },
        editable: true,
        events: [{
                title: 'All Day Event',
                color: '#3498DB',
                start: new Date(y, m, 1)
            }, {
                title: 'Long Event',
                color: '#E74C3C',
                start: new Date(y, m, d - 5),
                end: new Date(y, m, d - 2)
            }, {
                title: 'Meeting',
                color: '#35aa47',
                start: new Date(y, m, d, 10, 30),
                allDay: false
            }, {
                title: 'Lunch',
                color: '#b06ccc',
                start: new Date(y, m, d + 14, 12, 0),
                end: new Date(y, m, d, 14, 0),
                allDay: false
            }, {
                title: 'Birthday Party',
                color: '#36c6d3',
                start: new Date(y, m, d + 1, 19, 0),
                end: new Date(y, m, d + 1, 22, 30),
                allDay: false
            }, {
                title: 'Click for Google',
                color: '#36c6d3',
                start: new Date(y, m, 28),
                end: new Date(y, m, 29),
                url: 'http://google.com/'
            }]
    });

}
;

/* DATA TABLES */

function init_DataTables() {

    if (typeof ($.fn.DataTable) === 'undefined') {
        return;
    }

    var handleDataTableButtons = function () {
        if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
                dom: "Bfrtip",
                buttons: [
                    {
                        extend: "copy",
                        className: "btn-sm"
                    },
                    {
                        extend: "csv",
                        className: "btn-sm"
                    },
                    {
                        extend: "print",
                        className: "btn-sm"
                    },
                ],
                responsive: true,
                searching: false,
                language: {
                    paginate: {
                        next: '<i class="fa fa-angle-right"></i>',
                        previous: '<i class="fa fa-angle-left"></i>'
                    }
                }
            });
        }
    };

    $("#datatable-customers").DataTable({
        language: {
            paginate: {
                next: '<i class="fa fa-angle-right"></i>',
                previous: '<i class="fa fa-angle-left"></i>'
            },
            sSearch: "Search",
            searchPlaceholder: ""
        }
    });

    var TableManageButtons = function () {
        "use strict";
        return {
            init: function () {
                handleDataTableButtons();
            }
        };
    }();

    $('#datatable').dataTable({
        language: {
            paginate: {
                next: '<i class="fa fa-angle-right"></i>',
                previous: '<i class="fa fa-angle-left"></i>'
            }
        }
    });

    $('#taskTable').dataTable({
        language: {
            paginate: {
                next: '<i class="fa fa-angle-right"></i>',
                previous: '<i class="fa fa-angle-left"></i>'
            },
            lengthMenu: "Show _MENU_",
            sSearch: "Filter ",
            searchPlaceholder: "Type to filter... "
        }
    });

    $('#datatable-responsive').DataTable({
        language: {
            paginate: {
                next: '<i class="fa fa-angle-right"></i>',
                previous: '<i class="fa fa-angle-left"></i>'
            }
        }
    });

    $('#datatable-scroller').DataTable({
        ajax: "js/datatables/json/scroller-demo.json",
        deferRender: true,
        scrollY: 380,
        scrollCollapse: true,
        scroller: true,
        language: {
            paginate: {
                next: '<i class="fa fa-angle-right"></i>',
                previous: '<i class="fa fa-angle-left"></i>'
            }
        }
    });

    var $datatable = $('#datatable-checkbox');

    $datatable.dataTable({
        'order': [[1, 'asc']],
        'columnDefs': [
            {orderable: false, targets: [0]}
        ],
        language: {
            paginate: {
                next: '<i class="fa fa-angle-right"></i>',
                previous: '<i class="fa fa-angle-left"></i>'
            }
        }
    });
    $datatable.on('draw.dt', function () {
        $('checkbox input').iCheck({
            checkboxClass: 'icheckbox_square-blue'
        });
    });


    var $datatable_oreder = $('#datatable-order');
    $datatable_oreder.dataTable({
        'order': [[1, 'asc']],
        'columnDefs': [
            {orderable: false, targets: [0]}
        ],
        language: {
            paginate: {
                next: '<i class="fa fa-angle-right"></i>',
                previous: '<i class="fa fa-angle-left"></i>'
            }
        }
    });
    $datatable_oreder.on('draw.dt', function () {
        $('checkbox input').iCheck({
            checkboxClass: 'icheckbox_square-blue'
        });
    });

    var $datatable_product_list = $('#datatable-product-list');
    $datatable_product_list.dataTable({
        'order': [[1, 'asc']],
        'columnDefs': [
            {orderable: false, targets: [0]}
        ],
        language: {
            paginate: {
                next: '<i class="fa fa-angle-right"></i>',
                previous: '<i class="fa fa-angle-left"></i>'
            }
        }
    });
    $datatable_product_list.on('draw.dt', function () {
        $('checkbox input').iCheck({
            checkboxClass: 'icheckbox_square-blue'
        });
    });



    TableManageButtons.init();

    var TableDatatablesEditable = function () {
        var e = function () {
            function e(e, t) {
                for (var n = e.fnGetData(t), a = $(">td", t), l = 0, r = a.length; l < r; l++)
                    e.fnUpdate(n[l], t, l, !1);
                e.fnDraw()
            }
            function t(e, t) {
                var n = e.fnGetData(t), a = $(">td", t);
                a[0].innerHTML = '<input type="text" class="form-control input-small" value="' + n[0] + '">', a[1].innerHTML = '<input type="text" class="form-control input-small" value="' + n[1] + '">', a[2].innerHTML = '<input type="text" class="form-control input-small" value="' + n[2] + '">', a[3].innerHTML = '<input type="text" class="form-control input-small" value="' + n[3] + '">', a[4].innerHTML = '<a class="edit" href="">Save</a>', a[5].innerHTML = '<a class="cancel" href="">Cancel</a>'
            }
            function n(e, t) {
                var n = $("input", t);
                e.fnUpdate(n[0].value, t, 0, !1), e.fnUpdate(n[1].value, t, 1, !1), e.fnUpdate(n[2].value, t, 2, !1), e.fnUpdate(n[3].value, t, 3, !1), e.fnUpdate('<a class="edit btn btn-default btn-xs" href="javascript:;" title="Edit"> <i class="fa fa-pencil"></i> </a>', t, 4, !1), e.fnUpdate('<a class="delete btn btn-default btn-xs" href="javascript:;" title="Delete"> <i class="fa fa-trash-o"></i> </a>', t, 5, !1), e.fnDraw()
            }

            var a = $("#sample_editable"), l = a.dataTable({lengthMenu: [[5, 15, 20, -1], [5, 15, 20, "All"]], pageLength: 5, language: {lengthMenu: " _MENU_ records", paginate: {next: '<i class="fa fa-angle-right"></i>', previous: '<i class="fa fa-angle-left"></i>'}}, columnDefs: [{orderable: !0, targets: [0]}, {searchable: !0, targets: [0]}], order: [[0, "asc"]]}), r = ($("#sample_editable_wrapper"), null), o = !1;
            $("#sample_editable_new").on('click',function (e) {
                if (e.preventDefault(), o && r) {
                    if (!confirm("Previose row not saved. Do you want to save it ?"))
                        return l.fnDeleteRow(r), r = null, void(o = !1);
                    n(l, r), $(r).find("td:first").html("Untitled"), r = null, o = !1
                }
                var a = l.fnAddData(["", "", "", "", "", ""]), i = l.fnGetNodes(a[0]);
                t(l, i), r = i, o = !0
            }), a.on("click", ".delete", function (e) {
                if (e.preventDefault(), 0 != confirm("Are you sure to delete this row ?")) {
                    var t = $(this).parents("tr")[0];
                    l.fnDeleteRow(t), alert("Deleted!")
                }
            }), a.on("click", ".cancel", function (t) {
                t.preventDefault(), o ? (l.fnDeleteRow(r), r = null, o = !1) : (e(l, r), r = null)
            }), a.on("click", ".edit", function (a) {
                a.preventDefault(), o = !1;
                var i = $(this).parents("tr")[0];
                null !== r && r != i ? (e(l, r), t(l, i), r = i) : r == i && "Save" == this.innerHTML ? (n(l, r), r = null, alert("Saved!")) : (t(l, i), r = i)
            })
        };
        return{init: function () {
                e()
            }}
    }();
    TableDatatablesEditable.init()
}
;

/* CHART - MORRIS  */

function init_morris_charts() {

    if (typeof (Morris) === 'undefined') {
        return;
    }

    if ($('#graph_bar').length) {

        Morris.Bar({
            element: 'graph_bar',
            data: [
                {device: 'iPhone 4', geekbench: 1380},
                {device: 'iPhone 4S', geekbench: 1655},
                {device: 'iPhone 5', geekbench: 2571},
                {device: 'iPhone 5S', geekbench: 1655},
                {device: 'iPhone 6', geekbench: 2154},
                {device: 'iPhone 6 Plus', geekbench: 2144},
                {device: 'iPhone 6S', geekbench: 2771},
                {device: 'iPhone 6S Plus', geekbench: 2471},
                {device: 'iPhone 7', geekbench: 3875},
                {device: 'iPhone 7 Plus', geekbench: 2871},
            ],
            xkey: 'device',
            ykeys: ['geekbench'],
            labels: ['Geekbench'],
            barRatio: 0.4,
            barColors: ['#5cb85c', '#34495E', '#ACADAC', '#3498DB'],
            xLabelAngle: 35,
            hideHover: 'auto',
            resize: true
        });

    }

    if ($('#graph_bar_group').length) {

        Morris.Bar({
            element: 'graph_bar_group',
            data: [
                {"period": "2017-10-01", "sales": 6801, "earnings": 11680},
                {"period": "2017-09-30", "sales": 6451, "earnings": 10229},
                {"period": "2017-09-29", "sales": 6769, "earnings": 14018},
                {"period": "2017-09-20", "sales": 7948, "earnings": 29461},
                {"period": "2017-09-19", "sales": 7157, "earnings": 21967},
                {"period": "2017-09-18", "sales": 8198, "earnings": 34627}
            ],
            xkey: 'period',
            barColors: ['#5bc0de', '#3498db', '#ACADAC', '#3498DB'],
            ykeys: ['sales', 'earnings'],
            labels: ['Sales', 'Earnings'],
            hideHover: 'auto',
            xLabelAngle: 60,
            resize: true
        });

    }

    if ($('#graphx').length) {

        Morris.Bar({
            element: 'graphx',
            data: [
                {x: '2017 Q1', y: 2, z: 3, a: 4},
                {x: '2017 Q2', y: 3, z: 5, a: 6},
                {x: '2017 Q3', y: 4, z: 3, a: 2},
                {x: '2017 Q4', y: 2, z: 4, a: 5}
            ],
            xkey: 'x',
            ykeys: ['y', 'z', 'a'],
            barColors: ['#5bc0de', '#3498db', '#5cb85c', '#3498DB'],
            hideHover: 'auto',
            labels: ['Y', 'Z', 'A'],
            resize: true
        }).on('click', function (i, row) {
            console.log(i, row);
        });

    }

    if ($('#graph_area').length) {

        Morris.Area({
            element: 'graph_area',
            data: [
                {period: '2015 Q1', iphone: 2666, ipad: null, itouch: 2647},
                {period: '2015 Q2', iphone: 2778, ipad: 2294, itouch: 2441},
                {period: '2015 Q3', iphone: 4912, ipad: 1969, itouch: 2501},
                {period: '2015 Q4', iphone: 3767, ipad: 3597, itouch: 5689},
                {period: '2016 Q1', iphone: 8810, ipad: 6914, itouch: 2293},
                {period: '2016 Q2', iphone: 5670, ipad: 4293, itouch: 1881},
                {period: '2016 Q3', iphone: 4820, ipad: 3795, itouch: 1588},
                {period: '2016 Q4', iphone: 12073, ipad: 4967, itouch: 5175},
                {period: '2017 Q1', iphone: 9687, ipad: 3460, itouch: 2028},
                {period: '2017 Q2', iphone: 8432, ipad: 2713, itouch: 1791}
            ],
            xkey: 'period',
            ykeys: ['iphone', 'ipad', 'itouch'],
            lineColors: ['#5bc0de', '#3498db', '#5cb85c', '#3498DB'],
            labels: ['iPhone', 'iPad', 'iPod Touch'],
            pointSize: 2,
            hideHover: 'auto',
            resize: true
        });

    }

    if ($('#graph_donut').length) {

        Morris.Donut({
            element: 'graph_donut',
            data: [
                {label: 'iPhone', value: 35},
                {label: 'iPad', value: 20},
                {label: 'iPod Touch', value: 15},
                {label: 'iMac', value: 30}
            ],
            colors: ['#5bc0de', '#34495E', '#ACADAC', '#3498DB'],
            formatter: function (y) {
                return y + "%";
            },
            resize: true
        });

    }

    if ($('#graph_line').length) {

        Morris.Line({
            element: 'graph_line',
            xkey: 'year',
            ykeys: ['value'],
            labels: ['Value'],
            hideHover: 'auto',
            lineColors: ['#5bc0de', '#34495E', '#ACADAC', '#3498DB'],
            data: [
                {year: '2012', value: 10},
                {year: '2013', value: 80},
                {year: '2014', value: 25},
                {year: '2015', value: 185},
                {year: '2016', value: 200},
                {year: '2017', value: 400},
            ],
            resize: true
        });

        $MENU_TOGGLE.on('click', function () {
            $(window).resize();
        });

    }

}
;



/* ECHRTS */


function init_echarts() {

    if (typeof (echarts) === 'undefined') {
        return;
    }

    var theme = {
        color: [
            '#5bc0de', '#3498db', '#BDC3C7', '#ed6b75',
            '#b06ccc', '#5cb85c', '#759c6a', '#bfd3b7'
        ],
        title: {
            itemGap: 8,
            textStyle: {
                fontWeight: 'normal',
                color: '#333333'
            }
        },
        dataRange: {
            color: ['#1f610a', '#97b58d']
        },
        toolbox: {
            color: ['#408829', '#408829', '#408829', '#408829']
        },
        tooltip: {
            backgroundColor: 'rgba(0,0,0,0.5)',
            axisPointer: {
                type: 'line',
                lineStyle: {
                    color: '#408829',
                    type: 'dashed'
                },
                crossStyle: {
                    color: '#408829'
                },
                shadowStyle: {
                    color: 'rgba(200,200,200,0.3)'
                }
            }
        },
        dataZoom: {
            dataBackgroundColor: '#eee',
            fillerColor: 'rgba(64,136,41,0.2)',
            handleColor: '#408829'
        },
        grid: {
            borderWidth: 0
        },
        categoryAxis: {
            axisLine: {
                lineStyle: {
                    color: '#408829'
                }
            },
            splitLine: {
                lineStyle: {
                    color: ['#eee']
                }
            }
        },
        valueAxis: {
            axisLine: {
                lineStyle: {
                    color: '#408829'
                }
            },
            splitArea: {
                show: true,
                areaStyle: {
                    color: ['rgba(250,250,250,0.1)', 'rgba(200,200,200,0.1)']
                }
            },
            splitLine: {
                lineStyle: {
                    color: ['#eee']
                }
            }
        },
        timeline: {
            lineStyle: {
                color: '#408829'
            },
            controlStyle: {
                normal: {color: '#408829'},
                emphasis: {color: '#408829'}
            }
        },
        k: {
            itemStyle: {
                normal: {
                    color: '#68a54a',
                    color0: '#a9cba2',
                    lineStyle: {
                        width: 1,
                        color: '#408829',
                        color0: '#86b379'
                    }
                }
            }
        },
        map: {
            itemStyle: {
                normal: {
                    areaStyle: {
                        color: '#ddd'
                    },
                    label: {
                        textStyle: {
                            color: '#c12e34'
                        }
                    }
                },
                emphasis: {
                    areaStyle: {
                        color: '#99d2dd'
                    },
                    label: {
                        textStyle: {
                            color: '#c12e34'
                        }
                    }
                }
            }
        },
        force: {
            itemStyle: {
                normal: {
                    linkStyle: {
                        strokeColor: '#408829'
                    }
                }
            }
        },
        chord: {
            padding: 4,
            itemStyle: {
                normal: {
                    lineStyle: {
                        width: 1,
                        color: 'rgba(128, 128, 128, 0.5)'
                    },
                    chordStyle: {
                        lineStyle: {
                            width: 1,
                            color: 'rgba(128, 128, 128, 0.5)'
                        }
                    }
                },
                emphasis: {
                    lineStyle: {
                        width: 1,
                        color: 'rgba(128, 128, 128, 0.5)'
                    },
                    chordStyle: {
                        lineStyle: {
                            width: 1,
                            color: 'rgba(128, 128, 128, 0.5)'
                        }
                    }
                }
            }
        },
        gauge: {
            startAngle: 225,
            endAngle: -45,
            axisLine: {
                show: true,
                lineStyle: {
                    color: [[0.2, '#86b379'], [0.8, '#68a54a'], [1, '#408829']],
                    width: 8
                }
            },
            axisTick: {
                splitNumber: 10,
                length: 12,
                lineStyle: {
                    color: 'auto'
                }
            },
            axisLabel: {
                textStyle: {
                    color: 'auto'
                }
            },
            splitLine: {
                length: 18,
                lineStyle: {
                    color: 'auto'
                }
            },
            pointer: {
                length: '90%',
                color: 'auto'
            },
            title: {
                textStyle: {
                    color: '#333'
                }
            },
            detail: {
                textStyle: {
                    color: 'auto'
                }
            }
        },
        textStyle: {
            fontFamily: 'Arial, Verdana, sans-serif'
        }
    };

    //echart Bar

    if ($('#customers').length) {
        var echartBar = echarts.init(document.getElementById('customers'), theme);
        echartBar.setOption({
            title: {
                text: '',
                subtext: ''
            },
            tooltip: {
                trigger: 'axis'
            },
            legend: {
                data: ['New customers', 'Returned customers']
            },
            toolbox: {
                show: false
            },
            calculable: false,
            xAxis: [{
                    type: 'category',
                    data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
                }],
            yAxis: [{
                    type: 'value'
                }],
            series: [{
                    name: 'New customers',
                    type: 'bar',
                    data: [150, 400, 600, 400, 1000, 1000, 1800, 1000, 800, 500, 900, 1700],
                }, {
                    name: 'Returned customers',
                    type: 'bar',
                    data: [200, 500, 800, 600, 1500, 1800, 2500, 1500, 1000, 800, 1200, 2300],
                }]
        });
    }


    //echart Bar

    if ($('#mainb').length) {

        var echartBar = echarts.init(document.getElementById('mainb'), theme);

        echartBar.setOption({
            title: {
                text: 'Orders',
                subtext: 'Sales / Purchases'
            },
            tooltip: {
                trigger: 'axis'
            },
            legend: {
                data: ['sales', 'purchases']
            },
            toolbox: {
                show: false
            },
            calculable: false,
            xAxis: [{
                    type: 'category',
                    data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
                }],
            yAxis: [{
                    type: 'value'
                }],
            series: [{
                    name: 'sales',
                    type: 'bar',
                    data: [44.8, 81.9, 60.0, 23.2, 25.6, 76.7, 135.6, 162.2, 32.6, 20.0, 6.4, 3.3],
                    markPoint: {
                        data: [{
                                type: 'max',
                                name: 'max'
                            }, {
                                type: 'min',
                                name: 'min'
                            }]
                    },
                    markLine: {
                        data: [{
                                type: 'average',
                                name: 'average'
                            }]
                    }
                }, {
                    name: 'purchases',
                    type: 'bar',
                    data: [52.6, 95.9, 80.0, 26.4, 28.7, 70.7, 175.6, 182.2, 48.7, 18.8, 6.0, 2.3],
                    markPoint: {
                        data: [{
                                name: 'sales',
                                value: 182.2,
                                xAxis: 7,
                                yAxis: 183,
                            }, {
                                name: 'purchases',
                                value: 2.3,
                                xAxis: 11,
                                yAxis: 3
                            }]
                    },
                    markLine: {
                        data: [{
                                type: 'average',
                                name: 'average'
                            }]
                    }
                }]
        });

    }




    //echart Radar

    if ($('#echart_sonar').length) {

        var echartRadar = echarts.init(document.getElementById('echart_sonar'), theme);

        echartRadar.setOption({
            title: {
                text: '',
                subtext: 'Budget / Spending'
            },
            tooltip: {
                trigger: 'item'
            },
            legend: {
                orient: 'vertical',
                x: 'right',
                y: 'bottom',
                data: ['Budget', 'Spending']
            },
            toolbox: {
                show: true,
                feature: {
                    restore: {
                        show: true,
                        title: "Restore"
                    },
                    saveAsImage: {
                        show: true,
                        title: "Save Image"
                    }
                }
            },
            polar: [{
                    indicator: [{
                            text: 'Customer Support',
                            max: 6000
                        }, {
                            text: 'Development',
                            max: 16000
                        }, {
                            text: 'Design',
                            max: 30000
                        }, {
                            text: 'Sales',
                            max: 38000
                        }, {
                            text: 'Administration',
                            max: 52000
                        }, {
                            text: 'Marketing',
                            max: 25000
                        }]
                }],
            calculable: true,
            series: [{
                    name: 'Budget / Spending',
                    type: 'radar',
                    data: [{
                            value: [4300, 10000, 28000, 35000, 50000, 19000],
                            name: 'Budget'
                        }, {
                            value: [5000, 14000, 28000, 31000, 42000, 21000],
                            name: 'Spending'
                        }]
                }]
        });

    }

    //echart Funnel

    if ($('#echart_pyramid').length) {

        var echartFunnel = echarts.init(document.getElementById('echart_pyramid'), theme);

        echartFunnel.setOption({
            title: {
                text: '',
                subtext: 'Echart Pyramid'
            },
            tooltip: {
                trigger: 'item',
                formatter: "{a} <br/>{b} : {c}%"
            },
            toolbox: {
                show: true,
                feature: {
                    restore: {
                        show: true,
                        title: "Restore"
                    },
                    saveAsImage: {
                        show: true,
                        title: "Save Image"
                    }
                }
            },
            legend: {
                data: ['Edit the blog system', 'Upload Photos and Video', 'UX design change', 'Copy backups to offsite location'],
                orient: 'vertical',
                x: 'left',
                y: 'bottom'
            },
            calculable: true,
            series: [{
                    name: 'Task Done',
                    type: 'funnel',
                    width: '40%',
                    data: [{
                            value: 60,
                            name: 'Edit the blog system'
                        }, {
                            value: 40,
                            name: 'Upload Photos and Video'
                        }, {
                            value: 20,
                            name: 'UX design change'
                        }, {
                            value: 80,
                            name: 'Copy backups to offsite location'
                        }]
                }]
        });

    }

    //echart Gauge

    if ($('#echart_gauge').length) {

        var echartGauge = echarts.init(document.getElementById('echart_gauge'), theme);

        echartGauge.setOption({
            tooltip: {
                formatter: "{a} <br/>{b} : {c}%"
            },
            toolbox: {
                show: true,
                feature: {
                    restore: {
                        show: true,
                        title: "Restore"
                    },
                    saveAsImage: {
                        show: true,
                        title: "Save Image"
                    }
                }
            },
            series: [{
                    name: 'CPU Temperature',
                    type: 'gauge',
                    center: ['50%', '50%'],
                    startAngle: 140,
                    endAngle: -140,
                    min: 0,
                    max: 100,
                    precision: 0,
                    splitNumber: 10,
                    axisLine: {
                        show: true,
                        lineStyle: {
                            color: [
                                [0.2, '#50c1cf'],
                                [0.4, '#3498db'],
                                [0.8, '#5cb85c'],
                                [1, '#ed6b75']
                            ],
                            width: 20
                        }
                    },
                    axisTick: {
                        show: true,
                        splitNumber: 5,
                        length: 8,
                        lineStyle: {
                            color: '#eee',
                            width: 1,
                            type: 'solid'
                        }
                    },
                    axisLabel: {
                        show: true,
                        formatter: function (v) {
                            switch (v + '') {
                                case '10':
                                    return 'Frozen';
                                case '30':
                                    return 'Cold';
                                case '60':
                                    return 'Normal';
                                case '90':
                                    return 'Hot';
                                default:
                                    return '';
                            }
                        },
                        textStyle: {
                            color: '#333'
                        }
                    },
                    splitLine: {
                        show: true,
                        length: 30,
                        lineStyle: {
                            color: '#eee',
                            width: 2,
                            type: 'solid'
                        }
                    },
                    pointer: {
                        length: '80%',
                        width: 8,
                        color: 'auto'
                    },
                    title: {
                        show: true,
                        offsetCenter: ['-65%', -10],
                        textStyle: {
                            color: '#333',
                            fontSize: 15
                        }
                    },
                    detail: {
                        show: true,
                        backgroundColor: 'rgba(0,0,0,0)',
                        borderWidth: 0,
                        borderColor: '#ccc',
                        width: 100,
                        height: 40,
                        offsetCenter: ['-60%', 10],
                        formatter: '{value}%',
                        textStyle: {
                            color: 'auto',
                            fontSize: 30
                        }
                    },
                    data: [{
                            value: 65,
                            name: 'Temperature'
                        }]
                }]
        });

    }

    //echart Line

    if ($('#echart_line').length) {

        var echartLine = echarts.init(document.getElementById('echart_line'), theme);

        echartLine.setOption({
            title: {
                text: '',
                subtext: ''
            },
            tooltip: {
                trigger: 'axis'
            },
            legend: {
                x: 220,
                y: 40,
                data: ['Intent', 'Pre-order', 'Deal']
            },
            toolbox: {
                show: true,
                feature: {
                    magicType: {
                        show: true,
                        title: {
                            line: 'Line',
                            bar: 'Bar',
                            stack: 'Stack',
                            tiled: 'Tiled'
                        },
                        type: ['line', 'bar', 'stack', 'tiled']
                    },
                    restore: {
                        show: true,
                        title: "Restore"
                    },
                    saveAsImage: {
                        show: true,
                        title: "Save Image"
                    }
                }
            },
            calculable: true,
            xAxis: [{
                    type: 'category',
                    boundaryGap: false,
                    data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
                }],
            yAxis: [{
                    type: 'value'
                }],
            series: [{
                    name: 'Deal',
                    type: 'line',
                    smooth: true,
                    itemStyle: {
                        normal: {
                            areaStyle: {
                                type: 'default'
                            }
                        }
                    },
                    data: [10, 12, 21, 54, 260, 830, 710]
                }, {
                    name: 'Pre-order',
                    type: 'line',
                    smooth: true,
                    itemStyle: {
                        normal: {
                            areaStyle: {
                                type: 'default'
                            }
                        }
                    },
                    data: [30, 182, 434, 791, 390, 30, 10]
                }, {
                    name: 'Intent',
                    type: 'line',
                    smooth: true,
                    itemStyle: {
                        normal: {
                            areaStyle: {
                                type: 'default'
                            }
                        }
                    },
                    data: [220, 132, 601, 234, 120, 90, 20]
                }]
        });

    }

    //echart Scatter

    if ($('#echart_scatter').length) {

        var echartScatter = echarts.init(document.getElementById('echart_scatter'), theme);

        echartScatter.setOption({
            title: {
                text: '',
                subtext: ''
            },
            tooltip: {
                trigger: 'axis',
                showDelay: 0,
                axisPointer: {
                    type: 'cross',
                    lineStyle: {
                        type: 'dashed',
                        width: 1
                    }
                }
            },
            legend: {
                data: ['Data2', 'Data1']
            },
            toolbox: {
                show: true,
                feature: {
                    saveAsImage: {
                        show: true,
                        title: "Save Image"
                    }
                }
            },
            xAxis: [{
                    type: 'value',
                    scale: true,
                    axisLabel: {
                        formatter: '{value} cm'
                    }
                }],
            yAxis: [{
                    type: 'value',
                    scale: true,
                    axisLabel: {
                        formatter: '{value} kg'
                    }
                }],
            series: [{
                    name: 'Data1',
                    type: 'scatter',
                    tooltip: {
                        trigger: 'item',
                        formatter: function (params) {
                            if (params.value.length > 1) {
                                return params.seriesName + ' :<br/>' + params.value[0] + 'cm ' + params.value[1] + 'kg ';
                            } else {
                                return params.seriesName + ' :<br/>' + params.name + ' : ' + params.value + 'kg ';
                            }
                        }
                    },
                    data: [
                        [161.2, 51.6],
                        [167.5, 59.0],
                        [159.5, 49.2],
                        [157.0, 63.0],
                        [155.8, 53.6],
                        [170.0, 59.0],
                        [159.1, 47.6],
                        [166.0, 69.8],
                        [176.2, 66.8],
                        [160.2, 75.2],
                        [172.5, 55.2],
                        [170.9, 54.2],
                        [172.9, 62.5],
                        [153.4, 42.0],
                        [160.0, 50.0],
                        [147.2, 49.8],
                        [168.2, 49.2],
                        [175.0, 73.2],
                        [157.0, 47.8],
                        [167.6, 68.8],
                        [159.5, 50.6],
                        [175.0, 82.5]
                    ],
                    markPoint: {
                        data: [{
                                type: 'max',
                                name: 'Max'
                            }, {
                                type: 'min',
                                name: 'Min'
                            }]
                    },
                    markLine: {
                        data: [{
                                type: 'average',
                                name: 'Mean'
                            }]
                    }
                }, {
                    name: 'Data2',
                    type: 'scatter',
                    tooltip: {
                        trigger: 'item',
                        formatter: function (params) {
                            if (params.value.length > 1) {
                                return params.seriesName + ' :<br/>' + params.value[0] + 'cm ' + params.value[1] + 'kg ';
                            } else {
                                return params.seriesName + ' :<br/>' + params.name + ' : ' + params.value + 'kg ';
                            }
                        }
                    },
                    data: [
                        [174.0, 65.6],
                        [175.3, 71.8],
                        [193.5, 80.7],
                        [186.5, 72.6],
                        [187.2, 78.8],
                        [181.5, 74.8],
                        [184.0, 86.4],
                        [184.5, 78.4],
                        [175.0, 62.0],
                        [184.0, 81.6],
                        [180.0, 76.6],
                        [177.8, 83.6],
                        [192.0, 90.0],
                        [176.0, 74.6],
                        [174.0, 71.0],
                        [184.0, 79.6],
                        [192.7, 93.8],
                        [171.5, 70.0],
                        [173.0, 72.4],
                        [176.0, 85.9],
                        [176.0, 78.8],
                        [180.5, 77.8],
                        [172.7, 66.2],
                        [176.0, 86.4],
                        [173.5, 81.8],
                        [178.0, 89.6],
                        [180.3, 82.8],
                        [180.3, 76.4],
                        [164.5, 63.2],
                        [173.0, 60.9]
                    ],
                    markPoint: {
                        data: [{
                                type: 'max',
                                name: 'Max'
                            }, {
                                type: 'min',
                                name: 'Min'
                            }]
                    },
                    markLine: {
                        data: [{
                                type: 'average',
                                name: 'Mean'
                            }]
                    }
                }]
        });

    }

    //echart Bar Horizontal

    if ($('#echart_bar_horizontal').length) {

        var echartBar = echarts.init(document.getElementById('echart_bar_horizontal'), theme);

        echartBar.setOption({
            tooltip: {
                trigger: 'axis'
            },
            legend: {
                x: 100,
                data: ['2016', '2017']
            },
            toolbox: {
                show: true,
                feature: {
                    saveAsImage: {
                        show: true,
                        title: "Save Image"
                    }
                }
            },
            calculable: true,
            xAxis: [{
                    type: 'value',
                    boundaryGap: [0, 0.01]
                }],
            yAxis: [{
                    type: 'category',
                    data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
                }],
            series: [{
                    name: '2016',
                    type: 'bar',
                    data: [18203, 23489, 29034, 104970, 131744, 630230, 89798, 98798, 18903, 32187, 987123, 54878]
                }, {
                    name: '2017',
                    type: 'bar',
                    data: [19325, 23438, 31000, 121594, 134141, 681807, 56465, 74561, 321567, 87413, 65789, 97812]
                }]
        });

    }

    //echart Pie Collapse

    if ($('#echart_pie2').length) {

        var echartPieCollapse = echarts.init(document.getElementById('echart_pie2'), theme);

        echartPieCollapse.setOption({
            tooltip: {
                trigger: 'item',
                formatter: "{a} <br/>{b} : {c} ({d}%)"
            },
            legend: {
                x: 'center',
                y: 'bottom',
                data: ['iPhone 4', 'iPhone 5', 'iPhone 6', 'iPhone 7', 'iPad', 'iPod']
            },
            toolbox: {
                show: true,
                feature: {
                    magicType: {
                        show: true,
                        type: ['pie', 'funnel']
                    },
                    restore: {
                        show: true,
                        title: "Restore"
                    },
                    saveAsImage: {
                        show: true,
                        title: "Save Image"
                    }
                }
            },
            calculable: true,
            series: [{
                    name: 'Best Sell',
                    type: 'pie',
                    radius: [25, 90],
                    center: ['50%', 170],
                    roseType: 'area',
                    x: '50%',
                    max: 40,
                    sort: 'ascending',
                    data: [{
                            value: 5,
                            name: 'iPhone 4'
                        }, {
                            value: 15,
                            name: 'iPhone 5'
                        }, {
                            value: 25,
                            name: 'iPhone 6'
                        }, {
                            value: 35,
                            name: 'iPhone 7'
                        }, {
                            value: 20,
                            name: 'iPad'
                        }, {
                            value: 10,
                            name: 'iPod'
                        }]
                }]
        });

    }

    //echart Donut

    if ($('#echart_donut').length) {

        var echartDonut = echarts.init(document.getElementById('echart_donut'), theme);

        echartDonut.setOption({
            tooltip: {
                trigger: 'item',
                formatter: "{a} <br/>{b} : {c} ({d}%)"
            },
            calculable: true,
            legend: {
                x: 'center',
                y: 'bottom',
                data: ['Direct Access', 'E-mail Marketing', 'Union Ad', 'Video Ads', 'Search Engine']
            },
            toolbox: {
                show: true,
                feature: {
                    magicType: {
                        show: true,
                        type: ['pie', 'funnel'],
                        option: {
                            funnel: {
                                x: '25%',
                                width: '50%',
                                funnelAlign: 'center',
                                max: 1548
                            }
                        }
                    },
                    restore: {
                        show: true,
                        title: "Restore"
                    },
                    saveAsImage: {
                        show: true,
                        title: "Save Image"
                    }
                }
            },
            series: [{
                    name: 'Access to the resource',
                    type: 'pie',
                    radius: ['35%', '55%'],
                    itemStyle: {
                        normal: {
                            label: {
                                show: true
                            },
                            labelLine: {
                                show: true
                            }
                        },
                        emphasis: {
                            label: {
                                show: true,
                                position: 'center',
                                textStyle: {
                                    fontSize: '14',
                                    fontWeight: 'normal'
                                }
                            }
                        }
                    },
                    data: [{
                            value: 335,
                            name: 'Direct Access'
                        }, {
                            value: 310,
                            name: 'E-mail Marketing'
                        }, {
                            value: 234,
                            name: 'Union Ad'
                        }, {
                            value: 135,
                            name: 'Video Ads'
                        }, {
                            value: 1548,
                            name: 'Search Engine'
                        }]
                }]
        });

    }

    //echart Pie

    if ($('#echart_pie').length) {

        var echartPie = echarts.init(document.getElementById('echart_pie'), theme);

        echartPie.setOption({
            tooltip: {
                trigger: 'item',
                formatter: "{a} <br/>{b} : {c} ({d}%)"
            },
            legend: {
                x: 'center',
                y: 'bottom',
                data: ['Direct Access', 'E-mail Marketing', 'Union Ad', 'Video Ads', 'Search Engine']
            },
            toolbox: {
                show: true,
                feature: {
                    magicType: {
                        show: true,
                        type: ['pie', 'funnel'],
                        option: {
                            funnel: {
                                x: '25%',
                                width: '50%',
                                funnelAlign: 'left',
                                max: 1548
                            }
                        }
                    },
                    restore: {
                        show: true,
                        title: "Restore"
                    },
                    saveAsImage: {
                        show: true,
                        title: "Save Image"
                    }
                }
            },
            calculable: true,
            series: [{
                    name: 'Access source',
                    type: 'pie',
                    radius: '55%',
                    center: ['50%', '48%'],
                    data: [{
                            value: 235,
                            name: 'Direct Access'
                        }, {
                            value: 410,
                            name: 'E-mail Marketing'
                        }, {
                            value: 134,
                            name: 'Union Ad'
                        }, {
                            value: 535,
                            name: 'Video Ads'
                        }, {
                            value: 1048,
                            name: 'Search Engine'
                        }]
                }]
        });

        var dataStyle = {
            normal: {
                label: {
                    show: false
                },
                labelLine: {
                    show: false
                }
            }
        };

        var placeHolderStyle = {
            normal: {
                color: 'rgba(0,0,0,0)',
                label: {
                    show: false
                },
                labelLine: {
                    show: false
                }
            },
            emphasis: {
                color: 'rgba(0,0,0,0)'
            }
        };

    }

    //echart Mini Pie

    if ($('#echart_mini_pie').length) {

        var echartMiniPie = echarts.init(document.getElementById('echart_mini_pie'), theme);

        echartMiniPie.setOption({
            title: {
                text: 'Chart #2',
                subtext: 'From ExcelHome',
                sublink: 'http://e.weibo.com/1341556070/AhQXtjbqh',
                x: 'center',
                y: 'center',
                itemGap: 20,
                textStyle: {
                    color: 'rgba(30,144,255,0.8)',
                    fontFamily: '微软雅黑',
                    fontSize: 35,
                    fontWeight: 'bolder'
                }
            },
            tooltip: {
                show: true,
                formatter: "{a} <br/>{b} : {c} ({d}%)"
            },
            legend: {
                orient: 'vertical',
                x: 170,
                y: 45,
                itemGap: 12,
                data: ['68%Something #1', '29%Something #2', '3%Something #3'],
            },
            toolbox: {
                show: true,
                feature: {
                    mark: {
                        show: true
                    },
                    dataView: {
                        show: true,
                        title: "Text View",
                        lang: [
                            "Text View",
                            "Close",
                            "Refresh",
                        ],
                        readOnly: false
                    },
                    restore: {
                        show: true,
                        title: "Restore"
                    },
                    saveAsImage: {
                        show: true,
                        title: "Save Image"
                    }
                }
            },
            series: [{
                    name: '1',
                    type: 'pie',
                    clockWise: false,
                    radius: [105, 130],
                    itemStyle: dataStyle,
                    data: [{
                            value: 68,
                            name: '68%Something #1'
                        }, {
                            value: 32,
                            name: 'invisible',
                            itemStyle: placeHolderStyle
                        }]
                }, {
                    name: '2',
                    type: 'pie',
                    clockWise: false,
                    radius: [80, 105],
                    itemStyle: dataStyle,
                    data: [{
                            value: 29,
                            name: '29%Something #2'
                        }, {
                            value: 71,
                            name: 'invisible',
                            itemStyle: placeHolderStyle
                        }]
                }, {
                    name: '3',
                    type: 'pie',
                    clockWise: false,
                    radius: [25, 80],
                    itemStyle: dataStyle,
                    data: [{
                            value: 3,
                            name: '3%Something #3'
                        }, {
                            value: 97,
                            name: 'invisible',
                            itemStyle: placeHolderStyle
                        }]
                }]
        });

    }

    //echart Map

    if ($('#echart_world_map').length) {

        var echartMap = echarts.init(document.getElementById('echart_world_map'), theme);


        echartMap.setOption({
            title: {
                text: '',
                subtext: '',
                x: 'center',
                y: 'top'
            },
            tooltip: {
                trigger: 'item',
                formatter: function (params) {
                    var value = (params.value + '').split('.');
                    value = value[0].replace(/(\d{1,3})(?=(?:\d{3})+(?!\d))/g, '$1,') + '.' + value[1];
                    return params.seriesName + '<br/>' + params.name + ' : ' + value;
                }
            },
            toolbox: {
                show: true,
                orient: 'vertical',
                x: 'right',
                y: 'center',
                feature: {
                    mark: {
                        show: true
                    },
                    dataView: {
                        show: true,
                        title: "Text View",
                        lang: [
                            "Text View",
                            "Close",
                            "Refresh",
                        ],
                        readOnly: false
                    },
                    restore: {
                        show: true,
                        title: "Restore"
                    },
                    saveAsImage: {
                        show: true,
                        title: "Save Image"
                    }
                }
            },
            dataRange: {
                min: 0,
                max: 1000000,
                text: ['High', 'Low'],
                realtime: false,
                calculable: true,
                color: ['#cdecec', '#96dee3', '#6bc5cc']
            },
            series: [{
                    name: 'World Population',
                    type: 'map',
                    mapType: 'world',
                    roam: false,
                    mapLocation: {
                        y: 60
                    },
                    itemStyle: {
                        emphasis: {
                            label: {
                                show: true
                            }
                        }
                    },
                    data: [{
                            name: 'Afghanistan',
                            value: 28397.812
                        }, {
                            name: 'Angola',
                            value: 19549.124
                        }, {
                            name: 'Albania',
                            value: 3150.143
                        }, {
                            name: 'United Arab Emirates',
                            value: 8441.537
                        }, {
                            name: 'Argentina',
                            value: 40374.224
                        }, {
                            name: 'Armenia',
                            value: 2963.496
                        }, {
                            name: 'French Southern and Antarctic Lands',
                            value: 268.065
                        }, {
                            name: 'Australia',
                            value: 22404.488
                        }, {
                            name: 'Austria',
                            value: 8401.924
                        }, {
                            name: 'Azerbaijan',
                            value: 9094.718
                        }, {
                            name: 'Burundi',
                            value: 9232.753
                        }, {
                            name: 'Belgium',
                            value: 10941.288
                        }, {
                            name: 'Benin',
                            value: 9509.798
                        }, {
                            name: 'Burkina Faso',
                            value: 15540.284
                        }, {
                            name: 'Bangladesh',
                            value: 151125.475
                        }, {
                            name: 'Bulgaria',
                            value: 7389.175
                        }, {
                            name: 'The Bahamas',
                            value: 66402.316
                        }, {
                            name: 'Bosnia and Herzegovina',
                            value: 3845.929
                        }, {
                            name: 'Belarus',
                            value: 9491.07
                        }, {
                            name: 'Belize',
                            value: 308.595
                        }, {
                            name: 'Bermuda',
                            value: 64.951
                        }, {
                            name: 'Bolivia',
                            value: 716.939
                        }, {
                            name: 'Brazil',
                            value: 195210.154
                        }, {
                            name: 'Brunei',
                            value: 27.223
                        }, {
                            name: 'Bhutan',
                            value: 716.939
                        }, {
                            name: 'Botswana',
                            value: 1969.341
                        }, {
                            name: 'Central African Republic',
                            value: 4349.921
                        }, {
                            name: 'Canada',
                            value: 34126.24
                        }, {
                            name: 'Switzerland',
                            value: 7830.534
                        }, {
                            name: 'Chile',
                            value: 17150.76
                        }, {
                            name: 'China',
                            value: 1359821.465
                        }, {
                            name: 'Ivory Coast',
                            value: 60508.978
                        }, {
                            name: 'Cameroon',
                            value: 20624.343
                        }, {
                            name: 'Democratic Republic of the Congo',
                            value: 62191.161
                        }, {
                            name: 'Republic of the Congo',
                            value: 3573.024
                        }, {
                            name: 'Colombia',
                            value: 46444.798
                        }, {
                            name: 'Costa Rica',
                            value: 4669.685
                        }, {
                            name: 'Cuba',
                            value: 11281.768
                        }, {
                            name: 'Northern Cyprus',
                            value: 1.468
                        }, {
                            name: 'Cyprus',
                            value: 1103.685
                        }, {
                            name: 'Czech Republic',
                            value: 10553.701
                        }, {
                            name: 'Germany',
                            value: 83017.404
                        }, {
                            name: 'Djibouti',
                            value: 834.036
                        }, {
                            name: 'Denmark',
                            value: 5550.959
                        }, {
                            name: 'Dominican Republic',
                            value: 10016.797
                        }, {
                            name: 'Algeria',
                            value: 37062.82
                        }, {
                            name: 'Ecuador',
                            value: 15001.072
                        }, {
                            name: 'Egypt',
                            value: 78075.705
                        }, {
                            name: 'Eritrea',
                            value: 5741.159
                        }, {
                            name: 'Spain',
                            value: 46182.038
                        }, {
                            name: 'Estonia',
                            value: 1298.533
                        }, {
                            name: 'Ethiopia',
                            value: 87095.281
                        }, {
                            name: 'Finland',
                            value: 5367.693
                        }, {
                            name: 'Fiji',
                            value: 860.559
                        }, {
                            name: 'Falkland Islands',
                            value: 49.581
                        }, {
                            name: 'France',
                            value: 63230.866
                        }, {
                            name: 'Gabon',
                            value: 1556.222
                        }, {
                            name: 'United Kingdom',
                            value: 62066.35
                        }, {
                            name: 'Georgia',
                            value: 4388.674
                        }, {
                            name: 'Ghana',
                            value: 24262.901
                        }, {
                            name: 'Guinea',
                            value: 10876.033
                        }, {
                            name: 'Gambia',
                            value: 1680.64
                        }, {
                            name: 'Guinea Bissau',
                            value: 10876.033
                        }, {
                            name: 'Equatorial Guinea',
                            value: 696.167
                        }, {
                            name: 'Greece',
                            value: 11109.999
                        }, {
                            name: 'Greenland',
                            value: 56.546
                        }, {
                            name: 'Guatemala',
                            value: 14341.576
                        }, {
                            name: 'French Guiana',
                            value: 231.169
                        }, {
                            name: 'Guyana',
                            value: 786.126
                        }, {
                            name: 'Honduras',
                            value: 7621.204
                        }, {
                            name: 'Croatia',
                            value: 4338.027
                        }, {
                            name: 'Haiti',
                            value: 9896.4
                        }, {
                            name: 'Hungary',
                            value: 10014.633
                        }, {
                            name: 'Indonesia',
                            value: 240676.485
                        }, {
                            name: 'India',
                            value: 1205624.648
                        }, {
                            name: 'Ireland',
                            value: 4467.561
                        }, {
                            name: 'Iran',
                            value: 240676.485
                        }, {
                            name: 'Iraq',
                            value: 30962.38
                        }, {
                            name: 'Iceland',
                            value: 318.042
                        }, {
                            name: 'Israel',
                            value: 7420.368
                        }, {
                            name: 'Italy',
                            value: 60508.978
                        }, {
                            name: 'Jamaica',
                            value: 2741.485
                        }, {
                            name: 'Jordan',
                            value: 6454.554
                        }, {
                            name: 'Japan',
                            value: 127352.833
                        }, {
                            name: 'Kazakhstan',
                            value: 15921.127
                        }, {
                            name: 'Kenya',
                            value: 40909.194
                        }, {
                            name: 'Kyrgyzstan',
                            value: 5334.223
                        }, {
                            name: 'Cambodia',
                            value: 14364.931
                        }, {
                            name: 'South Korea',
                            value: 51452.352
                        }, {
                            name: 'Kosovo',
                            value: 97.743
                        }, {
                            name: 'Kuwait',
                            value: 2991.58
                        }, {
                            name: 'Laos',
                            value: 6395.713
                        }, {
                            name: 'Lebanon',
                            value: 4341.092
                        }, {
                            name: 'Liberia',
                            value: 3957.99
                        }, {
                            name: 'Libya',
                            value: 6040.612
                        }, {
                            name: 'Sri Lanka',
                            value: 20758.779
                        }, {
                            name: 'Lesotho',
                            value: 2008.921
                        }, {
                            name: 'Lithuania',
                            value: 3068.457
                        }, {
                            name: 'Luxembourg',
                            value: 507.885
                        }, {
                            name: 'Latvia',
                            value: 2090.519
                        }, {
                            name: 'Morocco',
                            value: 31642.36
                        }, {
                            name: 'Moldova',
                            value: 103.619
                        }, {
                            name: 'Madagascar',
                            value: 21079.532
                        }, {
                            name: 'Mexico',
                            value: 117886.404
                        }, {
                            name: 'Macedonia',
                            value: 507.885
                        }, {
                            name: 'Mali',
                            value: 13985.961
                        }, {
                            name: 'Myanmar',
                            value: 51931.231
                        }, {
                            name: 'Montenegro',
                            value: 620.078
                        }, {
                            name: 'Mongolia',
                            value: 2712.738
                        }, {
                            name: 'Mozambique',
                            value: 23967.265
                        }, {
                            name: 'Mauritania',
                            value: 3609.42
                        }, {
                            name: 'Malawi',
                            value: 15013.694
                        }, {
                            name: 'Malaysia',
                            value: 28275.835
                        }, {
                            name: 'Namibia',
                            value: 2178.967
                        }, {
                            name: 'New Caledonia',
                            value: 246.379
                        }, {
                            name: 'Niger',
                            value: 15893.746
                        }, {
                            name: 'Nigeria',
                            value: 159707.78
                        }, {
                            name: 'Nicaragua',
                            value: 5822.209
                        }, {
                            name: 'Netherlands',
                            value: 16615.243
                        }, {
                            name: 'Norway',
                            value: 4891.251
                        }, {
                            name: 'Nepal',
                            value: 26846.016
                        }, {
                            name: 'New Zealand',
                            value: 4368.136
                        }, {
                            name: 'Oman',
                            value: 2802.768
                        }, {
                            name: 'Pakistan',
                            value: 173149.306
                        }, {
                            name: 'Panama',
                            value: 3678.128
                        }, {
                            name: 'Peru',
                            value: 29262.83
                        }, {
                            name: 'Philippines',
                            value: 93444.322
                        }, {
                            name: 'Papua New Guinea',
                            value: 6858.945
                        }, {
                            name: 'Poland',
                            value: 38198.754
                        }, {
                            name: 'Puerto Rico',
                            value: 3709.671
                        }, {
                            name: 'North Korea',
                            value: 1.468
                        }, {
                            name: 'Portugal',
                            value: 10589.792
                        }, {
                            name: 'Paraguay',
                            value: 6459.721
                        }, {
                            name: 'Qatar',
                            value: 1749.713
                        }, {
                            name: 'Romania',
                            value: 21861.476
                        }, {
                            name: 'Russia',
                            value: 21861.476
                        }, {
                            name: 'Rwanda',
                            value: 10836.732
                        }, {
                            name: 'Western Sahara',
                            value: 514.648
                        }, {
                            name: 'Saudi Arabia',
                            value: 27258.387
                        }, {
                            name: 'Sudan',
                            value: 35652.002
                        }, {
                            name: 'South Sudan',
                            value: 9940.929
                        }, {
                            name: 'Senegal',
                            value: 12950.564
                        }, {
                            name: 'Solomon Islands',
                            value: 526.447
                        }, {
                            name: 'Sierra Leone',
                            value: 5751.976
                        }, {
                            name: 'El Salvador',
                            value: 6218.195
                        }, {
                            name: 'Somaliland',
                            value: 9636.173
                        }, {
                            name: 'Somalia',
                            value: 9636.173
                        }, {
                            name: 'Republic of Serbia',
                            value: 3573.024
                        }, {
                            name: 'Suriname',
                            value: 524.96
                        }, {
                            name: 'Slovakia',
                            value: 5433.437
                        }, {
                            name: 'Slovenia',
                            value: 2054.232
                        }, {
                            name: 'Sweden',
                            value: 9382.297
                        }, {
                            name: 'Swaziland',
                            value: 1193.148
                        }, {
                            name: 'Syria',
                            value: 7830.534
                        }, {
                            name: 'Chad',
                            value: 11720.781
                        }, {
                            name: 'Togo',
                            value: 6306.014
                        }, {
                            name: 'Thailand',
                            value: 66402.316
                        }, {
                            name: 'Tajikistan',
                            value: 7627.326
                        }, {
                            name: 'Turkmenistan',
                            value: 5041.995
                        }, {
                            name: 'East Timor',
                            value: 10016.797
                        }, {
                            name: 'Trinidad and Tobago',
                            value: 1328.095
                        }, {
                            name: 'Tunisia',
                            value: 10631.83
                        }, {
                            name: 'Turkey',
                            value: 72137.546
                        }, {
                            name: 'United Republic of Tanzania',
                            value: 44973.33
                        }, {
                            name: 'Uganda',
                            value: 33987.213
                        }, {
                            name: 'Ukraine',
                            value: 46050.22
                        }, {
                            name: 'Uruguay',
                            value: 3371.982
                        }, {
                            name: 'United States of America',
                            value: 312247.116
                        }, {
                            name: 'Uzbekistan',
                            value: 27769.27
                        }, {
                            name: 'Venezuela',
                            value: 236.299
                        }, {
                            name: 'Vietnam',
                            value: 89047.397
                        }, {
                            name: 'Vanuatu',
                            value: 236.299
                        }, {
                            name: 'West Bank',
                            value: 13.565
                        }, {
                            name: 'Yemen',
                            value: 22763.008
                        }, {
                            name: 'South Africa',
                            value: 51452.352
                        }, {
                            name: 'Zambia',
                            value: 13216.985
                        }, {
                            name: 'Zimbabwe',
                            value: 13076.978
                        }]
                }]
        });

    }

}
/**
 * init fancebox
 */
function init_gallery() {
    $(".zoom").on('click', function (e) {
        e.preventDefault();
        var element = $(this).parents().parents();
        $(this).parent().parent().parent().find('.fancybox').trigger('click');
    });
    if ($('.fancybox').html() != undefined)
        $('.fancybox').fancybox();

    $(".remove_gallery_img").on('click', function (e) {
        e.preventDefault();
        $(this).parent().parent().parent().parent().parent().remove();
    });
}

$(document).ready(function () {
    "use strict";
    // Panel toolbox
    $('.collapse-link').on('click', function () {
        var $BOX_PANEL = $(this).closest('.x_panel'),
                $ICON = $(this).find('i'),
                $BOX_CONTENT = $BOX_PANEL.find('.x_content');

        // fix for some div with hardcoded fix class
        if ($BOX_PANEL.attr('style')) {
            $BOX_CONTENT.slideToggle(200, function () {
                $BOX_PANEL.removeAttr('style');
            });
        } else {
            $BOX_CONTENT.slideToggle(200);
            $BOX_PANEL.css('height', 'auto');
        }

        $ICON.toggleClass('fa-chevron-up fa-chevron-down');
    });

    $('.close-link').on('click',function () {
        var $BOX_PANEL = $(this).closest('.x_panel');

        $BOX_PANEL.remove();
    });
    // /Panel toolbox

    // Tooltip
    $('[data-toggle="tooltip"]').tooltip({
        container: 'body'
    });
    // /Tooltip

    // Switchery
    if ($(".js-switch")[0]) {
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
        elems.forEach(function (html) {
            var switchery = new Switchery(html, {
                color: '#5bc0de'
            });
        });
    }
    // /Switchery

    // iCheck
    if ($("input.flat")[0]) {
        $('input.flat').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue'
        });
    }
    // /iCheck

    // Accordion
    $(".expand").on("click", function () {
        $(this).next().slideToggle(200);
        $expand = $(this).find(">:first-child");

        if ($expand.text() === "+") {
            $expand.text("-");
        } else {
            $expand.text("+");
        }
    });
    // /Accordion

    // NProgress
    if (typeof NProgress !== 'undefined') {
        NProgress.start();
        NProgress.done();
    }
    // /NProgress

    init_sparklines();
    init_flot_chart();
    init_sidebar();
    init_wysiwyg();
    init_InputMask();
    init_JQVmap();
    init_cropper();
    init_knob();
    init_IonRangeSlider();
    init_ColorPicker();
    init_TagsInput();
    init_parsley();
    init_daterangepicker();
    init_daterangepicker_right();
    init_daterangepicker_single_call();
    init_daterangepicker_reservation();
    init_SmartWizard();
    init_EasyPieChart();
    init_charts();
    init_echarts();
    init_morris_charts();
    init_skycons();
    init_select2();
    init_validator();
    init_DataTables();
    init_chart_doughnut();
    init_gauge();
    init_starrr();
    init_calendar();
    //init_CustomNotification();
    init_autosize();
    init_autocomplete();
    init_gallery();

});