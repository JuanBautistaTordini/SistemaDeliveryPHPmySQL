<?php 
    if(isset ($_SESSION ['mensaje'])){
      $mensaje = $_SESSION ['mensaje'];
      ?>
      <script>
        Swal.fire({
          position: "top-end",
           icon: "success",
          title: "<?= $mensaje; ?>",
          showConfirmButton: false,
          timer: 4500
        });
      </script>
    <?php
      unset($_SESSION ['mensaje']);
    }
?>