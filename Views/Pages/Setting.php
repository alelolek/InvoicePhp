<?php include '../Layouts/App.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Portal</title>
    <style>
        .contenedor {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .cuadro {
            display: flex;
            justify-content: space-between;
            width: 800px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            margin: 20px auto;
        }

        .columna {
            width: 48%;
        }

        .barra-titulo {
            background-color: #ccc;
            padding: 10px;
            text-align: center;
            border-radius: 8px 8px 0 0;
            margin-bottom: 20px;
            width: 100%;
        }

        .titulo {
            font-size: 24px;
            font-weight: bold; /* Añadí el estilo de fuente en negrita */
            margin-bottom: 10px;
        }

        input[type="text"] {
            width: calc(100% - 16px);
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        #logo {
            height: 50px;
        }

        .cuadro-comentarios {
            width: 800px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            margin: 20px auto;
        }

        .titulo-comentarios {
            font-size: 24px;
            margin-bottom: 10px;
        }

        textarea {
            width: calc(100% - 16px);
            height: 100px;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <div class="contenedor">
        <div class="cuadro">
            <div class="columna">
                <div class="barra-titulo">
                    <div class="titulo">Mi Portal</div>
                </div>
                <label for="logo">Logo:</label>
                <input type="text" id="logo" name="logo" placeholder=""><br>
                <label for="direccion">Dirección:</label>
                <input type="text" id="direccion" name="direccion">
            </div>
            <div class="columna">
                <label for="razon_social">Razón Social:</label>
                <input type="text" id="razon_social" name="razon_social"><br>
                <label for="ruc">RUC:</label>
                <input type="text" id="ruc" name="ruc"><br>
                <label for="telefono">Teléfono:</label>
                <input type="text" id="telefono" name="telefono">
            </div>
        </div>

        <div class="cuadro-comentarios">
            <div class="titulo-comentarios"></div>
            <textarea id="comentarios" name="comentarios" placeholder=""></textarea>
        </div>
    </div>
</body>
</html>