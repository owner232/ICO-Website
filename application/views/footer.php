<!-- footer content -->
                <footer>
                    <div class="pull-right">
                        <a href="<?php echo $this->session->userdata('site_url'); ?>">
                    <?php echo $this->session->userdata('footer_content'); ?>
                       </a>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
            </div>
        </div>
        <?php $uri = end($this->uri->segment_array()); 
        if($uri!='geneology')
        {
        ?>

        <!-- jQuery -->
        <script src="<?php echo base_url(); ?>vendors/jquery/dist/jquery.min.js"></script>
        <?php
      }
      ?>
        <!-- Bootstrap -->
        <script src="<?php echo base_url(); ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="<?php echo base_url(); ?>vendors/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="<?php echo base_url(); ?>vendors/nprogress/nprogress.js"></script>
        <!-- Chart.js -->
        <script src="<?php echo base_url(); ?>vendors/Chart.js/dist/Chart.min.js"></script>
        <!-- gauge.js -->
        <script src="<?php echo base_url(); ?>vendors/gauge.js/dist/gauge.min.js"></script>
        <!-- bootstrap-progressbar -->
        <script src="<?php echo base_url(); ?>vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url(); ?>vendors/iCheck/icheck.min.js"></script>
        <!-- Skycons -->
         <!-- Datatables -->
        <script src="<?php echo base_url(); ?>vendors/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="<?php echo base_url(); ?>vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
        <script src="<?php echo base_url(); ?>vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="<?php echo base_url(); ?>vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="<?php echo base_url(); ?>vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
        <script src="<?php echo base_url(); ?>vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
        <script src="<?php echo base_url(); ?>vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?php echo base_url(); ?>vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
        <script src="<?php echo base_url(); ?>vendors/skycons/skycons.js"></script>
        <!-- Flot -->
        <script src="<?php echo base_url(); ?>vendors/Flot/jquery.flot.js"></script>
        <script src="<?php echo base_url(); ?>vendors/Flot/jquery.flot.pie.js"></script>
        <script src="<?php echo base_url(); ?>vendors/Flot/jquery.flot.time.js"></script>
        <script src="<?php echo base_url(); ?>vendors/Flot/jquery.flot.stack.js"></script>
        <script src="<?php echo base_url(); ?>vendors/Flot/jquery.flot.resize.js"></script>
        <!-- Flot plugins -->
        <script src="<?php echo base_url(); ?>vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
        <script src="<?php echo base_url(); ?>vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
        <script src="<?php echo base_url(); ?>vendors/flot.curvedlines/curvedLines.js"></script>
        <!-- DateJS -->
        <script src="<?php echo base_url(); ?>vendors/DateJS/build/date.js"></script>
        <!-- JQVMap -->
        <script src="<?php echo base_url(); ?>vendors/jqvmap/dist/jquery.vmap.js"></script>
        <script src="<?php echo base_url(); ?>vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
        <script src="<?php echo base_url(); ?>vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
        <!-- bootstrap-daterangepicker -->
        <script src="<?php echo base_url(); ?>vendors/moment/min/moment.min.js"></script>
        <script src="<?php echo base_url(); ?>vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

        <!-- Custom Theme Scripts -->
        <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>


    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
  
     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js"></script>
    <script src="https://cdn.jsdelivr.net/clipboard.js/1.5.12/clipboard.min.js"></script>

    <script type="text/javascript">
      jQuery(document).ready(function ($) {
      var clipboard = new Clipboard('#copyButtonId');
//alert(clipboard);
      clipboard.on('success', function(e) {
          console.log(e);
      document.getElementById("step").innerHTML ="copied";
     
      });
      clipboard.on('error', function(e) {
          console.log(e);
        
     
      });
    });




  $('#dropdown1').on('change', function() {

  
  $('#coin-price').val( $('#coin-amount').val()*$('#dropdown1').val());

    $('div#coin-total').html($('#coin-price').val());



});

function viewbtc()
{ 

  document.getElementById("item").className += " active";
     document.getElementById("item1").classList.remove('active');
    document.getElementById("item2").classList.remove('active');
     document.getElementById("item3").classList.remove('active');
    document.getElementById("btc").style.display="block";
    document.getElementById("ltc").style.display="none";
    document.getElementById("eth").style.display="none";
   document.getElementById("zec").style.display="none";
}
function viewltc()
{
    document.getElementById("item1").className += " active";
    document.getElementById("item").classList.remove('active');
     document.getElementById("item2").classList.remove('active');
     document.getElementById("item3").classList.remove('active');
    document.getElementById("ltc").style.display="block";
    document.getElementById("btc").style.display="none";
    document.getElementById("eth").style.display="none";
    document.getElementById("zec").style.display="none";
}
function vieweth()
{   document.getElementById("item2").className += " active";
document.getElementById("item1").classList.remove('active');
     document.getElementById("item").classList.remove('active');
     document.getElementById("item3").classList.remove('active');
    document.getElementById("eth").style.display="block";
      document.getElementById("ltc").style.display="none";
    document.getElementById("btc").style.display="none";
    document.getElementById("zec").style.display="none";
}
function viewzec()
{   document.getElementById("item3").className += " active";
     document.getElementById("item1").classList.remove('active');
     document.getElementById("item2").classList.remove('active');
     document.getElementById("item").classList.remove('active');
    document.getElementById("zec").style.display="block";
     document.getElementById("eth").style.display="none";
      document.getElementById("ltc").style.display="none";
    document.getElementById("btc").style.display="none";
}

