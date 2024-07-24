<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <style>
    body {
        width: 100%;
        height: 100%;
        --s: 60px;
        --c1: #6ca700;
        --c2: #406102;
        --_g: radial-gradient(25% 25% at 25% 25%,
                var(--c1) 99%,
                rgba(0, 0, 0, 0) 101%);
        background: var(--_g) var(--s) var(--s) / calc(2 * var(--s)) calc(2 * var(--s)),
            var(--_g) 0 0 / calc(2 * var(--s)) calc(2 * var(--s)),
            radial-gradient(50% 50%, var(--c2) 98%, rgba(0, 0, 0, 0)) 0 0 / var(--s) var(--s),
            repeating-conic-gradient(var(--c2) 0 50%, var(--c1) 0 100%) calc(0.5 * var(--s)) 0 / calc(2 * var(--s)) var(--s);
    }
    .card-img-top {
      width: 150px;
    }
    @media (max-width: 768px) {
      .card {
        margin-bottom: 20px;
      }
      .card-img-top {
        width: 100px;
      }
    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-white text-center">Pagina Principal Telefonias</h1>
    <div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-4 mb-4">
      <div class="card text-center">
        <img src="https://via.placeholder.com/150" class="card-img-top mx-auto mt-3" alt="Imagen 1">
        <div class="card-body">
          <h5 class="card-title">DCFVD</h5>
          <p class="card-text">Descripción de la tarjeta 1.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card text-center">
        <img src="https://via.placeholder.com/150" class="card-img-top mx-auto mt-3" alt="Imagen 2">
        <div class="card-body">
          <h5 class="card-title">Card 2</h5>
          <p class="card-text">Descripción de la tarjeta 2.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card text-center">
        <img src="https://via.placeholder.com/150" class="card-img-top mx-auto mt-3" alt="Imagen 3">
        <div class="card-body">
          <h5 class="card-title">Card 3</h5>
          <p class="card-text">Descripción de la tarjeta 3.</p>
        </div>
      </div>
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>