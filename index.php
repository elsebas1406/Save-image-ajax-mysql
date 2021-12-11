<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta lang="es">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="jquery-3.6.0.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<title>Subir imagen</title>
</head>
<body>
<div class="container" style="margin-top: 5rem;">
    <div class="card col-4">
         <div class="card-header">
            <h3>Imagen a Subir</h3>
         </div>
         <div class="card-body">
            <form id="register-form" enctype="multipart/form-data">
                <div class="row g-3 mb-3">
                    <div class="col-12">
                        <label>Titulo</label>
                        <input type="text" class="form-control" name="descrip" id="descrip"/><br>
                    </div>
                </div>
                <div class="row g-3 mb-3">
                    <div class="col-12">
                        <label>Imagen</label>
                        <input type="file" class="form-conntrol-file" name="image" id="image"/><br>
                    </div>
                </div>
                <button class="btn btn-outline-dark" id="btn" type="submit"> Registrar</button>
            </form>
         </div>
    </div>
</div>
</body>
<script src="ajax.js"></script>
</html>