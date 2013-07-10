<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" />
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<title>Contato | Repume</title>
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

            <form action="resposta-contato.php" method="post" id="formID">
                <input type="hidden" name="valida" id="valida" />
                <ul class="formulario">
                    <li>
                        <label for="nome">Nome*:</label>
                        <input type="text" name="nome" id="nome" class="validate[required]" />
                    </li>

                    <li>
                        <label for="empresa">Empresa*:</label>
                        <input type="text" name="empresa" id="empresa" class="validate[required]" />
                    </li>

                    <li>
                        <label for="mail">E-mail*:</label>
                        <input type="text" name="mail" id="mail" class="validate[required,custom[email]]" />
                    </li>

                    <li>
                        <label for="tel">Telefone*:</label>
                        <input type="text" name="tel" id="tel" class="validate[required,custom[phone]]" />
                    </li>

                    <li>
                        <label for="estado">Estado</label>
                        <select name="estado" id="estado">
                            <option value="Selecione">Selecione</option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AM">Amapá</option>
                            <option value="AP">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RO">Rondônia</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SE">Sergipe</option>
                            <option value="SP">São Paulo</option>
                            <option value="TO">Tocantins</option>
                        </select>
                    </li>

                    <li>
                        <label for="cidade">Cidade:</label>
                        <input type="text" name="cidade" id="cidade" />
                    </li>

                    <li>
                        <label for="msg">Mensagem:</label>
                        <textarea name="msg" id="msg" rows="5" cols="50"></textarea>
                    </li>

                    <li>
                        <span>*Dados Obrigatórios</span>
                        <input type="image" src="img/btenviar.jpg" name="Enviar" alt="Enviar" class="bt-enviar" />
                    </li>
                </ul>
            </form>

            <h2 class="font-small">Localização</h2>

            <p>Rua Guilherme de Almeida, 25 - Jardim Saint Moritz - Taboão da Serra - SP - CEP 06787-440</p>

            <p><a href="javascript:void(0);" title="Veja como chegar, clique aqui" class="hidetxt modal">Veja como chegar, clique aqui&raquo;</a></p>

            <div class="trabalhe">
                <h3 class="font-small">Trabalhe Conosco</h3>

                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
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
<script type="text/javascript" src="js/jquery.validationEngine.js"></script>
<script type="text/javascript" src="js/jquery.validationEngine-pt.js"></script>
<script type="text/javascript" src="js/jquery.mask.js"></script>
<script type="text/javascript" src="js/slides.min.jquery.js"></script>
<script type="text/javascript" src="js/validacao.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>