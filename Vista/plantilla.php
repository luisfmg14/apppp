<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Heroic Features - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="Recursos/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="Recursos/css/heroic-features.css" rel="stylesheet">

   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8/dist/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@8/dist/sweetalert2.min.css" id="theme-styles">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/APP">APP</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/APP">INICIO
              <span class="sr-only">(current)</span>
            </a>
          </li>

            <?php if(isset($_SESSION['USU_ID'])){
                if($_SESSION['USU_ROL']==1){ ?>

          <li class="nav-item">
            <a class="nav-link" href="?controlador=usuario&accion=lisUsuario">lista usuario</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?controlador=producto&accion=lisProducto">listar producto</a>
          </li>
          <?php }}?>

           <?php if(!isset($_SESSION['USU_ID'])){ ?>
          <li class="nav-item">
            <a class="nav-link" href="?controlador=inicio&accion=frmLogin">Login</a>
          </li>
          <?php } ?>

          <?php if(isset($_SESSION['USU_ID'])){ ?>
          <li class="nav-item">
            <a class="nav-link" href="?controlador=inicio&accion=CerrarSession">
              <?php echo $_SESSION['USU_NOMBRE']." "; ?>
            Salir</a>
          </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </nav>	

  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <h1 class="display-3">Bienvenidos a mi Pagina</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
<!--      <a href="#" class="btn btn-primary btn-lg">Call to action!</a> -->
    </header>

    <!-- Page Features -->
    <?php require_once "rutas.php"; ?>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; APP 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="Recursos/vendor/jquery/jquery.min.js"></script>
   <script src="Recursos/js/default.js"></script>
  <script src="Recursos/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
