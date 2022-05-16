<?php
include 'service/serviceMensagemSessao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Inscrição</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2 class="text-center font-weight-bold text-primary mt-5">FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</h2>
            <hr>
                    <?php
                        $mensagemDeSucesso = obterMensagemSucesso();
                        if (!empty($mensagemDeSucesso)) {
                            echo '<div class="alert alert-success mt-5">' . $mensagemDeSucesso . '</div>';
                        }

                        $mensagemDeErro = obterMensagemErro();
                        if (!empty($mensagemDeErro)) {
                            echo '<div class="alert alert-danger mt-5">' . $mensagemDeErro . '</div>';
                        }
                    ?>

        <form action="script.php" method="POST">
            <div class="form-group row mt-5">
                <label for="nome" class="col-sm-2 col-form-label">Seu nome:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="nome" name="nome">
                </div>
            </div>
            <div class="form-group row">
                <label for="idade" class="col-sm-2 col-form-label">Sua idade:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="idade" name="idade">
                </div>
            </div>
            <div class="row justify-content-md-center">
                <button type="submit" class="btn btn-primary col-md-auto">Enviar dados do competidor</button>
            </div>
        </form>
    </div>
</body>
</html>
