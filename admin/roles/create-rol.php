<?php
include('../../app/config.php'); // Incluir archivo de configuración
include('../../admin/layout/parte1.php'); // Cargar la primera parte del layout
?>
<div class="content-wrapper">
  <br>
  <!-- main content -->
  <div class="content">
    <div class="container-fluid"> 
      <div class="container">
        <h1 class="mb-4">Creacion de nuevo rol</h1>
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
                            <label for="">Nombre del rol</label><b>*</b>
                            <input type="text" name="nombre_rol" class="form-control" required>
                          </div>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <a onclick="window.history.back();" class="btn btn-danger">Cancelar</a>
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

