<?php

$email = $_POST["email"];
$senha = md5($_POST["senha"]);

include_once 'conexao.php';

$sql = "Select * from cliente where email = '".$email."' and senha ='".$senha."';";

$result = mysqli_query($con, $sql) or die (mysqli_error($con));
if ($result){

     $linha = mysqli_num_rows($result) ;
             if ($linha == 1){
                 $x = mysqli_fetch_array($result);
                 session_start();
                 $_SESSION["nome"] = $x["nome"];
                 $_SESSION["id"] = $x["id"];
                 $_SESSION["sobrenome"] = $x["sobrenome"];
                 $_SESSION["telefone"] = $x["telefone"];
                 $_SESSION["celular"] = $x["celular"];
                 $_SESSION["email"] = $x["email"];
                 
                 header('Location: index.php');
                 
             }
             else{
                echo "<script language='javascript' type='text/javascript'>alert('Email/senha incorretos');window.location.href='login.php'</script>";
             }
     
 }else{
     echo"<script language='javascript' type='text/javascript'>alert('Você não possui cadastro');window.location.href='cadastro.php'</script>";
 }

?>
