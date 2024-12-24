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
        <h1 class="mb-4">Eliminar: <?=$rol['nombre_rol'];?></h1>
        <div class="row">
          <div class="col-md-6">
            <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">¿Estas seguro de eliminar éste registro?</h3>
                </div>
                <div class="card-body">
                    <form action="<?=APP_URL;?>/app/controllers/roles/delete.php" method="POST">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="">Nombre del rol</label>
                            <input type="text" name="id_rol" value="<?=$id_rol;?>" hidden>
                            <input type="text" value="<?=$rol['nombre_rol'];?>" name="nombre_rol" class="form-control" disabled>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="">Fecha y hora de creacion</label>
                            <input type="text" name="id_rol" value="<?=$id_rol;?>" hidden>
                            <input type="text" value="<?=$rol['fyh_creacion'];?>" name="fyh_creacion" class="form-control" disabled>
                          </div>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <a onclick="window.history.back();" class="btn btn-secondary">Cancelar</a>
                            <button type="submit" class="btn btn-danger">Eliminar</button>
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



