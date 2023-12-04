<?php

class Validation {
    private $nome_completo;
    private $email;
    private $celular;
    private $cidade;
    private $estado;
    private $bairro;
    private $foto;
    private $item;
    private $observacao;

    public function __construct($nome_completo = null, $celular = null,  $email = null, $cidade = null, $estado = null, $bairro = null, $foto = null, $item = null, $observacao = null) {
        $this->nome_completo = $nome_completo;
        $this->celular = $celular;
        $this->email = $email;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->bairro = $bairro;
        $this->foto = $foto;
        $this->item = $item;
        $this->observacao = $observacao;
    }

    private function valida_string($string) {
        if (is_string($string)) {
            if (strlen($string) > 0) {
                return true;
            }
        }
        return false;
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
        $celular = $this->celular;
        $email = filter_var($this->email, FILTER_VALIDATE_EMAIL);
        $cidade = $this->valida_string($this->cidade);
        $estado = $this->valida_string($this->estado);
        $bairro = $this->valida_string($this->bairro);
        $foto = true; //$this->validaFoto($this->foto);
        $item = $this->valida_string($this->item);
        $observacao = $this->valida_string($this->observacao);

        if($nome_completo === false){
            return ["retcode" => -1, "message" => "Dado 'Nome Completo' inválido"];
        }
        if($email === false){
            return ["retcode" => -1, "message" => "Dado 'E-mail' inválido"];
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
        if($foto === false){
            return ["retcode" => -1, "message" => "Dado 'Foto' inválido"];
        }
        if($item === false){
            return ["retcode" => -1, "message" => "Dado 'Item' inválido"];
        }
        if($observacao === false){
            return ["retcode" => -1, "message" => "Dado 'Observacao' inválido"];
        }

        $dados_tratados = [
            'nome_completo' => $this->nome_completo,
            'celular' => $this->celular,
            'email' => $this->email,
            'cidade' => $this->cidade,
            'estado' => $this->estado,
            'bairro' => $this->bairro,
            'foto' => $this->foto,
            'item' => $this->item,
            'observacao' => $this->observacao
        ];

        return ["retcode" => 1, "message" => $dados_tratados];
    }
}