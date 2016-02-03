<div class="login-screen <?php if(form_error('email') || form_error('senha')) echo 'error'; ?>">
    <div class="panel-login blur-content">
        <div class="panel-heading"><!--panel-heading-->
            <img src="<?php echo base_url('assets/img')?>/logo-ricardoamb-art-white.png" height="40" alt="Ricardo Amb" style="margin:25px 0">
        </div><!--panel-heading-->

            <?php include_once('forms/login.php'); ?>

            <?php include_once('forms/login_forgot_password.php'); ?>

            <?php include_once('forms/login_create_account.php'); ?>

    </div><!--.blur-content-->

</div><!--.login-screen-->

<div class="bg-blur dark">
    <div class="overlay"></div><!--.overlay-->
</div><!--.bg-blur-->

<svg version="1.1" xmlns='http://www.w3.org/2000/svg'>
    <filter id='blur'>
        <feGaussianBlur stdDeviation='7' />
    </filter>
</svg>