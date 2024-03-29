<?php
/**
 * Sesiones (2) 13 - matrices-1-02-2.php
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

function recoge($var)
{
    $tmp = (isset($_REQUEST[$var]))
    ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"))
    : "";
    return $tmp;
}

session_name("sesiones_2_13");
session_start();

$accion   = recoge("accion");
$nombre   = recoge("nombre");
$nombreOk = false;
$paginaAnterior = "menuadmin.php";

if ($accion == "Cerrar") {
    session_destroy();
    header("Location:$paginaAnterior");
    exit();
}

if ($nombre != "") {
    $nombreOk = true;
}

if ($nombreOk) {
    if (!isset($_SESSION["nombres"]) || !in_array($nombre, $_SESSION["nombres"])) {
        $_SESSION["nombres"][] = $nombre;
    }
}

session_name("sesiones_2_13");
session_start();

$accion   = recoge("accion");
$hora   = recoge("nombre");
$horaOk = false;
$paginaAnterior = "menuadmin.php";

if ($accion == "Cerrar") {
    session_destroy();
    header("Location:$paginaAnterior");
    exit();
}

if ($hora != "") {
    $horaOk = true;
}

if ($horaOk) {
    if (!isset($_SESSION["hora"]) || !in_array($nombre, $_SESSION["hora"])) {
        $_SESSION["hora"][] = $hora;
    }
}

header("Location:$paginaAnterior");
exit();
?>
