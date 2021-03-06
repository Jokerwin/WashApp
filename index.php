<?php

// check for minimum PHP version
if (version_compare(PHP_VERSION, '5.3.7', '<')) {
    exit('Sorry, this script does not run on a PHP version smaller than 5.3.7 !');
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
    // if you are using PHP 5.3 or PHP 5.4 you have to include the password_api_compatibility_library.php
    // (this library adds the PHP 5.5 password hashing functions to older versions of PHP)
    require_once('libraries/password_compatibility_library.php');
}
// include the config
require_once('config.php');

// include the to-be-used language, english by default. feel free to translate your project and include something else
require_once('en.php');

// include the PHPMailer library
require_once('libraries/PHPMailer.php');

// load the login class
//require_once('classes/Login.php');

// create a login object. when this object is created, it will do all login/logout stuff automatically
// so this single line handles the entire login process.
//$login = new Login();

// Segun la accion que quiera realizar incluimos un archivo u otro
if(isset($_GET['action'])) {
    if ($_GET['action'] == 'registrar-turno') {
        include("views/turn.php");
    }
    else
    if ($_GET['action'] == 'solicitar-plan') {
        include("views/plans.php");
    }
    else
    if ($_GET['action'] == 'planificar-plan') {
        include("views/planification.php");
    }
    else
    if ($_GET['action'] == 'modificar-plan') {
        include("views/planification-mod.php");
    }
    else
    if ($_GET['action'] == 'mis-turnos') {
        include("views/turns-view.php");
    }
    else
    if ($_GET['action'] == 'tipos-de-lavado-particular') {
        include("views/wash_types.php");
    }
    else
    if ($_GET['action'] == 'tipos-de-lavado-corporativo') {
        include("views/wash_types_corp.php");
    }
    else
    if ($_GET['action'] == 'agregar-tipo-de-lavado') {
        include("views/wash_types_add.php");
    }
    else
    if ($_GET['action'] == 'editar-tipo-de-lavado') {
        include("views/wash_types_edit.php");
    }
    else
    if ($_GET['action'] == 'informes-clientes') {
        include("views/customers.php");
    }
    else
    if ($_GET['action'] == 'informes') {
        include("views/reports.php");
    }
    else
    if ($_GET['action'] == 'lista-empleados') {
        include("views/employees.php");
    }
    else
    if ($_GET['action'] == 'agregar-empleado') {
        include("views/employees_add.php");
    }
    else
    if ($_GET['action'] == 'editar-empleado') {
        include("views/employees_edit.php");
    }
    else
    if ($_GET['action'] == 'operador-agregar-turno') {
        include("views/operator-add-turn.php");
    }
    else
    if ($_GET['action'] == 'operador-agregar-plan') {
        include("views/operator-add-plan.php");
    }
    else
    if ($_GET['action'] == 'operador-ver-turnos') {
        include("views/operator-turns-view.php");
    }
    else
    if ($_GET['action'] == 'confeccionar-hoja-de-ruta') {
        include("views/waybill.php");
    }
    else
    if ($_GET['action'] == 'registrar-servicio') {
        include("views/externo-register-service.php");
    }
    else
    if ($_GET['action'] == 'editar-servicio') {
        include("views/externo-edit-service.php");
    }
    else
    if ($_GET['action'] == 'lista-servicio') {
        include("views/externo-list-services.php");
    }
    else
    if ($_GET['action'] == 'externo-actualizar-turnos') {
        include("views/externo-turns-act.php");
    }
    else
    if ($_GET['action'] == 'lista-insumos') {
        include("views/insumos.php");
    }
    else
    if ($_GET['action'] == 'agregar-insumo') {
        include("views/insumos_add.php");
    }
    else
    if ($_GET['action'] == 'editar-insumo') {
        include("views/insumos_edit.php");
    }
    else
    if ($_GET['action'] == 'insumos-cantidad') {
        include("views/insumos_cantidad.php");
    }
    else
    if ($_GET['action'] == 'playa-ver-turnos') {
        include("views/playa-turns-view.php");
    }
    else
    if ($_GET['action'] == 'playa-actualizar-turnos') {
        include("views/playa-turns-act.php");
    }
    else
    if ($_GET['action'] == 'cerrar-sesion') {
        include("cerrar-sesion.php");
    }
}
// Si no hay accion mostramos el archivo para clientes logueados y no logueados
else {
    include("views/not_logged_in.php");
    /*
    // ... ask if we are logged in here:
    if ($login->isUserLoggedIn() == true) {
        // the user is logged in. you can do whatever you want here.
        // for demonstration purposes, we simply show the "you are logged in" view.
        include("views/logged_in.php");

    } else {
        // the user is not logged in. you can do whatever you want here.
        // for demonstration purposes, we simply show the "you are not logged in" view.
        include("views/not_logged_in.php");
    }
    */

}
