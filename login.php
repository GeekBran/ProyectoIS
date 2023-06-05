<?php
session_start();

if($_POST){
if(($_POST['usuario']=="admin")&&($_POST['password']=="sistema")){

    $_SESSION['usuario']="ok";
    $_SESSION['nombreUsuario']="admin";
    header('Location:Admin.php');
}else{
    $mensaje="Error: El usuario o contraseña son incorrectos";
    }
  
}

?>


<!DOCTYPE html>
<html lang="en">
  
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-2Nj6voGZriNpCfzS1wLpUWe+I1q3X/q6h5G5oZv6oNSHmIh1dpvcJLEwMv5yt6hv" crossorigin="anonymous">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="imagenes/Icono.png" type="image/x-icon" rel="shortcut icon" />
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Overpass&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="login.css">

  <title>VIVEL</title>
</head>

<body>
    <header role="banner">
        <nav role="navigation" class="nav">
          <div class="nav-content">
            <div class="nav-content-logo"><a class="Logitoo" href="index.php"></a></div>
            <div class="nav-content-title">
            </div>
            <div class="nav-content-btns">
              <nav class="nav-btns">
                <div class="nav-content-btn-1"><a href="courses.html">Cursos</a></div>
                <div class="nav-content-btn-5"><a href="SHOP.html">Obtener Curso</a></div>
                <div class="nav-content-btn-7"><a href="login.php">Ingresar</a></div>
              </nav>
            </div>
          </div>
        </nav>
      </header>

      <div id="contenedor">
        <div id="central">
            <div id="login">
                <div class="titulo">
                    Bienvenido
                </div>
                <form method="POST">
                    <input type="text" name="usuario" placeholder="Usuario" required>
                    
                    <input type="password" placeholder="Contraseña" name="password" required>
                    
                    <button type="submit" title="Ingresar" name="Ingresar">Ingresar</button>
                </form>
                <div class="pie-form">
                </div>
            </div>
            <div class="inferior">
                <a href="Index.html">Volver</a>
            </div>
        </div>
    </div>
</body>