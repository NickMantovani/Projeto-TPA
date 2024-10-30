<?php
require_once 'D:\Xamp\htdocs\estacionamento\models\Veiculo.php';
require_once 'D:\Xamp\htdocs\estacionamento\config\database.php';

class VeiculoController {
    public function index() {
        $veiculo = new Veiculo($GLOBALS['pdo']);
        $veiculos = $veiculo->listar();
        include 'views/veiculos/index.php';
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $modelo = $_POST['modelo'];
            $placa = $_POST['placa'];

            $veiculo = new Veiculo($GLOBALS['pdo']);
            $veiculo->adicionar($modelo, $placa);
            header("Location: index.php");
            exit;
        }
    }

    public function edit() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_GET['id'];
            $modelo = $_POST['modelo'];
            $placa = $_POST['placa'];

            $veiculo = new Veiculo($GLOBALS['pdo']);
            $veiculo->editar($id, $modelo, $placa);
            header("Location: index.php");
            exit;
        }
    }

    public function delete() {
        $id = $_GET['id'];
        $veiculo = new Veiculo($GLOBALS['pdo']);
        $veiculo->deletar($id);
        header("Location: index.php");
        exit;
    }
}
?>
