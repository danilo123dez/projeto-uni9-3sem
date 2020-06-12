<section class="container-views <?php echo isset($_SESSION['logged']) && $_SESSION['logged'] ? 'content-logged' : '' ?>">

    <div class="slider">
        <div><img src="<?php echo BASE_URL; ?>assets/img/slide_img1.jpg" alt=""><span class="title-image">Design</span> <span class="body-image">Visual atraente <br> para sua marca <br> e ramo de <br> atividade.</span></div>
        <div class="img-2"><img src="<?php echo BASE_URL; ?>assets/img/slide_img2.jpg" alt=""><span class="title-image">Marketing</span> <span class="body-image">Visual atraente para sua marca e ramo de atividade.</span> <span class="body-image-responsive">Visual atraente para <br> sua marca e ramo de atividade.</span> </div>
    </div>

    <div class="diferenciais">
       <h2>Diferenciais e expêriencias da agência</h2> 

       <p><strong>Estudamos, planejamos, desenvolvemos, publicamos, divulgamos e fortalecemos seu negócio.</strong></p>

        <ul class="list-group">
            <li class="list-group-item">+200 sites publicados</li>
            <li class="list-group-item">+300 designs criados</li>
            <li class="list-group-item">Serviços com google adsense</li>
        </ul>

    </div>


    <div style="position: relative;">
        <div class="parallax">
            <h3>Últimos projetos</h3>
            <div class="overlay"></div>
        </div>
    </div>

    <div class="projetos">
        <div class="card">
            <img src="<?php echo BASE_URL; ?>assets/img/projeto1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Projeto para o dia das mulheres</h5>
                <p class="card-text">Projeto feito para uma empresa feminista.</p>
            </div>
        </div>

        <div class="card">
            <img src="<?php echo BASE_URL; ?>assets/img/projeto2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Projeto para um portal de conteúdo</h5>
                <p class="card-text">Portal de conteudo que possui assinantes.</p>
            </div>
        </div>

        <div class="card">
            <img src="<?php echo BASE_URL; ?>assets/img/projeto3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Projeto para informar os perigos do COVID-19</h5>
                <p class="card-text">Um blog informático da nova doença</p>
            </div>
        </div>

        <div class="card">
            <img src="<?php echo BASE_URL; ?>assets/img/projeto4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Projeto de um E-coomerce</h5>
                <p class="card-text">E-commerce de um cliente nosso</p>
            </div>
        </div>

    </div>

</section>