
<?php

require_once("../../Controllers/admClsConexion.php");
	$c= new Conectar();
		$conexion=$c->conexion();
	$sql="SELECT CONdni,CONnombre,CONapellido,CONlicencia,CONvigencialicencia,CONemail,CONcelular,CONestado from admcontconductor ";


$resultado=mysqli_query($conexion,$sql);

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="shortcut icon" href="../../Assets/images/favicon.ico">

    <!-- DataTables -->
    <link href="../../Assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="../../Assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="../../Assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="../../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../../Assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="../../Assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
    <link href="../../Assets/css/style.css" rel="stylesheet" type="text/css" />
</head>
  </head>
  <body>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a id="ir" name="ir" href="#" class="btn btn-primary px-4 float-right mt-0 mb-3"><i class="mdi mdi-plus-circle-outline mr-2"></i>Agregar Nuevo Conductor</a>
                    <h4 class="header-title mt-0">Detalles de Conductores</h4>
                    <div class="table-responsive dash-social">
                        <table id="TablaConductor" class="table">
                            <thead class="thead-light">
                            <tr>
                              <th>DNI</th>
                              <th>Nombres y Apellidos</th>
                              <th>Licencia</th>
                              <th>Vigencia de Lic.</th>
                              <th>Correo</th>
	  													<th>Celular</th>
															<th>Estado</th>
                              <th>Acción</th>
                            </tr><!--end tr-->
                            </thead>

                            <tbody>
															<?php
															while ($ver = mysqli_fetch_row($resultado)) :
																	$estado = "";
																	if ($ver[7] == "A") {
																			$estado = "<span class='badge badge-success'>Activo</span>";;
																	} else {
																			$estado = "<span class='badge badge-danger'>Inactivo</span>";;
																	}
																	?>
                            <tr>

                              	<td><?php echo  $ver[0]?></td>
                                <td><?php echo  $ver[1]." ".$ver[2]?></td>
                          			<td><?php echo $ver[3]; ?></td>
                              	<td><?php echo $ver[4]; ?></td>
                                <td><?php echo $ver[5]; ?></td>
														    <td><?php echo $ver[6]; ?></td>
																<td><?php echo  $estado ?></td>

                              <td>
                                <a  onclick="AgregaDatosConductor('<?php echo  $ver[0]  ?>')"  class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                <a href="#" onclick="llenadatosc('<?php echo  $ver[0]  ?>')" ><i class="fas fa-eye text-dark font-16" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg" ></i></a>
                              </td>
                            </tr><!--end tr-->

													<?php endwhile ?>
                            </tbody>
                        </table>
                    </div>
                </div><!--end card-body-->
            </div><!--end card-->
        </div> <!--end col-->
    </div><!--end row-->

</div><!-- container -->
  </body>
</html>
<script src="../../Assets/js/jquery.min.js"></script>
<script src="../../Assets/js/bootstrap.bundle.min.js"></script>
<script src="../../Assets/js/metisMenu.min.js"></script>
<script src="../../Assets/js/waves.min.js"></script>
<script src="../../Assets/js/jquery.slimscroll.min.js"></script>

<script src="../../Assets/plugins/apexcharts/apexcharts.min.js"></script>
<script src="https://apexcharts.com/samples/assets/irregular-data-series.js"></script>
<script src="https://apexcharts.com/samples/assets/ohlc.js"></script>
<!-- Required datatable js -->
<script src="../../Assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../Assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<script src="../../Assets/plugins/peity-chart/jquery.peity.min.js"></script>

<script src="../../Assets/pages/jquery.ana_customers.inity.js"></script>

<!-- App js -->
<script src="../../Assets/js/app.js"></script>



<script type="text/javascript">

	$(document).ready(function(){
		$('#ir').click(function(){
			var t="N";
			window.location="admFrmAgregar.php?ti="+t;
		})
	})
</script>
<script>
    $(function (e) {
        $('#TablaConductor').DataTable({
            "aLengthMenu": [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "Todos"]],
            "bDestroy": true,
            "language": {
                "sProcessing": "Procesando...",
                "sLengthMenu": "Mostrar _MENU_ registros",
                "sZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "Ningun dato disponible en esta tabla",
                "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix": "",
                "sSearch": "Buscar:",
                "sUrl": "",
                "sInfoThousands": ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast": "?ltimo",
                    "sNext": "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            }
        });
    });</script>
