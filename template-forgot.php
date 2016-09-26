<div class="bonuin_login">
         <img src="<?php echo get_template_directory_uri().'/assets/images/logofooter.png';?>">
        <h1>Please type your email address to reset your password</h1>
            <form id="forgot_password" class="ajax-auth login_form" action="forgot_password" method="post">
				<p class="status"></p>
				<?php wp_nonce_field('ajax-forgot-nonce', 'forgotsecurity'); ?>  
                <fieldset>
                    <div class="icon">
                        <i class="tomplabs-mail-1"></i>
                    </div>
                    <input type="email" class="bonuin_input" placeholder="Email address" name="user_login" id="user_login" required>
                </fieldset>
                
                
                <button type="submit" class="bonuin_button1">RESETO FJALEKALIMIN</button>
                <ul class="list-inline login_footer_links">
                    <li class="pull-left"><a href="" data-remodal-target="login">Login</a></li>
                    <li class="pull-right"><a href="" data-remodal-target="register">Don't have account?<span> Create one.</span></a></li>
                </ul>
            </form>  
    
    </div>