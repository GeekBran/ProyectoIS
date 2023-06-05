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

$sql = "SELECT * FROM articulos";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<img src="'.$row['Imagen'].'"alt="Artículo 1"><h3 class="article-title">'.$row['Titulo'].'</h3>
              <p class="article-excerpt">'.$row['Texto'].'<br><p>'.$row['Autor'].'<br>';
    }
} else {
    echo "0 results";
}
$conn->close();
?>