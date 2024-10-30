<!-- views/register.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastro de Usuário</h1>
    <form action="../index.php?action=register" method="POST"> <!-- Redireciona para o index.php -->
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>
        <br>
        <input type="submit" value="Cadastrar">
    </form>
    <p>Já tem uma conta? <a href="login.php">Faça login</a></p>
</body>
</html>
