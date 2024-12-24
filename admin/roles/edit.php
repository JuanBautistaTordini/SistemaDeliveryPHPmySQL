<?php


include('../../app/config.php'); // Incluir archivo de configuración
include('../../admin/layout/parte1.php'); // Cargar la primera parte del layout
$id_rol = $_GET['id'];
include('../../app/controllers/roles/controller_roles.php'); // Cargar el listado de roles

$controller_roles = new controller_roles();
$rol = $controller_roles -> datos_rol($id_rol);
?>
<div class="content-wrapper">
  <br>
  <!-- main content -->
  <div class="content">
    <div class="container-fluid"> 
      <div class="container">
        <!-- Enlace "Volver" arriba del título -->
        <div class="mb-3">
          <span onclick="window.history.back();" style="cursor: pointer; color: #007bff; font-size: 1rem;">
            &#8592; Volver
          </span>
        </div>
        <!-- Título -->
        <h1 class="mb-4"><?=$rol['nombre_rol'];?></h1>
        <div class="row">
          <div class="col-md-6">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Ingrese los datos</h3>
                </div>
                <div class="card-body">
                    <form action="<?=APP_URL;?>/app/controllers/roles/create.php" method="POST">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="">Nombre del rol</label>
                            <input type="text" name="nombre_rol" class="form-control">
                          </div>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <a href="" class="btn btn-danger">Cancelar</a>
                            <button type="submit" class="btn btn-primary">Crear</button>
                          </div>
                        </div>
                      </div>
                    </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.content -->
</div>


<?php 
include('../../admin/layout/parte2.php'); // Cargar la segunda parte del layout
include('../../layout/mensaje.php'); //cargar el mensaje
?>



