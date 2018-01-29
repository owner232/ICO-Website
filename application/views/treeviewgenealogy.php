<?php include 'header.php' ?>


<link href="<?php echo base_url('assets/genen/style.min.css'); ?>" rel="stylesheet" id="style_components" type="text/css" />
<link href="<?php echo base_url('assets/genen/components.min.css'); ?>" rel="stylesheet" id="style_components" type="text/css" />
<link href="<?php echo base_url('assets/genen/plugins.min.css'); ?>" rel="stylesheet" id="style_components" type="text/css" />
<style>
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
.jstree-icon.jstree-themeicon.fa.fa-folder.icon-state-warning.icon-lg.jstree-themeicon-custom {
    display: none !important;
}
.jstree-default .jstree-anchor {
       padding-left: 8px !important;
     }
.modal-content.total {
    top: 25px;}
.modal-header.hd {
    background: none !important;
    padding: 13px !important;
    min-height: 5px !important;
    color: #000 !important;}
.modal-body.cnt {
    text-align: center;
      padding-right: 11px;
    padding-left: 11px;
    padding-top: 0px;
    padding-bottom: 0px;}
.user-avatar {
    border: 3px solid #CCC;
    display: block;
    width: 100%;
    max-width: 100%;
    height: auto;
    border-radius: 100% !important;}
.modal-footer.bd {
    border-top: 1px solid gainsboro;padding: 18px 6px;}
.close.dd {
    text-indent: 0;}
.bd .btn.btn-default {
    font-size: 11px !important;
    float: left;
    text-transform: none;}
.modal-dialog.alg {
    max-width: 450px;
    margin: auto;
    min-height: 156px;
    top: -29px;}
.modal-content .total{top:25px;}

</style>
  <div class="clearfix"> </div>
   <div class="breadcrumb_content">
   <div class="breadcrumb_text"><h3>Referral Users</h3>
   </div>
   </div>
   <div class="right_col bg_fff" role="main">
   <div class="row top_tiles">
   <div class="portlet-body">
   <div id="tree_1" class="tree-demo ad_gene">
  <?php echo $genealagyhierarchy; ?>
         </div>
         </div>
      </div>
      
</div>



<div class="modal fade" id="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">User Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <iframe src="<?php echo base_url(); ?>welcome/userdetails" id="requestdonariframe" width="100%" height="50%" frameborder="0" 
                ></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="javascript:close_popup()">Close</button>
        
      </div>
    </div>
  </div>
</div>



</div>
<?php include 'footer.php' ?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">

function showuserip(member_id)
{
  //alert(member_id);
  var src="<?php echo base_url();?>welcome/userdetails/"+member_id;

  document.getElementById('requestdonariframe').src = src;

         $('#myModal').modal('show');
}

function close_popup()
{
  window.parent.location = "<?php echo base_url(); ?>welcome/treeviewgeneology";
}

</script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--<script src="<?php echo base_url(); ?>bootstrap/dist/js/bootstrap.min.js"></script>-->

      <script type="text/javascript"src="<?php echo base_url('assets/genen/jstree.min.js' );?>"></script>
      <script type="text/javascript"src="<?php echo base_url('assets/genen/app.min.js');?>" ></script>
     <script type="text/javascript" src="<?php echo base_url('assets/genen/ui-tree.min.js' );?>"></script>
     <script type="text/javascript" src="<?php echo base_url('assets/genen/demo.min.js' );?>"></script>
     <script type="text/javascript" src="<?php echo base_url('assets/genen/quick-sidebar.min.js' );?>"></script>
