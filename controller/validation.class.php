<?php

class Validation {
    private $nome_completo;
    private $cpf;
    private $email;
    private $data_nascimento;
    private $sexo;
    private $cidade;
    private $estado;
    private $bairro;
    private $rua;
    private $numero;
    private $complemento;
    private $rg;
    private $senha;
    private $foto;
    private $conta_bancaria;
    private $banco;
    private $agencia;
    private $pix;

    public function __construct($nome_completo = null, $cpf = null, $email = null, $data_nascimento = null, $sexo = null, $cidade = null, $estado = null, $bairro = null, $rua = null, $numero = null, $complemento = null, $rg = null, $senha = null, $foto = null, $conta_bancaria = null, $banco = null, $agencia = null, $pix = null) {
        $this->nome_completo = $nome_completo;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->data_nascimento = $data_nascimento;
        $this->sexo = $sexo;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
        $this->complemento = $complemento;
        $this->rg = $rg;
        $this->senha = $senha;
        $this->foto = $foto;
        $this->conta_bancaria = $conta_bancaria;
        $this->banco = $banco;
        $this->agencia = $agencia;
        $this->pix = $pix;
    }

    private function valida_string($string) {
        if (is_string($string)) {
            if (strlen($string) > 0) {
                return true;
            }
        }
        return false;
    }

    private function valida_cpf($cpf) {
        if($this->valida_string($cpf) === false){
            return false;
        }

        $cpf = preg_replace('/[^0-9]/', '', $cpf);
        
        if (strlen($cpf) != 11) {
            return false;
        }

        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }
        
        $soma = 0;
        for ($i = 0; $i < 9; $i++) {
            $soma += intval($cpf[$i]) * (10 - $i);
        }
        $resto = $soma % 11;
        $dv1 = ($resto < 2) ? 0 : 11 - $resto;
        
        if (intval($cpf[9]) != $dv1) {
            return false;
        }
        
        $soma = 0;
        for ($i = 0; $i < 10; $i++) {
            $soma += intval($cpf[$i]) * (11 - $i);
        }
        $resto = $soma % 11;
        $dv2 = ($resto < 2) ? 0 : 11 - $resto;
        
        if (intval($cpf[10]) != $dv2) {
            return false;
        }
        
        return true; 
    }

    private function validaFoto($foto){
        if($this->valida_string($this->foto) === false){
            return false;
        }

        if ($foto > 1024 * 1024) {
            return false;
        }

        $extensoes_permitidas = array('jpg', 'jpeg', 'png', 'gif');
        $extensao = pathinfo($foto, PATHINFO_EXTENSION);
        if (!in_array($extensao, $extensoes_permitidas)) {
            return false;
        }

        return true;
    }
    

    public function validaDados(){
        $nome_completo = $this->valida_string($this->nome_completo);
        $cpf = $this->valida_cpf($this->cpf);
        $email = filter_var($this->email, FILTER_VALIDATE_EMAIL);
        $data_nascimento = $this->valida_string($this->data_nascimento);
        $sexo = $this->valida_string($this->sexo);
        $cidade = $this->valida_string($this->cidade);
        $estado = $this->valida_string($this->estado);
        $bairro = $this->valida_string($this->bairro);
        $rua = $this->valida_string($this->rua);
        $numero = filter_var($this->numero, FILTER_VALIDATE_INT);
        $complemento = $this->valida_string($this->complemento);
        $rg = filter_var($this->rg, FILTER_VALIDATE_INT);
        $senha = $this->valida_string($this->senha);
        $foto = true; //$this->validaFoto($this->foto);
        $conta_bancaria = $this->valida_string($this->conta_bancaria);
        $banco = $this->valida_string($this->banco);
        $agencia = $this->valida_string($this->agencia);
        $pix = $this->valida_string($this->pix);

        if($nome_completo === false){
            return ["retcode" => -1, "message" => "Dado 'Nome Completo' inválido"];
        }
        if($cpf === false){
            return ["retcode" => -1, "message" => "Dado 'CPF' inválido"];
        }
        if($email === false){
            return ["retcode" => -1, "message" => "Dado 'E-mail' inválido"];
        }
        if($data_nascimento === false){
            return ["retcode" => -1, "message" => "Dado 'Data de Nascimento' inválido"];
        }
        if($sexo === false || ($this->sexo !== "M" && $this->sexo !== "F" && $this->sexo !== "O")){
            return ["retcode" => -1, "message" => "Dado 'Sexo' inválido"];
        }
        if($cidade === false){
            return ["retcode" => -1, "message" => "Dado 'Cidade' inválido"];
        }
        if($estado === false){
            return ["retcode" => -1, "message" => "Dado 'Estado' inválido"];
        }
        if($bairro === false){
            return ["retcode" => -1, "message" => "Dado 'Bairro' inválido"];
        }
        if($rua === false){
            return ["retcode" => -1, "message" => "Dado 'Rua' inválido"];
        }
        if($numero === false || $numero < 0){
            return ["retcode" => -1, "message" => "Dado 'Número' inválido"];
        }
        if($complemento === false){
            return ["retcode" => -1, "message" => "Dado 'Complemento' inválido"];
        }
        if($rg === false || $rg < 0){
            return ["retcode" => -1, "message" => "Dado 'RG' inválido"];
        }
        if($senha === false){
            return ["retcode" => -1, "message" => "Dado 'Senha' inválido"];
        }
        if($foto === false){
            return ["retcode" => -1, "message" => "Dado 'Foto' inválido"];
        }
        if($conta_bancaria === false){
            return ["retcode" => -1, "message" => "Dado 'Conta' inválido"];
        }
        if($banco === false){
            return ["retcode" => -1, "message" => "Dado 'Banco' inválido"];
        }
        if($agencia === false){
            return ["retcode" => -1, "message" => "Dado 'Agência' inválido"];
        }
        if($pix === false){
            return ["retcode" => -1, "message" => "Dado 'Pix' inválido"];
        }

        $dados_tratados = [
            'nome_completo' => $nome_completo,
            'cpf' => $cpf,
            'email' => $email,
            'data_nascimento' => $data_nascimento,
            'sexo' => $sexo,
            'cidade' => $cidade,
            'estado' => $estado,
            'bairro' => $bairro,
            'rua' => $rua,
            'numero' => $numero,
            'complemento' => $complemento,
            'rg' => $rg,
            'senha' => $senha,
            'foto' => $foto,
            'conta_bancaria' => $conta_bancaria,
            'banco' => $banco,
            'agencia' => $agencia,
            'pix' => $pix
        ];

        return ["retcode" => 1, "message" => $dados_tratados];
    }
}