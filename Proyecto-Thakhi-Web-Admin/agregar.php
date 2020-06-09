<!DOCTYPE html>
<html lang="es">
<!-- initial head -->
<?php include "Views/Template/head.php" ;?>
<!-- head End -->
    <body>
        <!-- Top Bar Start -->
        <?php include "Views/Template/topbar.php";?>
        <!-- Top Bar End -->

        <div class="page-wrapper">

          <!-- Left Sidenav -->
        <?php include "Views/Template/sidenav.php" ;?>
          <!-- end left-sidenav-->

            <!-- Page Content-->
            <div class="page-content">

                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="float-right">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Sistema</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Conductor</a></li>
                                        <li class="breadcrumb-item active">Agregar</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Agregar / Editar Conductor</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                  <div class="row clearfix">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>DNI <span class="text-danger"></span></label>
                                                <input class="form-control" type="text" placeholder="Ingresa tu DNI">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nombres <span class="text-danger"></span></label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Apellidos <span class="text-danger"></span></label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                          <div class="col-md-3">
                                              <div class="form-group">
                                                  <label>Licencia de conductor<span class="text-danger"></span></label>
                                                  <input class="form-control" type="text">
                                              </div>
                                          </div>
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                  <label>Vigencia de Licencia<span class="text-danger"></span></label>
                                                  <input class="form-control" type="date">
                                              </div>
                                          </div>
                                          <div class="col-md-5">
                                              <div class="form-group">
                                                  <label>Celular <span class="text-danger"></span></label>
                                                  <input class="form-control" type="text">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row clearfix">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label>Correo electrónico<span class="text-danger"></span></label>
                                                    <input class="form-control" type="email">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Clave <span class="text-danger"></span></label>
                                                    <input class="form-control" type="password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                              <div class="col-md-8">
                                                  <div class="form-group">
                                                      <label>Dirección<span class="text-danger"></span></label>
                                                      <input class="form-control" type="text">
                                                  </div>
                                              </div>
                                              <div class="col-md-4">
                                                  <label>Estado <span class="text-danger"></span></label>
                                                  <div class="form-group">
                                                      <select name="Estado" class="form-control">
                                                          <option value="">- Seleccionar -</option>
                                                          <option value="Activo">Activo</option>
                                                          <option value="Inactivo">Inactivo</option>
                                                      </select>
                                                  </div>
                                              </div>
                                          </div>
                                        <div class="row clearfix text-right  ">
                                            <div class="col-md-12 ">
                                                <button class="btn btn-primary btn-icon-split" type="submit">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-save"></i>
                                                    </span>
                                                    <span class="text">Guardar</span>
                                                </button>
                                            </div>
                                        </div>


                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                    <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-box">
                                    </div>
                                </div>
                            </div>
                        </div>

                </div><!-- container -->

                <?php include "Views/Template/footer.php" ;?>
                <!--end footer-->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->


        <!-- jQuery  -->
        <!-- google maps api -->
        <!-- Gmaps file -->
        <!-- demo codes -->
        <!-- App js -->
        <?php include "Views/Template/js.php";?>


    </body>
</html>

<script src="" charset="utf-8">
</script>
