<?php if(!$this->auth) : ?>
<form name="loginform" id="loginform" action="<?php echo esc_url($this->self_url('auth')); ?>" method="post">
	<p>
		<label for="user_login"><?php echo __('Username', 'runway'); ?><br>
		<input type="text" name="log" id="user_login" class="input" value="" size="20"></label>
	</p>
	<p>
		<label for="user_pass"><?php echo __('Password', 'runway'); ?><br>
		<input type="password" name="pwd" id="user_pass" class="input" value="" size="20"></label>
	</p>
	<p class="submit">
		<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="<?php echo __('Log In', 'runway'); ?>">
	</p>
</form>
<?php else: ?>
<form name="loginform" id="loginform" action="<?php echo esc_url($this->self_url('auth-sign-out')); ?>" method="post">
	<p class="submit">
		<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="<?php echo __('Sign out', 'runway'); ?>">
	</p>
</form>
<?php endif; ?>