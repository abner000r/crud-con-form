<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nuevos Planes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>Clientes</h1>
        <div class="row">
            <div class="col col-4">
                <form action="agregar_clientes" method="post">
                    <div class="mb-3">
                        <label for="txtClienteId" class="form-label">Cliente id:</label>
                        <input type="text" id="txtClienteId" name="txtClienteId" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtApellido" class="form-label">Apellido:</label>
                        <input type="text" id="txtApellido" name="txtApellido" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtNombre" class="form-label">Nombre:</label>
                        <input type="number" id="txtNombre" name="txtNombre" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtCorreo" class="form-label">Correo Electronico:</label>
                        <input type="text" id="txtCorreo" name="txtCorreo" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtCalle" class="form-label">Calle avenida:</label>
                        <input type="text" id="txtCalle" name="txtCalle" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtCasa" class="form-label">No. Casa:</label>
                        <input type="text" id="txtCasa" name="txtCasa" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtZona" class="form-label">Zona:</label>
                        <input type="text" id="txtZona" name="txtZona" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="submit" id="btnGuardarClientes" name="btnGuardarClientes" class="form-control" value="Guardar Lineas">
                    </div>
                </form>
            </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>