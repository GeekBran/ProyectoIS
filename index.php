<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-2Nj6voGZriNpCfzS1wLpUWe+I1q3X/q6h5G5oZv6oNSHmIh1dpvcJLEwMv5yt6hv" crossorigin="anonymous">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="imagenes/Icono.png" type="image/x-icon" rel="shortcut icon" />
  <title>Vivel</title>
</head>

<body>
  <div class="Grande">
    <header role="banner">
      <nav role="navigation" class="nav">
        <div class="nav-content">
          <div class="nav-content-logo"><a class="Logitoo" href="index.php"></a></div>
          <div class="nav-content-title">
          </div>
          <div class="nav-content-btns">

            <nav class="nav-btns">
              <div class="nav-content-btn-1"><a href="courses.php">Cursos</a></div>
              <div class="nav-content-btn-2"><a href="#arti">Noticias</a></div>
              <div class="nav-content-btn-3"><a href="#Ases">Asesores</a></div>
              <div class="nav-content-btn-4"><a href="#contact">Contacto</a></div>
              <div class="nav-content-btn-5"><a href="SHOP.html">Obtener</a></div>

            </nav>
          </div>
        </div>
      </nav>
    </header>

    <div class="who-are">
      <div class="who-are-video">
        <iframe class="quieen" width="680" height="430" src="https://www.youtube.com/embed/krDWc30PAGg"
          title="YouTube video player" frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen></iframe>
      </div>
      <div class="who-are-text">
        <h1>Cursos Digitales <br>de Emprendimiento</h1>
        <h2><a href="whoAre.html">¿Quiénes Somos?</a></h2>
      </div>
    </div>
    <div class="hh">
      <br>
      <div class="title-cards">
        <br>
        <h3 id="Ases">Nuestros Asesores</h3>
      </div>
      <div class="container-card">
        <div class="card">
          <figure>
            <img src="imagenes/Asesor1.png">
          </figure>
          <div class="contenido-card"> <br> <br>
            <h3>Jose Antonio Villanueva Villaseñor</h3>
            <p>Consultor de empresas. <br> Experto en creación de modelos de negocio. <br>
              Experiencia como Coordinador de Proyectos Estratégicos y Planeación Estratégica
              en Cinépolis. <br> Egresado del Programa de Liderazgo de Harvard en 2020.</p>
          </div>
        </div>
        <div class="card">
          <figure>
            <img src="imagenes/Asesor2.png">
          </figure>
          <div class="contenido-card"> <br> <br>
            <h3>Erandi Velarde</h3>
            <p>Consultora de Reingeniería de Empresas. <br> Experta en Innovación. <br>
              Catedrática y asesora de negocios en universidades,
              como los son el Instituto de Estudios Superiores de Monterrey, UVAQ, entre otras. <br>
              Actualmente es doctorante en innovación empresarial.</p>
          </div>
        </div>
        <div class="card">
          <figure>
            <img src="imagenes\Asesor1.png">
          </figure>
          <div class="contenido-card">
            <h3>Eduardo S. Ramón</h3>
            <p>Especialista en e-commerce y en ecosistemas de start-ups.
              <br> Ha sido Director de Operaciones de
              NudaEst una empresa de venta masiva de productos osméticos en internet.
            </p>
          </div>
        </div>
        <div class="card">
          <figure>
            <img src="imagenes\Asesor1.png">
          </figure>
          <div class="contenido-card">
            <h3>Juan Pablo Motilla</h3>
            <p>Ingeniero Industrial experto en comercialización de productos de alta gama con Estados Unidos. <br>
              Creación de cadenas de valor. <br> Manejo de proveedores y comercio electrónico.</p>
          </div>
        </div>
      </div>
    </div> <br> <br>
    <p class="titcursos">Cursos</p>

    <div class="grid-cursos">

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
        echo '<div class="grid-curso1" ><img src="'.$row['Imagen'].'" alt="CURSO1">
      </div>
      <div class="grid-infc1"><br>
        <p class="tc">'.$row['Titulo'].'</p><br>
        <p>'.$row['Texto'].'</p><br>
        <br><a class="cur1" href="courses.html">¿Te interesa el curso?</a>
      </div>  ';
    }
} else {
    echo "0 results";
}
?>

<?php
$sql = "SELECT * FROM cursos WHERE id=2";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '
        <div class="grid-curso2"><br>
        <p class="tc">'.$row['Titulo'].'</p><br>
        <p>'.$row['Texto'].'</p>
        <br>
        <br> <a class="cur2" href="courses.html">¿Te interesa el curso?</a>
      </div>
      <div class="grid-infc2"><img src="'.$row['Imagen'].'"
          alt="CURSO"></div>';
    }
} else {
    echo "0 results";
}
?>
<?php
$sql = "SELECT * FROM cursos WHERE id=3";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<div class="grid-curso3"><img
        src="'.$row['Imagen'].'" alt="CURSO3"></div>
    <div class="grid-infc3"><br>
      <p class="tc">'.$row['Titulo'].'</p><br>
      <p>'.$row['Texto'].'</p>
      <br><br><a class="cur3" href="courses.html">¿Te interesa el curso?</a>
    </div>';
    }
} else {
    echo "0 results";
}
$conn->close();
?>  
    </div>

    <section class="article-section">
      <div class="container">
        <h2 class="section-title" id="arti">Hablemos de Negocios</h2>
        <div class="row">
          <div class="col-md-4">
            <div class="article-card">
            <?php
              include("mostrarArt.php")
            ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <br> <br>

    <section class="Send-section" id="contact">
      <div class="tittle">
        Contáctanos
      </div>
      <form method="post">
        <input class="em1" type="email" name="Correo" placeholder="Correo"> <br>
        <input class="em1" type="text" name="Nombre" placeholder="Nombre"> <br>
        <input class="em1" type="number" name="Numero" placeholder="Número"> <br>
        <input class="em1" type="text" name="Pregunta" placeholder="Ingresa tu pregunta"> <br>
        <input class="sendma" type="submit" value="Enviar" name="Enviar">
      </form>
      <?php
      include("insertar.php")
      ?>
    </section>

    <footer>
      <section class="buttons">
        <a href="https://www.facebook.com/VIVELCONSULTORIA" class="fa fa-facebook" target="_blank"></a>
        <a href="https://www.instagram.com/vivel_academia/" class="fa fa-instagram" target="_blank"></a>
        <a href="#" class="fa fa-youtube"></a>

      </section>
      <div class="end">
        <div class="div1"><a href="#arti">Noticias</a></div>
        <div class="div2"><a href="index.php">Academia de Emprendimiento VIVEL</a></div>
        <div class="div3"><a href="">Politica de Privacidad</a></div>
        <div class="div4"><a href="">Mision, Vision, Valores</a></div>
        <div class="div5"><a href="#contact">Contacto</a></div>
        <div class="div6"><a href="courses.html">Cursos</a></div>
        <div class="div7"><a href="index.php">VIVEL</a></div>
        <div class="div8"><a href="SHOP.html">Pagos</a></div>
        <div class="div9"><a href="#Ases">Asesores</a></div>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Q/S+dJh2uVXzccyohmLZqn/Ztzf3hBcq7zFj33oysq+8xyv5jNk5ScP9JFr6QD8Z"
      crossorigin="anonymous"></script>
    <!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script> -->
  </div>
</body>

</html>