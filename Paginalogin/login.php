<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Login</h1>
        <form action="validarlogin.php" method="POST">
            <input type="text" name="login" placeholder="Login">
            <input type="password" name="senha" placeholder="Senha">
            <input type="submit" value="Acessar">     
        </form>       
            <?php
            include_once 'conecta .php';
            
            $query = "select * from produto";
            $result = mysqli_query($link, $query);
            
            if(mysqli_num_rows($result) > 0){
                $linha = mysqli_fetch_array($result);
                
        
            ?>
        <table>
                 <?php 
                    while (mysql_fetch_array($result)) {
                             
                 ?>  
            <tr> 
            <td><img src="<?php echo $linha ["imagem"]?>"/></td>
            <td><?php echo $linha ["descricao"]?></td>
            <td><?php echo $linha ["valor"]?></td>
            </tr>
        </table>
        

              
    </body>
</html>
