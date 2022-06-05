<?php

include_once('connect.php');

if(!empty($_GET['id']))
{
    $id = $_GET['id'];
    $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";
    $result = $conexao->query($sqlSelect);
    if($result->num_rows > 0)
    {
        while($user_data = mysqli_fetch_assoc($result))
        {
            $name = $user_data['name'];
            $email = $user_data['email'];
            $password = $user_data['password'];
            $phone = $user_data['phone'];
            $sexo = $user_data['sexo'];
            $data_nasc = $user_data['data_nasc'];
            $cidade = $user_data['cidade'];
            $estado = $user_data['estado'];
            $endereco = $user_data['endereco'];
        }
    }
    else
    {
        header('Location: sistema.php');
    }
}
else
{
    header('Location: sistema.php');
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Editar Registro | Sistema de Cadastro</title>
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
        <h1 class="text-center text-primary my-5">Editar Registro</h1>
        <form action="saveEdit.php" method="POST">
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" class="form-control mb-3" id="name" name="name" value=<?php echo "$name";?> required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control mb-3" id="email" name="email" value=<?php echo "$email";?> required>
            </div>
            <div class="form-group">
                <label for="password">Senha</label>
                <input type="text" class="form-control mb-3" id="password" name="password" value=<?php echo "$password";?> required>
            </div>
            <div class="form-group">
                <label for="phone">Telefone</label>
                <input type="text" class="form-control mb-3" id="phone" name="phone" value=<?php echo "$phone";?> required>
            </div>
            <p>Sexo</p>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="sexo" name="sexo" value="F" <?php echo ($sexo == 'F') ? 'checked' : '';?>>
                <label for="sexo" class="form-check-label">Feminino</label>
            </div>
            <div class="form-check">                    
                <input type="radio" class="form-check-input" id="sexo" name="sexo" value="M" <?php echo ($sexo == 'M') ? 'checked' : '';?>>
                <label for="sexo" class="form-check-label">Masculino</label>
            </div>
            <div class="form-check">                    
                <input type="radio" class="form-check-input" id="sexo" name="sexo" value="O"  <?php echo ($sexo == 'O') ? 'checked' : '';?>>
                <label for="sexo" class="form-check-label mb-3">Outro</label>
            </div>
            <div class="form-group">
                <label for="data_nasc">Data de Nascimento</label>
                <input type="date" class="form-control mb-3" id="data_nasc" name="data_nasc" value=<?php echo "$data_nasc";?> required>
            </div>
            <div class="form-group">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control mb-3" id="cidade" name="cidade" value=<?php echo "$cidade";?> required>
            </div>
            <div class="form-group">
                <label for="estado">Estado</label>
                <input type="text" class="form-control mb-3" id="estado" name="estado" value=<?php echo "$estado";?> required>
            </div>
            <div class="form-group">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control mb-3" id="endereco" name="endereco" value=<?php echo "$endereco";?> required>
            </div>

            <input type="hidden" name="id" value=<?php echo "$id";?>>

            <input type="submit" name="update" id="update" class="btn btn-primary mb-5" value="Salvar">
        </form>
    </div>
</body>
</html>
