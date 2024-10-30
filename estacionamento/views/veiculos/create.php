<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Adicionar Veículo</title>
</head>
<body>
    <h1>Adicionar Veículo</h1>
    <form action="/estacionamento/controllers/VeiculoController.php?action=add" method="POST">
        <label for="modelo">Modelo:</label>
        <input type="text" id="modelo" name="modelo" required>
        <br>
        <label for="placa">Placa:</label>
        <input type="text" id="placa" name="placa" required>
        <br>
        <input type="submit" value="Adicionar Veículo">
    </form>
    <a href="index.php">Voltar à Lista de Veículos</a>
</body>
</html>
