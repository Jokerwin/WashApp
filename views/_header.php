<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/config.php'); 
$url_actual = $_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <?php
    // Titulos de las diferentes paginas
    if (strpos($url_actual, 'login.php') !== false or strpos($url_actual, 'iniciar-sesion') !== false)
    echo '
    <title>WashApp - Ingresar</title>';
    elseif (strpos($url_actual, 'register.php') !== false or strpos($url_actual, 'registro') !== false)
    echo '
    <title>WashApp - Registrar cliente</title>';
    elseif (strpos($url_actual, 'registrar-turno') !== false)
    echo '
    <title>WashApp - Registrar turno de lavado</title>';
    elseif (strpos($url_actual, 'solicitar-plan') !== false)
    echo '
    <title>WashApp - Solicitar plan de lavado</title>';
    else
      echo '
      <title>WashApp</title>';
    ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <?php
    echo '
    <link rel="icon" href="'.$site_url.'/favicon.png">

    <!-- Bootstrap core CSS -->
    <link href="'.$site_url.'/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="'.$site_url.'/css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="'.$site_url.'/css/estilos.css" rel="stylesheet">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>';

    // JQuery Select & JQuery UI
    echo '
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>';
    ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body role="document">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php
          echo '
          <a class="navbar-brand" href="'. $site_url .'" style="font-size: 28px;">WashApp</a>';
          ?>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Informes <span class="caret"></span></a>
              <ul class="dropdown-menu active">
                <li><a href="/agregar.html">Clientes</a></li>
                <li><a href="/lista.html">Empleados</a></li>
                <li role="separator" class="divider"></li>
              </ul>
            </li>
            <?php
            echo '
            <li'; if (strpos($url_actual, 'register.php') !== false or strpos($url_actual, 'registro') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/registro">Registrarse</a></li>
            <li'; if (strpos($url_actual, 'login.php') !== false or strpos($url_actual, 'iniciar-sesion') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/iniciar-sesion">Iniciar sesión</a></li>';
            echo '
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Turnos <span class="caret"></span></a>
              <ul class="dropdown-menu active">
                <li'; if (strpos($url_actual, 'registrar-turno') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/clientes/registrar-turno">Registrar turno</a></li>
                <li'; if (strpos($url_actual, 'mis-turnos') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/clientes/mis-turnos">Mis turnos</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Planes <span class="caret"></span></a>
              <ul class="dropdown-menu active">
                <li'; if (strpos($url_actual, 'solicitar-plan') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/clientes/solicitar-plan">Solicitar plan</a></li>
                <li'; if (strpos($url_actual, 'planificar-plan') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/clientes/planificar-plan">Planificar plan</a></li>
                <li'; if (strpos($url_actual, 'modificar-plan') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/clientes/modificar-plan">Modificar plan</a></li>
              </ul>
            </li>            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tipos de lavado <span class="caret"></span></a>
              <ul class="dropdown-menu active">
                <li'; if (strpos($url_actual, 'tipos-de-lavado') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/tipos-de-lavado">Ver tipos de lavado</a></li>
                <li'; if (strpos($url_actual, 'agregar-tipo-de-lavado') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/agregar-tipo-de-lavado">Agregar tipo</a></li>
                <li'; if (strpos($url_actual, 'editar-tipo-de-lavado') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/editar-tipo-de-lavado">Editar tipo</a></li>
              </ul>
            </li>';
            ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container theme-showcase" role="main" style="margin-top: 90px;">

<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}
?>

<?php
// show potential errors / feedback (from registration object)
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
            echo $error;
        }
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
            echo $message;
        }
    }
}
?>
