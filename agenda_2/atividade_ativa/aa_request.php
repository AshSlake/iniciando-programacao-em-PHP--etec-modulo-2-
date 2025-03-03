<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Cadastro de Colaboradores</title>
    <style>
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

    <div class="container d-flex align-items-center justify-content-center min-vh-100">
        <div class="card p-5 w-100" style="max-width: 600px;">
            <div class="text-center mb-4">
                <h1 class="text-white p-3 rounded" style="background-color: #6f42c1;">Cadastro de Colaboradores</h1>
            </div>

            <form method="post" action="aa_acao.php">

                <div class="mb-3">
                    <label for="txtNome" class="form-label"><b>Nome</b></label>
                    <input type="text" class="form-control" id="txtNome" name="txtNome" required>
                </div>

                <div class="mb-3">
                    <label for="txtSobrenome" class="form-label"><b>Sobrenome</b></label>
                    <input type="text" class="form-control" id="txtSobrenome" name="txtSobrenome" required>
                </div>

                <div class="mb-3">
                    <label for="txtEmail" class="form-label"><b>Email</b></label>
                    <input type="email" class="form-control" id="txtEmail" name="txtEmail" required>
                </div>

                <div class="mb-3">
                    <label for="txtFormacao" class="form-label"><b>Formação</b></label>
                    <input type="text" class="form-control" id="txtFormacao" name="txtFormacao" required>
                </div>

                <div class="mb-4">
                    <label for="txtEmprego" class="form-label"><b>Descrição do Último Emprego</b></label>
                    <input type="text" class="form-control" id="txtEmprego" name="txtEmprego" required>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg">Cadastrar</button>
                </div>

            </form>
        </div>
    </div>

</body>

</html>
