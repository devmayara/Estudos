<?php

if(isset($_POST['submit']))
{
    // TESTE DE CADASTRO:
    // print_r('Nome: ' . $_POST['name']);
    // print_r('<br>'); 
    // print_r('E-mail: ' . $_POST['email']);
    // print_r('<br>'); 
    // print_r('Senha: ' . $_POST['password']);
    // print_r('<br>'); 
    // print_r('Telefone: ' . $_POST['phone']);
    // print_r('<br>'); 
    // print_r('Sexo: ' . $_POST['sexo']);
    // print_r('<br>'); 
    // print_r('Data de Nascimento: ' . $_POST['data_nasc']);
    // print_r('<br>'); 
    // print_r('Cidade: ' . $_POST['cidade']);
    // print_r('<br>'); 
    // print_r('Estado: ' . $_POST['estado']);
    // print_r('<br>'); 
    // print_r('Endereco: ' . $_POST['endereco']);

    include_once('connect.php');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $sexo = $_POST['sexo'];
    $data_nasc = $_POST['data_nasc'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];

    $result = mysqli_query($conexao, " INSERT INTO usuarios(`name`, `email`, `password`, `phone`, `sexo`, `data_nasc`, `cidade`, `estado`, `endereco`) VALUES ('$name','$email','$password','$phone','$sexo','$data_nasc','$cidade','$estado','$endereco')");

    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Cadastro | Sistema de Cadastro</title>
</head>
<body>
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="" class="d-flex align-items-center col-md-3 m-2 mb-md-0 text-dark text-decoration-none"><b>Sistema de Cadastro</b></a>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="home.php" class="nav-link px-2 link-secondary">Home</a></li>
            <li><a href="sistema.php" class="nav-link px-2 link-dark">Sistema</a></li>
        </ul>

        <div class="col-md-3 text-end">
            <a type="button" class="btn btn-outline-primary me-2" href="login.php">Login</a>
            <a type="button" class="btn btn-primary" href="cadastro.php">Inscrever-se</a>
        </div>
    </header>
    <div class="container">
        <h1 class="text-center text-primary my-5">Cadastrar Clientes</h1>
        <form action="cadastro.php" method="POST">
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" class="form-control mb-3" id="name" name="name" placeholder="Nome" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control mb-3" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" class="form-control mb-3" id="password" name="password" placeholder="Senha">
            </div>
            <div class="form-group">
                <label for="phone">Telefone</label>
                <input type="text" class="form-control mb-3" id="phone" name="phone" placeholder="(xx) xxxx xxxx" required>
            </div>
            <p>Sexo</p>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="sexo" name="sexo" value="F">
                <label for="sexo" class="form-check-label">Feminino</label>
            </div>
            <div class="form-check">                    
                <input type="radio" class="form-check-input" id="sexo" name="sexo" value="M">
                <label for="sexo" class="form-check-label">Masculino</label>
            </div>
            <div class="form-check">                    
                <input type="radio" class="form-check-input" id="sexo" name="sexo" value="O">
                <label for="sexo" class="form-check-label mb-3">Outro</label>
            </div>
            <div class="form-group">
                <label for="data_nasc">Data de Nascimento</label>
                <input type="date" class="form-control mb-3" id="data_nasc" name="data_nasc" required>
            </div>
            <div class="form-group">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control mb-3" id="cidade" name="cidade" placeholder="Cidade" required>
            </div>
            <div class="form-group">
                <label for="estado">Estado</label>
                <input type="text" class="form-control mb-3" id="estado" name="estado" placeholder="Estado" required>
            </div>
            <div class="form-group">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control mb-3" id="endereco" name="endereco" placeholder="Endereço" required>
            </div>

            <input type="submit" id="submit" name="submit" class="btn btn-primary mb-5" value="Cadastrar">
        </form>
    </div>
</body>
</html>
