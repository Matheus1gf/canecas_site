<?php
session_start();
    $senha = md5($_POST["senha"]);
    $senhadois = md5($_POST["senhadois"]);

    include_once 'conexao.php';
    $id = $_SESSION["id"];
    $sql = "UPDATE cliente SET senha='".$senha."' WHERE id='".$id."';";    
    
    if ($senha == null){
    echo "<script language='javascript' type='text/javascript'>alert('Digite a senha desejada');window.location.href='login.php'</script>";
}else{
    if ($senhadois == null){
        echo "<script language='javascript' type='text/javascript'>alert('Redigite a senha');window.location.href='login.php'</script>";
    }else{
        if ($senha != $senhadois){
            echo "<script language='javascript' type='text/javascript'>alert('As senhas estão diferentes');window.location.href='login.php'</script>";
        }else{
        if  ($sql = true){
            echo "<script language='javascript' type='text/javascript'>alert('Senha alterada com sucesso');window.location.href='login.php'</script>";
        }   
            }
        }
    } 
        mysqli_close($con);
    
        
        
        
        
      

