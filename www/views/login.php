<section class="container">
    <div class="titulos-container">
        <h2>Login</h2>
    </div>

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
            <div class="inputs-login">
                <label>E-mail</label>
                <input type="email" name="email" required placeholder="Usuário">

                <label>Senha</label>
                <input type="password" name="senha" required placeholder="Senha">
            </div>

            <div class="buttons-login">
                <a href="/" class="button">Cancelar</a>
                <button class="button" type="submit">Entrar</button>
            </div>
        </form>
        <div class="actions-login">
            <a href="#">Troque sua Senha</a>
            <a href="/cadastro">Inscreva-se</a>
        </div>

    </div>

</section>