<?php

class User {
    private $conn;
    private $table_name = "usuarios";

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

    public function __construct($db, $nome_completo = null, $cpf = null, $email = null, $data_nascimento = null, $sexo = null, $cidade = null, $estado = null, $bairro = null, $rua = null, $numero = null, $complemento = null, $rg = null, $senha = null, $foto = null, $conta_bancaria = null, $banco = null, $agencia = null, $pix = null) {
        $this->conn = $db->getConnection();
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

    // Método para criar um novo usuário
    public function create() {
        $query = "INSERT INTO " . $this->table_name . " (nome_completo, cpf, email, data_nascimento, sexo, cidade, estado, bairro, rua, numero, complemento, rg, senha, foto, conta_bancaria, banco, agencia, pix) 
              VALUES (:nome_completo, :cpf, :email, :data_nascimento, :sexo, :cidade, :estado, :bairro, :rua, :numero, :complemento, :rg, :senha, :foto, :conta_bancaria, :banco, :agencia, :pix)";

        $stmt = $this->conn->prepare($query);

        $this->senha = password_hash($this->senha, PASSWORD_DEFAULT);

        $stmt->bindParam(":nome_completo", $this->nome_completo);
        $stmt->bindParam(":cpf", $this->cpf);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":data_nascimento", $this->data_nascimento);
        $stmt->bindParam(":sexo", $this->sexo);
        $stmt->bindParam(":cidade", $this->cidade);
        $stmt->bindParam(":estado", $this->estado);
        $stmt->bindParam(":bairro", $this->bairro);
        $stmt->bindParam(":rua", $this->rua);
        $stmt->bindParam(":numero", $this->numero);
        $stmt->bindParam(":complemento", $this->complemento);
        $stmt->bindParam(":rg", $this->rg);
        $stmt->bindParam(":senha", $this->senha);
        $stmt->bindParam(":foto", $this->foto);
        $stmt->bindParam(":conta_bancaria", $this->conta_bancaria);
        $stmt->bindParam(":banco", $this->banco);
        $stmt->bindParam(":agencia", $this->agencia);
        $stmt->bindParam(":pix", $this->pix);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    // Método para buscar um usuário pelo CPF ou e-mail
    public function read() {
        $query = "SELECT * FROM " . $this->table_name . " WHERE cpf = :cpf OR email = :email";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":cpf", $this->cpf);
        $stmt->bindParam(":email", $this->email);

        $stmt->execute();
        return $stmt;
    }

    // Método para atualizar os dados de um usuário
    public function update($id) {
        $query = "UPDATE " . $this->table_name . " 
        SET nome_completo = :nome_completo, 
            email = :email, 
            data_nascimento = :data_nascimento, 
            sexo = :sexo, 
            cidade = :cidade, 
            estado = :estado, 
            bairro = :bairro, 
            rua = :rua, 
            numero = :numero, 
            complemento = :complemento, 
            rg = :rg, 
            foto = :foto, 
            conta_bancaria = :conta_bancaria, 
            banco = :banco, 
            agencia = :agencia, 
            pix = :pix
        WHERE id = :id";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":nome_completo", $this->nome_completo);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":data_nascimento", $this->data_nascimento);
        $stmt->bindParam(":sexo", $this->sexo);
        $stmt->bindParam(":cidade", $this->cidade);
        $stmt->bindParam(":estado", $this->estado);
        $stmt->bindParam(":bairro", $this->bairro);
        $stmt->bindParam(":rua", $this->rua);
        $stmt->bindParam(":numero", $this->numero);
        $stmt->bindParam(":complemento", $this->complemento);
        $stmt->bindParam(":rg", $this->rg);
        $stmt->bindParam(":foto", $this->foto);
        $stmt->bindParam(":conta_bancaria", $this->conta_bancaria);
        $stmt->bindParam(":banco", $this->banco);
        $stmt->bindParam(":agencia", $this->agencia);
        $stmt->bindParam(":pix", $this->pix);

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

    // Método para autenticar um usuário com CPF ou e-mail e senha
    public function login($cpf_email, $senha) {
        $query = "SELECT * FROM " . $this->table_name . " WHERE (cpf = :cpf_email OR email = :cpf_email) LIMIT 1";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":cpf_email", $cpf_email);

        if ($stmt->execute()) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($user) {
                // Verificar a senha criptografada
                if (password_verify($senha, $user['senha'])) {
                    // Senha válida, o usuário está autenticado
                    return $user;
                }
            }
        }
        
        // Falha na autenticação
        return false;
    }
}
