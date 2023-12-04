<?php

require_once("../controller/user.class.php");
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

    $selectItem = $jsonResponse['selectItem'];
    $selectCanecas = $jsonResponse['selectCanecas'] ?? "";
    $selectChinelos = $jsonResponse['selectChinelos'] ?? "";
    $selectCamisas = $jsonResponse['selectCamisas'] ?? "";
    $selectBolsas = $jsonResponse['selectBolsas'] ?? "";
    $selectOutros = $jsonResponse['selectOutros'] ?? "";
    $item = $selectItem." - ".$selectCanecas.$selectChinelos.$selectCamisas.$selectBolsas.$selectOutros;

    $inputData = [
        'nome_completo' => $jsonResponse['nome_completo'],
        'celular' => $jsonResponse['celular'],
        'email' => $jsonResponse['email'],
        'cidade' => $jsonResponse['cidade'],
        'estado' => $jsonResponse['estado'],
        'bairro' => $jsonResponse['bairro'],
        'foto' => $jsonResponse['foto'] ?? "...",
        'item' => $item,
        'observacao' => $jsonResponse['observacao']
    ];

    $db = new Database();
    $dados = new Validation(...$inputData);
    $dadosTratados = $dados->validaDados();
    $user = new User($db, ...$dadosTratados["message"]);

    $user->create();

    $response['sucesso'] = true;
    $response['mensagem'] = 'Cadastro realizado com sucesso.';
    
    echo(json_encode($response));
} catch (Exception $e) {
    $response['sucesso'] = false;
    $response['mensagem'] = 'Erro: ' . $e->getMessage();

    echo(json_encode($response));
}