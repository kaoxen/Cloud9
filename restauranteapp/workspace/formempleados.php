<html>
<body>
<?php
$connect=mysqli_connect("localhost","katerinerpo","","restaurante");
if ($connect) {
		echo "conexion exitosa. <br />";
		$Idempleado= $_POST ['Idempleado'];
		$identificacion= $_POST ['identificacion'];
		$nombre= $_POST ['nombre'];
		
		$cargo= $_POST ['cargo'];
	    
		
		
		
		$consulta="insert into empleados values ( '$Idempleado','$identificacion','$nombre','$cargo' )";
		
		$resultado=mysqli_query($connect,$consulta);
		
		if ($resultado) {
			echo "empleado almacenado. <br />";
		}
		else {
			echo "error en la ejecucion de la consulta. <br />";
		}
		
		if (mysqli_close($connect)){ 
			echo "desconexion realizada. <br />";
		} 
		else {
			echo "error en la desconexion";
		}
}
$servername = "localhost";
$username = "katerinerpo";
$password = "";
$dbname = "restaurante";
function mostrarDatos ($resultados) {
if ($resultados !=NULL) {

echo "- Idempleado: ".$resultados['Idempleado']. "<br/> ";
echo "- identificacion: ".$resultados['identificacion']."<br/> ";
echo "- nombre: ".$resultados['nombre']."<br/> ";
echo "- cargo: ".$resultados['cargo']."<br/>";

echo "**********************************<br/>";}
else {echo "<br/>No hay más datos!!! <br/>";}
}
$link = mysqli_connect($servername,$username,$password);
mysqli_select_db($link, $dbname);

$result = mysqli_query($link, "SELECT * FROM empleados");
while ($fila = mysqli_fetch_array($result)){
mostrarDatos($fila);
}
mysqli_free_result($result);
mysqli_close($link);




?>
<br><br>
<a href="empleados.html">DEVOLVER A EL FORMULARIO </a>
<body/>
<html/>
