<?php include 'header.php' ?>


<!-- breadcrumb -->
                <div class="breadcrumb_content">
                    <div class="breadcrumb_text"><h3>Deposit - Amount entered below is the USD amount of your Depositing BTC/LTC/ETH </h3>
                    </div>
                </div>
                <!-- /breadcrumb -->

<div class="right_col bg_fff" role="main">
<div class="row top_tiles">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 referral top_links">

<div class="panel-body">
           
            <h2>Make a Deposit - $20 USD Equivalent Minimum</h2>

            <ul class="nav nav-tabs" style="margin-bottom: 15px;">
     <li class="active"><a href="#BTC" data-toggle="tab" data-type="bitcoin" onclick="viewbtc();" id="item" class="currency__link tab__link active">Bitcoin</a></li>
     <li><a href="#LTC" data-toggle="tab" data-type="litecoin" onclick="viewltc();" id="item" class="currency__link tab__link">Litecoin</a></li>
     <li><a href="#ETH" data-toggle="tab" data-type="ethereum" onclick="vieweth();" id="item" class="currency__link tab__link">Ethereum</a></li>
   
  
</ul>

<div id="myTabContent" class="tab-content">
      <div class="tab-pane fade in active" id="BTC">
       <!--  <a href="javascript:void(0)" class="btn btn-raised get-address " data-code="BTC">Get Address for Payment</a> -->

	 

      <div id="btc" style="display:block">
      <form method="post" class="dep_form" action="<?php echo base_url();?>welcome/checkpayment/1">

	  <input class="inputwhite" type="text" name="btcdepositamount" id="btcdepositamount" value="" placeholder="Enter BTC Deposit Amount">
      <input class="inputgreen" type="text" name="amount" id="amount" value="" placeholder="USD Value (Auto Calculated)" disabled>
       <input type="button" onclick="deposit();" name="submit" value="Submit" class="btn btn-primary btn btn-info dep_but" id="submit-id-signup">
	     <b>Click Submit once then wait ~5 seconds for Address to generate below</b>
      </form>
  
      <div style="font-size: 16px;color:red; text-transform:uppercase"> <b>
	  IMPORTANT! Please make sure you are sending the full amount of coin requested to the wallet, Sometimes withdrawing from exchanges require you to send more than needed to pay for fees!
      <br> 
	   </b>
	  </div><br>
	  </div>
   
        <div>
          <div class="hide payment-block">
            <div class="row">
              <div class="col-md-4 col-xs-12 col-sm-12 text-center left">
                <p class="title"><b>Deposit funds by scanning below</b></p>
                <div class="text-center">
                  <center>
                    <div class="box quare-code">
                      
                    </div>
                  </center>
                </div>
              </div>
              <div class="col-md-8 text-center right">
                <p class="title"><b>Or Direct Deposit to</b></p>
                <div class="box">
                  <div class="vertical-align-in-block">
                    <p class="payment-address"></p>
                    <p class="pubkey"></p>
                    <p class="dest-tag"></p>
                  </div>
                </div>
                <br>
              </div>
            </div>
            <br>
          </div>
            <div class="alert alert-dismissible alert-warning">Please make sure your deposit equals or exceeds the minimum purchase amount (at the current exchange rate.)</div>
          <p>Please note that your funds will appear in your account after 6 confirmations on our end which could be ~5 minutes behind yours.</p>
        </div>
        <br>
      </div>
      <div class="tab-pane fade in" id="LTC">
      <!--   <a href="javascript:void(0)" class="btn btn-raised get-address " data-code="LTC">Get Address for Payment</a> -->
    

      <div id="ltc" style="display:block">
      <form method="post" class="dep_form dep_form_ltc" action="<?php echo base_url();?>welcome/checkpayment/2">

	 <input class="inputwhite" type="text" name="ltcdepositamount" id="ltcdepositamount" value="" placeholder="Enter LTC Deposit Amount">
     <input class="inputgreen amount_ltc" type="text" value="" placeholder="USD Value (Auto Calculated)" disabled>
       <input type="submit" name="submit" value="Submit" class="btn btn-primary btn btn-info dep_but" id="submit-id-signup">
	   <b>Click Submit once then wait ~5 seconds for Address to generate below</b>
      </form>
      
	  <div style="font-size: 16px;color:red; text-transform:uppercase"> <b>
	  IMPORTANT! Please make sure you are sending the full amount of coin requested to the wallet, Sometimes withdrawing from exchanges require you to send more than needed to pay for fees! 
      <br>
	  </b>
	  </div><br>
	  </div>
	  
        <div>
          <div class="hide payment-block">
            <div class="row">
              <div class="col-md-4 col-xs-12 col-sm-12 text-center left">
                <p class="title"><b>Deposit funds by scanning below</b></p>
                <div class="text-center">
                  <center>
                    <div class="box quare-code">
                      
                    </div>
                  </center>
                </div>
              </div>
              <div class="col-md-8 text-center right">
                <p class="title"><b>Or Direct Deposit to</b></p>
                <div class="box">
                  <div class="vertical-align-in-block">
                    <p class="payment-address"></p>
                    <p class="pubkey"></p>
                    <p class="dest-tag"></p>
                  </div>
                </div>
                <br>
              </div>
            </div>
            <br>
          </div>
            <div class="alert alert-dismissible alert-warning">Please make sure your deposit equals or exceeds the minimum purchase amount (at the current exchange rate it is <span class="min-amount">0.0193572 LTC</span>)</div>
          <p>Please note that your funds will appear in your account after 6 confirmations on our end which could be ~5 minutes behind yours.</p>
        </div>
        <br>
      </div>
      <div class="tab-pane fade in" id="ETH">
       <!--  <a href="javascript:void(0)" class="btn btn-raised get-address " data-code="ETH">Get Address for Payment</a> -->
                       

         <div id="eth" style="display:block">
      <form method="post" class="dep_form dep_form_eth" action="<?php echo base_url();?>welcome/checkpayment/3">
	   <input class="inputwhite" type="text" name="ethdepositamount" id="ethdepositamount" value="" placeholder="Enter ETH Deposit Amount">
      <input class="inputgreen amount_eth" type="text" value="" placeholder="USD Value (Auto Calculated)" disabled>
       <input type="submit" name="submit"  value="Submit" class="btn btn-primary btn btn-info dep_but" id="submit-id-signup">
	     <b>Click Submit once then wait ~5 seconds for Address to generate below</b>
      </form>
	  
	  <div style="font-size: 16px;color:red; text-transform:uppercase"> <b>
	  IMPORTANT! Please make sure you are sending the full amount of coin requested to the wallet, Sometimes withdrawing from exchanges require you to send more than needed to pay for fees! 
      <br>
	  </b>
	  </div><br>
	  </div>
	  
        <div>
          <div class="hide payment-block">
            <div class="row">
              <div class="col-md-4 col-xs-12 col-sm-12 text-center left">
                <p class="title"><b>Deposit funds by scanning below</b></p>
                <div class="text-center">
                  <center>
                    <div class="box quare-code">
                      
                    </div>
                  </center>
                </div>
              </div>
              <div class="col-md-8 text-center right">
                <p class="title"><b>Or Direct Deposit to</b></p>
                <div class="box">
                  <div class="vertical-align-in-block">
                    <p class="payment-address"></p>
                    <p class="pubkey"></p>
                    <p class="dest-tag"></p>
                  </div>
                </div>
                <br>
              </div>
            </div>
            <br>
          </div>
            <div class="alert alert-dismissible alert-warning">Please make sure your deposit equals or exceeds the minimum purchase amount (at the current exchange rate it is <span class="min-amount">0.00349591 ETH</span>)</div>
          <p>Please note that your funds will appear in your account after 6 confirmations on our end which could be ~5 minutes behind yours.</p>
        </div>
        <br>
      </div>
