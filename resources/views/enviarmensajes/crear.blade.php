<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    
    <h1>Enviar Mensajes</h1>

    <!-- Formulario para subir el archivo CSV -->

                       <div class="container">
                        <form >
                        
                                   <label for="titulo">Tipo mensaje</label>
                                   <select name="select">
                                    <option value="value1">WhatsApp</option>
                                    <option value="value2" selected>SMS</option>
                                    <option value="value3">Correo</option>
                                  </select>                             
                                  <br><br>

                           
                                   <label for="titulo">Clientes</label>
                                   
                                    <label for="csv_file">Selecciona un archivo CSV:</label>
                                    <input type="file" name="csv_file" id="csv_file" accept=".csv" required>
                                    <br><br>
                                                            
                               
                                <button type="submit" class="btn btn-primary">+</button>                            
                                <label for="contenido">Campaña</label>
                                <select name="select">
                                    <option value="value1">campaña1</option>
                                    <option value="value2" selected>campaña2</option>
                                    <option value="value3">campaña3</option>
                                  </select> 
                                  <br><br>
                            
                            <button type="submit" class="btn btn-primary">ENVIAR</button>                            
                        
                    </form>
                </div>
</body>
</html>

