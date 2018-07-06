<?php
/*
Author: Javed Ur Rehman
Website: http://www.allphptricks.com/
*/

include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="/img/logo/icon.png" />
<link rel="stylesheet" href="/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/estilos.css">
<title>Veterinaria Bichon</title>
</head>
<body>

  <!-- Navbar -->
      <nav class="navbar navbar-expand-sm fixed-top">
        <a class="navbar-brand" href="/index.html"><img src="/img/logo/logo_v2.png" width="200" height="30" class="d-inline-block align-top" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                      <a class="nav-link" href="/../index.html">Inicio <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/acerca.html">Acerca de nosotros</a>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Servicios</a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="/hospedaje.html">Hospedaje</a>
                          <a class="dropdown-item" href="/limpieza.html">Limpieza</a>
                          <a class="dropdown-item" href="/atropellados.html">Atropellos</a>
                          <a class="dropdown-item" href="/funeraria.html">Funeraria</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="/productos.html">Productos</a>
                      </div>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/galeria.html">Galería</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/contacto.html">Contacto</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/blog.html">Blog</a>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mi Cuenta</a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="#">Mis Mascotas</a>
                          <a class="dropdown-item" href="/php/registroMascota.php">Nueva Mascota</a>
                          <a class="dropdown-item" href="/php/logout.php">Cerrar Sesion</a>
                      </div>
                  </li>
              </ul>
          </div>
      </nav>

      <!-- //Mascotas -->
      <h1 class="display-4" style="text-align:center; position:relative; top: 70px;">Mis Mascotas <img src="/img/logo/icon_v2.png" width="64" height="64" alt=""></h1>
        <div class="row" >
          <?php
            require('db.php');
            $usuario = $_SESSION['username'];
            $sql = "SELECT nombre, tipo, raza, fecha, nombreUsuario FROM infmascotas where id_usuario = '$usuario'";
            $resultset = mysqli_query($con, $sql) or die("database error:". mysqli_error($con));
            while( $record = mysqli_fetch_assoc($resultset) ) {
          ?>

          <div class="col-sm-4">
            <div class="card" id="cardEmpleado">
              <div class="card-body">
                <h3 class="card-title"><?php echo $record['nombre']; ?></h3>
                <aside class="col-md-2" style="height:128px; float: left; width:128px; " >
                  <img src="/img/logo/icon_v2.png"  class="d-inline-block align-top" alt="">
                </aside>
                <h4 class="card-text">
                  Tipo: <?php echo $record['tipo']; ?> <br>
                  Raza: <?php echo $record['raza']; ?> <br>
                  Fecha: <?php echo $record['fecha']; ?> <br>
                  Dueño: <?php echo $record['nombreUsuario']; ?><br>
                 </h4>
                <div style="position: absolute; bottom: 15px; right:0; margin-right: 10px;">
                  <form class="" action="" method="post">
                      <input style="display:none;" type="text" name="nombre" value="<?php echo $record['nombre']; ?>">
                      <input type="submit" id="botonEliminar" name="delete" value=""  /> <br>
                  </form>



                 <!-- <button class="btn btn-outline-info col-xs-3"><img src="/img/icon/eliminar.png" alt=""></button> -->
               </div>
              </div>
            </div>
          </div>

        <?php } ?>
        </div>

      <!-- Pie de pagina -->
          <footer class="footer" id="footer-index">
              <div class="container">
                  <div class="row">
                      <div class="col-sm-3">
                          <h3>Dr. Herman Toledo</h3>
                          <p>Acerca del veterinario <a class="urlFooter" href="http://google.com">Google</a></p>
                      </div>
                      <div class="col-sm-3">
                          <ul class="list-unstyled">
                              <h3>Servicios</h3>
                              <li><a class="urlFooter" href="/hospedaje.html">Hospedaje</a></li>
                              <li><a class="urlFooter" href="/limpieza.html">Limpieza</a></li>
                              <li><a class="urlFooter" href="/atropellados.html">Atropellos</a></li>
                              <li><a class="urlFooter" href="/funeraria.html">Funeraria</a></li>
                          </ul>
                      </div>
                      <div class="col-sm-3">
                          <ul class="list-unstyled">
                              <h3>Redes sociales</h3>
                              <li><a class="urlFooter" href="http://www.facebook.com">Facebook</a></li>
                              <li><a class="urlFooter" href="http://www.twitter.com">Twitter</a></li>
                              <li><a class="urlFooter" href="http://www.instagram.com">Instagram</a></li>
                              <li><a class="urlFooter" href="http://www.youtube.com">Youtube</a></li>
                          </ul>
                      </div>
                      <div class="col-sm-3">
                          <h3>Contáctenos</h3>
                          <li><a class="urlFooter" href="">Teléfono: 55 (443) 324 20 46</a></li>
                          <li><a class="urlFooter" href="https://bit.ly/2wuHzwR">Dirección: Huitzilihuitl 485 Ejidal Ocolusen Morelia Michoacán</a></li>
                      </div>
                  </div>
              </div>
          </footer>
          <?php
            if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['delete']))
            {
              func();
            }
            function func()
            {
              require('db.php');
                // If form submitted, insert values into the database.
                $nombre = $_REQUEST['nombre'];
                $nombre = mysqli_real_escape_string($con,$nombre);
                $usuario = $_SESSION['username'];
                    $query = "DELETE FROM mascotas WHERE nombre = '$nombre' AND id_usuario = '$usuario'";
                    if ($con->query($query) === TRUE) {
                      header("Location: index.php");

                    } else {
                        echo "<script type='text/javascript'>alert('No fue posible la eliminacion, intente nuevamente');window.location = '/php/index.php';</script>";
                    }
            }
          ?>
</body>
<script src="/js/jquery-3.3.1.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
</html>
