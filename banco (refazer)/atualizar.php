<?php
session_start();
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $celular = $_POST["celular"];
    $senha = md5($_POST["senha"]);
    $senhadois = md5($_POST["senhadois"]);

 include_once 'conexao.php';
 $id = $_SESSION["id"];
 $sql = "UPDATE cliente SET email='".$email."', nome='".$nome."', sobrenome='".$sobrenome."', senha='".$senha."', celular='".$celular."', telefone='".$telefone."' WHERE id='".$id."';";        
    if ($nome == null){
        echo "<script language='javascript' type='text/javascript'>alert('Digite seu nome');window.location.href='cadastro.php'</script>";
    }else{
        if ($sobrenome == null){
            echo "<script language='javascript' type='text/javascript'>alert('Digite seu sobrenome');window.location.href='cadastro.php'</script>";
        }else{
            if ($email == null){
                echo "<script language='javascript' type='text/javascript'>alert('Digite seu email');window.location.href='cadastro.php'</script>";
            }else{
                if (mysqli_query ($con, $sql)){
                    echo "<script language='javascript' type='text/javascript'>alert('Usuário alterado com sucesso!');window.location.href='index.php'</script>";
                    
                }else{
                            echo "<script language='javascript' type='text/javascript'>alert('Não foi possível alterar esse usuário');window.location.href='cadastro.php'</script>";
                             }
                        }
                    }
                }
                        
        mysqli_close($con);
    
        
        
        
        
      

