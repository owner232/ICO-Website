$(document).ready(function() {	
	$('#activate_form').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
             one_code: {
                validators: {
                    notEmpty: {
                        message: 'Activate Code is required'
                    },

                     stringLength: {
                        min: 6,
                        max: 6,
                        message: 'Activate Code Must be 6 digits'
                    },                    
                }
            },                   
           }
        }).on('success.form.bv', function(e) {
          e.preventDefault();
             $.post(base_url+'welcome/enable_tfa',$('#activate_form').serialize(), function(data){

                if(data=='Enable')
                {
                      $('#success_Msg').html('2FA has been Activated').css('color', 'green');
                     setTimeout(function(){
                      window.location.href=base_url+"welcome/changepassword";
                        //location.reload();
                    }, 2000);
                 }
                 else if(data=='disable')
                 {
                    $('#success_Msg').html('2FA has been Disabled').css('color', 'green');
                    setTimeout(function(){
                      window.location.href=base_url+"welcome/changepassword";
                      //location.reload();
                    }, 2000);
                      
                 }
                 else
                 {                            
                    $('#error_Msg').html("Invalid 2FA Code").css('color', 'red');
                  }
                 }, 'json'); 

      });

  });
// login check
      $('#login_from').bootstrapValidator({    
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
             email: {
                validators: {
                    notEmpty: {
                        message: 'Email Id is required'
                    },
                    emailAddress: {
                      message: 'Please enter valid email address'
                    }                      
                  }
              },
             password: {
                validators: {
                    notEmpty: {
                        message: 'Password is required'
                    },
                    callback: {
                            message: 'Password must have minimum 8 characters at least 1 Alphabet, 1 Number and 1 Special Character',
                            callback: function (value, validator, $field) {
                                if(value.trim() == '')
                                return true;
                                else
                                return (/^(?=.*[A-Za-z])(?=.*\d)(?=.*[$@$!%*#?&])[A-Za-z\d$@$!%*#?&]{8,}$/.test(value));
                            }
                    },                    
                }
            },                   
           }
    }).on('success.form.bv', function(e) {
         e.preventDefault();
          var action_url              = base_url+'login/login_status';
            var form_serialize_datas    = $('#login_from').serialize();
             var form_name               = 'login_from';
             $('#buution_log').hide();
             $('#login_loading').show();
             $.post(base_url+'login/login_status',$('#login_from').serialize(), function(data){
                 if(data =='success'){
                    $('.ajax-messages-error').html("Successfully logged In").css('color', 'green');
                        setTimeout(function(){
                        window.location.href= base_url+'dashboard';
                        //location.reload();
                        }, 2000);
                 }
                 else if(data =='active')
                 {
                    $('.ajax-messages-error').html("Successfully logged In").css('color', 'green');
                        setTimeout(function(){
                        window.location.href= base_url+'dashboard';
                        //location.reload();
                        }, 2000);
                 }
                 else if(data=='failed')
                 {
                      $('.ajax-messages-error').html("Email Id or Password is Incorrect").css('color', 'red');
                $('#login_loading').hide();
                $('#buution_log').show();
                 }
                 else if(data=='enable')
                 {

                    localStorage.setItem('tfa_action_url',action_url);
                    localStorage.setItem('tfa_form_name',form_name);
                    //$('#login').modal('hide');
                    $('#twofactor').modal('show');

                 }
                  else if(data=='deactive')
                      {
            $('.ajax-messages-error').html("Your Account is deactive.Please Contact Admin").css('color', 'red');
                          $('#login_loading').hide();
        $('#buution_log').show();
                       }
                   else if(data=='enter_valid')
                   {
                    alert("enter valid code");
                   }
                   else
                   {
                      $('.ajax-messages-error').html("Enter a valid login details").css('color', 'red');
                   }
                 }, 'json');

            
     }); 


// TFA
       $('#twofactor_from').bootstrapValidator({  
         feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            onecode: {
                validators: {
                    notEmpty: {
                        message: 'Authentication Code is Required'
                    },
                    digits: {
                        message: 'The Authentication Code can contain digits only'
                    },
                    stringLength: {
                        min: 6,
                        max: 6,
                        message: 'The Authentication Code must be 6 digits long'
                    }
                }
            }
        },
        onSuccess:(function(e, data) {
            e.preventDefault();
            var action_url          = localStorage.getItem('tfa_action_url');
            var tfa_pre_form_name   = localStorage.getItem('tfa_form_name');
            var pre_form_values     = $('#'+tfa_pre_form_name).serialize();
            var tfa_form_values     = $('#twofactor_from').serialize();
            $.post( action_url, pre_form_values+'&'+tfa_form_values, function(res) {
                    console.log(res);
                    if(res=="enter_valid")
                    {
                        $('#auth_error_log').html('Enter correct Authentication code').css('color','red');
                    }
                    else if(res =='success'){
                    $('#auth_error_logr').html("Successfully logged In").css('color', 'green');
                        setTimeout(function(){
                        window.location.href= base_url+'dashboard';
                        //location.reload();
                        }, 2000);
                 }                 
            }, 'json' ).fail(function() {
            });   
        })  
    });
