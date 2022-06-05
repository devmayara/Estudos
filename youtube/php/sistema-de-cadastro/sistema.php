<?php

session_start();
include_once('connect.php');

// print_r($_SESSION);
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['password']) == true))
{
    unset($_SESSION['email']);
    unset($_SESSION['password']);
    header('Location: login.php');
}

$logado = $_SESSION['email'];

if(!empty($_GET['search']))
{
    $data = $_GET['search'];
    $sql = "SELECT * FROM usuarios WHERE id LIKE '%$data%' or name LIKE '%$data%' or email LIKE '%$data%' ORDER BY id DESC";
}
else
{
    $sql = "SELECT * FROM usuarios ORDER BY id DESC";
}

$result = $conexao->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Sistema | Sistema de Cadastro</title>
</head>
<body>
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="" class="d-flex align-items-center col-md-3 m-2 mb-md-0 text-dark text-decoration-none"><b>Sistema de Cadastro</b></a>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="home.php" class="nav-link px-2 link-secondary">Home</a></li>
            <li><a href="sistema.php" class="nav-link px-2 link-dark">Sistema</a></li>
        </ul>

        <div class="col-md-3 text-end">
            <a type="button" class="btn btn-outline-primary me-2" href="sair.php">Sair</a>
            <a type="button" class="btn btn-primary" href="cadastro.php">Inscrever-se</a>
        </div>
    </header>
    
    <section>
        <div class="container text-center">
            <?php 
                echo "<h1>Bem-Vindo! <u>$logado</u></h1>";
            ?>
            <h1>Você acessou o sistema</h1>

            <div class="container mt-5"> 
                <div class="row"> 
                    <div class="col-sm">
                        <input type="search" class="form-control" name="pesquisar" id="pesquisar" placeholder="Pesquisar">
                    </div>
                    <div class="col-1">
                        <button onclick="searchData()" class="btn btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>        

            <table class="table mt-5">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Senha</th>
                        <th>Telefone</th>
                        <th>Sexo</th>
                        <th>Data de Nascimento</th>
                        <th>Cidade</th>
                        <th>Estado</th>
                        <th>Endereço</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        while($user_data = mysqli_fetch_assoc($result))
                        {
                            echo "<tr>";
                            echo "<td>".$user_data['id']."</td>";
                            echo "<td>".$user_data['name']."</td>";
                            echo "<td>".$user_data['email']."</td>";
                            echo "<td>".$user_data['password']."</td>";
                            echo "<td>".$user_data['phone']."</td>";
                            echo "<td>".$user_data['sexo']."</td>";
                            echo "<td>".$user_data['data_nasc']."</td>";
                            echo "<td>".$user_data['cidade']."</td>";
                            echo "<td>".$user_data['estado']."</td>";
                            echo "<td>".$user_data['endereco']."</td>";
                            echo "<td>
                                <a class='btn btn-success' href='edit.php?id=$user_data[id]' title='Editar'>
                                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                                        <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                                        <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
                                    </svg>
                                </a>
                                <a class='btn btn-danger' href='delete.php?id=$user_data[id]' title='Deletar'>
                                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
                                        <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z'/>
                                    </svg>
                                </a>
                            </td>";
                            echo "</td>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </section>

    <script>
        var search = document.getElementById('pesquisar');

        search.addEventListener('keydown', function(event) 
        {
            if(event.key === "Enter") 
            {
                searchData();
            }
        });

        function searchData()
        {
            window.location.href = "sistema.php?search="+search.value;
        }
    </script>
</body>
</html>
