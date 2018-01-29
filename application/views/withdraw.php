<?php include 'header.php' ?>


<!-- breadcrumb -->
<div class="breadcrumb_content">
  <div class="breadcrumb_text"><h3>Withdraw Your <?PHP echo $coinname; ?></h3>
  </div>
</div>
<!-- /breadcrumb -->

<div class="right_col bg_fff" role="main">
  <div class="row top_tiles">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		 <div class="panel-body">
			<?PHP echo $witherror; ?>
		 </div>
	</div>
  </div>
  
  
   <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 top_bar">
		<div class="tile-stats tile-white bg-blue-sky">
			<div class="icon"><i class="fa fa-check-square-o"></i></div>
			<div class="count"><h5 class="heading">Available <?PHP echo $coinname; ?> Coins</h5></div>
			<h3><?php echo number_format($gettokenvalue)." ".$coinname; ?></h3>
			
		
	</div>
   </div>
   
  <?PHP if($walleturl){?>
   <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 top_bar">
		<a href="<?PHP echo $walleturl; ?>" target="_blank">
		<div class="tile-stats tile-white bg-blue">
			<div class="icon2"><i class="fa fa-download"></i></div>
			<div class="count2"><div class="download"><h2 class="heading"><style="color:#ffffff">Download <br> <?PHP echo $coinname; ?> Wallet</h2></style></div></a>
						
		</div>
	</div>
   </div>
  <?PHP }?>
  
   
   
    
			
   
   
  <div class="row top_tiles">
   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<div class="withdrawalform">
		<form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo base_url();?>welcome/withdrawtoken">
       <h4>Withdrawal Information</h4>
<fieldset>
<div class="form-group">
    <label class="col-md-3 col-sm-3 col-xs-12 control-label" for="icocoinaddress"><?PHP echo $coinname; ?> Address</label>
    <div class="col-md-8 col-sm-8 col-xs-12">
        <input type="text" class="form-control" id="icocoinaddress" name="icocoinaddress" value="<?php echo $icocoinaddress; ?>" placeholder="<?PHP echo $coinname; ?> Address" required="">
    </div>
</div>
<div class="form-group">
    <label class="col-md-3 col-sm-3 col-xs-12 control-label" for="icocoinamount">Amount</label>
    <div class="col-md-8 col-sm-8 col-xs-12">
        <input type="text" class="form-control" id="icocoinamount" name="icocoinamount" value="0.00000000" placeholder="Amount" required="">
    </div>
</div>

</fieldset>

<div class="panel-footer bg-none">
<div class="row">
    <div class="col-md-9 col-md-offset-3">
         <input name="submit" value="Submit" class="btn btn-primary" data-disable-with="Submit" type="submit" style="margin-left: unset;">
	</div>
</div>
</div>

</form>
		</div>
	</div>
   </div>
   <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-12 ">


                <div class="row">


                </div>
            </div>

            <div class="animated flipInY col-lg-12 col-md-12 col-sm-12 col-xs-12 trans">
                <h2>Last 10 Withdrawals</h2>
                <p></p>
            </div>
            <div class="row aa">
             <div class="col-md-12 col-sm-12 col-xs-12 tb">
                <div class="x_panel">
                    <div class="x_title">
                        <h4></h4>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table id="" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Amount</th>
                                    <th>Date</th>
                                    <th>Address</th>
                                    <th>TXID</th>
                                </tr>
                            </thead>


                            <tbody>
								<?php 
                                foreach($withdrawhistory as $record)
                                {   
                                    echo "<tr>";   
                                    echo "<td>".number_format($record->amount,8)."</td>";  
                                    echo "<td>".date("m-d-Y h:i:s",$record->timestamp)."</td>";     
                                    echo "<td>".$record->address."</td>";     
                                    echo "<td>".$record->txid."</td>"; 
                                    echo "</tr>";


                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>

    </div>
</div>





<?php include 'footer.php' ?>