<?php include "header.php" ?> 

<div id="page-wrapper">
        <div class="container-fluid">
   
    <div class="row">
      <div class="col-md-12">
      <div class="panel panel-default">
          <div class="panel-heading"><?PHP echo $coinname; ?> ICO Settings</div>
      <div class="panel-body">
      <table id="example" class="display" cellspacing="0" width="100%">
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
      <a href="<?php echo base_url();?>admin/user"></a>
        <br>
        <thead>
            <tr>
                <th>s.no</th>
                <th>Event Name</th>
                <th><?PHP echo $coinname; ?> USD Value</th>
                <th><?PHP echo $coinname; ?> limit</th>
                <th><?PHP echo $coinname; ?> sold</th>
                <th>Starting date</th>
                <th>Ending date</th> 
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>s.no</th>
                <th>Event Name</th>
                <th><?PHP echo $coinname; ?> USD Value</th>
                <th><?PHP echo $coinname; ?> limit</th>
                <th><?PHP echo $coinname; ?> sold</th>
                <th>Starting date</th>
                <th>Ending date</th> 
                <th>Status</th>
                <th>Action</th>
            </tr>
        </tfoot>
        <tbody>
            <?php
           $j=0;
           foreach ($bonus as $key => $value) {
            $id=$value->bonus_id;
            $bonusname= $value->bonus_name;
            $bonuspoints= $value->bonus_points;
            $sdate= $value->starting_date;
            $edate= $value->ending_date;
            $statuscheck= $value->bonus_status;
           $limit= $value->tokenlimit;
           if( $statuscheck==1)
             {


              $status='<span class="label label-success">Active</span>';

            }
            else
            {


              $status='<span class="label label-danger">Suspend</span>';

            }


            $k=$j+1;

            $j=$k;
            
            ?>
            <tr>
                <td><?php echo $j; ?></td>
                <td><?php echo $bonusname;?></td>
                <td><?php echo $bonuspoints; ?></td>
                <td><?php echo $limit; ?></td>
                <td><?php echo $value->soldtoken; ?></td>
                <td><?php echo $sdate; ?></td>
                <td><?php echo $edate; ?></td>
                <td><?php echo $status; ?></td>
                <td><a href="<?php echo base_url();?>admin/bonus/editbonus/<?php echo $id; ?>">
        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> 
          <span class="text-muted"></span>
        
      </a>
     <?php if($statuscheck=='0') {?>
      <a href="<?php echo base_url();?>admin/bonus/active/<?php echo $id; ?>" title="active"><i class="fa fa-check" aria-hidden="true"></i></a><?php } ?>
       <?php if($statuscheck=='1') {?><a href="<?php echo base_url(); ?>admin/bonus/suspend/<?php echo $id; ?>" title="suspend"><i class="fa fa-times" aria-hidden="true"></i></a><?php } ?></td>
            </tr>
            <?php
            }
        ?>
        </tbody>
    </table>
      </div>
    </div>
      </div>
    </div>
     


<?php include "footer.php" ?> 