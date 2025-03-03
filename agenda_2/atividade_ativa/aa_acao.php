<?php
// validação das variaveis passadas

if(
    isset(
        $_POST['txtNome'],
        $_POST['txtSobrenome'],
        $_POST['txtEmail'],
        $_POST['txtFormacao'],
        $_POST['txtEmprego']
    ) &&
    // verificando se os campos estão preenchidos
    !empty ($_POST['txtNome']) &&
    !empty($_POST['txtSobrenome']) &&
    !empty($_POST['txtEmail']) &&
    !empty($_POST['txtFormacao']) &&
    !empty($_POST['txtEmprego'])
) {
    //vamos usar htmlspecialchars para evitar ataques de injeção de código HTML/JS
    $nome = htmlspecialchars($_POST['txtNome']);
    $sobreNome = htmlspecialchars($_POST['txtSobrenome']);
    $email = htmlspecialchars($_POST['txtEmail']);
    $formacao = htmlspecialchars($_POST['txtFormacao']);
    $ultimoEmprego = htmlspecialchars($_POST['txtEmprego']);
} else {
    // se algum campo não foi preenchido, vamos abortar a execução do script e mostrar um aviso
    die('<div style="padding: 20px; font-family: Arial; background-color: #ffc107; color: #212529; text-align: center;">
        <h2>Erro no envio dos dados!</h2>
        <p>Por favor, preencha todos os campos corretamente e envie novamente.</p>
        <a href="javascript:history.back()" style="color: #0d6efd; text-decoration: none;">Voltar ao formulário</a>
    </div>');
}
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Cadastro de Colaboradores</title>

    <style>
        // Estilos customizados para o formulário
        body {
            background-color: #f8f9fa;
        }

        .card {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .form-control {
            border-radius: 0.75rem;
        }

        .btn-primary {
            background-color: #6f42c1;
            border: none;
            border-radius: 0.75rem;
        }

        .btn-primary:hover {
            background-color: #5a359d;
        }
    </style>
</head>
<body>
    <!-- Início do formulário de cadastro de colaboradores -->
    <div class="container d-flex align-items-center justify-content-center min-vh-100">
    <div class="card p-5 w-100" style="max-width: 600px;">
            <div class="text-center mb-4">
                <h1 class="text-white p-3 rounded" style="background-color: #6f42c1;">Cadastro Concluido</h1>
            </div>
            <div class="card-body">
                <h5 class="card-title">Nome Completo:</h5>
                <p class="card-text"><?php echo $nome.''. $sobreNome;?></p>
                <h5 class="card-title">Email:</h5>
                <p class="card-text"><?php echo $email;?></p>
                <h5 class="card-title">Formação:</h5>
                <p class="card-text"><?php echo $formacao;?></p>
                <h5 class="card-title">Ultimo Emprego:</h5> 
                <p class="card-text"><?php echo $ultimoEmprego;?></p>

                <!-- Botão para voltar para a página de cadastro -->
                <div class="mt-4 d-flex justify-content-between">
                    <a href="aa_request.php" class="btn btn-primary">Cadastrar novo Colaborador</a>
                </div>

            </div>
    </div>
</body>
</html>