<div class="bonuin_login">
          <img src="<?php echo get_template_directory_uri().'/assets/images/logofooter.png';?>">
        <h1>Please fill the fields below to create your account</h1>
            <form id="register" class="ajax-auth login_form"  action="register" method="post" >
				<p class="status"></p>
                <?php wp_nonce_field('ajax-register-nonce', 'signonsecurity'); ?>  
				<fieldset>
                    <div class="icon">
                        <i class="tomplabs-envelope"></i>
                    </div>
                    <input type="email" class="bonuin_input" placeholder="Your email address" name="client_email" id="client_email" required>
                </fieldset>
                <fieldset>
                    <div class="icon">
                        <i class="tomplabs-social"></i>
                    </div>
                    <input type="text" class="bonuin_input" placeholder="Your name" name="client_name" id="client_name" required>
                </fieldset>
                <fieldset>
                    <div class="icon">
                        <i class="tomplabs-social"></i>
                    </div>
                    <input type="text" class="bonuin_input" placeholder="Username" name="client_username" id="client_username" required>
                </fieldset>
                <fieldset>
                    <div class="icon">
                        <i class="tomplabs-locked-1"></i>
                    </div>
                    <input type="password" class="bonuin_input" placeholder="Password" name="client_password" id="client_password" required >
                </fieldset>
                <fieldset>
                    <div class="icon">
                        <i class="tomplabs-locked-1"></i>
                    </div>
                    <input type="password" class="bonuin_input" placeholder="Confirm Password" name="client_confirm_password" id="client_confirm_password" required>
                </fieldset>
                <button type="submit" class="bonuin_button1">Create Account</button>
                <ul class="list-inline login_footer_links">
                    <li class="pull-left"><a href="" data-remodal-target="forget_password">Forget password?</a></li>
                    <li class="pull-right"><a href="" data-remodal-target="login">Have account?<span> Login.</span></a></li>
                </ul>
            </form>  
    
    </div>