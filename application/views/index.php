<?php include 'header.php' ?>


<!-- breadcrumb -->
<div class="breadcrumb_content">

    <div class="breadcrumb_text"><h3><?php $user=$this->session->userdata('user_username');?>Welcome to your Dashboard <?php echo $user; ?>!</h3>
    </div>
</div>
<!-- /breadcrumb -->

<!-- page content -->
<div class="right_col bg_fff" role="main">

    <!--<div class="row top_tiles">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 top_links">
            <form>
               <input type="text" class="referal" value="<?php echo base_url();?>register/registerref/<?php echo $profile[0]->member_refcode;?>" id="copy" readonly="true;">
               <button  type="button" href="javascript:;" id="copyButtonId"  class="btn-inputRight btn-copy btn-copy-0" data-clipboard-action="copy" data-clipboard-target="#copy" class="submit">Copy</button>
           </form>
              </div>

            
        </div> -->


        <!-- top tiles -->
        <div class="row top_tiles">
        <?php
                            $url = "https://api.coinmarketcap.com/v1/ticker/bitcoin/?convert=USD";

                            $ch = curl_init();
                            curl_setopt($ch, CURLOPT_URL, $url);
                            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true );
        // This is what solved the issue (Accepting gzip encoding)
                            curl_setopt($ch, CURLOPT_ENCODING, "gzip,deflate");     
                            $response = curl_exec($ch);
                            curl_close($ch);
                            $json =json_encode($response);
                            $json =json_decode($response);
                // $price = round($json["ticker"]["buy"], 2);

                            

                            $array = array();
                            foreach($json as $item) {

                                array_push($array, $item->name);
                            } 


                            $bit_rate = $item->price_usd; ?>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 top_bar">
                <div class="tile-stats tile-white bg-blue " align="center">
                    <div class="icon"><i class="fa fa-btc" aria-hidden="true"></i></div>
                    <div class="count"> <h5 class="heading">Your Balances</h5></div>
                    <h3>BTC - <?php echo number_format($btcbalance ,8); ?></h3>
					<h3>LTC - <?php echo number_format($ltcbalance ,8); ?></h3>
					<h3>ETH - <?php echo number_format($ethbalance ,8); ?></h3>
                </div>
            </div>
           
		   
		   
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 top_bar">
                <div class="tile-stats tile-white bg-blue" align="center">
                    <div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                    <div class="count"> <h5 class="heading">Your <?PHP echo $currency_coin; ?> Balance<p></p></h5></div>
                    <h3><?php echo number_format($gettokenvalue)." ".$currency_coin; ?></h3>
                </div>
            </div>
			
			   <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 top_bar">
                <div class="tile-stats tile-white bg-red" align="center">
                    <div class="icon"><i class="fa fa-gavel" aria-hidden="true"></i></div>
                    <div class="count"> <h5 class="heading">ICO Stage</h5></div>
                    <h3>Stage 2</h3>
				</div>
            </div>
			
			 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 top_bar">
                <div class="tile-stats tile-white bg-blue-sky" align="center">
                    <div class="icon"><i class="fa fa-usd"></i></div>
                    <div class="count"><h5 class="heading">Available <?PHP echo $currency_coin; ?> for Purchase</h5></div>
                    <h3><?php 
                    
                        
                    
                        echo number_format($total)." ".$currency_coin; ?></h3>

                </div>
            </div>
			
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 top_bar">
                <div class="tile-stats tile-white bg-blue-sky" align="center">
                    <div class="icon"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></div>
                    <div class="count"> <h5 class="heading"> <?PHP echo $currency_coin; ?> Coins Sold</h5></div>
                    <h3><?php echo number_format($sold)." ".$currency_coin; ?></h3>

                </div>
            </div>

        </div>


        <div class="row top_tiles">
            <div class="animated flipInY col-lg-12 col-md-12 col-sm-12 col-xs-12 prg">
            <?php 
            echo $token_content; ?>
             
          </div>




          <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-12 ">


                <div class="row">


                </div>
            </div>

            <div class="animated flipInY col-lg-12 col-md-12 col-sm-12 col-xs-12 trans">
                <h2>Last 10 Transactions</h2>
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

                                    <th>Currency</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                    <th>Type</th>
                                    <th>Payment Status</th>
                                </tr>
                            </thead>


                            <tbody>

                                <?php 
                                $i=0;
                                foreach($history as $record)
                                {   
                                    $i++;
                                    $statuscheck=$record->payment_status;
                                    if($statuscheck=='1')
                                    {
                                        $status="pending";
                                    }
                                    else if($statuscheck=='2')
                                    {
                                        $status="completed";
                                    }
                                    else if($statuscheck=='3')
                                    {
                                        $status="cancled";
                                    }
                                    else if($statuscheck=='4')
                                    {
                                        $status="gottoken";
                                    }
                                    else if($statuscheck=='6')
                                    {
                                        $status="withdrawn";
                                    }
                                    else
                                    {
                                         $status="gottoken";
                                    }
                                    echo "<tr>";$l=" "; 

                                    if($record->type=='1'){ $st = 'Deposit'; }else if($record->type=='2'){ $st = 'Debits'; }
                                       
                                    //echo "<td>".$record->cash_type."</td>";     
									if($statuscheck==6){
										echo "<td>$currency_coin</td>";  
										echo "<td>".number_format($record->token,8)."</td>";     
										echo "<td>".$record->created_on."</td>";     
										echo "<td>Withdrawal</td>";    
										echo "<td>".$status."</td>"; 
										echo "</tr>";
									}else{
										echo "<td>USD</td>";  
										echo "<td>".number_format($record->ecashcoin,8)."</td>";     
										echo "<td>".$record->created_on."</td>";     
										echo "<td>".$st."</td>";    
										echo "<td>".$status."</td>"; 
										echo "</tr>";
									}

                                } ?>



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>

    </div>


</div>
<!-- /page content -->

<?php include 'footer.php' ?>