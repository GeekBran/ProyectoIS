<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<meta http-equiv="X-UA-Compatible" content="ie=edge">-->
    <title>VIVEL COURSES</title>
    <link href="imagenes/Icono.png" type="image/x-icon" rel="shortcut icon" />
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>

<body class="hidden">
    <div class="centrado" id="onload">
        <div class="lds-facebook"><div></div><div></div><div></div></div>
    </div>
    <header role="banner">
        <nav role="navigation" class="nav">
          <div class="nav-content2">
            <div class="nav-content-logo1"><a class="Logitoo2" href="index.php"></a></div>
            <div class="nav-content-title">
            </div>
            <div class="nav-content-btnss">
              <nav class="nav-btnss">
                <div class="nav-content-btnss-1"><a href="index.php">Inicio</a></div>
                <div class="nav-content-btnss-10"><a href="SHOP.html">Obtener</a>   </div>
              </nav>
            </div>
          </div>
        </nav>
      </header>
    <main>

        <section class="work-contenedor" id="trabajo">
            <h1 class="text-center">Cursos disponibles</h1><br>
            <div class="galeria-work">
                <div class="cont-work">
<?php
$servername = "localhost";
$username = "academia";
$password = "academia";
$dbname = "vivel";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<?php
$sql = "SELECT * FROM cursos WHERE id=1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<div class="img-work">
        <img class="image" src="'.$row['Imagen'].'">
    </div>
    <div class="textos-work">
        <h5 class="card-title">'.$row['Titulo'].'</h5>
        <p class="card-text">'.$row['Texto'].'</p>
        <a href="#" class="btn btn-primary">Más información</a>
    </div>';
    }
} else {
    echo "0 results";
}
?>
                </div>
                <div class="cont-work">
<?php
$sql = "SELECT * FROM cursos WHERE id=2";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<div class="img-work">
        <img class="image" src="'.$row['Imagen'].'">
    </div>
    <div class="textos-work">
        <h5 class="card-title">'.$row['Titulo'].'</h5>
        <p class="card-text">'.$row['Texto'].'</p>
        <a href="#" class="btn btn-primary">Más información</a>
    </div>';
    }
} else {
    echo "0 results";
}
?>
                </div>
                <div class="cont-work">
<?php
$sql = "SELECT * FROM cursos WHERE id=3";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<div class="img-work">
        <img class="image" src="'.$row['Imagen'].'">
    </div>
    <div class="textos-work">
        <h5 class="card-title">'.$row['Titulo'].'</h5>
        <p class="card-text">'.$row['Texto'].'</p>
        <a href="#" class="btn btn-primary">Más información</a>
    </div>';
    }
} else {
    echo "0 results";
}
?>
                </div>
                <div class="cont-work">
<?php
$sql = "SELECT * FROM cursos WHERE id=4";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<div class="img-work">
        <img class="image" src="'.$row['Imagen'].'">
    </div>
    <div class="textos-work">
        <h5 class="card-title">'.$row['Titulo'].'</h5>
        <p class="card-text">'.$row['Texto'].'</p>
        <a href="#" class="btn btn-primary">Más información</a>
    </div>';
    }
} else {
    echo "0 results";
}
?>
                </div>
                <div class="cont-work">
<?php
$sql = "SELECT * FROM cursos WHERE id=5";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<div class="img-work">
        <img class="image" src="'.$row['Imagen'].'">
    </div>
    <div class="textos-work">
        <h5 class="card-title">'.$row['Titulo'].'</h5>
        <p class="card-text">'.$row['Texto'].'</p>
        <a href="#" class="btn btn-primary">Más información</a>
    </div>';
    }
} else {
    echo "0 results";
}
$conn->close();
?>
                </div>
            </div>
        </div>
    </section>
    </main>
    <footer class="pie">
        <section class="buttons">
            <a href="https://www.facebook.com/VIVELCONSULTORIA" class="fa fa-facebook" target="_blank"></a>
            <a href="https://www.instagram.com/vivel_academia/" class="fa fa-instagram" target="_blank"></a>
            <a href="#" class="fa fa-youtube"></a>
          </section>
          <div class="end">
            <div class="div2"><a href="index.php">Academia de Emprendimiento VIVEL</a></div>
            <div class="div6"><a href="courses.html">Cursos</a></div>
            <div class="div7"><a href="SHOP.html">Pagos</a></div>
           </div>
      </footer>
    <!-- <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <script src="js/filtro.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-Q/S+dJh2uVXzccyohmLZqn/Ztzf3hBcq7zFj33oysq+8xyv5jNk5ScP9JFr6QD8Z" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script> -->
</body>
</html>