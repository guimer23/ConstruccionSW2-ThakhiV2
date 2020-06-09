<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Sistema - Thakhi Pedidos</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A premium admin dashboard template by Mannatthemes" name="description" />
        <meta content="Mannatthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="Assets/images/favicon-thakhi.png">

        <!-- App css -->
        <link href="Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="Assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="Assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
        <link href="Assets/css/style.css" rel="stylesheet" type="text/css" />

    </head>

    <body style="background:#32508C" class="account-body">

        <!-- Log In page -->
        <div class="row vh-100">
            <div class="col-12 align-self-center">
                <div class="auth-page">
                    <div class="card auth-card shadow">
                        <div class="card-body">
                            <div class="px-3">
                                <div class="auth-logo-box">
                                    <a href="#" class="logo logo-admin"><img src="Assets/images/thakhi.png" height="100" alt="logo" class="auth-logo"></a>
                                </div><!--end auth-logo-box-->
                                  <br>
                                <div class="text-center auth-logo-text">
                                    <h4 class="mt-0 mb-3 mt-5">Inicio de Sesión</h4>
                                    <p class="text-muted mb-0">Sistema - Thakhi Delivery.</p>
                                </div> <!--end auth-logo-text-->


                                <form id="formulariologin" class="form-horizontal auth-form my-4" >

                                    <div class="form-group">
                                        <label for="username">Usuario</label>
                                        <div class="input-group mb-3">
                                            <span class="auth-form-icon">
                                                <i class="dripicons-user"></i>
                                            </span>

                                            <input type="text"  id="usu"   name="usu" class="form-control input-sm" >
                                        </div>
                                    </div><!--end form-group-->

                                    <div class="form-group">
                                        <label for="userpassword">Clave</label>
                                        <div class="input-group mb-3">
                                            <span class="auth-form-icon">
                                                <i class="dripicons-lock"></i>
                                            </span>

                                            	<input type="password" name="userpassword" id="userpassword" class="form-control input-sm">
                                        </div>
                                    </div><!--end form-group-->



                                    <div class="form-group mb-0 row">
                                        <div class="col-12 mt-2">
                                            <button  type="button" id="entrarsistema" class="btn btn-dark btn-round btn-block waves-effect waves-light" >Ingresar <i class="fas fa-sign-in-alt ml-1"></i></button>
                                        </div><!--end col-->
                                    </div> <!--end form-group-->
                                </form><!--end form-->
                            </div><!--end /div-->
                        </div><!--end card-body-->
                    </div><!--end card-->

                </div><!--end auth-page-->
            </div><!--end col-->
        </div><!--end row-->
        <!-- End Log In page -->


        <!-- jQuery  -->
        <script src="Assets/js/jquery.min.js"></script>
        <script src="Assets/js/bootstrap.bundle.min.js"></script>
        <script src="Assets/js/metisMenu.min.js"></script>
        <script src="Assets/js/waves.min.js"></script>
        <script src="Assets/js/jquery.slimscroll.min.js"></script>
        <script src="Assets/js/jquery-3.2.1.min.js"></script>
        <script src="Assets/js/funciones.js"></script>

        <!-- App js -->
        <script src="Assets/js/app.js"></script>

    </body>
</html>


<script type="text/javascript">
	$(document).ready(function(){
		$('#entrarsistema').click(function(){

		vacios=ValidadFormVacio('formulariologin');

			if(vacios > 0){
				alert("Debes llenar todos los campos!!");
				return false;
			}

      datos=$('#formulariologin').serialize();
      $.ajax({
      				type:"POST",
      				data:datos,
      				url:"Models/admUSUtUsuario/LoginUsuarios.php",
      				success:function(r){

      					if(r==1){

      						window.location="index.php";
      					}else{

                	alert("No se pudo acceder :(");
      					}
      				}
      			});

	});
	});
</script>
