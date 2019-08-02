<?php 
		session_start();
		include_once "conexion.php";
			//Recibo los datos del formulario de inicio de sesion
			$nom = $_POST['user']; 
			$pwd = $_POST['password']; 
			//conecto a BD para realizar la consulta
			$sql="SELECT * from usuarios where usuario='$nom' and password='$pwd'";
			$rec=$con->query($sql);//rec es un objeto de tipo con 
			$count=0;
			while($row = $rec->fetch_array())
    		{
        	$count++;
        	$result = $row;
        	}
        	//reviso si hay registros que coincidan con los datos ingresados, si no hay envia un mensaje de error
			if($count == 0){ 
			echo "<script>
				alert('Nombre de Usuario o Contraseña Incorrecto, verifique...');window.location='../../index.php';
				</script>"; 
				session_destroy(); 
			}
		else { //si el registro es valido, verifico si es admin o user
			if($result[3] == 'a'){
			echo "<script>window.location='../../vista/menuadmin/menuadmin.php';</script>";
}			else{echo "<script>window.location='../../vista/menuser/menuser.php';</script>"; 
			}
		}
?>
