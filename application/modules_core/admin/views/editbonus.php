<?php include_once 'header.php'; ?>
<div id="page-wrapper">
 <?php
 if ($this->session->flashdata('message')) { ?>
 <div class="alert alert-success alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <?php  echo $this->session->flashdata('message'); ?>
</div>

<?php } ?>
<?php
if ($this->session->flashdata('error-message')) { ?>
<div class="alert alert-danger alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <?php  echo $this->session->flashdata('error-message'); ?>
</div>

<?php } ?> 

 <form class="container-fluid" method="post"  enctype="multipart/form-data" action="<?php echo base_url();?>admin/bonus/updatebonus/<?php echo $bonus[0]->bonus_id;?>">
    <div class="row">


        <div class="col-md-8">
            <span class="dashboard__title">Edit Sales Token Settings</span>
            <div class="form__row sm">
                <label class="label_small">sales Name</label>
                <input type="text" name="bonusname" class="input-secondary" placeholder="Enter your bonus name" value="<?php echo $bonus[0]->bonus_name;?>">
            </div>
            <div class="form__row ">
                <label class="label_small">Starting date</label>
                <div class="form-group">
                    <div class='input-group date' id='datetimepicker1'>
                        <input type='text' name="sdate" value="<?php echo $bonus[0]->starting_date;?>" class="form-control" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>

            </div>
            <div class="form__row ">
                <label class="label_small">Ending date</label>
                <div class="form-group">
                    <div class='input-group date' id='datetimepicker2'>
                        <input type='text' name="edate" value="<?php echo $bonus[0]->ending_date;?>" class="form-control" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>

            </div>
            <div class="form__row ">
                <label class="label_small">Token Price</label>
                <input type="text" name="bonuspoints" class="input-secondary" value="<?php echo $bonus[0]->bonus_points;?>"  placeholder="Enter Ecashcoin points">
            </div>
            <div class="form__row ">
                <label class="label_small">Token limits</label>
                <input type="text" name="limit" class="input-secondary" value="<?php echo $bonus[0]->tokenlimit;?>"  placeholder="Enter Ecashcoin points">
            </div>
            <div class="form__row">
               <div class="controls col-md-8 ">
                <input type="submit" name="submit" value="Save Change" class="btn btn-accent small btnChange_js btn_change_password" id="submit-id-signup" />

            </div>
        </div>
    </div>
</div>
</form>
</div>


<?php include_once 'footer.php'; ?>
 <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
  <script type="text/javascript">
    $(function () {
        $('#datetimepicker1').datepicker();
        $('#datetimepicker2').datepicker();
    });
</script>