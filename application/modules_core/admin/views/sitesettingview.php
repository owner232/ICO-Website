   <?php include_once 'header.php'; ?>
<div id="page-wrapper">
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-10">
            <h5> SITE SETTINGS </h5>
                <form method="post" enctype="multipart/form-data" action="<?php echo base_url();?>admin/sitesettings/updatesitesetting">
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
                        <input type='hidden' name='csrfmiddlewaretoken' value='XFe2rTYl9WOpV8U6X5CfbIuOZOELJ97S' />
                        <div id="div_id_username" class="form-group required">
                            <label for="id_username" class="control-label col-md-4  requiredField">Sitename<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                            <?php $name=$this->sitesettingmodel->showsitesettings('site_name'); ?>
                                <input class="input-md  textinput textInput form-control" value="<?php echo $name;?>" id="id_username" name="name" placeholder="Choose your username" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <div id="div_id_username" class="form-group required">
                            <label for="id_username" class="control-label col-md-4  requiredField">SiteUrl<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                             <?php $url=$this->sitesettingmodel->showsitesettings('site_url'); ?>
                                <input class="input-md  textinput textInput form-control" value="<?php echo $url;?>" id="id_username" name="url" placeholder="Choose your username" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <div id="div_id_email" class="form-group required">
                            <label for="id_email" class="control-label col-md-4  requiredField"> E-mail<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                             <?php $email=$this->sitesettingmodel->showsitesettings('admin_email'); ?>
                                <input class="input-md emailinput form-control" id="id_email" value="<?php echo $email;?>" name="email" placeholder="Your current email address" style="margin-bottom: 10px" type="email" />
                            </div>     
                        </div>
                        <div id="div_id_password1" class="form-group required">
                            <label for="id_password1" class="control-label col-md-4  requiredField">Admin logo<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 "> 
                              <?php $admin=$this->sitesettingmodel->showsitesettings('admin_sitelogo'); ?>
                             <img data-src="" src="<?php echo base_url().$admin;?>" class="img-responsive" alt="gallery 3" width="200px" height="200px">
                            <input type="file" name="adminlogo" value="<?php echo $admin;?>" style="margin-bottom: 10px">
                             <input type="hidden" name="adminlogoold" value="<?php echo $admin;?>">
                                
                            </div>
                        </div>
                        <div id="div_id_password2" class="form-group required">
                             <label for="id_password2" class="control-label col-md-4  requiredField">User logo<span class="asteriskField">*</span> </label>
                             <div class="controls col-md-8 ">
                              <?php $user=$this->sitesettingmodel->showsitesettings('user_sitelogo'); ?>
                               <img data-src="" src="<?php echo base_url().$user;?>" class="img-responsive" alt="userlogo" width="200px" height="200px">    
                             <input type="file" name="userlogo" value="<?php echo $user;?>" style="margin-bottom: 10px">
                             <input type="hidden" name="userlogoold" value="<?php echo $user;?>">
                            </div>
                        </div>
      
                        
                        <div id="div_id_company" class="form-group required"> 
                            <label for="id_company" class="control-label col-md-4  requiredField"> Meta title<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 "> 
                               <?php $title=$this->sitesettingmodel->showsitesettings('meta_title'); ?>
                                 <input class="input-md textinput textInput form-control" value="<?php echo $title;?>" id="id_company" name="metatitle" placeholder="your company name" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div> 
                        <div id="div_id_catagory" class="form-group required">
                            <label for="id_catagory" class="control-label col-md-4  requiredField"> Meta description<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 "> 
                             <?php $description=$this->sitesettingmodel->showsitesettings('meta_description'); ?>
                                 <input class="input-md textinput textInput form-control" id="id_catagory" value="<?php echo $description;?>" name="description"  placeholder="skills catagory" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div> 
                        <div id="div_id_number" class="form-group required">
                             <label for="id_number" class="control-label col-md-4  requiredField"> Meta key<span class="asteriskField">*</span> </label>
                             <div class="controls col-md-8 ">
                              <?php $key=$this->sitesettingmodel->showsitesettings('meta_key'); ?>
                                 <input class="input-md textinput textInput form-control" id="id_number" value="<?php echo $key;?>" name="key" placeholder="provide your number" style="margin-bottom: 10px" type="text" />
                            </div> 
                        </div> 
                        <div id="div_id_number" class="form-group required">
                             <label for="id_number" class="control-label col-md-4  requiredField"> Coin Currency (Abbr)<span class="asteriskField">*</span> </label>
                             <div class="controls col-md-8 ">
                              <?php $key=$this->sitesettingmodel->showsitesettings('current_currency_coin'); ?>
                                 <input class="input-md textinput textInput form-control" id="id_number" value="<?php echo $key;?>" name="coinabbr" placeholder="provide your number" style="margin-bottom: 10px" type="text" />
                            </div> 
                        </div> 
                        <div id="div_id_number" class="form-group required">
                             <label for="id_number" class="control-label col-md-4  requiredField"> Coin Wallet URL </label>
                             <div class="controls col-md-8 ">
                              <?php $key=$this->sitesettingmodel->showsitesettings('wallet_dllink'); ?>
                                 <input class="input-md textinput textInput form-control" id="id_number" value="<?php echo $key;?>" name="wallet_dllink" placeholder="provide your number" style="margin-bottom: 10px" type="text" />
                            </div> 
                        </div> 
                        <div id="div_id_number" class="form-group required">

                             <label for="id_number" class="control-label col-md-4  requiredField">Copyright<span class="asteriskField">*</span> </label>
                             <div class="controls col-md-8 ">
                             <?php $copyright=$this->sitesettingmodel->showsitesettings('footer_content'); ?>
                                 <textarea name="copyright" rows="10" class="form-control"  minlength="30" required="" aria-required="true" value=""><?php echo $copyright;?></textarea>
                            </div> 
                        </div> 

                        <div id="div_id_number" class="form-group required">

                             <label for="id_number" class="control-label col-md-4  requiredField">Welcome Message<span class="asteriskField">*</span> </label>
                             <div class="controls col-md-8 ">
                             <?php $token_content=$this->sitesettingmodel->showsitesettings('token_content'); ?>
                                 <textarea name="token_content" rows="10" class="form-control"  required="" aria-required="true">
                                 <?php echo $token_content;?>
                                 </textarea>
                            </div> 
                        </div>

                        <div id="div_id_number" class="form-group required">

                             <label for="id_number" class="control-label col-md-4  requiredField">Referral content<span class="asteriskField">*</span> </label>
                             <div class="controls col-md-8 ">
                             <?php $referal_content=$this->sitesettingmodel->showsitesettings('referal_content'); ?>
                                 <textarea name="referal_content" rows="10" class="form-control"  required="" aria-required="true">
                                 <?php echo $referal_content;?>
                                 </textarea>
                            </div> 
                        </div>

                       
                        <div class="form-group"> 
                            <div class="aab controls col-md-4 "></div>
                            <div class="controls col-md-8 ">
                                <input type="submit" name="submit" value="Save Changes" class="btn btn-primary btn btn-info" id="submit-id-signup" />
                                
                            </div>
                        </div> 
                            
                    </form>

              
            </div>
        </div>
            
        </div></div>
           <?php include_once 'footer.php'; ?>