<?php

$hash = "$2y$10$9Wl6pMryn9G7f8zShd00aeSKvEUn7bMPpniNEX6UaTgpBdLyIFsBG";

$senha = '1234567';

if (password_verify($senha, $hash)) {
    echo "Senha correta";
} else {
    echo "Senha incorreta";
}
