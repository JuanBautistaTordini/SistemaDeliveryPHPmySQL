<?php
include('../../app/config.php'); //incluir archivo de configuración

include('../../admin/layout/parte1.php'); //cargar la primera parte del layout

include('../../app/controllers/roles/listado-de-roles.php'); //cargar el listado de roles

?>
<div class="content-wrapper">
  <br>
  <!-- main content -->
  <div class="content">
    <div class="container-fluid"> 
      <div class="container">
        <h1>Listado De Roles</h1>
        <?php
        foreach ($roles as $rol) {
            //echo $rol['nombre_rol'];
            // CARD 
            
        }
        ?>
      </div>
    </div>
  </div>
  <!-- /.content -->
</div>

<?php 

include('../../admin/layout/parte2.php'); //cargar la segunda parte del layout

?>
