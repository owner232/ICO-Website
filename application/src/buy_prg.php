<?php include 'header.php' ?>


<!-- breadcrumb -->
                <div class="breadcrumb_content">
                    <div class="breadcrumb_text"><h3>Buy PRG Tokens</h3>
                    </div>
                </div>
                <!-- /breadcrumb -->

<div class="right_col bg_fff" role="main">
<div class="row top_tiles">
<div class="animated flipInY col-lg-12 col-md-12 col-sm-12 col-xs-12 referral buy_prg">


<div class="panel-body">

              <h2>Buy PRG tokens</h2>
              <form id="buy-tokens-form" class="buy-tokens-form" onsubmit="ga('send','event','CrowdSale_Token_Buy','submit');" role="form">
    <div class="alert alert-dismissible alert-warning">Please make a deposit first to buy tokens.</div>

  <div id="tokens-form-wrap" class="row">
    <div class="col-xs-12 form-token-label"><label>PAY WITH</label></div>
    <div class="col-md-5 col-xs-12">
      <div class="list-currency">
<select>
<option>No coins yet</option>
<option>No coins yet</option>
<option>No coins yet</option>
</select>
      </div>
    </div>
    <div class="col-md-7 col-xs-12">
      <div class="radio">
      <label><input name="leval" type="radio">Spend all funds in your account to buy tokens</label>
    </div>

        </div>
    <div id="form-token-label-amount" class="col-md-5 col-xs-12 form-token-label"><label>AMOUNT</label></div>
    <div id="form-token-label-bonus" class="col-md-3 col-xs-12 form-token-label" style="display: none;">
      <label>BONUS</label>
    </div>
    <div id="form-token-label-total" class="col-md-4 col-xs-12 form-token-label"><label>TOTAL PRICE</label></div>

    <div id="form-token-input-amount" class="col-md-5 col-xs-12">
      <div class="input-group input-amount">
        <span class="input-group-btn">
          <button type="button" class="btn btn-default btn-number" id="btn-minus" data-type="minus" data-field="quant[1]" disabled="disabled">
            <span class="glyphicon glyphicon-minus"></span>
          </button>
        </span>
        <input name="quant[1]" class="input-number coin-amount" disabled="disabled" type="text">
        <span class="input-group-btn">
            <button type="button" class="btn btn-default btn-number" id="btn-plus" data-type="plus" data-field="quant[1]" disabled="disabled">
              <span class="glyphicon glyphicon-plus"></span>
            </button>
        </span>
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

    <div id="add-promotional-code-label" class="col-xs-12 col-md-12">
      <label>ADD PROMO CODE</label>
    </div>
    <div id="active-promotional-code-label" class="col-xs-12 col-md-7" style="display: none">
      <label>ACTIVE PROMO CODE</label>
    </div>
    <div id="form-token-promocode-box" class="col-xs-12 col-md-12">
      <div class="promo-code-form">
          <input id="input-form-token-promocode" type="text">
        <button type="button" id="btn-token-promocode-add" class="btn">add</button>
      </div>
    </div>
    <div id="form-token-promocode-current-box" class="col-xs-12 col-md-7" style="display: none">
      <p><span class="current-promocode"></span></p>
    </div>
  </div>


  <div class="divider"></div>
  <div class="row">
    <div class="col-xs-12"><button type="button" class="btn btn-primary btn-raised btn-block buy-now" disabled="disabled">BUY NOW</button></div>
  </div>
</form>


            </div>

             </div>
      </div>
      </div>

       <?php include 'footer.php' ?>