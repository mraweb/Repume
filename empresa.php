<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" />
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<title>Empresa | Repume</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/jquery.lightbox.css">
<!--[if ie]>
    <script type="text/javascript" src="js/html5-ie.js"></script>
<![endif]-->
<?php include "analytics.php"; ?>
</head>
<body itemscope itemtype="http://schema.org/WebPage">

<div class="bg-int">

    <?php include "inc/header.php"; ?>

    <div id="content" role="main">
        <div class="cont-right">
            <ul class="nav-empresa tabs">
                <li><a href="#quem-somos" title="Quem Somos">Quem Somos</a></li>
                <li><a href="#nossa-fabrica" title="Nossa Fábrica">Nossa Fábrica</a></li>
            </ul>

            <section id="quem-somos" class="tab_content">
                <h1 class="acessibilidade">Quem Somos</h1>

                <p>Em um mundo globalizado, a compra e venda de bens e serviços são determinadas principalmente pela relação custo-benefício, proporcionada por opções de qualidade.</p> 

                <p>Dentro desta dinâmica, a Repume Iluminação assume o compromisso de oferecer sempre o melhor aos clientes, aprimorando continuamente seus produtos e serviços. A preocupação em oferecer produtos de alta qualidade, que reúnem tecnologia, qualidade, design e funcionalidade, demonstra a seriedade e credibilidade da empresa, evidenciando o seu know-how ao longo de sua trajetória na fabricação de Luminárias, Postes e Reatores.</p>

                <p>A Repume possui um parque industrial de 15 mil m² de área construída, com disponibilidade de produção em grande escala, garantia única do conjunto, soluções eficientes, atendimento personalizado e atuação ecologicamente responsável. Com 30 anos de experiência no mercado, oferece soluções diferenciadas e confiáveis, seguindo com rigor as normas e regulamentações para garantir qualidade e tranquilidade aos seus clientes.</p>
            </section><!-- FINAL QUEM SOMOS -->

            <div id="nossa-fabrica" class="tab_content">
                <p>A Repume dispõe de uma estrutura moderna e um parque industrial de 15 mil m2, às margens da Rodovia Régis Bittencourt no Município de Taboão da Serra SP. Conta com tecnologias próprias e avançadas e laboratório altamente capacitado para realização de diversos tipos de ensaios, como:</p>

                <ul class="lista">
                    <li>Fotométrico, utilizando Goniômetro Robotizado</li>
                    <li>Levantamento de Fluxo Luminoso com Esfera Integradora</li>
                    <li>Grau de Proteção com Cabine de Pó e Jato D'Água</li>
                    <li>Resistência ao Vento</li>
                    <li>Ensaios Elétricos e Mecânicos</li>
                    <li>Aquecimento Térmico</li>
                    <li>Ensaio de Vida Acelerada (Durabilidade)</li>
                    <li>Campo de Provas para Levantamento Fotométrico, usando Sistema Elevatório Automático para posicionamento das Luminárias e Distanciamento entre Postes, buscando evidenciar o resultado obtido nos ensaios em laboratório;</li>
                    <li>Resistência Mecânica (Flecha e Ruptura).</li>
                </ul>

                <p>Possui ainda um sistema de tratamento de superfície, que permite atingir um melhor rendimento de seus refletores, além de uma estação de tratamento de efluentes, gases, vapores e pó, garantindo um processo de produção ecologicamente responsável e seguro. Tudo isso para oferecer a você produtos de qualidade e confiabilidade.</p>

                <section class="galeria">
                    <h2>Galeria de Fotos</h2>

                    <ul>
                        <li>
                            <a href="img/empresa-gd.jpg" title="Empresa"><img src="img/empresa-pq.jpg" alt="Empresa" width="114" height="86" /></a>
                            <span>Empresa</span>
                        </li>

                        <li>
                            <a href="img/laboratorio1-gd.jpg" title="Laboratório 1"><img src="img/laboratorio1-pq.jpg" alt="Laboratório 1" width="114" height="86" /></a>
                            <span>Laboratório 1</span>
                        </li>

                        <li>
                            <a href="img/laboratorio2-gd.jpg" title="Laboratório 2"><img src="img/laboratorio2-pq.jpg" alt="Laboratório 2" width="114" height="86" /></a>
                            <span>Laboratório 2</span>
                        </li>

                        <li>
                            <a href="img/escritorio-gd.jpg" title="Escritório"><img src="img/escritorio-pq.jpg" alt="Escritório" width="114" height="86" /></a>
                            <span>Escritório</span>
                        </li>

                        <li>
                            <a href="img/campo-de-prova-gd.jpg" title="Campo de Prova"><img src="img/campo-de-prova-pq.jpg" alt="Campo de Prova" width="114" height="86" /></a>
                            <span>Campo de Prova</span>
                        </li>
                    </ul>
                </section>
            </div><!-- FINAL NOSSA FABRICA -->

            <section class="confira-produto">
                <h3><a href="portfolio.php" title="Conheça nosso Portfolio">Conheça nosso Portfolio</a></h3>

                <p>Clique Aqui &raquo;</p>
            </section>
        </div><!-- FINAL CONT-RIGHT -->

        <?php include "inc/aside.php"; ?>
    </div><!-- FINAL CONTENT -->  
</div>

<?php include "inc/footer.php"; ?>

<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.8.2.min.js"><\/script>')</script>
<script type="text/javascript" src="js/jquery.lightbox.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.galeria a').lightBox();
});
</script>
<script type="text/javascript" src="js/slides.min.jquery.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>