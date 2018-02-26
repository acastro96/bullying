


<?php require('conexion.php');

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$tipodoc = $_POST['tipodoc'];
$numdoc = $_POST['numdoc'];


$query = "INSERT INTO personas(pernom, perape, pertpodoc, pernumdoc, perest) VALUES('$nombre','$apellido','$tipodoc','$numdoc',1)";
$resultado = $mysqli->query($query);

?>
				