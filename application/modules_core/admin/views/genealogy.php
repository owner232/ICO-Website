<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
<meta charset="utf-8" />
<title><?php echo  $_SESSION['sitename'];?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport" />
<meta content="" name="description" />
<meta content="" name="author" />
      

     

    
<?php include 'header.php' ?>

<link rel="stylesheet" href="<?php echo base_url('assets/primtive/demo/js/jquery/ui-lightness/jquery-ui-1.10.2.custom.css'); ?>" />
    <script type="text/javascript" src="<?php echo base_url('assets/primtive/demo/js/jquery/jquery-1.9.1.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/primtive/demo/js/jquery/jquery-ui-1.10.2.custom.min.js');?>"></script>

    <script  type="text/javascript" src="<?php echo base_url('assets/primtive/demo/js/primitives.min.js?219');?>"></script>
    <link href="<?php echo base_url('assets/primtive/demo/css/primitives.latest.css?219');?>" media="screen" rel="stylesheet" type="text/css" />
<style type="text/css">
    .net_first {
    height: 150px;
  
    width: 100%;
    text-align: center;
}
.second_line_hry {
    text-align: center;
    width: 33%;
    float: left;
}
.third_line_hry {
     text-align: center;
    float: left;
    width: 33%;
}

</style>
<div class="clearfix"> </div>




<!-- breadcrumb -->
        <div class="breadcrumb_content">
            <div class="breadcrumb_text"><h3>Geneology Hierarchy</h3>
            </div>
        </div>
                <!-- /breadcrumb -->

<div class="right_col bg_fff" role="main">
<div class="row top_tiles">

  <div id="basicdiagram" style="width: 1000px; height: 850px; border-style: dotted; border-width: 1px;" />

<?php 
//echo "<pre>";
//echo $networkhierarchy; ?>

                                                                                                                                                                     

            
</div>
</div>
</div>







<?php include 'footer.php' ?>
<script type='text/javascript'>//<![CDATA[ 
        jQuery(window).load(function () {
            var options = new primitives.orgdiagram.Config();

            var items = [
                <?php echo $geneologyhierarchy; ?>
            ];

            options.items = items;
            options.cursorItem = 0;
            options.templates = [getContactTemplate()];
            options.onItemRender = onTemplateRender;

            jQuery("#basicdiagram").orgDiagram(options);


            function onTemplateRender(event, data) {
                var hrefElement = data.element.find("[name=readmore]");
                var emailElement = data.element.find("[name=email]");
                switch (data.renderingMode) {
                    case primitives.common.RenderingMode.Create:
                        /* Initialize widgets here */
                        hrefElement.click(function (e) {
                            /* Block mouse click propogation in order to avoid layout updates before server postback*/
                            primitives.common.stopPropagation(e);
                        });
                        emailElement.click(function (e) {
                            /* Block mouse click propogation in order to avoid layout updates before server postback*/
                            primitives.common.stopPropagation(e);
                        });
                        break;
                    case primitives.common.RenderingMode.Update:
                        /* Update widgets here */
                        break;
                }

                var itemConfig = data.context;

                if (data.templateName == "contactTemplate") {
                    data.element.find("[name=titleBackground]").css({ "background": itemConfig.itemTitleColor });


                    data.element.find("[name=photo]").attr({ "src": itemConfig.image });
                    hrefElement.attr({ "href": itemConfig.href });
                    emailElement.attr({ "href": ("mailto:" + itemConfig.email + "?Subject=Hello%20again") });


                    var fields = ["title", "description", "phone", "email"];
                    for (var index = 0; index < fields.length; index++) {
                        var field = fields[index];

                        var element = data.element.find("[name=" + field + "]");
                        if (element.text() != itemConfig[field]) {
                            element.text(itemConfig[field]);
                        }
                    }
                }
            }

            function getContactTemplate() {
                var result = new primitives.orgdiagram.TemplateConfig();
                result.name = "contactTemplate";

                result.itemSize = new primitives.common.Size(169, 84);
                result.minimizedItemSize = new primitives.common.Size(3, 3);
                result.highlightPadding = new primitives.common.Thickness(2, 2, 2, 2);


                var itemTemplate = jQuery(
                  '<div class="bp-item bp-corner-all bt-item-frame">'
                    + '<div name="titleBackground" class="bp-item bp-corner-all bp-title-frame" style="top: 2px; left: 2px; width: 216px; height: 20px;">'
                        + '<div name="title" class="bp-item bp-title" style="top: 3px; left: 6px; width: 208px; height: 18px;">'
                        + '</div>'
                    + '</div>'
                    + '<div class="bp-item bp-photo-frame" style="top: 26px; left: 2px; width: 50px; height: 60px;">'
                        + '<img name="photo" style="height:60px; width:50px;" />'
                    + '</div>'
                    + '<div name="phone" class="bp-item" style="top: 26px; left: 56px; width: 162px; height: 18px; font-size: 12px;"></div>'
                    + '<div class="bp-item" style="top: 44px; left: 56px; width: 162px; height: 18px; font-size: 12px;"><a name="email" href="" target="_top"></a></div>'
                    
                   
                + '</div>'
                ).css({
                    width: result.itemSize.width + "px",
                    height: result.itemSize.height + "px"
                }).addClass("bp-item bp-corner-all bt-item-frame");

                result.itemTemplate = itemTemplate.wrap('<div>').parent().html();

                return result;
            }

        });//]]>  
    </script>
                
