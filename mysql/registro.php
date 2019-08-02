<html>
<head>



 <title>Barberia</title>
  <link rel="icon" src="../proyecto/publico/medios/img/Logob.jpg">


  <link rel="stylesheet" href="../proyecto/vista/css/materialize.min.css" />
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
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



</head>
<body>


<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
  	<center><h1>CLIENTE</h1></center>
  	<form method="POST" action="registro.php" >

  	<div class="form-group">
	    <label for="doc">Cedula</label>
	    <input type="text" name="doc" class="form-control" id="doc">
	</div>

	<div class="form-group">
	    <label for="nombre">Nombre </label>
	    <input type="text" name="nombre" class="form-control" id="nombre">
	</div>

   <div class="form-group">
	    <label for="dir">Direccion email </label>
	    <input type="text" name="dir" class="form-control" id="dir">
	</div>

	<div class="form-group">
	    <label for="tel">Telefono </label>
	    <input type="text" name="tel" class="form-control" id="tel">
	</div>
    
    <center><input type="submit" value="Enviar" class="btn btn-success" name="btn1"></center>

  </form>

  <?php
  	if(isset($_POST['btn1']))
  	{
  		include("abrir_conexion.php");

  		$doc=$_POST['doc'];
  		$nombre=$_POST['nombre'];
  		$dir=$_POST['dir'];
  		$tel=$_POST['tel'];

  		$conexion->query("INSERT INTO $tabla_db1 (doc,nombre,direccion,telefono) values ('$doc','$nombre','$dir','$tel')");

  		include("cerrar_conexion.php");
      echo "Te registraste correctamente";
  	}
  ?>



  </div>
  <div class="col-md-4"></div>
</div>





  
  
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