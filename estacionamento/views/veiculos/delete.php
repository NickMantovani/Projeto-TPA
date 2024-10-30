<?php
require_once '../../config/database.php';
require_once '../../models/Veiculo.php';

session_start();

$veiculoId = $_GET['id'];
$veiculo = new Veiculo($GLOBALS['pdo']);
$veiculoData = $veiculo->buscarPorId($veiculoId);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Excluir Veículo</title>
</head>
<body>
    <h1>Excluir Veículo</h1>
    <p>Tem certeza que deseja excluir o veículo: <?php echo $veiculoData['modelo']; ?> (Placa: <?php echo $veiculoData['placa']; ?>)?</p>
    <form action="../controllers/VeiculoController.php?action=delete&id=<?php echo $veiculoId; ?>" method="POST">
        <input type="submit" value="Excluir">
    </form>
    <a href="index.php">Cancelar</a>
</body>
</html>
