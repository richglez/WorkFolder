<?php
// Verifica si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtiene los datos del formulario
    $username = $_POST['txtUser'];
    $password = $_POST['txtPassword'];

    // Conexión a la base de datos
    $servername = "localhost"; // Si estás usando XAMPP, el servidor suele ser "localhost"
    $usernameDB = "root"; // Tu nombre de usuario de MySQL
    $passwordDB = ""; // Tu contraseña de MySQL
    $dbname = "login"; // Nombre de tu base de datos

    // Crear conexión
    $conn = new mysqli($servername, $usernameDB, $passwordDB, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Consulta para verificar las credenciales
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Credenciales válidas
        echo "Credenciales válidas";
        // Redirigir a otra página
        header("Location: ../Main/main.html");
        exit;
    } else {
        // Credenciales inválidas
        echo "Credenciales inválidas";
    }

    // Cierra la conexión
    $conn->close();
}


?>
