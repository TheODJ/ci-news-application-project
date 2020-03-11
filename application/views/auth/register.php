<div class="col-md-12">
      <h1><?php echo lang('register_user_heading');?></h1>
      <p><?php echo lang('register_user_subheading');?></p>
</div>
<hr>
<div class="container mx-auto">
      <div class="col-md-12">
            <div id="infoMessage"><?php echo $message;?></div>

            <?php echo form_open("auth/register");?>
                        <p>
                              <?php echo lang('register_user_fname_label', 'first_name');?> <br />
                              <?php echo form_input($first_name);?> 
                        </p>
                        
                        <p>
                              <?php echo lang('register_user_lname_label', 'last_name');?> <br />
                              <?php echo form_input($last_name);?>
                        </p>

                        
                        <?php
                        if($identity_column!=='email') {
                        echo '<p>';
                        echo lang('register_user_identity_label', 'identity');
                        echo '<br />';
                        echo form_error('identity');
                        echo form_input($identity);
                        echo '</p>';
                        }
                        ?>

                        <p>
                              <?php echo lang('register_user_company_label', 'company');?> <br />
                              <?php echo form_input($company);?>
                        </p>

                        <p>
                              <?php echo lang('register_user_email_label', 'email');?> <br />
                              <?php echo form_input($email);?>
                        </p>

                        <p>
                              <?php echo lang('register_user_phone_label', 'phone');?> <br />
                              <?php echo form_input($phone);?>
                        </p>

                        <p>
                              <?php echo lang('register_user_password_label', 'password');?> <br />
                              <?php echo form_input($password);?>
                        </p>

                        <p>
                              <?php echo lang('register_user_password_confirm_label', 'password_confirm');?> <br />
                              <?php echo form_input($password_confirm);?>
                        </p>


            <?php # <p><?php echo '<div class="btn btn-success">' . form_submit('submit', lang('register_user_submit_btn')) . '</div>';?></p>
            <p class="text-center"> <button type="submit" name="submit" class="btn btn-success form-control">Register Now</button>
            <?php echo form_close();?>
                  <p><a href="login">Already have an account? Log in</a></p>
      </div>
</div>