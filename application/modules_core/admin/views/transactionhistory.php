<?php include "header.php" ?> 

<div id="page-wrapper">
        <div class="container-fluid">
   
    <div class="row">
      <div class="col-md-12">
      <div class="panel panel-default">
          <div class="panel-heading">Transaction History</div>
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
                <th>S.no</th>
                <th>Username</th>
                <th>Transaction id</th>
				<th>Coin</th>
                <th>Amount</th>				
                <th>Coins</th>
                <th>Type</th>
                <th>Date</th>
                <th>Status</th>
          
            </tr>
        </thead>
        <tfoot>
            <tr>
                 <th>S.no</th>
                <th>Username</th>
                <th>Transaction id</th>
				<th>Coin</th>
                <th>Amount</th>				
                <th>Coins</th>
                 <th>Type</th>
                <th>Date</th>
                <th>Status</th>
            </tr>
        </tfoot>
        <tbody>
            <?php
           $j=0;
           foreach ($history as $key => $value) {
            $name=$value->member_id;
            $username=$this->paymentmodel->username($name);
            $tid= $value->transaction_id;
            $coin= $value->cash_type ;
			$amt= $value->btcamount ;            
			$token=$value->token;
            $sdate= $value->created_on;
            $statuscheck= $value->payment_status;
            $type= $value->type;
            if($type=="1")
            {
              $typenm="credit";
            }
            else if($type=="2")
            {
              $typenm="debit";
            }else if($type=="3"){
			  $typenm="Withdrawal";
			}
           if( $statuscheck==1)
             {


              $status='<span class="label label-warning">Pending</span>';

            }
            else if( $statuscheck==2)
            {


              $status='<span class="label label-success">completed</span>';

            }
            else if( $statuscheck==3)
            {


              $status='<span class="label label-danger">cancled</span>';

            }
            else if( $statuscheck==4)
            {


              $status='<span class="label label-info">buy tokens</span>';

            }
            else if( $statuscheck==6)
            {


              $status='<span class="label label-info">Coin Withdrawal</span>';

            }


            $k=$j+1;

            $j=$k;
            
            ?>
            <tr>
                <td><?php echo $j; ?></td>
                <td><?php echo $username; ?></td>
                <td><?php echo $tid; ?></td>
                <td><?php echo $coin; ?></td>
				<td><?php echo $amt; ?></td>
				<td><?php echo $token; ?></td>
                <td><?php echo $typenm; ?></td>
                <td><?php echo $sdate; ?></td>
                <td><?php echo $status; ?></td>
                
              
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