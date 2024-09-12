<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir y procesar archivo CSV</title>
</head>
<body>
    <h1>Subir archivo CSV</h1>

    <!-- Formulario para subir el archivo CSV -->
                       
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="titulo">Tipo mensaje</label>
                                   <select name="select">
                                    <option value="value1">WhatsApp</option>
                                    <option value="value2" selected>SMS</option>
                                    <option value="value3">Correo</option>
                                  </select>                             
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="titulo">Clientes</label>
                                   <form action="" method="POST" enctype="multipart/form-data">
                                    <label for="csv_file">Selecciona un archivo CSV:</label>
                                    <input type="file" name="csv_file" id="csv_file" accept=".csv" required>
                                    <br><br>
                                        </form>                          
                                </div>
                            </div>

                           
                             

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                    
                                <div class="form-floating">
                                <button type="submit" class="btn btn-primary">+</button>                            
                                <label for="contenido">Campaña</label>
                                <select name="select">
                                    <option value="value1">campaña1</option>
                                    <option value="value2" selected>campaña2</option>
                                    <option value="value3">campaña3</option>
                                  </select> 
                                </div>
                            
                            <button type="submit" class="btn btn-primary">ENVIAR</button>                            
                        </div>
                    </form>
</body>
</html>

