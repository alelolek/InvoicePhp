
<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['obtenerCliente']) && $_GET['producto'] === 'Todos') {
        require_once '../Models/DAO/ProductExterDAO.php';

        $productDAO = new ProductExterDAO();

        $productE = $ProductDAO->obtenerProductoExternoPorNombre();

        echo json_encode($productE);
    }
}
        ?>