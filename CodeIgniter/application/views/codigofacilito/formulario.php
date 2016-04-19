<?= form_open('/codigofacilito/recibirdatos'); ?>
<?php
	$nombre = array('name' => 'nombre',
			'placeholder'  => 'Escribe tu Nombre' );
	$videos = array('name' => 'videos',
			'placeholder'  => 'Cantidad videos del curso' );
?>
<?= form_label('Nombre: ','nombre')?>
<?= form_input($nombre)?>
<br>
<?= form_label('Cantidad Videos : ','cantidad')?>
<?= form_input($videos)?>
<br>
<?= form_submit('','subir Curso')?>
<?= form_close(); ?>

</body>
</html>