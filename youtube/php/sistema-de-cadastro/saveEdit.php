<?php
// isset -> para saber se uma variável está definida
include_once('connect.php');

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $sexo = $_POST['sexo'];
    $data_nasc = $_POST['data_nasc'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];
    
    $sqlUpdate = "UPDATE usuarios SET name='$name',password='$password',email='$email',phone='$phone',sexo='$sexo',data_nasc='$data_nasc',cidade='$cidade',estado='$estado',endereco='$endereco' WHERE id=$id";
    $result = $conexao->query($sqlUpdate);
    print_r($result);
}

header('Location: sistema.php');
