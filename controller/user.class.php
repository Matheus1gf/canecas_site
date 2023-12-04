<?php

class User {
    private $conn;
    private $table_name = "pedidos";

    private $nome_completo;
    private $celular;
    private $email;
    private $cidade;
    private $estado;
    private $bairro;
    private $foto;
    private $item;
    private $observacao;

    public function __construct($db, $nome_completo = null, $celular = null, $email = null, $cidade = null, $estado = null, $bairro = null, $foto = null, $item = null, $observacao = null) {
        $this->conn = $db->getConnection();
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

    // Método para criar um novo usuário
    public function create() {
        $query = "INSERT INTO " . $this->table_name . " (nome_completo, celular, email, cidade, estado, bairro, foto, item, observacao) 
              VALUES (:nome_completo, :celular, :email, :cidade, :estado, :bairro, :foto, :item, :observacao)";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":nome_completo", $this->nome_completo);
        $stmt->bindParam(":celular", $this->celular);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":cidade", $this->cidade);
        $stmt->bindParam(":estado", $this->estado);
        $stmt->bindParam(":bairro", $this->bairro);
        $stmt->bindParam(":foto", $this->foto);
        $stmt->bindParam(":item", $this->item);
        $stmt->bindParam(":observacao", $this->observacao);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    // Método para buscar um usuário pelo celular ou e-mail
    public function read() {
        $query = "SELECT * FROM " . $this->table_name . " WHERE celular = :celular OR email = :email";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":celular", $this->celular);
        $stmt->bindParam(":email", $this->email);

        $stmt->execute();
        return $stmt;
    }

    // Método para atualizar os dados de um usuário
    public function update($id) {
        $query = "UPDATE " . $this->table_name . " 
        SET nome_completo = :nome_completo, 
            email = :email, 
            celular = :celular, 
            cidade = :cidade, 
            estado = :estado, 
            bairro = :bairro, 
            foto = :foto, 
            item = :item, 
            observacao = :observacao, 
        WHERE id = :id";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":nome_completo", $this->nome_completo);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":celular", $this->celular);
        $stmt->bindParam(":cidade", $this->cidade);
        $stmt->bindParam(":estado", $this->estado);
        $stmt->bindParam(":bairro", $this->bairro);
        $stmt->bindParam(":foto", $this->foto);
        $stmt->bindParam(":item", $this->item);
        $stmt->bindParam(":observacao", $this->observacao);

        if ($stmt->execute()) {
        return true;
        }

        return false;

    }

    // Método para excluir um usuário
    public function delete($id) {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":id", $id);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }
}
