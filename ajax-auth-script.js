jQuery(document).ready(function ($) {
    // Perform AJAX login/register on form submit
	jQuery('form#login, form#register').on('submit', function (e) {
        //if (!jQuery(this).valid()) return false;
        jQuery('p.status', this).show().text(ajax_auth_object.loadingmessage).addClass('login_register_message');
		action = 'ajaxlogin';
		username = 	jQuery('form#login #username').val();
		password = jQuery('form#login #password').val();
		email = '';
		security = jQuery('form#login #security').val();
		if (jQuery(this).attr('id') == 'register') {
			action = 'ajaxregister';
			username = jQuery('#client_username').val();
			password = jQuery('#client_password').val();
        	email = jQuery('#client_email').val();
        	security = jQuery('#signonsecurity').val();	
		}  
		ctrl = jQuery(this);
		jQuery.ajax({
            type: 'POST',
            dataType: 'json',
            url: ajax_auth_object.ajaxurl,
            data: {
                'action': action,
                'username': username,
                'password': password,
				'email': email,
                'security': security
            },
            success: function (data) {
				jQuery('p.status', ctrl).text(data.message).addClass('login_register_message');
				if (data.loggedin == true) {
                    document.location.href = ajax_auth_object.redirecturl;
                }
            }
        });
        e.preventDefault();
    });
	
	
	
	jQuery('form#forgot_password').on('submit', function(e){
		//if (!jQuery(this).valid()) return false;
		jQuery('p.status', this).show().text(ajax_auth_object.loadingmessage);
		ctrl = jQuery(this);
		$.ajax({
			type: 'POST',
            dataType: 'json',
            url: ajax_auth_object.ajaxurl,
			data: { 
				'action': 'ajaxforgotpassword', 
				'user_login': jQuery('#user_login').val(), 
				'security': jQuery('#forgotsecurity').val(), 
			},
			success: function(data){					
				jQuery('p.status',ctrl).text(data.message);				
			}
		});
		e.preventDefault();
		return false;
	});
	
	
	
});