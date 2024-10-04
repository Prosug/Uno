<?php
session_start();

// Verificar si el usuario está logueado
if (!isset($_SESSION['admin'])) {
    header('Location: index.php');
    exit();
}

require 'db.php';  // Incluir la conexión a la base de datos

// Obtener los datos del formulario
$ci = $_POST['ci'];
$tipo_tramite = $_POST['tipo_tramite'];
$descripcion = $_POST['descripcion'];
$id_administrativo = $_SESSION['admin']; // Asumimos que el username está almacenado en la sesión

try {
    // Buscar el id del administrador (en base al username)
    $stmt = $conn->prepare("SELECT id FROM administrativos WHERE username = :username");
    $stmt->bindParam(':username', $id_administrativo);
    $stmt->execute();
    $admin = $stmt->fetch(PDO::FETCH_ASSOC);

    // Insertar el trámite en la base de datos
    $stmt = $conn->prepare("INSERT INTO Tramite (descripcion, tipo_tramite, ci, id) VALUES (:descripcion, :tipo_tramite, :ci, :id)");
    $stmt->bindParam(':descripcion', $descripcion);
    $stmt->bindParam(':tipo_tramite', $tipo_tramite);
    $stmt->bindParam(':ci', $ci);
    $stmt->bindParam(':id', $admin['id']);  // Usamos el id del administrador
    $stmt->execute();

    // Guardar el mensaje de éxito en la sesión
    $_SESSION['mensaje'] = "Trámite registrado con éxito.";
    
    // Redirigir al panel administrativo
    header('Location: admin.php');
    exit();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
