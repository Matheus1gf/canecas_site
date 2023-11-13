<?php
  session_start();
  if (isset($_SESSION["nome"])){
    ?>
    <form action="verificarlogin.php">
    <div class="logado">
    <a href="dados.php" class="text-dark float-right mr-4"><?php echo $_SESSION["nome"];?></a>
    </div>
    </form>
    <?php
  }else{
    include_once 'recuperacao.php';
?>

<form class="login float-right mr-3" action="verificarlogin.php" method="post">
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="email">Usuário</label>
      <input type="text" name="email" class="form-control mb-2" id="email" placeholder="Email">
    </div>
    <div class="col-auto">
      <label class="sr-only" for="senha">Senha</label>
      <div class="input-group mb-2">
        <div class="input-group-prepend">
        </div>
        <input type="password" name="senha" class="form-control" id="senha" placeholder="Senha">
      </div>
    </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-dark text-white cor-botao mb-2">Enviar</button>
    </div>
  </div>
      <div class="textocadastro float-right">
      <a href="" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
      Esqueci minha senha
      </a>

    </div>
      <div class="textocadastro float-left">
        <a href="cadastro.php">Clique aqui para se cadastrar</a>
    </div>

    </form>
    <div class="botaologin">
        <a href="login.php"><button type="submit" class="btn btn-dark text-white cor-botao">Login</button></a>
    </div>
  <?php } ?>