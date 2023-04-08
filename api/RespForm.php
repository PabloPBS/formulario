<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Inseridos</title>
    <link rel="stylesheet" href="../style1.css">
</head>
<body>
<p id="titulo">Dados do usuário</p>
    <main>
        <div>
            <?php 
                function MostrarDados (string $nome = '', string $email = '', string $senha = '', string $sexo = '', string $nascimento = '')
                {
                    echo "<p class='text'>Nome: $nome</p>";
                    echo "<p class='text'>E-mail: $email</p>";
                    echo "<p class='text'>Senha: $senha</p>";
                    echo "<p class='text'>Sexo: $sexo</p>";
                    echo "<p class='text'>Data de nascimento: $nascimento</p>";
                }

                $nome = $_POST["nome"];
                $email = $_POST["email"];
                $senha = $_POST["senha"];
                $sexo = $_POST["sexo"];
                $nascimento = $_POST["nascimento"];

                MostrarDados($nome, $email, $senha, $sexo, $nascimento);
            ?>
        </div>
    </main>
</body>
</html>