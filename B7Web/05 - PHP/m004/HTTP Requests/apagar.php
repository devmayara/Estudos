<?php

setcookie('nome', '', time() - 3600);

header('Location: index.php');
exit;
