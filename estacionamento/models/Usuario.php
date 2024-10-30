<?php
// models/Usuario.php
class Usuario {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function login($email, $senha) {
        $stmt = $this->pdo->prepare("SELECT * FROM usuarios WHERE email = :email AND senha = :senha");
        $stmt->execute(['email' => $email, 'senha' => $senha]);
        return $stmt->fetch();
    }

    public function register($nome, $email, $senha) {
        $stmt = $this->pdo->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
        return $stmt->execute([$nome, $email, $senha]);
    }
}
?>
