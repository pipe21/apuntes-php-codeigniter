<!--<?
	if ($cursos ){
	
		foreach ($cursos->result() as $curso) {?>
			<ul>
				<li><a href="editar/<?=$curso->idCurso; ?>" ><?=$curso->nombreCurso?></a></li>
			</ul>
		
	<?}
	}else{
		echo "<p>error en la Aplicación.</p>";
	}

?>-->
<? if ($cursos): ?>
	<?foreach ($cursos->result() as $curso):?>
		<ul>
			<li><a href="editar/<?=$curso->idCurso; ?>" ><?=$curso->nombreCurso?></a></li>
		</ul>
	<?endforeach;?>
<?else:?>
	<p>Error en la Aplicación.</p>
<?endif;?>
</body>
</html>