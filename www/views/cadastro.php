<section class="container">
    <div class="titulos-container">
        <h2>Cadastro</h2>
    </div>

    <div class="box-login">
        <form action="/cadastro/store" method="POST">
            <div class="inputs-login">
                <label>Usuário</label>
                <input type="text" name="usuario" placeholder="Usuário" required maxlength="20">
                <?php 
                    if(!empty($_SESSION['message_error']['usuario'])){
                        echo "<span class='message-error'><i class='fas fa-times'></i> ".$_SESSION['message_error']['usuario']."</span>";
                    }
                ?>
                
                <label>Email</label>
                <input type="email" name="email" placeholder="Email" required maxlength="50">
                <?php 
                    if(!empty($_SESSION['message_error']['email'])){
                        echo "<span class='message-error'><i class='fas fa-times'></i> ".$_SESSION['message_error']['email']."</span>";
                    }
                ?>

                <label>Senha</label>
                <input type="password" name="senha" placeholder="Senha" required maxlength="50">
                <?php 
                    if(!empty($_SESSION['message_error']['senha'])){
                        echo "<span class='message-error'><i class='fas fa-times'></i> ".$_SESSION['message_error']['senha']."</span>";
                    }
                ?>
            </div>

            <div class="buttons-login">
                <a href="/login" class="button">Cancelar</a>
                <button class="button" type="submit">Cadastrar</button>
            </div>
        </form>
    </div>

    <?php 
        if(!empty($_SESSION['message_error'])){
            unset($_SESSION['message_error']);
        }
    ?>

</section>