<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Veículos</title>
</head>
<body>
    <h1>Lista de Veículos</h1>
    <a href="create.php">Adicionar Veículo</a>
    <br>
    
    <?php if (isset($veiculos) && !empty($veiculos)): ?>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Modelo</th>
                <th>Placa</th>
                <th>Ações</th>
            </tr>
            <?php foreach ($veiculos as $veiculo): ?>
                <tr>
                    <td><?php echo $veiculo['id']; ?></td>
                    <td><?php echo $veiculo['modelo']; ?></td>
                    <td><?php echo $veiculo['placa']; ?></td>
                    <td>
                        <!-- Links para editar ou excluir -->
                        <a href="edit.php?id=<?php echo $veiculo['id']; ?>">Editar</a>
                        <a href="delete.php?id=<?php echo $veiculo['id']; ?>">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>Nenhum veículo encontrado.</p>
    <?php endif; ?>

    <a href="/estacionamento/views/login.php">Sair</a>
</body>
</html>
