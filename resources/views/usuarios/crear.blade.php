<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S</title>
</head>

<body>
    <h1>Registra un usuario</h1>

    <!-- Formulario para subir el archivo CSV -->

    <div class="container">
        <form action="" method="post">
            <label for="nombre">Nombres</label>
            <input type="text">
            <label for="nombre">Apellidos</label>
            <input type="text">
            <br> <br>
            <label for="email">Correo electronico</label>
            <input type="email">
            <label for="division">Division</label>
            <select name="select">
                <option value="value1">SURSURESTE</option>
            </select>
            <br> <br>
            <label for="nombre">Zona</label>
            <select name="select">
                <option value="value1">Oaxaca</option>
                <option value="value2">Huajuapan</option>
                <option value="value3">Huatulco</option>
                <option value="value4">Tehuantepec</option>
                <option value="value5">Tapachula</option>
                <option value="value6">Tuxtla</option>
                <option value="value7">San Cristobal</option>
                <option value="value8">Los Rios</option>
                <option value="value9">cho</option>
                <option value="value10">Villa</option>
            </select>
            <label for="nombre">Agencia</label>
            <select name="select">
                <option value="value1">agen1</option>
                <option value="value1">agen2</option>
                <option value="value1">agen3</option>
            </select>
            <br> <br>
            <label for="cargo">Cargo</label>
            <select name="select">
                <option value="value1">TI-Zona</option>
                <option value="value1">Ti-division</option>
                <option value="value1">qq</option>
            </select>
            <label for="status">satatus</label>
            <input type="checkbox">

            <br> </br>
            <label><input type="checkbox" id="cbox1" value="first_checkbox" /> Enviar mensajes WhatsApp</label>

            <input type="checkbox" id="cbox2" value="second_checkbox" />
            <label for="cbox2">Enviar mensajes SMS</label>
            <br> </br>
            <input type="checkbox" id="cbox3" value="3_checkbox" />
            <label for="cbox3">Crear usuarios</label>

            <input type="checkbox" id="cbox4" value="4_checkbox" />
            <label for="cbox4">Crear campañas</label>
            <br> </br>
            <input type="checkbox" id="cbox5" value="5_checkbox" />
            <label for="cbox5">Editar usuarios</label>

            <input type="checkbox" id="cbox6" value="6_checkbox" />
            <label for="cbox6">Editar campañas</label>
            <br> </br>
            <input type="checkbox" id="cbox7" value="7_checkbox" />
            <label for="cbox7">Ver mensajes enviados</label>

            <input type="checkbox" id="cbox8" value="8_checkbox" />
            <label for="cbox8">ver usuarios</label>

            <input type="checkbox" id="cbox9" value="9_checkbox" />
            <label for="cbox9">ver campañas</label>
            <br> </br>

            <label for="contraseña">Contraseña</label>
            <input type="password" value="password">

            <label for="contraseña">Confirmar Contraseña</label>
            <input type="password" value="cpassword">
            <br> </br>
            <button type="submit" class="btn btn-primary">Nuevo</button>
            

        </form>
    </div>
</body>

</html>
