<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="sytles.css">
    <title>formulario</title>
</head>
<body>
    <h1>formulario de conctato</h1>
<div class=" row">
    <div class="col-12"><br>
    <form action="validar.php" method="POST">
  <div class="mb-3"> 
 
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label" >nombre</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="nombre">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label" >autor</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="autor">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label" >precio</label>
    <input type="number" class="form-control" id="exampleInputPassword1" name="precio"> 
  </div>
  <select class="form-select" name="disponible">
    <option selected>disponible</option>
    <option value="1">si disponible</option>
    <option value="2">no disponible</option>
  </select>

</select><br><br>
<button type="submit" class="btn btn-primary"style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">enviar
</button>
  </div>

</form>
</div>
</body>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
</html>