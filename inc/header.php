<?php $url = basename($_SERVER["SCRIPT_NAME"]); ?>
<header role="banner">
        <?php if($url == "index.php"){ ?>
        <h1><a href="/" title="Repume" class="hidetxt">Repume</a></h1>
        <?php }else{ ?>
        <p class="logo"><a href="/" title="Repume"><img src="img/logo.png" alt="Repume" width="200" height="119" /></a></p>
        <?php } ?>

        <div class="telefone">
            <div id="google_translate_element"></div>

            <p class="tel"><span>55 11</span> 4139-1656</p>
        </div>
        
        <nav role="navigation">
            <ul id="navMenu">
                <li><a href="/" title="Home" <?php if($url == "index.php"){echo "class='ativo'";} ?>>Home</a></li>

                <li><a href="empresa.php" title="Empresa" <?php if($url == "empresa.php"){echo "class='ativo'";} ?>>Empresa</a></li>

                <li>
                    <a href="produtos.php" title="Produtos" <?php if($url == "produtos.php" or $url == "produto-interna.php" or $url == "produto-detalhe.php"){echo "class='ativo'";} ?>>Produtos</a>
                    <ul class="sub">
                        <li><a href="produto-interna.php" title="Iluminação Pública" class="link">Iluminação Pública</a></li>
                        <li><a href="produto-interna.php" title="Reator" class="link">Reator</a></li>
                        <li><a href="produto-interna.php" title="Iluminação Industrial" class="link">Iluminação Industrial</a></li>
                        <li><a href="produto-interna.php" title="Estruturas Metálicas" class="link">Portico/Estruturas Metálicas</a></li>
                        <li><a href="produto-interna.php" title="Iluminação Específica" class="link">Iluminação Específica</a></li>
                        <li><a href="produto-interna.php" title="Linha LED" class="link">Linha LED/Drives</a></li>
                        <li><a href="produto-interna.php" title="Iluminação Decorativa" class="link">Iluminação Decorativa</a></li>
                        <li><a href="produto-interna.php" title="Lançamentos" class="link">Lançamentos</a></li>
                        <li><a href="produto-interna.php" title="Poste" class="link">Poste</a></li>
                    </ul>
                </li>

                <li><a href="portfolio.php" title="Portolio" <?php if($url == "portfolio.php"){echo "class='ativo'";} ?>>Portolio</a></li>

                <li><a href="noticias.php" title="Notícias" <?php if($url == "noticias.php"){echo "class='ativo'";} ?>>Notícias</a></li>

                <li><a href="representantes.php" title="Representantes" <?php if($url == "representantes.php"){echo "class='ativo'";} ?>>Representantes</a></li>

                <li><a href="clientes.php" title="Clientes" <?php if($url == "clientes.php"){echo "class='ativo'";} ?>>Clientes</a></li>

                <li class="pdg-right"><a href="contato.php" title="Contato" <?php if($url == "contato.php"){echo "class='ativo'";} ?>>Contato</a></li>
            </ul>
        </nav>
    </header><!-- FINAL HEADER -->