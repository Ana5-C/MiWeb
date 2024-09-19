<?
$user = "root";
$pass = "";
$host = "localhost";

$conecction = mysqli_connect($host, $user, $pass);

$nombre = $_POST["nombre"];
$usuario = $_POST["usuario"];
$contraseña = $_POST["contraseña"];

if(!$connection)
{
  echo "No se ha podido conectar con el servidor" . mysql_error();
}
else{
  echo "<b><h3>Hemos conectado al servidor</h3></b>;
  }
  $datab = "formulario";
  $db = mysqli_select_db($conecction,$datab);
  if(!$db)
  {
  echo "No se ha podido encontrar la tabla";
  }
  else
  {
  echo "<h3>Tabla seleccionada:</h3>";
  }
  $instruccion_sql = "INSERT INTO tabla (nombre, usuario, contraseña)
                      VALUES ('$nombre','$usuario','$contraseña');
  $resultado = "SELECT * FROM tabla";

$result = mysqli_query($connection, $consulta);
  if(result)
  {
    echo "No se ha podido realizar la consulta";
  }
  echo "<table>";
  echo "<tr>";
  echo "<th><h1>id</th></h1>";
  echo "<th><h1>Nombre</th></h1>";
  echo "<th><h1>Usuario</th></h1>";
  echo "<th><h1>Contraseña</th></h1>";
  echo "</tr>";
  while ($colum = mysqli_fetch_array($result))
    {
      echo "<tr>";
      echo "<th><h2>" . $colum['id']. "</th></h1>";
      echo "<th><h2>" . $colum['nombre']. "</th></h1>";
      echo "<th><h2>" . $colum['usuario']."</th></h1>";
      echo "<th><h2>" . $colum['contraseña']."</th></h1>";
      echo "</tr>";
    }
  echo "</table>";
  mysqli_close($conecction);
    echo '<a href=Registro.html"> Volver atrás</a>';

?>
