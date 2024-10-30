<?php
// Inclui o modelo e a configuração do banco de dados
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
    <title>Editar Veículo</title>
</head>
<body>
    <h1>Editar Veículo</h1>
    <form action="../controllers/VeiculoController.php?action=edit&id=<?php echo $veiculoId; ?>" method="POST">
        <label for="modelo">Modelo:</label>
        <input type="text" id="modelo" name="modelo" value="<?php echo $veiculoData['modelo']; ?>" required>
        <br>
        <label for="placa">Placa:</label>
        <input type="text" id="placa" name="placa" value="<?php echo $veiculoData['placa']; ?>" required>
        <br>
        <input type="submit" value="Salvar Alterações">
    </form>
    <a href="index.php">Voltar à Lista de Veículos</a>
</body>
</html>
