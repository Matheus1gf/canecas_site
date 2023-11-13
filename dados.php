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
    <link rel="stylesheet" href="estilo.css">
    <script src="js/validate.js"></script>
    <script src="js/inputMask.js"></script>
    <script src="js/mascaraTelefone.js"></script>
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
    include_once 'conexao.php';
    
    ?>
    <!-- Final do menu -->

     <!-- Cadastro de cliente -->
        <div id="container-pedidos" class="cadastro container bg-white mb-5">
            
        <h1>DADOS CADASTRAIS</h1>
       <form action="atualizar.php" method="POST">
      <?php
     
      $id = $_SESSION["id"];
      $sql = "Select * from cliente where id = '".$id."';";
      $result = mysqli_query($con, $sql) or die (mysqli_error($con));
      if (mysqli_num_rows($result) == 1){
          $linha = mysqli_fetch_array($result);
      ?>
    
        <div class="form-row">
            <div class="form-group col-md-6"> <br>
              <input name="nome" type="text" class="form-control" id="nome" value = "<?php echo $linha["nome"];?>">
            </div>
          <div class="form-group col-md-6"> <br>
          <input name ="sobrenome" type="text" class="form-control" id="sobrenome" value = "<?php echo $linha["sobrenome"];?>">
          </div>
        </div>
      <div class="form-row">
          <div class="form-group col-md-6">
            <input name="telefone" type="text" class="form-control" id="telefone" value = "<?php echo $linha["telefone"];?>">
          </div>
          <div class="form-group col-md-6">
            <input name="celular" type="text" class="form-control" id="celular" value = "<?php echo $linha["celular"];?>">
          </div>
      </div>

        <div class="form-group">
          <input name="email" type="email" class="form-control" id="email" value = "<?php echo $linha["email"];?>">
        </div>
        <div class="form-group">
      <label for="senha">Nova Senha</label>
      <input type="password" name="senha" class="form-control" id="senha" placeholder="Ex: 1234">
    </div>
        <div class="form-group">
      <label for="senhadois">Digite novamente a senha</label>
      <input type="password" name="senhadois" class="form-control" id="senhadois"  placeholder="Mesma senha digitada acima">
    </div>

    <?php
  }else {
    echo "id não encontrado!";
  }
    ?>
       <button type="submit" class="btn btn-dark cor-botao mt-3 mb-5">Atualizar</button>
       <button type="submit" class="btn btn-dark cor-botao mt-3 mb-5 float-right"> <a class="text-white" href="logout.php"> Encerrar Sessão</a></button>
       
    
      
      </form>
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
  