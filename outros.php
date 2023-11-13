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
    <script src="js/validate.js"></script>
    <script src="js/inputMask.js"></script>
    <script src="js/mascaraTelefone.js"></script>
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
    <div id="container">
    <!--Menu-->
    <?php
    include 'menu.php';
    ?>
    <!-- Final do menu -->
    
    <!-- Banner Carousel --->
    <?php
    include 'Paginaprincipal/carousel.php';
    ?>
    <!-- Fim Banner Carousel --> 
     
    <!-- Menu de Filtro (menu que chama os tipos de personalizações) -->
    <?php
    include 'Paginaoutros/menudefiltro.php';
    ?>
    <!-- Fim menu de filtro -->
    <div class="largura-site w-90 mt-4">
    <!-- cards -->
    <div class="tab-content container" id="pills-tabContent">
    
    <!-- canecas -->
    <!-- menu 1 -->
    <?php
    include 'Paginaoutros/conteudofiltroavental.php';
    ?>
    <!-- fim menu 1 -->
      
      <!-- menu 2 -->
     <?php
     include'Paginaoutros/conteudofiltroazulejo.php';
     ?>
      <!-- fim menu 2 -->
      
       <!-- menu 3 -->
       <?php
        include 'Paginaoutros/conteudofiltrobolsas.php';
        ?>
       <!-- fim menu 3 -->
     
       <!-- menu 4 -->
        <?php
        include 'Paginaoutros/conteudofiltrocamisa.php';
        ?>
       <!-- fim menu 4 -->
       
       <!-- menu 5 -->
        <?php
        include 'Paginaoutros/conteudofiltrochaveiro.php';
        ?>
       <!-- fim menu 5 -->
       <!-- menu 6 -->
        <?php
        include 'Paginaoutros/conteudofiltrochinelo.php';
        ?>
       <!-- fim menu 6 -->
       <!-- menu 7 -->
        <?php
        include 'Paginaoutros/conteudofiltroquebra.php';
        ?>
       <!-- fim menu 7 -->
        </div>
<!-- fim do menu -->
    </div>  
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
    
</body>
</html>