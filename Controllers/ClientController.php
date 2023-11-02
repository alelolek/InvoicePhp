<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action']) && $_POST['action'] === 'crearCliente') {
        // Aquí se ejecuta la lógica para crear un cliente
        if (isset($_POST['razonSocial']) && isset($_POST['ruc']) && isset($_POST['email'])) {
            $razonSocial = $_POST['razonSocial'];
            $ruc = $_POST['ruc'];
            $email = $_POST['email'];

            require_once '../Models/DTO/ClientDTO.php';

            // Crear un objeto ClientDTO
            $clientDTO = new ClientDTO();
            $clientDTO->setRazonSocial($razonSocial);
            $clientDTO->setRuc($ruc);
            $clientDTO->setEmail($email);

            // Incluir la clase ClientDAO
            require_once '../Models/DAO/ClientDAO.php';

            // Crear una instancia de ClientDAO
            $clientDAO = new ClientDAO();

            // Llamar al método crear en ClientDAO
            $clientDAO->crear($clientDTO);
            header('Location: ../Views/Pages/Client.php');
            exit;
        } else {
            echo "Todos los campos son requeridos.";
        }
    } else if (isset($_POST['action']) && $_POST['action'] === 'modificarCliente') {
        if (isset($_POST['id']) && isset($_POST['razonSocial']) && isset($_POST['ruc']) && isset($_POST['email'])) {
            $id = $_POST['id'];
            $razonSocial = $_POST['razonSocial'];
            $ruc = $_POST['ruc'];
            $email = $_POST['email'];

            require_once '../Models/DTO/ClientDTO.php';

            // Crear un objeto ClientDTO
            $clientDTO = new ClientDTO();
            $clientDTO->setId($id);
            $clientDTO->setRazonSocial($razonSocial);
            $clientDTO->setRuc($ruc);
            $clientDTO->setEmail($email);

            // Incluir la clase ClientDAO
            require_once '../Models/DAO/ClientDAO.php';

            // Crear una instancia de ClientDAO
            $clientDAO = new ClientDAO();

            // Llamar al método crear en ClientDAO
            $clientDAO->editar($clientDTO);
            header('Location: ../Views/Pages/Client.php');
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['obtenerCliente']) && $_GET['obtenerCliente'] === 'Todos') {
        require_once '../Models/DAO/ClientDAO.php';

        $clientDAO = new ClientDAO();

        $clients = $clientDAO->obtenerTodosLosClientes();

        echo json_encode($clients);
    } else if (isset($_GET['obtenerCliente']) && $_GET['obtenerCliente'] === 'id') {
        require_once '../Models/DAO/ClientDAO.php';

        $clientDAO = new ClientDAO();
        $clients = $clientDAO->obtenerPorId($_GET['id']);
        echo json_encode($clients);
    }
}
?>