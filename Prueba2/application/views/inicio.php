<h1> Mi primera página </h1>

<?php
foreach($milista as $fila){
?>

<p><?=$fila->nombre?></p>
<p><?=$fila->apellido?></p>

<?php
}
?>
