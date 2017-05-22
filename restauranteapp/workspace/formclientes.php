<html>
<body>
<?php
$connect=mysqli_connect("localhost","katerinerpo","","restaurante");
if ($connect) {
		echo "conexion exitosa. <br />";
		$Idcliente= $_POST ['Idcliente'];
		$nombre= $_POST ['nombre'];
		$apellido= $_POST ['apellido'];
		$direccion= $_POST ['direccion'];
		$telefono= $_POST ['telefono'];
		
	
		
		
		
		$consulta="insert into clientes values ('$Idcliente','$nombre','$apellido','$direccion','$telefono')";
		
		$resultado=mysqli_query($connect,$consulta);
		
		if ($resultado) {
			echo "cliente almacenado. <br />";
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
echo "- Idcliente: ".$resultados['Idcliente']."<br/> ";	
echo "- nombre: ".$resultados['nombre']."<br/> ";
echo "- apellido: ".$resultados['apellido']."<br/>";
echo "- direccion: ".$resultados['direccion']."<br/>";
echo "- telefono: ".$resultados['telefono']."<br/>";

echo "**********************************<br/>";}
else {echo "<br/>No hay más datos!!! <br/>";}
}
$link = mysqli_connect($servername,$username,$password);
mysqli_select_db($link, $dbname);

$result = mysqli_query($link, "SELECT * FROM clientes");
while ($fila = mysqli_fetch_array($result)){
mostrarDatos($fila);
}
mysqli_free_result($result);
mysqli_close($link);




?>
<br><br>
<a href="clientes.html">DEVOLVER A EL FORMULARIO </a>
<body/>
<html/>
