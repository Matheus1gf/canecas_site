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


    $inputData = [
        'nome_completo' => $jsonResponse['nome_completo'],
        'cpf' => $jsonResponse['cpf'],
        'email' => $jsonResponse['email'],
        'data_nascimento' => $jsonResponse['data_nascimento'],
        'sexo' => $jsonResponse['sexo'] ?? "",
        'cidade' => $jsonResponse['cidade'],
        'estado' => $jsonResponse['estado'],
        'bairro' => $jsonResponse['bairro'],
        'rua' => $jsonResponse['rua'],
        'numero' => $jsonResponse['numero'],
        'complemento' => $jsonResponse['complemento'],
        'rg' => $jsonResponse['rg'],
        'senha' => $jsonResponse['senha'],
        'foto' => $jsonResponse['foto'] ?? "...",
        'conta_bancaria' => $jsonResponse['conta_bancaria'],
        'banco' => $jsonResponse['banco'],
        'agencia' => $jsonResponse['agencia'],
        'pix' => $jsonResponse['pix']
    ];

    $db = new Database();
    $dados = new Validation(...$inputData);
    $dadosTratados = $dados->validaDados();
    $user = new User($db, ...$dadosTratados["message"]);

    $user->create();

    $response['sucesso'] = true;
    $response['mensagem'] = 'Cadastro realizado com sucesso.';

    echo('Cadastro realizado com sucesso.'."\n");
} catch (Exception $e) {
    $response['sucesso'] = false;
    $response['mensagem'] = 'Erro: ' . $e->getMessage();

    echo('Erro: ' . $e->getMessage()."\n");
}