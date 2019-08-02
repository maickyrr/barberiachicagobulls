<!DOCTYPE html>
		<html lang="es">
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/materialize.min.css" />
		
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<header>
	<div class="navbar-fixed responsive">
	<nav class="card-panelc8e6c9 #b71c1c red darken-4 ">
				<div class="nav-wrapper">
					<ul id="nav-mobile" class="left side-nav">
						<a href="#" class="brand-logo"> Chicago Bulls</a>
						</ul>
					<ul id="nav-mobile" class="right side-nav">
						<li> <a href="Index.php">Inicio</a></li>
						<li> <a href="Integrantes.php">Integrantes</a> </li>
						<li> <a href="Login.php">Iniciar Sesión</a></li>
						<li> <a href=""></a></li>
					</ul>
					</div>
			</nav>
<br />
<br />
	
</header>

<body>
	<div class="card-panel hoverable"><main><h1></h1></main>
		<div class="container">
			<div class="row">
				<div class="col s12">
					<span><h1>Iniciar Sesión</h1></span>
					<form action="#">
						<div class="row">
						<i class="material-icons">account_circle</i>
						<label for="user-pwd">Usuario:</label>
								<imput type="text" id="Usuario">
									<textarea name="textarea" id="textarea"  cols="15" rows="15" class="materialize-textarea"></textarea>
									<label for="Usuario"></label>
									<form> 
									<i class="material-icons">enhanced_encryption</i>   
    <label for="user-pwd">Contraseña:</label>
    <input type="password" name="user-password" id="user-pwd">
</form><div class="input-field col s12">								

									<div class="row">
										<div class="col s12">
									<p><a href="matrices-1-02-1.php" class="btn red darken-4">Iniciar Sesión como administrador</a></p>

										<div class="row">
										<div class="col s12">
					<p><a href="InicioUsuario.php" class="btn red darken-4">Iniciar Sesión como Usuario</a></p>
									</div>

							</div>

						</div>
					</div>
						
					</div>
				</imput> 
			</div> 
						
					</form>
				</div>

		
			<div class="col s12">
				<a href="CuentaNew.php" class="btn-flat red darken-4">No tienes cuenta? Crea una</a>

			</div>

				</form>
				</div>
			</div>	 

		<script type="js/jquery.min.js" href="js/jquery.min.js"></script>
		
		<script type="js/materialize.min.js" href="js/materialize.min.js"></script>

		<script>
			
			$(document).ready(function(){
				$('select').material_select();
				$('.datepicker').pickadate();

			});

		</script>
</body> 

<footer class="page-footer card-panelc8e6c9 #b71c1c red darken-4">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Contactanos</h5>
                <p class="grey-text text-lighten-4">Si tienes alguna sugerencia o inquietud...</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Métodos de contacto</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Número del desarollador web: 3192338366</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Número del Telefono del Local: 507 29 65</a></li>
                 <li><a class="grey-text text-lighten-3" href="#!">Número del Barbero: Sebastían- 3233642886</a></li>
                 
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2018 Todos los derechos reservados
            <a class="grey-text text-lighten-4 right" href="#!">Aplican Condiciones y Restricciones</a>
            </div>
          </div>
        </footer>

       

</html>