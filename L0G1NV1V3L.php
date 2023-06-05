<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN VIVEL</title>
  <link href="imagenes/Icono.png" type="image/x-icon" rel="shortcut icon" />
  <link rel="stylesheet" href="styles.css">

</head>
<body>

<div class="container-log1">
   <br> <br> <br>
   <img src="imagenes/LOGO3.png" alt="" class="VIVEL-LOG">
    <div class="container-log">
    <h2>Iniciar sesión</h2>
  
    <form method="post">
      <input type="text" name="usuario" placeholder="Usuario" >
      <input type="password" name="contraseña"  placeholder="Contraseña" >
      <input type="submit" name="SESION"   value="Iniciar sesión">
    </form>
    <?php
      include("controlador.php");
    ?>
  </div>
    </div>
    </div>
</div>
</body>
</html>