</div>
            <br><br><br>
          </div>
          </div>
          <div id="qr">
          <div class="col-md-12 col-sm-12 qr_blk">
          <h2>Payment</h2>
<div class="qr_img">
<img src="https://chart.googleapis.com/chart?cht=qr&amp;chl=https%3A%2F%2Fmynecoin.com%2Fapp%2Fwelcome%2F&amp;chs=180x180&amp;choe=UTF-8&amp;chld=L|2" alt="qr code"><a href="http://www.qrcode-generator.de" border="0" style="cursor:default" rel="nofollow"></a>
</div>
    <div class="qr_cont">
        <div class="inp_box">
        <label>BTC Amount</label>
        <input type="text" name="btcamt" class="name" disabled>
        </div>
        <div class="inp_box">
        <label>Address</label>
        <input type="text" name="address" class="name" disabled>
        </div>
        <div class="inp_box">
        <label>Transaction ID</label>
        <input type="text" name="id" class="id" disabled>
        </div>
    </div>
</div></div>
          <!-- <div id="qr"></div> -->
          </div>
          </div>


                 <?php include 'footer.php' ?>
                 <script>
  function deposit()
  {
    var a=document.getElementById("btcdepositamount").value;
    var b=document.getElementById("amount").value;
	if(b>=20){
    $.ajax({
      type:"POST",
      url : "<?php echo base_url();?>welcome/checkpayment/1",
      data : {amount:a,cointype:'btc'},
      success : function(response) {
       
      document.getElementById("qr").innerHTML = response; 
      }
    });
	}else{
		alert("Minimum Deposit is $20.");
	}
  }
  $(document).ready(function(){
	$(".dep_form_ltc").submit(function(e){
		e.preventDefault();
		var a=$("#ltcdepositamount").val();
		var b=$(".amount_ltc").val();
		if(b>=20){
			$.post("<?php echo base_url();?>welcome/checkpayment/2",{amount:a,cointype:'ltc'},function(data){
				if(data){
					document.getElementById("qr").innerHTML = data; 
				}
			});
		}else{
			alert("Minimum Deposit is $20.");
		}
	});
	$(".dep_form_eth").submit(function(e){
		e.preventDefault();
		var a=$("#ethdepositamount").val();
		var b=$(".amount_eth").val();
		if(b>=20){
			$.post("<?php echo base_url();?>welcome/checkpayment/3",{amount:a,cointype:'eth'},function(data){
				if(data){
					document.getElementById("qr").innerHTML = data; 
				}
			});
		}else{
			alert("Minimum Deposit is $20.");
		}
	});
	$('#btcdepositamount').on('input',function(e){
	
	  var btcinp = $('#btcdepositamount').val();
		if(btcinp>0){
		  var price = $("#btcprice").attr("data-price");
		  var newprice = parseFloat(btcinp)*parseFloat(price);
		  $("#amount").val(newprice.toFixed(2));
	   }else{
		   $("#amount").val(0.00);
	   }
	});

	$('#ltcdepositamount').on('input',function(e){
	  var ltcinp = $('#ltcdepositamount').val();
		if(ltcinp>0){
	  var price = $("#ltcprice").attr("data-price");
	  var newprice = parseFloat(ltcinp)*parseFloat(price);
	  $(".amount_ltc").val(newprice.toFixed(2));
	   }else{
		   $(".amount_ltc").val(0.00);
	   }
	});

	$('#ethdepositamount').on('input',function(e){
	  var ethinp = $('#ethdepositamount').val();
		if(ethinp>0){
	  var price = $("#ethprice").attr("data-price");
	  var newprice = parseFloat(ethinp)*parseFloat(price);
	  $(".amount_eth").val(newprice.toFixed(2));
	   }else{
		   $(".amount_eth").val(0.00);
	   }
	});
  });
  </script>