<?php
session_start();
include 'controllers/AuthController.php';
include 'controllers/VeiculoController.php';

$authController = new AuthController();
$veiculoController = new VeiculoController();

// Verifica se há uma ação definida na URL
if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'register':
            $authController->register();
            break;
        case 'login':
            $authController->login();
            break;
        case 'veiculos':
            $veiculoController->index();
            break;
        case 'add':
            $veiculoController->add();
            break;
        case 'edit':
            $veiculoController->edit();
            break;
        case 'delete':
            $veiculoController->delete();
            break;
        default:
            header("Location: views/login.php"); // Redireciona para a página de login se a ação não for reconhecida
            exit;
    }
} else {
    header("Location: views/login.php"); // Redireciona para a página de login se não houver ação
    exit;
}
?>
