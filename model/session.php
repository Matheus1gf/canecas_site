<?php

require_once("../controller/session.class.php");
session_start();
$session = new Session($_SESSION);
$jsonResponse = file_get_contents("php://input");
$jsonResponse = json_decode($jsonResponse);

$response = null;

if (isset($_POST['conexao']) || isset($_GET['conexao']) || isset($jsonResponse->conexao)) {
    $conexao = $_POST['conexao'] ?? $_GET['conexao'] ?? $jsonResponse->conexao;

    switch ($conexao) {
        case 'start':
            $response = $session->stratSession();
            break;

        case 'stop':
            $response = $session->destroySession();
            break;

        case 'gera_token':
            $response = $session->getTokenSession();
            break;
        
        case 'seta_token':
            $response = $session->setTokenSession($jsonResponse["token"]);
            break;

        default:
            $response = 'Operação desconhecida';
            break;
    }

    if ($response['retcode'] != 1) {
        $response = 'Falha na operação';
    }
} else {
    $response = 'Operação não especificada';
}

echo json_encode($response);
