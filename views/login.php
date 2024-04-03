<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Orellana Matias">
      <title> Acceder al sistema</title>

    <link href="<?php echo RUTA . 'assets/'; ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link rel="icon" href="./assets/imag/favicon.ico" type="image/x-icon">

    <link href="<?php echo RUTA . 'assets/'; ?>css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?php echo RUTA . 'assets/'; ?>css/snackbar.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Bienvenido a nuestro sistema <strong>El Guri</strong></h1>
                                    </div>
                                    <form class="user" autocomplete="off" id="frmLogin">
                                        <div class="form-group">
                                            <label for="email">Correo Electronico<span class="text-danger">*</span></label>
                                            <input type="email" class="form-control form-control-user"
                                                id="email" aria-describedby="emailHelp"
                                                placeholder="Ingrese correo electronico...">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Contraseña<span class="text-danger">*</span></label>
                                            <input type="password" class="form-control form-control-user"
                                                id="password" placeholder="Contraseña">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            ENTRAR AL SISTEMA
                                        </button>
                                        <hr>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo RUTA . 'assets/'; ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo RUTA . 'assets/'; ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="<?php echo RUTA . 'assets/'; ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="<?php echo RUTA . 'assets/'; ?>js/sb-admin-2.min.js"></script>
    <script src="<?php echo RUTA . 'assets/'; ?>js/snackbar.min.js"></script>
    <script src="<?php echo RUTA . 'assets/'; ?>js/axios.min.js"></script>
    <script>
        const ruta = '<?php echo RUTA; ?>';
    </script>
    <script src="<?php echo RUTA . 'assets/'; ?>js/login.js"></script>
</body>

</html>