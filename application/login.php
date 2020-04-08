<?php include 'header.php' ?>
<link rel="stylesheet" href="./assets/css/login.css">
<div class="login-card">
    <div class="row">
        <div class="col">
            <h1>Kovacs Produções</h1>
        </div>
    </div>
    <form class="form-signin">
        <span class="reauth-email"></span>
        <input type="email" class="form-control" id="inputEmail" required placeholder="Email" autofocus />
        <input type="password" class="form-control" id="inputPassword" required placeholder="Senha" />
        <div class="checkbox">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="formCheck-2" />
                <label class="form-check-label" for="formCheck-2">Me lembrar</label>
            </div>
        </div>
        <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit">Entrar</button>
    </form><a class="forgot-password" href="#">Esqueci a senha</a>
</div>
<?php include 'footer.php' ?>