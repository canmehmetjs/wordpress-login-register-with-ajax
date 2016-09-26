<div class="bonuin_login">
        <img src="<?php echo get_template_directory_uri().'/assets/images/logofooter.png';?>">
        <h1>Please login to your account</h1>
            <form id="login" class="ajax-auth login_form" action="login" method="post">
				<p class="status"></p>
				<?php wp_nonce_field('ajax-login-nonce', 'security'); ?> 
                <fieldset>
                    <div class="icon">
                        <i class="tomplabs-envelope"></i>
                    </div>
                    <input type="text" class="bonuin_input" name="username" id="username" placeholder="Username" required>
                </fieldset>
                
                <fieldset>
                    <div class="icon">
                        <i class="tomplabs-locked-1"></i>
                    </div>
                    <input type="password" class="bonuin_input" name="password" id="password" placeholder="Your Password" required>
                </fieldset>
                <button type="submit" class="bonuin_button1">LOGIN</button>
                <ul class="list-inline login_footer_links">
                    <li class="pull-left"><a href="" data-remodal-target="forget_password">Forget Password?</a></li>
                    <li class="pull-right"><a href="" data-remodal-target="register">Don't have account?<span> Create one.</span></a></li>
                </ul>
            </form>  
</div>



	
	
	
	
	

	
	