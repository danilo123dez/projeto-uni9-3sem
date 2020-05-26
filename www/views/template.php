<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="shortcut icon" type="image/png" href="<?= BASE_URL; ?>assets/img/logo.png"/>
    <link rel="stylesheet" href="<?= BASE_URL; ?>assets/css/header.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $this->getTitle(); ?></title>
</head>
<body>
    <article>
        <header class="header">
            <div class="itens-header">
                <img src="<?= BASE_URL; ?>assets/img/logo.png" width="150" alt="">
                <ul class="links-header">
                    <li><a href="/">Home</a></li>
                    <li><a href="/login">Login</a></li>
                    <li><a href="/contato">Contato</a></li>
                </ul>
            </div>
            <div class="input-pesquisa-header">
                <input type="text" name="" id="" placeholder="Pesquisar">
            </div>
        </header>
    </article>
    <?php $this->loadViewInTemplate($viewName, $viewData); ?>
</body>
</html>