<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Usuários</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php 
        $usuarios = [
            [
                "id" => "1",
                "nome" => "Antonio",
                "sexo" => "Masculino",
                "email" => "antonio.neto@hotmail.com",
                "senha" => "123456"
            ],
            [
                "id" => "2",
                "nome" => "Lucas",
                "sexo" => "Masculino",
                "email" => "lucas@hotmail.com",
                "senha" => "123456"
            ],
            [
                "id" => "3",
                "nome" => "Ana Julia",
                "sexo" => "Feminino",
                "email" => "ana.julia@gmail.com",
                "senha" => "123456"
            ],
            [
                "id" => "4",
                "nome" => "Kauane",
                "sexo" => "Feminino",
                "email" => "kau@gmail.com",
                "senha" => "123456"
            ]
        ];
    ?>

    <h1>Sistema de Usuários</h1>

    <button> <a href="/novo-usuario.php"> Adicionar Usuário </a> </button>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Sexo</th>
                <th>Email</th>
                <th>Senha</th>
            </tr>
        </thead>
        <tbody>
           <?php foreach($usuarios as $usuario): ?>
            <tr>
                <td><?= $usuario['id'] ?></td>
                <td><?= $usuario['nome'] ?></td>
                <td><?= $usuario['sexo'] ?></td>
                <td><?= $usuario['email'] ?></td>
                <td><?= $usuario['senha'] ?></td>
            </tr>
           <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>