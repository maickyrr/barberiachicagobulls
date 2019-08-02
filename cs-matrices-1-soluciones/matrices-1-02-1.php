<?php
/**
 * Sesiones (2) 13 - matrices-1-02-1.php
 *
 * @author    Bartolomé Sintes Marco <bartolome.sintes+mclibre@gmail.com>
 * @copyright 2018 Bartolomé Sintes Marco
 * @license   http://www.gnu.org/licenses/agpl.txt AGPL 3 or later
 * @version   2018-10-31
 * @link      http://www.mclibre.org
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU Affero General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Affero General Public License for more details.
 *
 *  You should have received a copy of the GNU Affero General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

session_name("sesiones_2_13");
session_start();

?>
<!DOCTYPE html>
<html lang="es">

<link rel="stylesheet" href="publico/css/materialize.min.css" />
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<head>
<div class="navbar-fixed responsive">
  <nav class="card-panelc8e6c9 #b71c1c red darken-4 ">
        <div class="nav-wrapper">
          <ul id="nav-mobile" class="left side-nav">
            <a href="#" class="brand-logo"> Chicago Bulls</a>
            </ul>
          <ul id="nav-mobile" class="right side-nav">
            <li> <a href="Index.html">Inicio</a></li>
            <li> <a href="Integrantes.php">Integrantes</a> </li>
            <li> <a href="Login.html">Cerrar Sesión</a></li>
            <li> <a href=""></a></li>
          </ul>
          </div>
      </nav>
<br />
<br />

  <meta charset="utf-8" />
  <title>
    Almacenamiento de datos en sesión.
    Sesiones (2). Sesiones.
    Ejercicios. PHP. Bartolomé Sintes Marco. www.mclibre.org
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color" />
</head>

<body>


<div class="row">
<div class="con">
                    <div class="col3 s6">
                  <p><a href="InicioAdmin.html" class="btn #ef5350 red lighten-1"><i class="material-icons">add</i> Agendar Cita</a>.<a href="InicioAdmin.html" class="btn #ef5350 red lighten-1"> <i class="material-icons">content_paste</i>  Modificar Horarios</a>.<a href="InicioAdmin.html" class="btn #ef5350 red lighten-1"><i class="material-icons">cancel</i>Eliminar Cita</a>.<a href="InicioAdmin.html" class="btn #ef5350 red lighten-1"> <i class="material-icons">import_contacts</i> Modificar Cita</a>.</p>
</div>

<table>
        <thead>
          <tr>
              <th>Nombre</th>
              <th>Producto o Servicio</th>
              <th>Fecha</th>
              <th>Hora</th>
              <th>Precio</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Kevin</td>
            <td>Corte</td>
            <td>15/11</td>
            <td>8am</td>
            <td>$10000 COP</td>
          </tr>
          <tr>
            <td>Cristian</td>
            <td>Tintura</td>
            <td>21/11</td>
            <td>12am</td>
            <td>$16000 COP</td>
          </tr>
          <tr>
            <td>Juan</td>
            <td>Depilacion de barba </td>
            <td>22/11</td>
            <td>3:30pm</td>
            <td>$6000 COP</td>
          </tr>
         </tbody>
        </table>  
  <br>
  <br>
  <p><h1>Mis citas</h1></p>

  <form action="matrices-1-02-2.php" method="get">
    <p><h5>Escriba nombre y hora cliente:</h3> <input type="text" name="nombre" size="30" maxlength="30" 
      /></p>

  </form>

<?php
if (!count($_SESSION)) {
    print "  <p>Todavía no se han introducido nombre y hora.</p>\n";
} else {
    print "  <h6><p>Cliente y hora:</p></h6>\n";

    sort($_SESSION["nombres"]);
    print "  <ul>\n";
    foreach ($_SESSION["nombres"] as $valor) {
        print "    <li>$valor</li>\n";
    }
    print "  </ul>\n";
    print "\n";
    print "  <p><a href=\"matrices-1-02-2.php?accion=Cerrar\">Cerrar sesión "
        . "(se perderán los datos almacenados).</a></p>\n";
}
?>


</body>


<footer>
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
</footer>
</html>
