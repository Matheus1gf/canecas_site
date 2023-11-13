<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>HOME</title>
    <!-- Links do BootStrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- Link do css -->
    <?php
    include 'estilo.php';
    ?>
</head>
<body>
   <div class="topo">
    <!-- Código de JavaScript do Bootstrap -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- Login -->
    <?php
       include 'loginhome.php';
    ?>
    <!-- Fim do Login -->
    <!--- Logo -->
    <?php
       include 'logo.php';
    ?>
    <!-- Fim da Logo -->

    </div>
    <!--Menu-->
    <?php
    include 'menu.php';
    ?>
    <!-- Final do menu -->

    <div id="container">
    
    <!-- Caixa de pedidos -->
    <div class="container mt-5 mb-5" id="container-pedidos">
        
    <?php

        if (isset($_SESSION["nome"])){

    ?>

    <h2 id="pag-pedidos">Página de pedidos</h2>
    <hr class="linha cor-botao">
    <p class="descricao text-center">Escolha um produto, selecione as imagens que deseja personalizar e envie uma descrição de como deseja sua personalização.</p><p class="descricao text-center"> Após o envio, nós entraremos em contato para maiores detalhes.</p>
    <h3 class="item mt-5">Item</h3>

    <form action="mailto:luisverissimo@juanapersonalizacoes.com.br" method="post">
            <input type="hidden" value="<?php echo $_SESSION["nome"]?>" name="nome">
            <input type="hidden" value="<?php echo $_SESSION["sobrenome"]?>" name="sobrenome">
            <input type="hidden" value="<?php echo $_SESSION["tel"]?>" name="telefone">
            <input type="hidden" value="<?php echo $_SESSION["cel"]?>" name="celular">
            <input type="hidden" value="<?php echo $_SESSION["email"]?>" name="email">
        <div id="itens">
            <div class="form-check-inline">
            <input type="radio" id="item-caneca" name="item"> Caneca
            </div>
            <div class="form-check-inline">
            <input type="radio" id="item-chinelo" name="item" > Chinelo
            </div>
            <div class="form-check-inline">
            <input type="radio" id="item-camisa" name="item" > Camisa
            </div>
            <div class="form-check-inline">
            <input type="radio" id="item-bolsa" name="item"> Bolsa
            </div>
            <div class="form-check-inline">
            <input type="radio" id="item-outros" name="item"> Outros
            </div>
        </div>
       <script>
        $("#item-caneca").click(function(){
            $("#Caneca").show();
            $("#Chinelo").hide();
            $("#Camisa").hide();
            $("#Bolsa").hide();
            $("#Outros").hide();
            $("#Avental").hide();
            $("#Azuleijo").hide();
            $("#Chaveiro-comum").hide();
            $("#Chaveiro-espuma").hide();
            $("#Quebra-cabecas").hide();
            
            $("#caneca-magica").click(function(){
            $("#tipo-magica").show();
            $("#tipo-alcacolorida").hide();
            $("#tipo-tarjabranca").hide();
            $("#tipo-chopp").hide();
            $("#tipo-cromadas").hide();
            $("#tipo-fundocolorido").hide();
            $("#tipo-metalizadas").hide();
            $("#tipo-squeeze").hide();   
        });
        $("#caneca-alcacolorida").click(function(){
            $("#tipo-magica").hide();
            $("#tipo-alcacolorida").show();
            $("#tipo-tarjabranca").hide();
            $("#tipo-chopp").hide();
            $("#tipo-cromadas").hide();
            $("#tipo-fundocolorido").hide();
            $("#tipo-metalizadas").hide();
            $("#tipo-squeeze").hide();   
        });
        $("#caneca-tarjabranca").click(function(){
            $("#tipo-magica").hide();
            $("#tipo-alcacolorida").hide();
            $("#tipo-tarjabranca").show();
            $("#tipo-chopp").hide();
            $("#tipo-cromadas").hide();
            $("#tipo-fundocolorido").hide();
            $("#tipo-metalizadas").hide();
            $("#tipo-squeeze").hide();   
        });
        $("#caneca-chopp").click(function(){
            $("#tipo-magica").hide();
            $("#tipo-alcacolorida").hide();
            $("#tipo-tarjabranca").hide();
            $("#tipo-chopp").show();
            $("#tipo-cromadas").hide();
            $("#tipo-fundocolorido").hide();
            $("#tipo-metalizadas").hide();
            $("#tipo-squeeze").hide();   
        });
        $("#caneca-cromada").click(function(){
            $("#tipo-magica").hide();
            $("#tipo-alcacolorida").hide();
            $("#tipo-tarjabranca").hide();
            $("#tipo-chopp").hide();
            $("#tipo-cromadas").show();
            $("#tipo-fundocolorido").hide();
            $("#tipo-metalizadas").hide();
            $("#tipo-squeeze").hide();   
        });
        $("#caneca-fundocolorido").click(function(){
            $("#tipo-magica").hide();
            $("#tipo-alcacolorida").hide();
            $("#tipo-tarjabranca").hide();
            $("#tipo-chopp").hide();
            $("#tipo-cromadas").hide();
            $("#tipo-fundocolorido").show();
            $("#tipo-metalizadas").hide();
            $("#tipo-squeeze").hide();   
        });
        $("#caneca-metalizada").click(function(){
            $("#tipo-magica").hide();
            $("#tipo-alcacolorida").hide();
            $("#tipo-tarjabranca").hide();
            $("#tipo-chopp").hide();
            $("#tipo-cromadas").hide();
            $("#tipo-fundocolorido").hide();
            $("#tipo-metalizadas").show();
            $("#tipo-squeeze").hide();   
        });
        $("#squeeze").click(function(){
            $("#tipo-magica").hide();
            $("#tipo-alcacolorida").hide();
            $("#tipo-tarjabranca").hide();
            $("#tipo-chopp").hide();
            $("#tipo-cromadas").hide();
            $("#tipo-fundocolorido").hide();
            $("#tipo-metalizadas").hide();
            $("#tipo-squeeze").show();   
        });
        });
        $("#item-chinelo").click(function(){
            $("#Chinelo").show();
            $("#Caneca").hide();
            $("#Camisa").hide();
            $("#Bolsa").hide();
            $("#Outros").hide();
            $("#Avental").hide();
            $("#Azuleijo").hide();
            $("#Chaveiro-comum").hide();
            $("#Chaveiro-espuma").hide();
            $("#Quebra-cabecas").hide();
            $("#tipo-magica").hide();
            $("#tipo-alcacolorida").hide();
            $("#tipo-tarjabranca").hide();
            $("#tipo-chopp").hide();
            $("#tipo-cromadas").hide();
            $("#tipo-fundocolorido").hide();
            $("#tipo-metalizadas").hide();
            $("#tipo-squeeze").hide(); 
        });
        $("#item-camisa").click(function(){
            $("#Camisa").show();
            $("#Chinelo").hide();
            $("#Caneca").hide();
            $("#Bolsa").hide();
            $("#Outros").hide();
            $("#Avental").hide();
            $("#Azuleijo").hide();
            $("#Chaveiro-comum").hide();
            $("#Chaveiro-espuma").hide();
            $("#Quebra-cabecas").hide();
            $("#tipo-magica").hide();
            $("#tipo-alcacolorida").hide();
            $("#tipo-tarjabranca").hide();
            $("#tipo-chopp").hide();
            $("#tipo-cromadas").hide();
            $("#tipo-fundocolorido").hide();
            $("#tipo-metalizadas").hide();
            $("#tipo-squeeze").hide();
        });
        $("#item-bolsa").click(function(){
            $("#Bolsa").show();
            $("#Chinelo").hide();
            $("#Camisa").hide();
            $("#Caneca").hide();
            $("#Outros").hide();
            $("#Avental").hide();
            $("#Azuleijo").hide();
            $("#Chaveiro-comum").hide();
            $("#Chaveiro-espuma").hide();
            $("#Quebra-cabecas").hide();
            $("#tipo-magica").hide();
            $("#tipo-alcacolorida").hide();
            $("#tipo-tarjabranca").hide();
            $("#tipo-chopp").hide();
            $("#tipo-cromadas").hide();
            $("#tipo-fundocolorido").hide();
            $("#tipo-metalizadas").hide();
            $("#tipo-squeeze").hide();
        });
        $("#item-outros").click(function(){
            $("#Outros").show();
            $("#Chinelo").hide();
            $("#Camisa").hide();
            $("#Bolsa").hide();
            $("#Caneca").hide();
            $("#tipo-magica").hide();
            $("#tipo-alcacolorida").hide();
            $("#tipo-tarjabranca").hide();
            $("#tipo-chopp").hide();
            $("#tipo-cromadas").hide();
            $("#tipo-fundocolorido").hide();
            $("#tipo-metalizadas").hide();
            $("#tipo-squeeze").hide();
            
            $("#item-avental").click(function(){
            $("#Avental").show();
            $("#Azuleijo").hide();
            $("#Chaveiro-comum").hide();
            $("#Chaveiro-espuma").hide();
            $("#Quebra-cabecas").hide();
        });
        $("#item-azuleijo").click(function(){
            $("#Avental").hide();
            $("#Azuleijo").show();
            $("#Chaveiro-comum").hide();
            $("#Chaveiro-espuma").hide();
            $("#Quebra-cabecas").hide();
        });
        $("#item-chaveirocomum").click(function(){
            $("#Avental").hide();
            $("#Azuleijo").hide();
            $("#Chaveiro-comum").show();
            $("#Chaveiro-espuma").hide();
            $("#Quebra-cabecas").hide();
        });
        $("#item-chaveiroespumado").click(function(){
            $("#Avental").hide();
            $("#Azuleijo").hide();
            $("#Chaveiro-comum").hide();
            $("#Chaveiro-espuma").show();
            $("#Quebra-cabecas").hide();
        });
        $("#item-quebracabecas").click(function(){
            $("#Avental").hide();
            $("#Azuleijo").hide();
            $("#Chaveiro-comum").hide();
            $("#Chaveiro-espuma").hide();
            $("#Quebra-cabecas").show();
        });
        });           
       
    </script>
   
        <!-- Caixas de Tipos de Itens -->
        
        <!-- Canecas -->
        
        <div id="Caneca">
            <h3 class="tipo mt-5">Tipo</h3>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="caneca" id="caneca-comum"> Caneca comum          
            </div>
            
            <div class="form-check">
              <input class="form-check-input" type="radio" name="caneca" id="caneca-magica"> Caneca Mágica          
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="caneca" id="caneca-alcacolorida"> Caneca com alça colorida          
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="caneca" id="caneca-tarjabranca"> Caneca com tarja branca          
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="caneca" id="caneca-chopp"> Caneca de chopp          
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="caneca" id="caneca-cromada"> Caneca cromada          
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="caneca" id="caneca-fundocolorido"> Caneca de fundo colorido          
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="caneca" id="caneca-metalizada"> Caneca metalizada          
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="caneca" id="squeeze"> Squeeze         
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="caneca" id="copo-japones"> Copo japonês          
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="caneca" id="copo-café"> Copo de café          
            </div>
        </div>
        
    <!-- Tipos de canecas magicas -->
    
    <div id="tipo-magica">
            <h3 class="tipo mt-5">Tipos Canecas mágicas</h3>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="caneca m" id="tipo-m"> Caneca mágica com formato de coração         
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="caneca m" id="tipo-m"> Caneca mágica com alça de coração          
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="caneca m" id="tipo-m"> Caneca mágica com interior e colher coloridos        
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="caneca m" id="tipo-m"> Caneca mágica fosca         
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="caneca m" id="tipo-m"> Caneca mágica brilhante         
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="caneca m" id="tipo-m"> Caneca alça e interior         
            </div>
    </div>
    
    <!-- Tipos de canecas com alça colorida -->
    
    <div id="tipo-alcacolorida">
            <h3 class="tipo mt-5">Tipos de alça colorida</h3>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="tipo alca colorida" id="caneca-alcacolorida"> Caneca fundo, alça e interior        
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="tipo alca colorida" id="caneca-alcacolorida"> Caneca alça e interior         
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="tipo alca colorida" id="caneca-alcacolorida"> Caneca com alça de coração e interior         
            </div>   
            <div class="form-check">
              <input class="form-check-input" type="radio" name="tipo alca colorida" id="caneca-alcacolorida"> Caneca com alça colorida         
            </div>
        </div>

    <!-- Tipos de canecas com tarja branca -->
        
    <div id="tipo-tarjabranca">
            <h3 class="tipo mt-5">Tipos de tarja branca</h3>
            <div class="form-check">
                  <input class="form-check-input" type="radio" name="tipo tb" id="tipo-tb"> Caneca neon com tarja branca         
            </div>
            <div class="form-check">
                  <input class="form-check-input" type="radio" name="tipo tb" id="tipo-tb"> Caneca preta com tarja branca         
            </div>   
        </div>
    
    <!-- Tipos de canecas chopp -->
    
    <div id="tipo-chopp">
        <h3 class="tipo mt-5">Tipos chopp</h3>
        <div class="form-check">
              <input class="form-check-input" type="radio" name="tipo c" id="tipo-c"> Caneca de chopp de vidro jateada 330ml        
        </div>
        <div class="form-check">
              <input class="form-check-input" type="radio" name="tipo c" id="tipo-c"> Caneca de chopp de alumínio 400ml         
        </div>
        <div class="form-check">
              <input class="form-check-input" type="radio" name="tipo c" id="tipo-c"> Caneca de shopp de vidro 375ml        
        </div>
        <div class="form-check">
              <input class="form-check-input" type="radio" name="tipo c" id="tipo-c"> Caneca de vidro com fundo estrelado 475ml         
        </div>
        <div class="form-check">
              <input class="form-check-input" type="radio" name="tipo c" id="tipo-c">  Caneca de vidro beer mug 475ml        
        </div>
        <div class="form-check">
              <input class="form-check-input" type="radio" name="tipo c" id="tipo-c"> Caneca de vidro com fundo estrelado e tarja 475ml         
        </div>
    </div>
    
    <!-- Tipos de canecas cromadas -->
    
    <div id="tipo-cromadas">
        <h3 class="tipo mt-5">Tipos cromadas</h3>
        <div class="form-check">
              <input class="form-check-input" type="radio" name="tipo crom" id="tipo-crom"> Cromada prateada     
        </div>
        <div class="form-check">
              <input class="form-check-input" type="radio" name="tipo crom" id="tipo-crom"> Cromada dourada     
        </div>
    </div>
    
    <!-- Tipos de fundo colorido -->
    
    <div id="tipo-fundocolorido">
        <h3 class="tipo mt-5">Tipos fundo colorido</h3>
        <div class="form-check">
              <input class="form-check-input" type="radio" name="tipo fc" id="tipo-fc"> Caneca fundo colorido   
        </div>
        <div class="form-check">
              <input class="form-check-input" type="radio" name="tipo fc" id="tipo-fc"> Caneca fundo, alça e interior   
        </div>
        <div class="form-check">
              <input class="form-check-input" type="radio" name="tipo fc" id="tipo-fc"> Caneca alça e interior   
        </div>
        <div class="form-check">
              <input class="form-check-input" type="radio" name="tipo fc" id="tipo-fc"> Caneca com alça de coração e interior  
        </div>
    </div>
    
    <!-- Tipos de metalizada -->
    
    <div id="tipo-metalizadas">
        <h3 class="tipo mt-5">Tipos metalizadas</h3>
        <div class="form-check">
              <input class="form-check-input" type="radio" name="tipo metalizada" id="tipo-metalizada"> Caneca metalizada rosa  
        </div>
        <div class="form-check">
              <input class="form-check-input" type="radio" name="tipo metalizada" id="tipo-metalizada"> Caneca metalizada prateada  
        </div>
        <div class="form-check">
              <input class="form-check-input" type="radio" name="tipo metalizada" id="tipo-metalizada"> Caneca metalizada dourada  
        </div>
    </div>
    
    <!-- Tipos de squeeze -->
    
    <div id="tipo-squeeze">
        <h3 class="tipo mt-5">Tipos squeeze</h3>
        <div class="form-check">
              <input class="form-check-input" type="radio" name="tipo s" id="tipo-s"> Squeeze branco com biqueira e tampa 500ml   
        </div>
        <div class="form-check">
              <input class="form-check-input" type="radio" name="tipo s" id="tipo-s"> Squeeze branco com bico retrátil 600ml
        </div>
        <div class="form-check">
              <input class="form-check-input" type="radio" name="tipo s" id="tipo-s"> Squeeze branco com tampa mosquetão
        </div>
    </div>
    
        
    <!-- Chinelo -->
        
        <div id="Chinelo">
            <h3 class="tipo mt-5">Tipo</h3>
             <div class="form-check">
              <input class="form-check-input" type="radio" name="chinelo" id="chinelo-infantil"> Chinelo infantil          
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="chinelo" id="chinelo-adulto"> Chinelo adulto          
            </div>
        </div>
        
    <!-- Camisa -->
        
    
         <div id="Camisa">
             <h3 class="tipo mt-5">Tipo</h3>
             <div class="form-check">
              <input class="form-check-input" type="radio" name="camisa" id="camisa-infantil"> Camisa infantil          
            </div>
             <div class="form-check">
              <input class="form-check-input" type="radio" name="camisa" id="camisa-adulto"> Camisa adulto          
            </div>
        </div>
    
    <!-- Bolsa -->
        
    
         <div id="Bolsa">
             <h3 class="tipo mt-5">Tipo</h3>
             <div class="form-check">
              <input class="form-check-input" type="radio" name="bolsa" id="bolsa-comum"> Bolsa comum          
            </div>
             <div class="form-check">
              <input class="form-check-input" type="radio" name="bolsa" id="bolsa-esportiva"> Bolsa esportiva         
            </div>
        </div>
    
    <!-- Outros -->
    
    <div id="Outros">
        <h3 class="outros mt-5">Outros Itens</h3>
            <div class="form-check-inline">
            <input type="radio" id="item-avental" name="outros"> Avental
            </div>
            <div class="form-check-inline">
            <input type="radio" id="item-azuleijo" name="outros" > Azuleijo
            </div>
            <div class="form-check-inline">
            <input type="radio" id="item-chaveirocomum" name="outros" > Chaveiro comum
            </div>
            <div class="form-check-inline">
            <input type="radio" id="item-chaveiroespumado" name="outros"> Chaveiro espumado
            </div>
            <div class="form-check-inline">
            <input type="radio" id="item-quebracabecas" name="outros"> Quebra-cabeças
            </div>
    </div>
    
    <!-- Outros-tipos -->
    <!-- Avental -->
     <div id="Avental">
            <h3>Tipo</h3>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="avental" id="avental-comum"> Avental Comum          
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="avental" id="avental-bolso"> Avental com bolso          
            </div>
    </div>
    <!-- Azuleijos -->    
    
    <div id="Azuleijo">
             <h3>Tipo</h3>
             <div class="form-check">
              <input class="form-check-input" type="radio" name="azuleijo" id="azuleijo-simples"> Azuleijo simples          
            </div>
             <div class="form-check">
              <input class="form-check-input" type="radio" name="azuleijo" id="azuleijo-simples"> Azuleijo com relógio          
            </div>
    </div>
    
    <!-- Chaveiro comum -->
    
    <div id="Chaveiro-comum">
             <h3>Tipo</h3>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="chaveiro comum" id="chaveiro-coracao"> Chaveiro coração          
            </div>
             <div class="form-check">
              <input class="form-check-input" type="radio" name="chaveiro comum" id="chaveiro-quadrado"> Chaveiro quadrado           
            </div>
             <div class="form-check">
              <input class="form-check-input" type="radio" name="chaveiro comum" id="chaveiro-escudo">Chaveiro escudo           
            </div>
             <div class="form-check">
              <input class="form-check-input" type="radio" name="chaveiro comum" id="chaveiro-osso">Chaveiro osso           
            </div>
    </div>
    
    <!-- Chaveiro de espuma -->
    
       
     <div id="Chaveiro-espuma">
             <h3>Tipo</h3>
             <div class="form-check">
              <input class="form-check-input" type="radio" name="chaveiro espuma" id="chaveiro-espumacoracao">Chaveiro de espuma coração           
            </div>
             <div class="form-check">
              <input class="form-check-input" type="radio" name="chaveiro espuma" id="chaveiro-espumaredondo">Chaveiro de espuma redondo           
            </div>
    </div>
    
    <!-- Quebra-cabeças -->
    
    <div id="Quebra-cabecas">
         <h3>Tipo</h3>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="quebra cabecas" id="quebra-cabeca10">  Quebra-cabeças de coração ( 10 peças )         
            </div>
         <div class="form-check">
              <input class="form-check-input" type="radio" name="quebra cabecas" id="quebra-cabeca52"> Quebra-cabeças de coração ( 52 peças )          
            </div>
         <div class="form-check">
              <input class="form-check-input" type="radio" name="quebra cabecas" id="quebra-cabeca75"> Quebra-cabeças de coração ( 75 peças )          
            </div>
         <div class="form-check">
              <input class="form-check-input" type="radio" name="quebra cabecas" id="quebra-cabeca51"> Quebra-cabeças oval ( 51 peças )          
            </div>
         <div class="form-check">
              <input class="form-check-input" type="radio" name="quebra cabecas" id="quebra-cabeca41"> Quebra-cabeças redondo ( 41 peças )          
            </div>
         <div class="form-check">
              <input class="form-check-input" type="radio" name="quebra cabecas" id="quebra-cabeca12">  Quebra-cabeças retangular ( 12 peças )         
            </div>
         <div class="form-check">
              <input class="form-check-input" type="radio" name="quebra cabecas" id="quebra-cabeca24"> Quebra-cabeças retangular ( 24 peças )          
            </div>
         <div class="form-check">
              <input class="form-check-input" type="radio" name="quebra cabecas" id="quebra-cabeca48"> Quebra-cabeças retangular ( 48 peças )          
            </div>
         <div class="form-check">
              <input class="form-check-input" type="radio" name="quebra cabecas" id="quebra-cabeca80"> Quebra-cabeças retangular ( 80 peças )
          
            </div>
           
    </div>
    
    
    <table width="32%" border="0" align="text-left" class="arquivo mt-5"> 
    <tr>
    <td><div align="right" class="texto">Anexo</div></td>
    <td><input name="arquivo" type="file"></td>
    </tr>
    <tr>
    <td><div align="right" class="texto">Mensagem</div></td>
    <td><textarea name="mensagem" cols="50" rows="07" id="mensagem"></textarea></td><br>
    </tr>
    <tr>
    <td></td>
    <td><input type="submit" class="btn btn-dark  cor-botao text-white" name="Submit" value="Fazer pedido"></td>
    </tr>
    </table>
    
    
    
    </form>
    <?php }else{
        echo "<script language='javascript' type='text/javascript'>alert('Faça o login');window.location.href='login.php'</script>";
    }
    ?>
      </div>
      <!-- rodapé -->
    <footer class="cor-botao p-4" >
    <div class="text-center text-white">
        <p>Banco de Areia, Mesquita - RJ, 26564-000</p>
        <p>Copyright © 2018 - Todos os direitos reservados.</p> 
    </div>   
    <div class="botao btn btn bg-white p-0">
        <a href="https://www.facebook.com/juanapersonalizacoes/?ref=settings"><img src="img/social/facebook.png" alt="" ></a>
    </div>
    <div class="btn btn bg-white p-0">
        <a href="https://web.telegram.org/#/im?p=u777000_4041729175755639182"><img src="img/social/telegram.png" alt=""></a>
    </div>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </div>
  </body>
</html>