<?php
/*
Author: Javed Ur Rehman
Website: http://www.allphptricks.com/
*/
?>

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
                          <a class="dropdown-item" href="/php/index.php">Mis Mascotas</a>
													<a class="dropdown-item" href="/php/registroMascota.php">Nueva Mascota</a>
                          <a class="dropdown-item" href="/php/logout.php">Cerrar Sesion</a>
                      </div>
                  </li>
	            </ul>
	        </div>
	    </nav>
<?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$nombre = stripslashes($_REQUEST['nombre']);
		$nombre = mysqli_real_escape_string($con,$nombre);
		$apellido = $_REQUEST['apellido'];
		$apellido = mysqli_real_escape_string($con,$apellido);
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);

		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `usuarios` (usuario, password, email, fecha, nombre, apellido) VALUES ('$username', '".md5($password)."', '$email', '$trn_date', '$nombre', '$apellido')";
        $result = mysqli_query($con,$query);
        if($result){
            header("Location: index.php");
        }
				else{
					echo "<script type='text/javascript'>alert('Usuario previamente registrado, no fue posible el registro');window.location = '/php/login.php';</script>";
				}
    }else{
?>
<!-- Cover -->
<section id="cover_registro">
		<div id="cover-texto">
				<div class="container">
						<div class="row">
								<div class="col-sm-12">
									<h1>Registro de usuarios</h1>
									<form name="registration" action="" method="post"> <br>
											<input type="text" name="username" placeholder="Username" required /> <br>
											<input type="text" name="nombre" placeholder="Nombre" required /> <br>
											<input type="text" name="apellido" placeholder="Apellido" required /> <br>
											<input type="email" name="email" placeholder="Email" required /> <br>
											<input type="password" name="password" placeholder="Password" required /> <br><br>
											<input type="submit" name="submit" value="Registrar" /> <br>
									</form>
									<br /><br />
								</div>
						</div>
				</div>
		</div>
</section>
<?php } ?>
<!-- Pie de pagina -->
    <footer class="footer" id="footer-registroUsuario">
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
</body>
<script src="/js/jquery-3.3.1.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
</html>
