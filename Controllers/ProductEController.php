
<?php
if (isset($_GET['obtenerCliente']) && $_GET['obtenerProduct'] === 'id') {
    require_once '../Models/DAO/ProductExterDAO.php';

    $clientDAO = new ClientDAO();
    $clients = $clientDAO->obtenerPorId($_GET['id']);
    echo json_encode($clients);
}
        ?>