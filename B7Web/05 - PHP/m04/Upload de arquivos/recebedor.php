<?php

echo '<pre>';
print_r($_FILES);

$permitidos = array('image/jpeg', 'image/jpg', 'image/png');

if(in_array($_FILES['arquivo']['type'], $permitidos)){
    $nome = md5(time().rand(0, 9999)).'.jpg';
    move_uploaded_file($_FILES['arquivo']['tmp_name'], 'uploads/'.$nome);
   
    echo 'Upload realizado com sucesso!';
} else {
    echo 'Erro no upload!';
}
