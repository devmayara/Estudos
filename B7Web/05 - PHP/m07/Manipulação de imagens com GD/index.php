<?php

$imagem = imagecreatetruecolor(300, 200);

$cor = imagecolorallocate($imagem, 255, 0, 0);
imagefill($imagem, 0, 0, $cor);

// header('Content-Type: image/jpeg');      // exibe a imagem na tela
imagejpeg($imagem, 'nova_imagem.jpeg', 100);  // null pra não salvar
