<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

if(! $conn ){
   die('Could not connect: ' . mysqli_error());
}
echo 'Connected successfully';
mysqli_close($conn);
?>

<table border='1'>
<tr>
    <td>id</td>
    <td>Producto</td>
    <td>Nombre</td>
    <td>Apellidos</td>
    <td>ccv</td>
    <td>CP</td>
    <td>Pais</td>
    <td>Ciudad</td>
    <td>Email</td>
    <td>Dispositivo</td>
</tr>


<!--

while($traer = mysqli_fetch_array($resultado))
{
echo "
<tr>
    <td>".$traer['id']."</td>
    <td>".$traer['Producto']."</td>
    <td>".$traer['Nombre']."</td>
    <td>".$traer['Apellidos']."</td>
    <td>".$traer['ccv']."</td>
    <td>".$traer['CP']."</td>
    <td>".$traer['Pais']."</td>
    <td>".$traer['Ciudad']."</td>
    <td>".$traer['Email']."</td>
    <td>".$traer['Dispositivo']."</td>
</tr>
    ";

}

 echo"</table>";

mysqli_close($conn);

?>