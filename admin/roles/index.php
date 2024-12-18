<?php
include('../../app/config.php'); // Incluir archivo de configuración
include('../../admin/layout/parte1.php'); // Cargar la primera parte del layout
include('../../app/controllers/roles/listado-de-roles.php'); // Cargar el listado de roles
?>
<div class="content-wrapper">
  <br>
  <!-- main content -->
  <div class="content">
    <div class="container-fluid"> 
      <div class="container">
        <h1 class="mb-4">Listado De Roles</h1>
        <div class="row">
          <div class="col-12">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Nro</th>
                  <th>Nombre</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $contador = 1; // Inicializar contador
                foreach ($roles as $rol): ?>
                  <tr>
                    <td><?= $contador++; ?></td>
                    <td><?= htmlspecialchars($rol['nombre_rol']); ?></td>
                    <td>
                      <a href="mostrar_rol.php?id=<?= $rol['id_rol']; ?>" class="btn btn-sm btn-primary">Mostrar</a>
                      <a href="editar_rol.php?id=<?= $rol['id_rol']; ?>" class="btn btn-sm btn-warning">Editar</a>
                      <a href="eliminar_rol.php?id=<?= $rol['id_rol']; ?>" class="btn btn-sm btn-danger">Eliminar</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.content -->
</div>

<?php 
include('../../admin/layout/parte2.php'); // Cargar la segunda parte del layout
?>


<script>
  $(function () {
    $("#example1").DataTable({
      responsive: true, // Hace la tabla responsiva
      lengthChange: true, // Permite cambiar el número de registros visibles
      autoWidth: false, // Deshabilita el ajuste automático del ancho
      paging: true, // Activa la paginación
      searching: true, // Habilita la búsqueda
      ordering: true, // Permite ordenar las columnas
      info: true, // Muestra la información del estado (ej. "Mostrando 1-10 de 50")
      pageLength: 10, // Número de filas visibles por página por defecto
      language: {
        "sProcessing": "Procesando...",
        "sLengthMenu": "Mostrar _MENU_ roles",
        "sZeroRecords": "No se encontraron resultados",
        "sEmptyTable": "Ningún dato disponible en esta tabla",
        "sInfo": "Mostrando roles del _START_ al _END_ de un total de _TOTAL_ roles",
        "sInfoEmpty": "Mostrando roles del 0 al 0 de un total de 0 roles",
        "sInfoFiltered": "(filtrado de un total de _MAX_ roles)",
        "sSearch": "Buscar:",
        "sUrl": "",
        "sInfoThousands": ",",
        "sLoadingRecords": "Cargando...",
        "oPaginate": {
          "sFirst": "Primero",
          "sLast": "Último",
          "sNext": "Siguiente",
          "sPrevious": "Anterior"
        },
        "oAria": {
          "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
          "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        },
        "buttons": {
          "copyTitle": "Copiado al portapapeles",
          "copySuccess": {
            _: "Copiados %d registros",
            1: "Copiado 1 registro"
          },
          "colvis": "Visibilidad de columnas"
        }
      },
      buttons: [
        "copy", 
        "excel", 
        "pdf", 
        {
          extend: "print",
          text: "Imprimir",
          customize: function (win) {
            $(win.document.body)
              .css("font-size", "10pt")
              .prepend('<h3>Listado de Roles</h3>');
          }
        },
        "colvis"
      ]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>

