<section class="container container-views">
    <div class="box-login">
        <form action="/cadastro/store" method="POST">
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label>Usuário</label>
                    <input type="text" name="usuario" class="form-control" placeholder="Usuário" required maxlength="20">
                    <?php 
                        if(!empty($_SESSION['message_error']['usuario'])){
                            echo "<span class='message-error'><i class='fas fa-times'></i> ".$_SESSION['message_error']['usuario']."</span>";
                        }
                    ?>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email" required maxlength="50">
                    <?php 
                        if(!empty($_SESSION['message_error']['email'])){
                            echo "<span class='message-error'><i class='fas fa-times'></i> ".$_SESSION['message_error']['email']."</span>";
                        }
                    ?>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label>Senha</label>
                    <input type="password" class="form-control"  name="senha" placeholder="Senha" required maxlength="50">
                    <?php 
                        if(!empty($_SESSION['message_error']['senha'])){
                            echo "<span class='message-error'><i class='fas fa-times'></i> ".$_SESSION['message_error']['senha']."</span>";
                        }
                    ?>
                </div>
            </div>

            <div class="buttons-login">
                <a href="/login" class="btn btn-danger" style="color: #fff;">Cancelar</a>
                <button class="btn btn-primary" type="submit">Cadastrar</button>
            </div>
        </form>
    </div>

    <?php 
        if(!empty($_SESSION['message_error'])){
            unset($_SESSION['message_error']);
        }
    ?>

</section>