var textareaval = $('#coins').val();
function outputTranslated()
{
    $('#buy-tokens-form').submit(function() {
       alert(textareaval);
    });
}

function validate()
{

 document.getElementById("totamount").disabled="false";
  var amount = document.getElementById("totamount").value;
  var cashtype = document.getElementById("cashtype").value;
  var min = document.getElementById("min").value;
  var max = document.getElementById("max").value;
  var maxsiltoxcoin = document.getElementById("maxsiltoxcoin").value;
  var a1 =parseFloat(amount);
  var a2 =parseFloat(max);
  if(a1 > a2) 
  {
    //document.getElementById("buy").disabled="true";
    //alert('The amount Should be in'+max);
    //return false;
  }
  if(a1 <= a2 && a1 > 0)
  {
   
    var amount = $("#totamount").val();
    var cashtype = $("#cashtype").val();
    $.ajax({
      type:"POST",
      url : "<?php echo base_url(); ?>welcome/newvalue",
      data : {amount:amount,cashtype:cashtype},
      success : function(response) {
       
	   var str = response;
	   var resp = str.trim();
	   
       if(resp=="yes"){
        //var data_amount = response;
        alert('Tokens successfully purchased!');
        location.reload();
      }
      else if(resp=="notokens")
      {
        alert('Not enough tokens remaining. Please wait for next round!');
      }
      else
      {
          alert('Sorry Tokens are not purchased');
      }
       
     },
    
  });

  }

  else
  {

    alert('Please add funds to your balance before purchasing!');
    return false;
  }


}













/*function validate()
{

var amount = document.getElementById("coins").value;
var cashtype = document.getElementById("cashtype").value;
var min = document.getElementById("min").value;
var max = document.getElementById("max").value;
var maxsiltoxcoin = document.getElementById("maxsiltoxcoin").value;
if(amount > max) 
{
  alert('The amount Should be in'+max);
}
if(amount >= maxsiltoxcoin)
{

    var amount = $("#coins").val();
    var cashtype = $("#cashtype").val();
    $.ajax({
        type:"POST",
        url : "<?php echo base_url(); ?>welcome/gettokenvalue",
        data : {amount:amount,cashtype:cashtype},
        success : function(response) {

          var data_amount = response;
          alert('Token has generated');
         // alert(data_amount);
       //document.getElementById("form-token-input-amount").innerHTML = response; 
         },
        error: function() {
            alert('error');
        }
    });

}

else
{

alert('Coin amount does not exists');
}


}*/

/*document.getElementById("buy-tokens-form").onsubmit = function() 
 {
var amount = document.getElementById("coins").value;
var min = document.getElementById("min").value;
var max = document.getElementById("max").value;
if(max > amount) 
{
  alert('Please enter correct amount');
}
else if(min < 0)
{

alert('Dont exit the limit');

}

 }*/


$('#dropdown2').change(function() {
    var data = "";
    $.ajax({
        type:"POST",
        url : "<?php echo base_url() ?>welcome/cashtype",
        data : "cashtype="+$(this).val(),
        async: false,
        success : function(response) {

       document.getElementById("form-token-input-amount").innerHTML = response; 
       calculation();
         },
        error: function() {
            alert('Error occured');
        }
    });
   
});

 



function myFunction() {
    var x = document.getElementById("confirm-password").value;
    var y = document.getElementById("password").value;

    if(x!=y)
    {
        alert("password and confirmpassword no matched");
        return false;
    }
}

$(document).ready(function(){
	$("#buyall").click(function(){
		var newval = $("#coins1").val()/$("#checkamount").val();
		$("#noftoken").val(newval.toFixed(8));
		calculation();
	});
});


</script>


  <script type="text/javascript">
            $(function() {

    $('#login-form-link').click(function(e) {
        $("#login-form").delay(100).fadeIn(100);
        $("#register-form").fadeOut(100);
        $('#register-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
    $('#register-form-link').click(function(e) {
        $("#register-form").delay(100).fadeIn(100);
        $("#login-form").fadeOut(100);
        $('#login-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });

});
</script>




    
</html>