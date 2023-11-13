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
    
    <!--Menu-->
    <?php
    include 'menu.php';
    ?>
    <!-- Final do menu -->
    <div id="container">
    <!-- conteudo da pagina de contato -->
<div id="conteudo" class="conteudo m-5">
    <!-- div para o conteudo da localização -->
<div id="localizacao">
       <!-- título -->
    <div id="titulo1">
     <h2>Localização</h2>
    </div>
    <!-- fim do título -->
  <hr class="linha cor-botao">
    <!-- texto da localização com mapa aqui -->

<div class="card-deck">
  <div class="card mt-4">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14714.540468167641!2d-43.423035569927364!3d-22.778918711230254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x996690c0083bc1%3A0x50d17b4be476756e!2sBanco+de+Areia%2C+Mesquita+-+RJ!5e0!3m2!1spt-BR!2sbr!4v1539990818009" width="100%" height="350" frameborder="0" style="border0" allowfullscreen></iframe>
    <div class="card-body">
      <h5 class="card-title">Sede Juana Personalizações</h5>
      <p class="card-text">Nossa sede fica situada no bairro Banco de Areia em Mesquita-RJ.</p>
      
    </div>
  </div>
   
</div>
</div>
  <!-- quadro do contato -->
<div id="contato" class="contato mt-5">
  <div id="titulo2">
   <h2>Contatos</h2>
  </div>
  <hr class="linha cor-botao">
  <!-- conteudo das três divs de contato -->
 <div class="card-deck mt-5">
  <div class="card">
   <div class="text-center">
    <img id="card" class="card-img-top mt-3" src="img/social/128/WhatsApp.png" alt="Imagem de capa do card">
    </div>
    <div class="card-body">
      <h5 class="card-title">WhatsApp</h5>
      <p class="card-text">99322-3339</p>
      <p class="card-text">97967-4479</p>  
    </div>
  </div>
  <div class="card">
   <div class="text-center">
    <img id="card" class="card-img-top mt-3" src="img/social/128/telegram.png" alt="Imagem de capa do card">
   </div>
     <div class="card-body">
      <h5 class="card-title">Telegram</h5>
      <p class="card-text">99322-3339</p>
      <p class="card-text"><a href="https://web.telegram.org/#/im?p=u777000_4041729175755639182">Clique Aqui</a></p>
      
    </div>
  </div>
  <div class="card">
   <div class="text-center">
    <img id="card" class="card-img-top mt-3" src="img/social/128/Faceb.png" alt="Imagem de capa do card">
   </div>
     <div class="card-body">
      <h5 class="card-title">Facebook</h5>
      <p class="card-text">Siga nossa página</p>
      <p class="card-text"><a href="https://www.facebook.com/juanapersonalizacoes/?ref=settings">Clique aqui!</a></p>
              </div>
          </div>
          
        </div>
    </div>

</div>
</div>

    <!-- rodapé -->
    <footer class="cor-botao p-4" >
    <div class="text-center text-white">
        <p>Copyright © 2018 - Todos os direitos reservados.</p> 
    </div>   
    </footer>
</body>
</html>