<!DOCTYPE html>
<html lang="es">

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet"
    href="<?php echo (strpos($_SERVER['PHP_SELF'], 'logica') !== false) ? '../css/materialize.min.css' : 'css/materialize.min.css'; ?>"
    media="screen,projection" />

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="UTF-8">
  <title>Usuarios</title>
</head>

<body>
  <nav class="purple.lighten-2" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="https://www.unam.mx/" class="brand-logo">UNAM</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="https://www.aragon.unam.mx/fes-aragon/#!/inicio">FES Aragon</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="https://www.aragon.unam.mx/fes-aragon/#!/inicio">FES Aragon</a></li>
      </ul>
      <a href="https://www.unam.mx/" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">UNAM</i></a>
    </div>
  </nav>

  <!-- aqui va mi formulario -->
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">Registro de sistema</h1>
    </div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        
        <div class="col s12 m12">
