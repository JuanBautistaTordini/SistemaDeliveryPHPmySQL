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
          <div class="col-8">
            <!-- Card con información del rol -->
            <div class="card card-outline card-primary">
              <div class="card-body">
                <!-- Grupo para nombre_rol -->
                <div class="form-group mb-3">
                  <label for="nombreRol" class="form-label">Nombre del Rol:</label>
                  <p id="nombreRol" class="form-text"><?=$rol['nombre_rol'];?></p>
                </div>
                <!-- Grupo para fyh_creacion -->
                <div class="form-group mb-3">
                  <label for="fyhCreacion" class="form-label">Fecha y Hora de Creación:</label>
                  <p id="fyhCreacion" class="form-text"><?=$rol['fyh_creacion'];?></p>
                </div>
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



