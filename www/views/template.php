<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="shortcut icon" type="image/png" href="<?= BASE_URL; ?>assets/img/logo.png"/>
    <link rel="stylesheet" href="<?= BASE_URL; ?>assets/css/header.css">
    <link rel="stylesheet" href="<?= BASE_URL; ?>assets/css/footer.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php 
        $css = $this->getCss();
        if(!empty($css)){
            foreach($css as $val){
                
            ?>
                <link rel="stylesheet" href="<?= BASE_URL; ?>assets/css/<?php echo $val ?>.css">
            <?php
            }
        }
    ?>    
    <title><?php echo $this->getTitle(); ?></title>
</head>
<body>
    <article>
        <header class="header">
            <div class="itens-header">
                <a href="/"><img src="<?= BASE_URL; ?>assets/img/logo.png" width="150" alt=""></a>
                <ul class="links-header">
                    <li><a href="/">Home</a></li>
                    <li><a href="/login">Login</a></li>
                    <li><a href="/contato">Contato</a></li>
                </ul>
            </div>
            <div class="input-pesquisa-header">
                <input type="text" name="" id="" placeholder="Pesquisar">
                <button class="button-pesquisa-header" type="button">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </header>
    </article>

        <?php $this->loadViewInTemplate($viewName, $viewData); ?>

    <article>
        <footer class="footer">
            <div class="footer-enderecos">
                <span class="footer-bairro">Matriz</span>
                <span class="footer-rua">Rua Naruto Uzumaki, 666, kohoha 1</span>

                <span class="footer-bairro">Matriz</span>
                <span class="footer-rua">Rua Naruto Uzumaki, 666, kohoha 1</span>
            </div>
            <div class="footer-direitos">
                <img src="<?= BASE_URL; ?>assets/img/logo.png" width="150" alt="">
                <span>&copy; <?= date('Y'); ?> Agency of Depression, Todos os direitos reservados.</span>
                <span class="footer-cnpj">CNPJ 12.345.235/0001-00</span>
            </div>
        </footer>
    </article>

        
    <?php 
        $js = $this->getJs();
        if(!empty($js)){
            foreach($js as $val){
                
            ?>
                <script src="<?php BASE_URL; ?>assets/js/<?php echo $val ?>.js" ></script>
            <?php
            }
        }
    ?>    
    <script src="https://kit.fontawesome.com/c879721f59.js" crossorigin="anonymous"></script>
</body>
</html>