<head>
  <style type="text/css">
		body{background-image:none;background-color:white;color:#231e18;background-repeat:no-repeat;margin:0;font-family:Helvetica;font-size:12px;}
			#container{width:1000px;margin:0 auto;}
			#header{width:100%;margin:0;padding:0;}
			#logo{width:1000px;margin:0 auto;color:#231e18;}
			#nav_bg{background:#231e18;width:100%;height:52px;}
			ul#navigation{list-style-type:none;width:1000px;margin:0 auto;}
			ul#navigation li a{color:white;font-size:18px;float:left;padding:15px 20px 20px 20px;margin-right:10px;}
			ul#navigation li a:hover{color:#231e18;background:white;font-size:18px;float:left;padding:15px 20px 20px 20px;margin-right:10px;}
			ul#navigation li a.selected{color:#231e18;background:white;font-size:18px;float:left;padding:15px 20px 20px 20px;}

			#login{margin:0 auto;margin-left:40px;}
			.box{width:726px;margin:0;padding:0;}
			
			p{margin-left:40px;}
			
			input.clean{padding:4px;border:1px solid #231e18;}
			
			table{width:900px;text-align:left;margin:20px 0 0 0;}
			table tr.alt{background:#ECECEC;}
			a{color:#231e18;margin-right:10px;}
		</style>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<h1><?php echo lang('login_heading');?></h1>
<p><?php echo lang('login_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/login");?>

  <p>
    <?php echo lang('login_identity_label', 'identity');?>
    <?php echo form_input($identity);?>
  </p>

  <p>
    <?php echo lang('login_password_label', 'password');?>
    <?php echo form_input($password);?>
  </p>

  <p>
    <?php echo lang('login_remember_label', 'remember');?>
    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
  </p>


  <p><?php echo form_submit('submit', lang('login_submit_btn'));?></p>

<?php echo form_close();?>

<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>