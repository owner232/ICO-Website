primtives.zip

This file contains minimal set of files required for library distribution.
jQuery UI Widget - implements organizational and multi-parent hierarchical charts in jQuery UI Widget 
specification.Visualizes hierarchical structures using default or user defined HTML templates. Charts 
use custom layout algorithm auto fitting selected items of hierarchy into available space. Chart removes 
wasted gaps between tree branches and auto-folds nodes into dots and lines in order to save space and 
show only selected nodes in hierarchy within available space. Organizational chart supports regular 
paper style Charts via implementing Assistant & Adviser parent-child relationships, matrix children 
layout and it has a number of UI interactivity enhancements to operate large over 500 items diagrams 
without manual partitioning on the screen. It works in all major browsers Internet Explorer, Chrome, 
Firefox, Safari including mobile browsers. Browsers performance should be taken into consideration 
when large org charts are rendered.





demo.zip

Contain copy of all on-line demos runnable from local folder or web server. Unzip archive and open index.html in browser:
- Large Hierarchical Chart navigation demo
- Vertical & Matrix Organizational Chart layout demos
- Organizational Chart Editor 
- Family Tree
- Dependencies Chart
- Partners in Organizational Chart
- Drag & Drop
- Cross Functional Group visualization demo
- Bootstrap Styling Demo





reference.zip

Copy of on-line reference. Unzip archive and open index.html in browser





phpdemo.zip

Archive contains only single demo of "Large Hierarchy Chart" implemented in PHP
This demo requires PHP 5.2 & MySQL connection. Create test database from mysqldump folder and edit 
connection string in header of this PHP file.





AspNetBasicPrimitives.zip

This arhive contains source code of ASP.NET 3.5 custom control wrapping and rendering Organizational Chart using Basic Primitves jQuery UI Widget.
Pay attention that the C# code of ASP.NET control is licensed under jQuery license, but
jQuery UI widget itself, is distributed under Basic Primitives orgDiagram Standard Terms and Conditions 

How to use:

    ASP.NET Web Form application should include next JavaScript files: jquery-1.7.2.js, jquery.json-2.3.min.js, jquery-ui-1.8.16.custom.min.js and css file: jquery-ui-1.8.16.custom.css
    ASP.NET Web Form application must contain AJAX "ScriptManager" component.
    Please rebuild project in order to see control in Visual Studio toolbox. Design time preview is not implemented, but control's API is complete.
	In order to customize item template see BasicPrimitivesDemo project Scripts/UserTemplates.js

ASP.NET control's API supports following jQuery UI Widget features:

    Supports Regular, Adviser, Assistant and Partner item types having sub hierarchies.
    Vertical, Horizontal & Matrix leaves layouts
    Selected & Checked items.
    Default customizable template.
    Custom server side rendered item templates supporting data bindings.
    Selected item template. Derived item classes serialization.
    Optional immediate post backs