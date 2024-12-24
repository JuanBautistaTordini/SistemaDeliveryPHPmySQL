<?php
include('../app/config.php'); //incluir archivo de configuración

include('../admin/layout/parte1.php'); //cargar la primera parte del layout

?>
<div class="content-wrapper">
  <br>
  <!-- main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="container">
          <h1>Bienvenido al sistema de Delivery</h1>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3 col-6">
          <div class="small-box bg-info">
            <div class="inner">
              <h3>150</h3>
              <p>New Orders</p>
            </div>
            <div class="icon">
              <i class="fas fa-shopping-cart"></i>
            </div>
            <a href="" class="small-box-footer">
              More info <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.content -->
</div>

<?php 

include('../admin/layout/parte2.php'); //cargar la segunda parte del layout
include('../layout/mensaje.php'); //cargar el mensaje

?>
