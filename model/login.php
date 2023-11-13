<?php
require_once("../controller/user.class.php");
require_once("../controller/pontuacao.class.php");
require_once("../controller/database.class.php");
require_once("../controller/validation.class.php");
require_once("../controller/session.class.php");

session_start();

$jsonResponse = file_get_contents("php://input");
$jsonResponse = json_decode($jsonResponse, true);
$token = $jsonResponse['token'];

$session = new Session($_SESSION);
$tokenSession = $session->setTokenSession($token);

try {
    if ($jsonResponse == null) {
        throw new Exception('Erro: Dados inválidos no JSON.');
    }
    
    if ($token != $tokenSession["message"]) {
        $session->destroySession();
        throw new Exception('Erro: Token inválido.');
    }

    // Receba os dados do formulário
    $user = $jsonResponse["username"];
    $password = $jsonResponse["password"];

    // Valide os dados de entrada (por exemplo, verifique se os campos estão preenchidos)
    $db = new Database();
    $userClass = new User($db);

    // Tente autenticar o usuário
    if ($userClass->login($user, $password)) {
        // Login bem-sucedido
        // Redirecione o usuário ou exiba uma página de boas-vindas
        header("Location: ../view/index.html");
        exit();
    } else {
        // Login falhou
        $error = "Nome de usuário ou senha incorretos. Tente novamente.";
    }
} catch (Exception $e) {
    $response['sucesso'] = false;
    $response['mensagem'] = 'Erro: ' . $e->getMessage();

    echo('Erro: ' . $e->getMessage()."\n");
}