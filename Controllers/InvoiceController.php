<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombreProductoExterno = $_POST['nombreProductoExterno'];

    $productoExternoDAO = new ProductExterDAO();
    $productoExterno = $productoExternoDAO->obtenerProductosExternos();
} else {
    $productoExterno = null;
}

?>