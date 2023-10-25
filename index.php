<?php
    header('Location: /Views/Pages/Login.php');
    exit();
?>


<!-- <?php
// require_once 'ConnectionDB.php';
// // Reemplaza con la ruta real de tu archivo ConnectionDB.php

// try {
//     $connectionInstance = ConnectionDB::getInstanceConnection();
//     $connection = $connectionInstance->getConnection();

//     // Ejemplo de consulta para verificar la conexión
//     $stmt = $connection->query('SELECT * FROM Users LIMIT 1');
//     $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

//     // Verificar si se obtuvieron resultados
//     if ($result) {
//         echo "Conexión exitosa. Se obtuvieron datos de la base de datos.";
//     } else {
//         echo "Conexión exitosa. No se encontraron datos en la base de datos.";
//     }
// } catch (Exception $e) {
//     echo 'Error: ' . $e->getMessage();
// }
?> -->
