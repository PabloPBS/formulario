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
    <?php
        if ($_POST["nome"]) {
            echo "<p id='titulo'>Bem-vindo, ". $_POST["nome"] . "!</p>";
        } else {
            echo '<p id="titulo">Bem-vindo!</p>';
        }
    ?>
    <p id="subtitle">Aqui estão os dados que você inseriu:</p>
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
            <hr>
            <section><a id="link" href="javascript: history.go(-1)">Clique aqui para voltar ao formulário</a></section>
        </div>
    </main>
</body>
</html>