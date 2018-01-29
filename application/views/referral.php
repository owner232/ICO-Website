<?php include 'header.php' ?>

<!-- breadcrumb -->
                <div class="breadcrumb_content">
                    <div class="breadcrumb_text"><h3>Referral Link</h3>
                    </div>
                </div>
                <!-- /breadcrumb -->

<div class="right_col bg_fff" role="main">
<div class="row top_tiles">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 referral top_links">

        <div class="ref_link">

       <!--   <form class="refer-link">
            <div class="box">
              <p id="refer-link-box" > 
              <input type="text" class="referal" value="<?php echo base_url();?>register/registerref/<?php echo $profile[0]->member_refcode;?>" id="copy" readonly="true;"></p>
            </div>
            <button type="button" href="javascript:;" id="copyButtonId"  class="btn-inputRight btn-copy btn-copy-0" data-clipboard-action="copy" data-clipboard-target="#copy"><p id="step">Copy link</p></button>
            
        </form> -->
          <form id="">
         <input type="text" class="referal" value="<?php echo base_url();?>register/registerref/<?php echo $profile[0]->member_refcode;?>" id="copy" readonly="true;">
                <button  type="button" href="javascript:;" id="copyButtonId"  class="btn-inputRight btn-copy btn-copy-0" data-clipboard-action="copy" data-clipboard-target="#copy" class="submit">Copy</button>
        </form>
<!--                         <div class="pdf"><a href="">Whitepaper(PDF)</a></div>
 -->
        <?php echo $referal_content;?>
        </div>
     

      </div>
      </div>
      </div>

       <?php include 'footer.php' ?>
        