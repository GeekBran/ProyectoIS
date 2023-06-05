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

if (isset($_POST['registroArticulo'])){
    if (strlen($_POST['id']) >= 1 &&
        strlen($_POST['titulo']) >= 1 &&
        strlen($_POST['imagen']) >= 1 &&
        strlen($_POST['cuerpo']) >= 1){
            $id = $_POST['id'];
            $titulo = $_POST['titulo'];
            $img = $_POST['imagen'];
            $cuer = $_POST['cuerpo'];
            $consulta = "UPDATE cursos SET Titulo='$titulo', Imagen ='$img', Texto ='$cuer' WHERE id = $id";
            $resultado = mysqli_query($conn,$consulta);
            if($resultado){
                echo "Curso actualizado";
            }
            else{
                echo "Error";
            }
    }
    else{
        echo "Ingrese los datos";
    }
}
$conn->close();
?>