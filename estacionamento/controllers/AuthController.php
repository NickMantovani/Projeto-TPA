<?php
// controllers/AuthController.php
require_once 'D:\Xamp\htdocs\estacionamento\models\Usuario.php';
require_once 'D:\Xamp\htdocs\estacionamento\config\database.php'; // Corrigido para incluir o arquivo correto

class AuthController {
    public function login() {
        session_start();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $usuario = new Usuario($GLOBALS['pdo']);
            $user = $usuario->login($email, $senha);

            if ($user) {
                $_SESSION['usuario'] = $user; // Salva os dados do usuário na sessão
                header("Location: /estacionamento/views/veiculos/index.php"); // Redireciona para a área de veículos
                exit;
            } else {
                echo "Credenciais inválidas."; // Mensagem de erro
            }
        }
        include 'views/login.php'; // Carrega a página de login
    }


    public function register() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $usuario = new Usuario($GLOBALS['pdo']);
            if ($usuario->register($nome, $email, $senha)) {
                echo "Usuário cadastrado com sucesso!";
                header("Location: /estacionamento/views/login.php");
                exit;
            } else {
                echo "Erro ao cadastrar o usuário.";
            }
        }
        include 'views/register.php';
    }

    public function logout() {
        session_start();
        session_unset();
        session_destroy();
        header("Location: /estacionamento/index.php");
        exit;
    }
}
?>
