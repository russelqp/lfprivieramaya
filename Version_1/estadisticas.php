<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php 
include('data.php') ;
$con = mysql_connect($host, $user, $pass);
mysql_select_db($base, $con);
?>


<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Estadisticas</title>


<link href="estilo.css" rel="stylesheet" type="text/css" />

</head>
<body >


<?php
    include('header.htm');
?> 	
<div id="contenedor">
 
 <div id="menus">
 <?php
    include('menus.htm');
?>
 </div>

<div id="secciones">
<div id="principal">
<!--TABLA DE POSICIONES-->
<h3>Table de Posiciones</h3>

<?php 
$posiciones = ("SELECT * FROM posiciones ORDER BY id DESC");
$result2 = mysql_query($posiciones) or die (mysql_error());

echo "<table>";
echo "<tr>";
echo "<td>Numero</td> <td>Equipo</td> <td>JJ</td> <td>JG</td> <td>JE</td> <td>JP</td> <td>GF</td> <td>GC</td> <td>DIF</td> <td>PTS</td>";
while ($row2 = mysql_fetch_array($result2)){
echo " <tr> <td>" . "$row2[Equipo]" . "</td> </tr>";

}
"</table>";
?>  

<!--GOLEO INDIVIDUAL-->
	
        <h3>Goleo individual</h3>
		<?php
		$goleadores = ("SELECT * FROM goleo ORDER BY id DESC ");
		$result = mysql_query($goleadores) or die (mysql_error());
		echo 	"<table>";
        echo "<tr>";
		echo "<td>Nombre</td> <td>Equipo</td> <td>Goles</td>";
		echo "</tr>";
		
	while ($row = mysql_fetch_array($result)) {	
	echo "<tr><td>" . "$row[nombre]" . "</td> <td>" . "$row[equipo]" . "</td> <td>" . "$row[goles]" . "</td></tr>";
  }
 
 echo  "</table>";

?>
<!--EXPULSADOS-->

<h3>Expulsados</h3>
<table width="500" border="1" bordercolor="#66CCFF"align="center" cellspacing="1" class="Estilo4">
  <tr bgcolor="#CCCCCC">
    <th width="25" bordercolor="#FFFFFF" bgcolor="#0099FF" scope="col"><div align="center" class="Estilo12">#</div></th>
    <th width="171" bordercolor="#FFFFFF" bgcolor="#0099FF" scope="col"><div align="center" class="Estilo12">Jugador</div></th>
    <th width="187" bordercolor="#FFFFFF" bgcolor="#0099FF" scope="col"><div align="center" class="Estilo12">Equipo</div></th>
    <th width="50" bordercolor="#FFFFFF" bgcolor="#0099FF" scope="col"><div align="center" class="Estilo12">Juegos</div></th>
    <th width="60" bordercolor="#FFFFFF" bgcolor="#0099FF" scope="col"><div align="center" class="Estilo12">Jornadas</div></th>
  </tr>
  <tr>
    <td bordercolor="#FFFFFF"><div align="center">1</div></td>
    <td bordercolor="#FFFFFF"><div align="center">Pedro Clever Garcia </div></td>
    <td bordercolor="#FFFFFF"><div align="center">Gimnasio Mr. Coloso </div></td>
    <td bordercolor="#FFFFFF"><div align="center">2</div></td>
    <td bordercolor="#FFFFFF"><div align="center">10,11</div></td>
  </tr>
  <tr>
    <td bordercolor="#FFFFFF"><div align="center">2</div></td>
    <td bordercolor="#FFFFFF"><div align="center">Cristian Benito Perez </div></td>
    <td bordercolor="#FFFFFF"><div align="center">Chivitas &quot;Riviera Maya&quot; </div></td>
    <td bordercolor="#FFFFFF"><div align="center">2</div></td>
    <td bordercolor="#FFFFFF"><div align="center">9,10</div></td>
  </tr>
  <tr>
    <td bordercolor="#FFFFFF"><div align="center">3</div></td>
    <td bordercolor="#FFFFFF"><div align="center">Otilio Heredia </div></td>
    <td bordercolor="#FFFFFF"><div align="center">Union Deportiva &quot;ReyTigre&quot; </div></td>
    <td bordercolor="#FFFFFF"><div align="center">1</div></td>
    <td bordercolor="#FFFFFF"><div align="center">10</div></td>
  </tr>
</table>


</div>
</div>
 <?php
   include('foot.htm');
?>
 </div>
 </div>
<div id=espacio>
 </div>
</body>
</html>
