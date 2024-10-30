<?php
// controllers/HomeController.php

class HomeController {
    public function index() {
        // Verifica se o usuário está autenticado
        session_start();
        if (!isset($_SESSION['usuario'])) {
            header("Location: views/login.php");
            exit;
        }

        // Carrega a view da página inicial
        include 'views/home.php';
    }
}
?>
