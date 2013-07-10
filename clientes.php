<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" />
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<title>Clientes | Repume</title>
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
            <h1>Clientes</h1>

            <p>Entre revendas, instaladoras, prefeituras, concessionárias e diversas indústrias, a Repume possui diversos clientes dos mais variados perfis e segmentos.</p>

            <p><strong>Conheça nossas principais parcerias e venha fazer parte da nossa história também!</strong></p>

            <ul class="nav-clientes tabs">
                <li><a href="#revendas" title="Revendas" class="hidetxt bt-reve">Revendas</a></li>
                <li><a href="#instaladoras" title="Instaladoras" class="hidetxt bt-inst">Instaladoras</a></li>
                <li><a href="#prefeituras" title="Prefeituras" class="hidetxt bt-pref">Prefeituras</a></li>
                <li><a href="#concessionarias" title="Concessionárias" class="hidetxt bt-conc">Concessionárias</a></li>
                <li><a href="#industrias" title="Indústrias" class="hidetxt bt-indu">Indústrias</a></li>
            </ul>

            <div id="revendas" class="tab_content">
                <ul class="gallery">
                    <li><img src="img/revendas/centro-eletrico.jpg" alt="Centro Elétrico" width="114" height="114" /></li>
                    <li><img src="img/revendas/elefer-eletrica.jpg" alt="Elefer Elétrica" width="114" height="114" /></li>
                    <li><img src="img/revendas/eletrofio.jpg" alt="Eletrofio" width="114" height="114" /></li>
                    <li><img src="img/revendas/everest.jpg" alt="Everest" width="114" height="114" /></li>
                    <li><img src="img/revendas/eletrica-global.jpg" alt="Elétrica Global" width="114" height="114" /></li>
                    <li><img src="img/revendas/gmr.jpg" alt="GMR" width="114" height="114" /></li>
                </ul>
            </div>

            <div id="instaladoras" class="tab_content">
                <ul class="gallery">
                    <li><img src="img/instaladoras/alusa-engenharia.jpg" alt="Alusa Engenharia" width="114" height="114" /></li>
                    <li><img src="img/instaladoras/cite-luz.jpg" alt="Cite Luz" width="114" height="114" /></li>
                    <li><img src="img/instaladoras/luminapar.jpg" alt="Luminapar" width="114" height="114" /></li>
                    <li><img src="img/instaladoras/fm-rodrigues.jpg" alt="FM Rodrigues" width="114" height="114" /></li>
                    <li><img src="img/instaladoras/luz-urbana.jpg" alt="Luz Urbana" width="114" height="114" /></li>
                    <li><img src="img/instaladoras/engelumen.jpg" alt="EngeLumen" width="114" height="114" /></li>
                </ul>
            </div>

            <div id="prefeituras" class="tab_content">
                <ul class="gallery">
                    <li><img src="img/prefeituras/caieiras.jpg" alt="Prefeitura de Caieiras" width="114" height="114" /></li>
                    <li><img src="img/prefeituras/maua.jpg" alt="Prefeitura de Mauá" width="114" height="114" /></li>
                    <li><img src="img/prefeituras/rio-das-ostras.jpg" alt="Prefeitura de Rio das Ostras" width="114" height="114" /></li>
                    <li><img src="img/prefeituras/rio-de-janeiro.jpg" alt="Prefeitura do Rio de Janeiro" width="114" height="114" /></li>
                    <li><img src="img/prefeituras/taboao-da-serra.jpg" alt="Prefeitura de Taboão da Serra" width="114" height="114" /></li>
                    <li><img src="img/prefeituras/sao-paulo.jpg" alt="Prefeitura de São Paulo" width="114" height="114" /></li>
                </ul>
            </div>

            <div id="concessionarias" class="tab_content">
                <ul class="gallery">
                    <li><img src="img/concessionarias/eletropaulo.jpg" alt="Eletropaulo" width="114" height="114" /></li>
                    <li><img src="img/concessionarias/ampla.jpg" alt="Ampla" width="114" height="114" /></li>
                    <li><img src="img/concessionarias/cemig.jpg" alt="Cemig" width="114" height="114" /></li>
                    <li><img src="img/concessionarias/cpfl-energia.jpg" alt="CPFL Energia" width="114" height="114" /></li>
                    <li><img src="img/concessionarias/edp.jpg" alt="EDP" width="114" height="114" /></li>
                    <li><img src="img/concessionarias/elektro.jpg" alt="Elektro" width="114" height="114" /></li>
                </ul>
            </div>

            <div id="industrias" class="tab_content">
                <ul class="gallery">
                    <li><img src="img/industrias/topico.jpg" alt="Tópico" width="114" height="114" /></li>
                </ul>
            </div>
        </div><!-- FINAL CONT-RIGHT -->

        <?php include "inc/aside.php"; ?>
    </div><!-- FINAL CONTENT -->  
</div>

<?php include "inc/footer.php"; ?>

<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.8.2.min.js"><\/script>')</script>
<script type="text/javascript" src="js/slides.min.jquery.js"></script>
<script type="text/javascript" src="js/jquery.lightbox.js"></script>
<script type="text/javascript">
    $('.gallery a').lightBox();
</script>
<script type="text/javascript" src="js/scripts.js"></script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>