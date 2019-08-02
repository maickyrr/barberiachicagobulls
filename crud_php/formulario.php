<!DOCTYPE html> 
<meta charset="UTF-8">
<?php  
$con = mysqli_connect("localhost","root","","crud") or die("error");
?>
<html> 	
		<head>
			<meta chrset="UTF-8">
			<title>Barberia</title>
  <link rel="icon" src="../proyecto/publico/medios/img/Logob.jpg">


  <link rel="stylesheet" href="../proyecto/vista/css/materialize.min.css" />
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
		</head>
<body>

	<div class="navbar-fixed responsive">
<nav class="card-panelc8e6c9 #b71c1c red darken-4 ">
    

    <div class="nav-wrapper">
      <img src="../proyecto/publico/medios/img/Logob.jpg" width="60" height="60">



      <a href="#" class="brand-logo">Chicago Bulls</a>
      <ul id="nav-mobile" class="right ">
<a href="../proyecto/index.php" class="btn-floating pulse #ef5350 red lighten-1"> <i class="material-icons">home</i></a></p>
     </ul>
    </div>
  </nav>

  </div>
  <br>
  <br>
  <div class="container">
	
	<form method="post" action="formulario.php">
		<label>Nombre:</label>
		<input type="text" name="nombre" placeholder="Escriba su nombre"/><br/>
		<label>Contraseña:</label>
		<input type="password" name="password" placeholder="Escriba se contraseña"/><br/>
		<label>Email:</label>
		<input type="text" name="email" placeholder="Escriba su email"/><br/>
		<input type="submit"  name="insert" value="INSERTAR DATOS"/>
	
	</form>
</div>
	
	<?php 
	if(isset($_POST['insert'])){
	
		$usuario = $_POST['nombre'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		
		$insertar = "INSERT INTO users (usuario,password,email) values ('$usuario','$password','$email')";
		
		$ejecutar = mysqli_query($con,$insertar);
	
		if($ejecutar){
		
		echo "<h3>Insertado correctamente</h3>";
		}
	}
	?>
<br>


<table width="500" border="2" style="background-color: #F9F9F9;">
	
		<tr>
			<th>ID</th>
			<th>Usuario</th>
			<th>Password</th>
			<th>Email</th>
			<th>Editar</th>
			<th>Borrar</th>
		</tr>

<?php 
			
			
			$consulta = "SELECT * FROM users";
			
			$ejecutar = mysqli_query($con, $consulta); 
			
			$i = 0;
			
			while($fila=mysqli_fetch_array($ejecutar)){			
				$id = $fila['id'];
				$usuario = $fila['usuario']; 
				$password = $fila['password']; 
				$email = $fila['email'];
				
				$i++;	
			
		?>

		<tr align="center">
			<td><?php echo $id; ?></td>
			<td><?php echo $usuario; ?></td>
			<td><?php echo $password; ?></td>
			<td><?php echo $email; ?></td>
			<td><a href="formulario.php?editar=<?php echo $id; ?>">Editar</a></td>
			<td><a href="formulario.php?borrar=<?php echo $id; ?>">Borrar</a></td>
		</tr>
		<?php } ?>
</table>



<?php
		if(isset($_GET['editar'])){
		include("editar.php");
		}
	?> 
	

	<?php 
	if(isset($_GET['borrar'])){
	
	$borrar_id = $_GET['borrar'];
	
	$borrar = "DELETE FROM users WHERE id='$borrar_id'";
	
	$ejecutar = mysqli_query($con,$borrar); 
		
		if($ejecutar){
		
		echo "<script>alert('El usuario ha sido borrado!')</script>";
		echo "<script>window.open('formulario.php','_self')</script>";
		}
	
	}
	
	?>
</body>

<footer class="page-footer card-panelc8e6c9 #b71c1c red darken-4" id="contacto">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Proyecto</h5>
                <p class="grey-text text-lighten-4"><p align="center"><tt><font size=4 color="white">Si deseas verte con el mejor estilo, aqui estamos para ti</font></tt></p></p>
               <img src="../proyecto/publico/medios/img/Logob.jpg" width="100" height="100">

              </div>

              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Redes Sociales</h5>
                <ul>
                  <img src="../proyecto/publico/medios/img/facebook.jpg" width="100" height="100">   <img src="../proyecto/publico/medios/img/gmail.png" width="100" height="100"> 
                  <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/barberia.chicagobulls.10">Facebook </a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">LinkedIn</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Google +</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Número del desarollador web: 3046170824</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Número del Telefono del Local: 507 29 65</a></li>
                 <li><a class="grey-text text-lighten-3" href="#!">Número del Barbero: Sebastían- 3233642886</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © <?php echo date('Y'); ?> Copyright Damian Rendon
            <a class="grey-text text-lighten-4 right" href="#!"></a>
            </div>
          </div>
        </footer>




</html>
