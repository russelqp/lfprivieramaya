<div id="sidebar1">
<h3>Imagen de la semana</h3>
<?php
$im_path ="img/semanal/thumb/thumb_";
$im_sql = ("SELECT * FROM imagen_semanal ORDER BY id DESC");
$im_result = mysql_query($im_sql) or die (mysql_error());
while ($im_row=mysql_fetch_assoc($im_result)){
?>

<img src="<?php echo $im_path.$im_row['thumb'];?>" alt="<?php echo $im_row['titulo'];?>" />
<h4><?php echo $im_row['titulo'];?></h4>

<?php 
}
mysql_free_result($im_result); ?>
</div>