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
        <h1>Nuevos Clientes</h1>
        <div class="row">
            <div class="col col-4">
                <form action="agregar_lineas" method="post">
                    <div class="mb-3">
                        <label for="txtId" class="form-label">No. Telefono:</label>
                        <input type="text" id="txtId" name="txtId" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtFecha" class="form-label">fecha de pago:</label>
                        <input type="text" id="txtFecha" name="txtFecha" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtMeses" class="form-label">Meses de atraso:</label>
                        <input type="number" id="txtMeses" name="txtMeses" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtPlanId" class="form-label">Plan id:</label>
                        <input type="text" id="txtPlanId" name="txtPlanId" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtCliente" class="form-label">Cliente id:</label>
                        <input type="text" id="txtCliente" name="txtCliente" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="submit" id="btnGuardarLineas" name="btnGuardarLineas" class="form-control" value="Guardar Lineas">
                    </div>
                </form>
            </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>