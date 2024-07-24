<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lineas Telefonica</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">Lineas Telefonicas</h1>
    <div class="row justify-content-center">
        <div class="col-auto">
            <a href="nuevas_lineas" class="btn btn-primary">Nuevas Lineas</a>

            <table class="table table-striped table-border table-dark">
                <thead class="text-center">
                    <tr>
                        <th>No. Telefono</th>
                        <th>Fecha pago</th>
                        <th>Meses atraso</th>
                        <th>Plan id</th>
                        <th>cliente id</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($datos as $lineas):?>
                    <tr>
                        <td> <?php echo $lineas['no_telefono'];?></td>
                        <td><?php echo $lineas['fecha_pago'];?></td>
                        <td><?php echo $lineas['meses_atraso'];?></td>
                        <td><?php echo $lineas['plan_id'];?></td>
                        <td><?php echo $lineas['cliente_id'];?></td>
                        <td>
                            <a href="" class="btn btn-primary"><i
                                    class="bi bi-pencil-fill"></i></a>
                            <a href="" class="btn btn-danger"><i
                                    class="bi bi-person-dash-fill"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>