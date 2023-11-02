<?php include '../Layouts/App.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <style>
        .container {
            display: flex;
            /* justify-content: space-around; */
            flex-direction: column;
        }

        .box {
            border: 1px solid black;
            padding: 20px;
            margin: 30px;
        }

        .table {
            margin-top: 20px;
            border: 1px solid black;
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="box">
            <h2>Cliente</h2>
            <label for="">RUC</label>
            <input type="text" placeholder="Input 1">
            <button>Botón</button>
            <label for="">Correo</label>
            <input type="text" placeholder="Input 2">
            <label for="">Direccion</label>
            <input type="text" placeholder="Input 3">
            <label for="">Razon Social</label>
            <input type="text" placeholder="Input 4">

        </div>
        <div class="box">
            <h2>Producto</h2>
            <select>
                <option value="1">nombre Producto</option>
                <option value="2">Opción 2</option>
                <option value="3">Opción 3</option>
            </select>
            <input class="input-field" type="number" id="amount" value="1">

            <button>Agregar Producto</button>
            <div class="table">
                <table>
                    <tr>
                        <th>Columna 1</th>
                        <th>Columna 2</th>
                        <th>Columna 3</th>
                    </tr>
                    <tr>
                        <td>Dato 1</td>
                        <td>Dato 2</td>
                        <td>Dato 3</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="box">
            <h2>Detalle factura</h2>
            <div class="input-group">
                <label class="label" for="invoiceCode">Invoice Code*</label>
                <input class="input-field" type="text" id="invoiceCode" value="F001-123" readonly>
            </div>
            <div class="input-group">
                <label class="label" for="issueDate">Issue Date*</label>
                <input class="input-field" type="date" id="issueDate" value="2023-11-02" readonly>
            </div>
            <div class="input-group">
                <label class="label" for="expirationDate">Expiration Date</label>
                <input class="input-field" type="date" id="expirationDate">
            </div>
            <div class="input-group">
                <label class="label" for="sellingPrice">Selling Price*</label>
                <input class="input-field" type="number" id="sellingPrice" value="82" readonly>
            </div>
            <div class="input-group">
                <label class="label" for="totalTax">Total Tax*</label>
                <input class="input-field" type="number" id="totalTax" value="18" readonly>
            </div>
            <div class="input-group">
                <label class="label" for="totalAmount">Total Amount</label>
                <input class="input-field" type="number" id="totalAmount" value="100">
            </div>
        </div>
        <div class="box">
            <h2>Moneda</h2>
            <div class="radio">
                <input type="radio" id="soles" name="moneda" value="soles">
                <label for="soles">Soles</label>
            </div>
            <div class="radio">
                <input type="radio" id="dolares" name="moneda" value="dolares">
                <label for="dolares">Dólares</label>
            </div>
        </div>
        <button type="button" class="btn btn-primary">Crear Factura</button> <br><br>
    </div>
</body>

</html>