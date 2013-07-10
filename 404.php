<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" />
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<title>Página não Encontrada | Repume</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
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
           <div class="txt-top bg-erro">
                <h1>Essa página não pode ser encontrada</h1>

                <p>A página que você solicitou não foi encontrada. Para continuar, você pode:</p>

                <ul class="lista">
                    <li><a href="/" title="Ir para nossa home" class="link">Ir para nossa <strong>home</strong></a></li>
                    <li><a href="javascript:history.back(-1);" title="Voltar para a página anterior" class="link">Voltar para a <strong>página anterior</strong></a></li>
                    <li><a href="contato.php" title="Ir para a página de contato" class="link">Ir para a página de <strong>contato</strong></a></li>
                    <li><a href="produtos.php" title="Conhecer nossos produtos" class="link">Conhecer nossos <strong>produtos</strong></a></li>
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
<script type="text/javascript" src="js/scripts.js"></script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>