<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" />
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<title>Notícia Interna | Repume</title>
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
            <div itemprop="breadcrumb" id="bread">
                <a href="/" class="link">Home</a> &raquo;
                <a href="noticias.php" class="link">Notícias</a> &raquo;
                <strong>Lorem Ipsum is simply dummy text of the printing</strong>
            </div>

            <p class="bt-voltar"><a href="javascript:history.back(-1);" title="Voltar" class="hidetxt">Voltar</a></p>

            <h1>Lorem Ipsum is simply dummy text of the printing</h1>
            <h2 class="icon-cale">10/02/2013</h2>

            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

            <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>

            <ul class="gallery">
                <li><a href="http://placehold.it/550x350" title=""><img src="http://placehold.it/114x114" alt="Foto" width="114" height="114" /></a></li>
                <li><a href="http://placehold.it/550x350" title=""><img src="http://placehold.it/114x114" alt="Foto" width="114" height="114" /></a></li>
                <li><a href="http://placehold.it/550x350" title=""><img src="http://placehold.it/114x114" alt="Foto" width="114" height="114" /></a></li>
            </ul>
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