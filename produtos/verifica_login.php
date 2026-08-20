<?php
session_start();
require __DIR__ . 'conexao.php';
if (!isset($_SESSION['usuario_id'])) {
    header("Location: ../login.php");
    exit;
}
?>