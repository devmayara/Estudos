<?php

session_start();

unset($_SESSION['nome']);

header('location:login.php');
