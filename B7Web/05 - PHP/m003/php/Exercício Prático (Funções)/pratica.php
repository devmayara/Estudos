<?php

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'portuguese');

$data = "2022-07-13";

echo strftime("%A", strtotime($data));
