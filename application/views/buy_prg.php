<?php include 'header.php' ?>


<!-- breadcrumb -->
<div class="breadcrumb_content">
  <div class="breadcrumb_text"><h3>Buy <?PHP echo $coinname; ?> Coins</h3>
  </div>
</div>
<!-- /breadcrumb -->

<div class="right_col bg_fff" role="main">
  <div class="row top_tiles">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 referral buy_prg">


      <div class="panel-body">

<!--               <h2>Buy MYC tokens</h2>
-->              <form id="buy-tokens-form" class="buy-tokens-form" onsubmit="ga('send','event','CrowdSale_Token_Buy','submit');" role="form">
<div class="alert alert-dismissible alert-warning dep">Please make a deposit first to buy coins.</div>

<div id="tokens-form-wrap" class="row">
 
  
  <div class="col-md-12 col-sm-12 col-xs-12 calc">
  <h4>Buy <?PHP echo $coinname; ?></h4>
 
 <div class="fieldd">
  <div class="pay">
    <label>PAY WITH</label>
    <div class="list-currency">
      <select class="" type="button" data-toggle="dropdown"  id="dropdown2" readonly>
        <option value="">Select</option>
        <?php //foreach($currency as $cur) {?>
        <option value="<?php echo "BTC";?>" ><?php echo "BTC Wallet";?></option>
		<option value="<?php echo "LTC";?>" ><?php echo "LTC Wallet";?></option>
		<option value="<?php echo "ETH";?>" ><?php echo "ETH Wallet";?></option>
        <?php // }?>
      </select>
    </div>
  </div>
  </div>
 
  <div class="fieldd">
<div id="form-token-input-amount" class="amnt">
  <div class="input-group input-amount">
    <span class="input-group-btn">

    </span>
    <label>Wallet Balance(USD)</label>
    <input  class="input-number coin-amount"  name="coins" type="text" value="$">
    <input type="hidden" name="max" value="">
    <input type="hidden" name="min" value="">
    <input type="hidden" name="cashtype" id="cashtype" value="">
    <span class="input-group-btn">

    </span>
  </div>
</div>
</div>
  
 <div class="fieldd">
    <label>ICO USD Price</label>
   <input  class="input-number" id="checkamount" placeholder="Token Price" name="amount" type="text" value="<?php echo $current['currency_value'];?>" disabled>
 </div> 
 
   <div class="fieldd">
    <label><?PHP echo $coinname; ?> Coins to Purchase</label><br>
	<a href="#" id="buyall" style="color:green;font-weight:bold">Buy Max</a>
   <input  class="input-number" id="noftoken" placeholder="Quantity" name="token" type="text" value="50" onblur="calculation();"></div>
   
   

  <div class="fieldd" style="">
    <label>Total USD Equivalent</label>
 <input  class="input-number" id="totamount" placeholder="Total Amount" name="amount" style="display: nonetype="text" value="" disabled>
 </div> 
 
<div class="col-md-12 col-sm-12 col-xs-12 calc1">
<p>Minimum Purchase of 50 Coins required followed by increments of 10. Example: 60, 70, etc.</p>
</div>

  

 </div>

 

<div id="bonus-amount-box" class="col-md-3 col-xs-12" style="display: none;">
  <p><span class="coins-bonus">0</span></p>
</div>
<div id="total-price-box" class="col-md-4 col-xs-12">
  <div class="buy-form-user-deposits"></div>
  <div class="price-box-separator"></div>
  <p><span class="coin-price"></span> <span class="coin-price-currency"></span></p>
</div>

<div class="col-md-12 row-delimiter"></div>

<div id="form-token-promocode-current-box" class="col-xs-12 col-md-7" style="display: none">
  <p><span class="current-promocode"></span></p>
</div>
</div>


<div class="divider"></div>
<div class="row">
  <div class="col-xs-12">
      <div class="col-xs-12"><button type="button" id="buy1" class="btn btn-primary btn-raised btn-block buy-now" onclick="validate();" disabled>BUY NOW</button></div>
      <button type="button" id="buy" class="btn btn-primary btn-raised btn-block buy-now" onclick="validate();" style="display: none">BUY NOW</button></div>
</div>
</form>


</div>

</div>
</div>
</div>
<script>
  function calculation()
  {
    var a=document.getElementById("noftoken").value;
    $.ajax({
      type:"POST",
      url : "<?php echo base_url(); ?>welcome/checkvolume",
      //data : {amount:amount,cashtype:cashtype},
      success : function(response) {
      
	   var str = response;
	   var resp = str.trim();
       if(resp=="yes"){
        var s=a%10;
         if(s!=0)
         {
          alert("Your token should be multiple of 10");
          return false;
         }
         else
         {
           var b=document.getElementById("checkamount").value;
           var c=a*b;
		   c.toFixed(8);
            document.getElementById("totamount").value=c;
            var g = parseFloat(document.getElementById("totamount").value);
			document.getElementById("totamount").value = g.toFixed(8);
            //document.getElementById("coins1").disabled="false";
             var max = document.getElementById("max").value;
             var amount = document.getElementById("totamount").value;
              //var max = document.getElementById("max").value;
             var a1 =parseFloat(amount);
             var a2 =parseFloat(max);
             if(a1<=a2)
             {
				 console.log('enter');
              document.getElementById("buy1").style.display="none";
              document.getElementById("buy").style.display="block";
             }
             else
             {
				 console.log('ente2');
              document.getElementById("buy1").style.display="block";
              document.getElementById("buy").style.display="none";
             }
         }
      }
      else if(resp=="no")
      {
        if(a<50)
         {
           alert("Minimum of token should be 50 for first purchase tokens");
           return false;
         }
         else
         {
           var b=document.getElementById("checkamount").value;
           var c=a*b;
		   c.toFixed(8);
            document.getElementById("totamount").value=c;
            var g = parseFloat(document.getElementById("totamount").value);
			document.getElementById("totamount").value = g.toFixed(8);
            //document.getElementById("coins1").disabled="false";
            var max = document.getElementById("max").value;
             var amount = document.getElementById("totamount").value;
           
             var a1 =parseFloat(amount);
             var a2 =parseFloat(max);
             if(a1<=a2)
             {
              document.getElementById("buy1").style.display="none";
              document.getElementById("buy").style.display="block";
             }
              else
             {
                 document.getElementById("buy1").style.display="block";
              document.getElementById("buy").style.display="none";
             }
         }
      }
    }
    });
   

  }

</script>
<?php include 'footer.php' ?>
