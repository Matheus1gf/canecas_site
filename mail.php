<?php
$to      = 'luisverissimo@juanapersonalizacoes.com';
$subject = 'Nova Caneca';
$message = $_POST['mensagem'];
$headers = '';

mail($to, $subject, $message, $headers);
?>