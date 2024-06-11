<?php
$servername = "localhost";
$database = "joocor9_ei";
$username = "joocor9_ei";
$password = "e00o4CtPK&";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection

$user = $_POST['user'];
$senha = $_POST['senha'];

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
$sql = "INSERT INTO usuarios (user, senha) VALUES ('$user', '$senha')";
if (mysqli_query($conn, $sql)) {
    echo "<script>window.location = '../index.php'</script>";	
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      //echo "<script>alert('Falha ao salvar os dados!);</script>";
}
mysqli_close($conn);
?>