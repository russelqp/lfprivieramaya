  <?php include('header.php'); ?>
  <?php include('sidebar1.php'); ?>
    <div id="main">
    <h2> Bienvenida </h2>
         <p>&nbsp;&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. </p>

<?php
$n_path="img/noticias/thumb/thumb_";
$n_sql = ("SELECT * FROM noticias ORDER BY id DESC");
$n_result = mysql_query($n_sql) or die (mysql_error());
while ($n_row=mysql_fetch_assoc($n_result)){
?>

<h2>Noticias</h2>
<h3><?php echo $n_row['titulo'];?></h3>
<img src="<?php echo $n_path.$n_row['thumb'];?>" alt="<?php echo $n_row['titulo'];?>" />
<?php echo $n_row['resumen'];?>
<div class="clear"></div>

<?php 
}
mysql_free_result($n_result); ?>
</div>
<?php include('sidebar2.php'); ?>
<?php include('footer.php'); ?>
