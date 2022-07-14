<?php

// renomear arquivo.txt para arquivo2.txt
rename('arquivo.txt', 'arquivo2.txt');
echo 'Arquivo renomeado com sucesso!';

// mover arquivo2.txt para pasta
rename('arquivo2.txt', 'pasta/arquivo2.txt');
echo 'Arquivo movido com sucesso!';

// copiar arquivo2.txt para pasta
copy('pasta/arquivo2.txt', 'pasta/arquivo3.txt');
echo 'Arquivo copiado com sucesso!';
