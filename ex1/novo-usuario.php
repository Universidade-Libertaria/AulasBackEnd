<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo usuário</title>
</head>
<body>
    <h1>Novo usuário</h1>

    <?php session_start(); var_dump($_SESSION);?>
    <button> <a href="/index.php"> Listar Usuários </a> </button>

    <form action="/novo-usuario.php" method="post">
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome">
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" name="email">
        </div>

        <div>
            <label for="senha">Senha</label>
            <input type="password" name="senha">
        </div>

        <div>
            <span>Sexo:</span>
            <label for="masculino">Masculino</label>
            <input type="radio" name="sexo" value="Masculino">
            <label for="feminino">Feminino</label>
            <input type="radio" name="sexo" value="Feminino">
        </div>

        <input type="submit" value="Inserir">
    </form>
</body>
</html>