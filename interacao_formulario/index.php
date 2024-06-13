<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <form action="processamento.php" method="POST">
        <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="form-label" for="nome">Nome:</label>
                    <input class="form-control" type="text" name="nome">
                </div>
                <div class="mb-3 col-md-6">
                    <label class="form-label" for="sobrenome">Sobrenome:</label>
                    <input class="form-control" type="text" name="sobrenome">
                </div>
                <div class="mb-3 col-md-6">
                    <label class="form-label" for="email">E-mail:</label>
                    <input class="form-control" type="email" name="email">
                </div>
                <div class="mb-3 col-md-6">
                    <label class="form-label" for="endereco">Endereço:</label>
                    <input class="form-control" type="text" name="endereco">
                </div>
                <div class="mb-3 col-md-6">
                    <label class="form-label" for="telefone">Telefone:</label>
                    <input class="form-control" type="text" name="telefone">
                </div>
                <div class="mb-3 col-md-6">
                    <label class="form-label" for="data_nascimento">Data de Nascimento:</label>
                    <input class="form-control" type="date" name="data_nascimento">
                </div>
                <div class="mb-3 col-md-6">
                    <label class="form-label" for="senha">Senha:</label>
                    <input class="form-control" type="password" name="senha">
                </div>
                <div class="mb-3 col-md-6">
                    <label class="form-label" for="confirma_senha">Confirmar Senha:</label>
                    <input class="form-control" type="password" name="confirma_senha">
                </div>
            </div>
        <button class="btn btn-primary" type="submit">Enviar</button>
    </form>
</div>
<!-- // exemplo de bootstrap
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>