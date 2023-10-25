<?php
    require_once '../Models/DTO/UserDTO.php';
    require_once '../Models/DAO/UserDAO.php';
  
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        if (isset($_POST['username']) && isset($_POST['password'])) {
            
            $username = $_POST['username']; 
            $password = $_POST['password']; 
            
            $userDAO = new UserDAO();
            $userLoged = $userDAO->validateLogin($username, $password); 

            if ($userLoged['Valid']) {
                echo "Usuario válido. ID: " . $userLoged['Id'] . ", Nombre de usuario: " . $userLoged['Username'];
                header("Location: ../Views/Pages/Dashboard.php");
            } else {
                echo "Usuario no válido. Acceso denegado.";
            }
        }
    } else {
        header('Location: Login.php');
        exit();
    }
?>
