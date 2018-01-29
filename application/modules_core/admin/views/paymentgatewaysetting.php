 <?php include_once 'header.php'; ?>
 <div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10">
                <h5> Payment Gateway Settings </h5>
                
                <input type='hidden' name='csrfmiddlewaretoken' value='XFe2rTYl9WOpV8U6X5CfbIuOZOELJ97S' />
                <form  class="form-horizontal" method="post" action="<?php echo base_url();?>admin/payment/insertpaymentsettings" >
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
                <input type='hidden' name='csrfmiddlewaretoken' value='XFe2rTYl9WOpV8U6X5CfbIuOZOELJ97S' />
                
                <div id="div_id_username" class="form-group required">
                    <label for="id_username" class="control-label col-md-4  requiredField"> Payment Mode<span class="asteriskField">*</span> </label>
                    <div class="controls col-md-8 ">
                        <input class="input-md  textinput textInput form-control" id="id_username" maxlength="30" name="username" value="coin payment"  style="margin-bottom: 10px" type="text" disabled/>
                    </div>
                </div>
                <div id="div_id_email" class="form-group required">
                    <label for="id_email" class="control-label col-md-4  requiredField">Public Key<span class="asteriskField">*</span> </label>
                    <div class="controls col-md-8 ">
                        <input class="input-md emailinput form-control" id="id_email" name="public" value="<?php echo $payment[0]->public_key;?>" placeholder="Public Key" style="margin-bottom: 10px" type="text" />
                    </div>     
                </div>
                <div id="div_id_password1" class="form-group required">
                    <label for="id_password1" class="control-label col-md-4  requiredField">Private Key<span class="asteriskField">*</span> </label>
                    <div class="controls col-md-8 "> 
                        <input class="input-md textinput textInput form-control" id="id_password1" value="<?php echo $payment[0]->private_key;?>" name="private" placeholder="Private Key" style="margin-bottom: 10px" type="text" />
                    </div>
                </div>
                <h5> <?php echo $site_name;?> Settings  </h5> 
                
                <div id="div_id_number" class="form-group required">
                   <label for="id_number" class="control-label col-md-4  requiredField">Your Coin price in USD<span class="asteriskField">*</span> </label>
                   <div class="controls col-md-2 ">
                       <input class="input-md textinput textInput form-control" id="id_number" value="<?php echo $btc[0]->currency_rate;?>" name="btc" placeholder="rate" style="margin-bottom: 10px" type="text" />
                   </div> 
                  
               </div> 
              
                <h5> <?php echo $site_name;?> Token Settings  </h5> 
                
               
                <div id="div_id_number" class="form-group required">
                   <label for="id_number" class="control-label col-md-4  requiredField">1 Token points<span class="asteriskField">*</span> </label>
                   <div class="controls col-md-2 ">
                       <input class="input-md textinput textInput form-control" id="id_number" value="<?php echo $tokenpoints[0]->token_value;?>" name="tokenpoints" placeholder="points" style="margin-bottom: 10px" type="text" />
                   </div> 
                  
               </div> 

                <div id="div_id_number" class="form-group required">
                   <label for="id_number" class="control-label col-md-4  requiredField">Limit BTC Deposit<span class="asteriskField">*</span> </label>
                   <div class="controls col-md-2 ">
                       <input class="input-md textinput textInput form-control" id="id_number" value="<?php echo $btclimit[0]->token_value;?>" name="btcdepositlimit" placeholder="points" style="margin-bottom: 10px" type="text" />
                   </div> 
                  
               </div> 

                 
               <div class="form-group"> 
                <div class="aab controls col-md-4 "></div>
                <div class="controls col-md-8 ">
                    <input type="submit" name="submit" value="Submit" class="btn btn-primary btn btn-info" id="submit-id-signup" />
                    
                </div>
            </div> 
			
                <h5> <?php echo $rpcset[0]->coin;?> RPC Settings  </h5> 
                
               
                <div id="div_id_number" class="form-group required">
                   <label for="id_number" class="control-label col-md-4  requiredField">RPC Host </label>
                   <div class="controls col-md-2 ">
                       <input class="input-md textinput textInput form-control" id="id_number" value="<?php echo $rpcset[0]->rpchost;?>" name="rpchost" placeholder="Host" style="margin-bottom: 10px" type="text" />
                   </div> 
                  
               </div> 
                <div id="div_id_number" class="form-group required">
                   <label for="id_number" class="control-label col-md-4  requiredField">RPC Port </label>
                   <div class="controls col-md-2 ">
                       <input class="input-md textinput textInput form-control" id="id_number" value="<?php echo $rpcset[0]->rpcport;?>" name="rpcport" placeholder="Port" style="margin-bottom: 10px" type="text" />
                   </div> 
                  
               </div> 
			   
                <div id="div_id_email" class="form-group required">
                    <label for="id_email" class="control-label col-md-4  requiredField">RPC User<span class="asteriskField">*</span> </label>
                    <div class="controls col-md-8 ">
                        <input class="input-md emailinput form-control" id="id_email" name="rpcuser" value="<?php echo $rpcset[0]->rpcuser;?>" placeholder="RPCUser" style="margin-bottom: 10px" type="text" />
                    </div>     
                </div>
                <div id="div_id_password1" class="form-group required">
                    <label for="id_password1" class="control-label col-md-4  requiredField">RPC Pass<span class="asteriskField">*</span> </label>
                    <div class="controls col-md-8 "> 
                        <input class="input-md textinput textInput form-control" id="id_password1" value="<?php echo $rpcset[0]->rpcpass;?>" name="rpcpass" placeholder="RPCPass" style="margin-bottom: 10px" type="text" />
                    </div>
                </div>

                 
               <div class="form-group"> 
                <div class="aab controls col-md-4 "></div>
                <div class="controls col-md-8 ">
                    <input type="submit" name="submit" value="Submit" class="btn btn-primary btn btn-info" id="submit-id-signup" />
                    
                </div>
            </div> 
            
        </form>

        
    </div>
</div>

</div></div>
<?php include_once 'footer.php'; ?>