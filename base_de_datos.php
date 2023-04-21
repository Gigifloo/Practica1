<?php


$contraseña = "4UGn99m4TD1wWaxRXLvr";
$usuario = "postgres";
$nombreBaseDeDatos = "railway";
$rutaServidor = "containers-us-west-46.railway.app";
$puerto = "5990";
try {
    $base_de_datos = new PDO("pgsql:host=$rutaServidor;port=$puerto;dbname=$nombreBaseDeDatos", $usuario, $contraseña);
    $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Ocurrio un error en la base de patos: ' . $e->getMessage();
};