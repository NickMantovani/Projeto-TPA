<!-- views/login.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="../index.php?action=login" method="POST"> <!-- Redireciona para o index.php -->
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>
        <br>
        <input type="submit" value="Login">
    </form>
    <p>Não tem uma conta? <a href="register.php">Cadastre-se</a></p>
</body>
</html>
