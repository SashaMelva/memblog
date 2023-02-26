<?php
session_start();
require_once('../../src/conection.php');
unset($_SESSION['user']);
header('Location: ../index.php');
mysqli_close($conn);