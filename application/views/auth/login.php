<div class="col-md-12">
  <h2><?php echo lang('login_heading');?></h2>
  <p><?php echo lang('login_subheading');?></p>
</div>
<hr>
<div class="container mx-auto">
  <div class="col-md-12">
    

    <div id="infoMessage"><?php echo $message;?></div>

    <?php echo form_open("auth/login");?>

      <p>
        <?php echo lang('login_identity_label', 'identity');?></br>
        <?php echo form_input($identity);?>
      </p>

      <p>
        <?php echo lang('login_password_label', 'password');?></br>
        <?php echo form_input($password);?>
      </p>

      <p>
        <?php echo lang('login_remember_label', 'remember');?>
        <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
      </p>


      <p><?php # echo form_submit('submit', lang('login_submit_btn'));?></p>
      <p class="text-center"> <button type="submit" name="submit" class="btn btn-primary form-control">Log in</button>

    <?php echo form_close();?>

    <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
    <p><a href="register">Don't have an account? Register now</a></p>
  </div>
</div>