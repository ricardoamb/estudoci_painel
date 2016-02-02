<div class="card card-container">
    <img class="profile-img-card" src="<?php echo base_url('assets/img');?>/logo-ricardoamb-art.png" alt="" />
    <p id="profile-name" class="profile-name-card"></p>
    <form class="form-signin" action="<?php base_url('users/login'); ?>" method="post" accept-charset="utf-8">
        <span id="reauth-email" class="reauth-email"></span>
        <?php echo form_error('email','<div class="login-error login-error-email">','<i class="fa fa-warning fa-lg"></i></div>');?>
        <input type="text" id="inputEmail" name="email" class="form-control" placeholder="E-mail" autofocus>
        <?php echo form_error('senha','<div class="login-error login-error-senha">','<i class="fa fa-warning fa-lg"></i></div>');?>
        <input type="password" id="inputPassword" name="senha" class="form-control" placeholder="Senha" >
        <div id="remember" class="checkbox">
            <label>
                <input type="checkbox" value="Me lembrar"> Me lembrar
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Entrar</button>
    </form><!-- /form -->
    <a href="#" class="forgot-password">
        Esqueceu a senha?
    </a>
</div>