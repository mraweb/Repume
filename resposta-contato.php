<?php
require_once('phpmailer/class.phpmailer.php');
    $phpmail = new PHPMailer();
    $phpmail->IsSMTP(); // envia por SMTP
    $phpmail->Host = "smtp.repume.com.br"; // SMTP servers
    $phpmail->SMTPAuth = true; // Caso o servidor SMTP precise de autenticação
    $phpmail->Username = "envia@repume.com.br"; // SMTP username
    $phpmail->Password = "qweasd10"; // SMTP password
    $phpmail->Port = 587;
        
    $phpmail->IsHTML(true);
    //$phpmail->From = $_POST["miraEmail"];
    $phpmail->From = "envia@repume.com.br";
    $phpmail->FromName = $_POST["nome"];
    
    $phpmail->AddAddress('teste@repume.com.br', 'Repume');
    $phpmail->AddReplyTo($_POST["mail"], $_POST["nome"]);
    
    $phpmail->Subject = "Contato do Site Repume - ".$_POST["nome"]."";
    
    $phpmail->Body .= "<strong>IP:</strong> ". $_SERVER["REMOTE_ADDR"]."<br />";
    $phpmail->Body .= "<strong>Nome:</strong> ". $_POST["nome"]."<br />";
    $phpmail->Body .= "<strong>Empresa:</strong> ". $_POST["empresa"]."<br />";
    $phpmail->Body .= "<strong>E-mail:</strong> ". $_POST["mail"]."<br />";
    $phpmail->Body .= "<strong>Telefone:</strong> ". $_REQUEST["tel"]."<br />";
    $phpmail->Body .= "<strong>Estado:</strong> ". $_POST["estado"]."<br />"; 
    $phpmail->Body .= "<strong>Mensagem:</strong> ".nl2br($_POST["msg"])."<br />";

    if($_POST["valida"] == ""){
        if(!strpos($_SERVER['HTTP_USER_AGENT'],"Googlebot") && isset($_POST['nome']) && $_POST['nome'] != ''){
            $send = $phpmail->Send();
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" />
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<title>Contato Enviado | Repume</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/validationEngine.jquery.css">
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
            <h1>Contato</h1>

            <p>Para mais informações, solicitações ou dúvidas sobre os produtos e demais soluções da Repume, preencha o formulário de contato e aguarde o breve retorno da nossa equipe de atendimento.</p>

            <div class="resposta">
                <p>Obrigado, sua mensagem foi enviada com sucesso!</p>
            </div>

            <h2 class="font-small">Localização</h2>

            <p>Rua Guilherme de Almeida, 25 - Jardim Saint Moritz - Taboão da Serra - SP - CEP 06787-440</p>

            <p><a href="javascript:void(0);" title="Veja como chegar, clique aqui" class="hidetxt modal">Veja como chegar, clique aqui&raquo;</a></p>

            <div class="trabalhe">
                <h3 class="font-small">Trabalhe Conosco</h3>

                <p>Fique por dentro de nossas oportunidades! Acesse o portal de vagas, envie seu currículo e aguarde o breve contato de nossa equipe de seleção.<br />
                Link Trabalhe Conosco: <a href="http://200.206.216.6:8092/pc/" title="Trabalhe Conosco" class="link" rel="external">http://200.206.216.6:8092/pc/</a></p>
            </div>
        </div><!-- FINAL CONT-RIGHT -->

        <?php include "inc/aside.php"; ?>
    </div><!-- FINAL CONTENT -->  
</div>

<?php include "inc/footer.php"; ?>

<div id="mapaTeste">
    <div id="mask"></div>

    <div class="mapaContent">
        <div id="mapa" class="window"></div>
        <a class="close hidetxt">Fechar</a>
    </div>
</div>

<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.8.2.min.js"><\/script>')</script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="js/mapa.js"></script>
<script type="text/javascript" src="js/slides.min.jquery.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>