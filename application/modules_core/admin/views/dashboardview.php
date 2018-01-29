<?php include "header.php" ?> 

<div id="page-wrapper">
<div class="container">
  <div class="row">
    <div class="col-lg-2 col-sm-6">
      <div class="circle-tile ">
        <a href="#"><div class="circle-tile-heading dark-blue"><i class="fa fa-users fa-fw fa-3x"></i></div></a>
        <div class="circle-tile-content dark-blue">
          <div class="circle-tile-description text-faded">Users</div>
          <div class="circle-tile-number text-faded "> <?php echo $totalmember; ?></div>
          <a class="circle-tile-footer" href="#">More Info <i class="fa fa-chevron-circle-right"></i></a>
        </div>
      </div>
    </div>
     
    <div class="col-lg-2 col-sm-6">
      <div class="circle-tile ">
        <a href="#"><div class="circle-tile-heading red"><i class="fa fa-shopping-cart fa-fw fa-3x"></i></div></a>
        <div class="circle-tile-content red">
          <div class="circle-tile-description text-faded">Current Sale</div>
          <div class="circle-tile-number text-faded "><?php echo $currentsales; ?></div>
          <a class="circle-tile-footer" href="<?php echo base_url();?>admin/bonus">More Info <i class="fa fa-chevron-circle-right"></i></a>
        </div>
      </div>
    </div> 
    <div class="col-lg-2 col-sm-6">
      <div class="circle-tile ">
        <a href="#"><div class="circle-tile-heading blue"><i class="fa fa-users fa-fw fa-3x"></i></div></a>
        <div class="circle-tile-content blue">
          <div class="circle-tile-description text-faded">Total Available Coins</div>
          <div class="circle-tile-number text-faded "><?php echo number_format($availabletokens); ?></div>
          <a class="circle-tile-footer" href="<?php echo base_url();?>admin/bonus">More Info <i class="fa fa-chevron-circle-right"></i></a>
        </div>
      </div>
    </div> 
    <div class="col-lg-2 col-sm-6">
      <div class="circle-tile ">
        <a href="#"><div class="circle-tile-heading green"><i class="fa fa-users fa-fw fa-3x"></i></div></a>
        <div class="circle-tile-content green">
          <div class="circle-tile-description text-faded">Sold Coins</div>
          <div class="circle-tile-number text-faded "><?php echo $soldtokens; ?></div>
          <a class="circle-tile-footer" href="<?php echo base_url();?>admin/bonus">More Info <i class="fa fa-chevron-circle-right"></i></a>
        </div>
      </div>
    </div> 
     <div class="col-lg-2 col-sm-6">
      <div class="circle-tile ">
        <a href="#"><div class="circle-tile-heading dark-gray"><i class="fa fa-users fa-fw fa-3x"></i></div></a>
        <div class="circle-tile-content dark-gray">
          <div class="circle-tile-description text-faded">Total BTC Earnings</div>
          <div class="circle-tile-number text-faded "><?php echo number_format($earnings,8); ?></div>
          <a class="circle-tile-footer" href="<?php echo base_url();?>admin/history">More Info <i class="fa fa-chevron-circle-right"></i></a>
        </div>
      </div>
    </div> 
     <div class="col-lg-2 col-sm-6">
      <div class="circle-tile ">
        <a href="#"><div class="circle-tile-heading dark-gray"><i class="fa fa-users fa-fw fa-3x"></i></div></a>
        <div class="circle-tile-content dark-gray">
          <div class="circle-tile-description text-faded">Wallet Balance</div>
          <div class="circle-tile-number text-faded "><?php echo number_format($icocoinbalance,8); ?></div>
          <a class="circle-tile-footer" href="<?php echo base_url();?>admin/history">More Info <i class="fa fa-chevron-circle-right"></i></a>
        </div>
      </div>
    </div> 
  </div> 
</div>  
        <div class="container-fluid">
    
    <div class="row">
      <div class="col-md-12">
      <div class="panel panel-default">
          <div class="panel-heading">USER DETAILS</div>
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
      <a href="<?php echo base_url();?>admin/user"><button type="button" class="btn btn-info pull-right" style="font-size: 14px;">Add</button></a>
        <br>
        <thead>
            <tr>
                <th>s.no</th>
                <th>Name</th>
                <th>Emailid</th>
                <th>Phone no</th>
                <th>Total Coins</th>
                <th>BTC Deposit</th>
                <th>BTC Balance</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>s.no</th>
                <th>Name</th>
                <th>Emailid</th>
                <th>Phone no</th>
                <th>Total Coins</th>
                <th>BTC Deposit</th>
                <th>BTC Balance</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </tfoot>
        <tbody>
            <?php
           $j=0;
           foreach ($totalmembers as $key => $value) {
            $id=$value->member_id;
            $fullname= $value->member_name;
            $email= $value->member_emailid;
            $phone= $value->member_phoneno;
            $statuscheck= $value->member_status;
            $totaltokens=$this->dashboardmodel->viewtokens($id);
            $btcdeposit=$this->dashboardmodel->viewbalance($id);
            $btcbalance=$this->dashboardmodel->viewbtcbalance($id);
            if($totaltokens=="")
            {
                $token="0";
            }
            else
            {
                $token=$totaltokens;
            }
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
                <td><?php echo $fullname; ?></td>
                <td><?php echo $email; ?></td>
                <td><?php echo $phone; ?></td>
                <td><?php echo $token; ?></td>
                <td><?php echo number_format($btcdeposit,8); ?></td>
                <td><?php echo number_format($btcbalance,8); ?></td>
                <td><?php echo $status; ?></td>
                <td><a href="<?php echo base_url();?>admin/user/edituser/<?php echo $id; ?>">
        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> 
          <span class="text-muted"></span>
        
      </a><a href="<?php echo base_url();?>admin/user/delete/<?php echo $id; ?>" title="delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
     <?php if($statuscheck=='0') {?>
      <a href="<?php echo base_url();?>admin/user/active/<?php echo $id; ?>" title="active"><i class="fa fa-check" aria-hidden="true"></i></a><?php } ?>
       <?php if($statuscheck=='1') {?><a href="<?php echo base_url(); ?>admin/user/suspend/<?php echo $id; ?>" title="suspend"><i class="fa fa-times" aria-hidden="true"></i></a><?php } ?></td>
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