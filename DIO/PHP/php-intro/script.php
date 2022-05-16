<?php

include 'service/serviceMensagemSessao.php';
include 'service/serviceValidacao.php';
include 'service/serviceCategoriaCompetidor.php';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

defineCetegoriaCompetidor($nome, $idade);

header('Location: index.php');
