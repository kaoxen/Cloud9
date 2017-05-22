<html>
<body>
<?php
$connect=mysqli_connect("localhost","katerinerpo","","restaurante");
if ($connect) {
		echo "conexion exitosa. <br />";
		$Idpizza= $_POST ['Idpizza'];
		$Idfactura= $_POST ['Idfactura'];
		$cantidad= $_POST ['cantidad'];
		$Idcliente= $_POST ['Idcliente'];
		$Idempleado= $_POST ['Idempleado'];
		$valorunidad= $_GET['valorunidad'];
		$fecha= $_POST ['date_default_timezone_set()'];
		$totalproducto= $_POST['valorunidad'*'cantidad'];
		$valortotal= $_GET['totalproducto'];
		
		
		
		$consulta="insert into producto values ('$Idpizza',''$Idfactura','$cantidad','$totalproducto')";
		$consulta2="insert into venta values ('$Idfactura','$Idcliente','$Idempleado','$fecha','$valortotal')";

		$resultado=mysqli_query($connect,$consulta2);
		
		if ($resultado) {
			echo "venta almacenada almacenado. <br />";
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
echo "- Idfactura: ".$resultados['Idfactura']."<br/> ";
echo "- Idcliente: ".$resultados['Idcliente']."<br/>";
echo "- Idempleado: ".$resultados['Idempleado']."<br/>";
echo "- fecha: ".$resultados['fecha']."<br/>";
echo "- valortotal: 60".$resultados['valortotal']."<br/> ";

echo "**********************************<br/>";}
else {echo "<br/>No hay más datos!!! <br/>";}
}

$link = mysqli_connect($servername,$username,$password);
mysqli_select_db($link, $dbname);

$result = mysqli_query($link, "SELECT * FROM venta");
while ($fila = mysqli_fetch_array($result)){
mostrarDatos($fila);
}
mysqli_free_result($result);
mysqli_close($link);




?>
<br><br>
<a href="ventas.html">DEVOLVER A EL FORMULARIO </a>
<body/>
<html/>
