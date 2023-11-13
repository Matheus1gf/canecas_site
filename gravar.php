<?php
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $celular = $_POST["celular"];
    $senha = md5($_POST["senha"]);
    $senhadois = md5($_POST["senhadois"]);

 include_once 'conexao.php';

    $sql = "INSERT INTO cliente VALUES (null, '".$email."','".$nome."', '".$sobrenome."', '".$senha."', '".$celular."', '".$telefone."' )";
    if ($nome == null){
        echo "<script language='javascript' type='text/javascript'>alert('Digite seu nome');window.location.href='cadastro.php'</script>";
    }else{
        if ($sobrenome == null){
            echo "<script language='javascript' type='text/javascript'>alert('Digite seu sobrenome');window.location.href='cadastro.php'</script>";
        }else{
            if ($email == null){
                echo "<script language='javascript' type='text/javascript'>alert('Digite seu email');window.location.href='cadastro.php'</script>";
            }else{
                if ($celular == null){
                    echo "<script language='javascript' type='text/javascript'>alert('Digite seu celular');window.location.href='cadastro.php'</script>";
                }else{
                    if ($senha == null){
                        echo "<script language='javascript' type='text/javascript'>alert('Digite sua senha');window.location.href='cadastro.php'</script>";
                    }else{
                        if ($senha != $senhadois){
                            echo "<script language='javascript' type='text/javascript'>alert('As senhas estão diferentes');window.location.href='cadastro.php'</script>";
                        }else{
                            if (mysqli_query ($con, $sql)){
                                echo "<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='index.php'</script>";
                            }else{
                                echo "<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.php'</script>";
                                }
                            }
                        }
                    }
                }
            }
        }
                        
        mysqli_close($con);
    
        
        
        
        
      

