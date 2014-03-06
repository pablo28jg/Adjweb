<ul>
	<?php  
	foreach($entities as $entity)
	{ ?>
	<li>
	<?php  if( $entity->getFunction() != "")
	{
		$parametros = array();
		eval('$parametros = array('.$entity->getParametros().');');
	?>
		<a href="javascript: Opciones('<?php  echo $view['router']->generate($entity->getFunction(), $parametros)?>')"><?php  echo $entity->getOpcion(); ?></a>
	<?php }else{ echo $entity->getOpcion(); }?>
	</li>	
	<?php }?>
</ul>