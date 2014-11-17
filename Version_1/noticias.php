<?php include('data/data.php'); ?>
<?php
$con = mysql_connect($db_host, $db_user, $db_pass);
mysql_select_db($db_base, $con);
?>
<?php

$sql = ("SELECT * FROM noticias ORDER BY id DESC");
$result = mysql_query($sql) or die (mysql_error());
while ($row=mysql_fetch_assoc($result)){
?>
<div div="noticias">
<div class="noticia">
<div class="titulo">
<?php echo $row['titulo']; ?>
</div>
<div class="descripcion">
<?php echo $row['descripcion']; ?>
</div>
<div class="imagen">
<img src="uploads/thumbs/<?php echo $row['imagen']; ?>"  />
</div>
<div class="autor">
<?php echo $row['autor']; ?>
</div>
</div>
</div>
<?php
}
 
mysql_free_result($result);
mysql_close($con);
?>
