<?php include '../Layouts/App.php'; ?>

<section class="content-header">
  <section class="content">

    <body>
    <div class="barra-superior-derecha">
        <label for="dato"></label>
        <input type="text" id="dato" name="dato">
        <button type="button ">Search</button>
    </div>
</body>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Invoices</title>
    <style>
      
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 0px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #007BFF;
            color: #fff;
        }
    </style>

    <h2></h2>

    <table>
        <tr>
            <th>Code</th>
            <th>Date</th>
            <th>Client</th>
            <th>Ruc</th>
            <th>Amount</th>
            <th>State</th>
            <th>PDF</th>
            <th>SUNAT</th>
            <th>Mail</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><a href="#">Descargar</a></td>
            <td><a href="#">Verificar</a></td>
            <td><a href="#">Enviar</a></td>
            <td><a href="#">Eliminar</a></td>
            <td><a href="#">Editar</a></td>
        </tr>
        <tr>
            <!-- Puedes agregar otra fila con datos similares -->
        </tr>
    </table>


  </section>
</section>

</div>

<div class="control-sidebar-bg"></div>
</div>
