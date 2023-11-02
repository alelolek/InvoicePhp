<?php

include '../Layouts/App.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../Styles/Client.css"> -->
    <title>Registro de Client</title>

</head>

<body>
    <section class="content-header">
        <section class="content">
            <div class="barra-superior-izquierda">
                <button type="button" class="btn btn-primary" onclick="openModalCreateClient()">
                    New Client
                </button>

                <!-- El modal -->
                <div class="modal" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="container">
                                    <h2 id="modalTitle"></h2>
                                    <form id="modalForm" class="input-group mb-3" action="../../Controllers/ClientController.php"
                                        method="POST">
                                        <input type="hidden" id="action" name="action" value="">
                                        <input type="hidden" id="id" name="id" value="">
                                        <div class="form-group">
                                            <label for="razonSocial">Razón Social:</label>
                                            <input type="text" class="" id="razonSocial" name="razonSocial">
                                        </div>
                                        <div class="form-group">
                                            <label for="ruc">RUC:</label>
                                            <input type="text" class="" id="ruc" name="ruc">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email:</label>
                                            <input type="email" class="" id="email" name="email">
                                        </div>
                                        <button type="submit" class="btn btn-primary" id="modalBtnSubmit"></button>
                                        <button type="button" class="btn btn-secondary" onclick="closeModal()">Close</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <br>
            <div class="barra-superior-centro">
                <input type="search" id="busqueda" name="busqueda" placeholder="Buscar Cliente...">
                <button type="button" id="buscarBtn">Search</button>
            </div>

            <div class="cold-md-8">
                <table class="table ">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>Razon Social</th>
                            <th>RUC</th>
                            <th>Email</th>
                            <th>Edit</th>
                        </tr>
                    </thead>

                    <tbody id="clients-table">
                        <!-- Aquí se cargarán los datos de los clientes -->
                    </tbody>
                </table>
        </section>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            $.ajax({
                url: 'http://localhost:8080/Controllers/ClientController.php?obtenerCliente=Todos',
                type: 'GET',
                dataType: 'json',
                success: function (clients) {
                    var table = $('#clients-table');
                    clients.forEach(function (client) {
                        var editButton = `<button onclick="openModalEditClient(${client.id})" type="button">Editar</button>`;
                        table.append('<tr><td>' + client.razonSocial + '</td><td>' + client.ruc + '</td><td>' + client.email + '</td><td>' + editButton + '</td></tr>');
                    });
                },
                error: function () {
                    console.error('No se pudieron cargar los datos de los clientes.');
                }
            });
        });

        function editClient(clientId) {
            // Aquí debes llamar a la función en el controlador para editar el cliente
            $.ajax({
                url: 'http://localhost:8080/Controllers/ClientController.php',
                type: 'POST',
                data: { action: 'editarCliente', clientId: clientId },
                success: function (response) {
                    // Procesa la respuesta si es necesario
                    console.log('Cliente editado con éxito');
                },
                error: function () {
                    console.error('No se pudo editar el cliente.');
                }
            });
        }

        function openModalCreateClient() {
            $("#myModal").show();
            $("#modalTitle").text("Crear");
            $("#modalBtnSubmit").text("Crear");
            $("#action").val("crearCliente");
        }

        function openModalEditClient(id) {
            $("#myModal").show();
            $("#modalTitle").text("Editar");
            $("#modalBtnSubmit").text("Editar");
            $("#action").val("modificarCliente");
            getClientById(id);
        }

        function closeModal(){
            $("#modalForm")[0].reset();
            $("#myModal").hide();
        }

        function getClientById(id) {
            $.ajax({
                url: `http://localhost:8080/Controllers/ClientController.php?obtenerCliente=id&id=${id}`,
                type: 'GET',
                dataType: 'json',
                success: function (client) {            
                    $("#id").val(id);          
                    $("#razonSocial").val(client.razonSocial);
                    $("#ruc").val(client.ruc);
                    $("#email").val(client.email);
                },
                error: function () {
                    console.error('No se pudieron cargar los datos de los clientes.');
                }
            });
        }
    </script>
</body>

</html>