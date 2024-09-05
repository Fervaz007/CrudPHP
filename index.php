<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.datatables.net/2.1.5/css/dataTables.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="css/estilos.css">
  <title>CRUD con PHP</title>
</head>

<body>
  <div class="container">
    <h1 class="text-center">CRUD utilizando PHP, PDO, AJAX</h1>

    <div class="row">
      <div class="col-2 offset-10">
        <div class="text-center">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#modalUsuario" id="botonCrear">
            <i class="bi bi-plus-circle-fill"></i> Crear
          </button>
        </div>

      </div>

    </div>
    <br>
    <br>

    <div class="table-responsive">
      <table id="datos_usuario" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Imagen</th>
            <th>Fecha de creacion</th>
            <th>Editar</th>
            <th>Borrar</th>
          </tr>
        </thead>

      </table>
    </div>
  </div>


  <!-- Modal -->
  <div class="modal fade" id="modalUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Form para subir imagenes -->
          <form method="POST" id="formulario" enctype="multipart/form-data">
            <div class="modal-content">
              <label for="nombre">Ingrese el nombre:</label>
              <input type="text" name="nombre" id="nombre" class="form-control">
              <br>
              <label for="apellidos">Ingrese los apellidos:</label>
              <input type="text" name="apellidos" id="apellidos" class="form-control">
              <br>
              <label for="telefono">Ingrese el telefono:</label>
              <input type="text" name="telefono" id="telefono" class="form-control">
              <br>
              <label for="email">Ingrese el Email:</label>
              <input type="email" name="email" id="email" class="form-control">
              <br>
              <label for="imagen">Seleccion una imagen:</label>
              <input type="file" name="imagen_usuario" id="imagen_usuario" class="form-control">
              <span id="imagen_subida"></span>
              <br>
            </div>
            <div class="modal-footer">
              <input type="hidden" name="id_usuario" id="id_usuario">
              <input type="hidden" name="operacion" id="operacion">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.datatables.net/2.1.5/js/dataTables.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>