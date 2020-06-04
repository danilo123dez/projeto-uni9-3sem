<section class="container-views container">

    <div class="box-login">
        <form action="/login/logar" method="POST">
            <?php 
                if(!empty($_SESSION['login_sucess'])){
                    echo "<span class='success-cadastro'><i class='fas fa-check-circle'></i> ".$_SESSION['login_sucess']."</span>";
                    unset($_SESSION['login_sucess']);
                }
            ?>

            <?php 
                if(!empty($_SESSION['login_error'])){
                    echo "<span class='message-error'><i class='fas fa-times'></i> ".$_SESSION['login_error']."</span>";
                    unset($_SESSION['login_error']);
                }
            ?>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputEmail4">E-mail</label>
                    <input type="email" class="form-control" placeholder="E-mail">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputEmail4">Senha</label>
                    <input type="password" class="form-control" placeholder="Senha">
                </div>
            </div>

            <div class="buttons-login">
                <a href="/" class="btn btn-danger" style="color: #fff;">Cancelar</a>
                <button class="btn btn-primary" type="submit">Entrar</button>
            </div>
        </form>
        <div class="actions-login">
            <a href="#">Troque sua Senha</a>
            <a href="/cadastro">Inscreva-se</a>
        </div>

    </div>

</section>