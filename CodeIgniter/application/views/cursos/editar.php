<?= form_open("/cursos/actualizar/".$id);?>
<? $nombre 	= 	array('name'  => 'nombre',
			 	'placeholder' => 'Escribe tu nombre',
			 	'value'		  => $curso->result()[0]->nombreCurso) ;

	$videos = array('name' => 'videos',
			  'placeholder' => 'Cantidad de videos',
			   'value'		=> $curso->result()[0]->cantidadVideo);
?>
<?= form_label('Nombre : ','nombre');?>	
<?= form_input($nombre);?>	
<br>
<?= form_label('Numero videos : ','videos');?>	
<?= form_input($videos);?>
<br>
<?= form_submit('','Actualizar Curso');?>	
<?= form_close();?>	
</body>
</html>