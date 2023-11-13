<?php
//inclui o arquivo de conexão
include_once 'conecta.php';


// criar as variaveis para guardar os valores enviados por POST
$login = $_POST["login"];
$senha = $_POST["senha"];        

$query = "select * from login where login = '".$login."' and senha  = '".$senha."';";

$result = mysqli_query($link, $query);

if(mysqli_num_rows($result) > 0){
    session_start();
    $registro = mysqli_fetch_array($result);
    $_session["usuario"] = $registro["login"];
    echo "<script>alert('Olá $login');</script>";
    echo "<script>window.location='index.php';</script>";
}else{
    echo "<script>alert('Você não tem acesso');</script>";
    echo "<script>window.location='index.php';</script>";
}