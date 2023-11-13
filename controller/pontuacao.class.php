<?php

class Pontuacao {
    private $conn;
    private $table_name = "pontuacao";

    private $id;
    private $id_usuario;
    private $pontos;
    private $porcentagem_comissao;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getPontos()
    {
        return $this->pontos;
    }

    public function setPontos($pontos)
    {
        $this->pontos = $pontos;
        return $this;
    }

    public function getId_usuario()
    {
        return $this->id_usuario;
    }

    public function setId_usuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;
        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getPorcentagem_comissao()
    {
        return $this->porcentagem_comissao;
    }

    public function setPorcentagem_comissao($porcentagem_comissao)
    {
        $this->porcentagem_comissao = $porcentagem_comissao;
        return $this;
    }

    // Método para incluir a pontuação de um usuário
    public function incluirPontuacao() {
        $query = "INSERT INTO " . $this->table_name . " (id_usuario, pontos) VALUES (:id_usuario, :pontos)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":id_usuario", $this->id_usuario);
        $stmt->bindParam(":pontos", $this->pontos);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    // Método para consultar a pontuação de um usuário
    public function consultarPontuacao() {
        $query = "SELECT pontos FROM " . $this->table_name . " WHERE id_usuario = :id_usuario";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":id_usuario", $this->id_usuario);

        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        return $row['pontos'];
    }

    // Método para atualizar os pontos do usuário
    public function atualizaPontuacao(){
        $query = "UPDATE  " . $this->table_name . " SET pontos = :pontos WHERE id_usuario = :id_usuario";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":id_usuario", $this->id_usuario);
        $stmt->bindParam(":pontos", $this->pontos);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    public function calculaPontos($valor_comissao){
        $this->pontos = floor($valor_comissao / 5);
        return $this->pontos;
    }

    public function calculaPorcentagemComissao($valor_comissao, $valor_compra) {
        $this->porcentagem_comissao = ($valor_comissao * 100) / $valor_compra;
        return $this->porcentagem_comissao;
    }
    
}