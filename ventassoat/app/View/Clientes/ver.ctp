<h2>Detalle del Cliente<?php echo $cliente['Cliente']['nombre']; ?></h2>
<p><strong>codigo: </strong><?php echo $cliente['Cliente']['codigo']; ?></p>
<p><strong>Documento: </strong><?php echo $cliente['Cliente']['documento']; ?></p>
<p><strong>categoria: </strong><?php echo $cliente['Cliente']['categoria']; ?></p>
<p><strong>tarifa: </strong><?php echo $cliente['Cliente']['tarifa']; ?></p>
<p><strong>sbs: </strong><?php echo $cliente['Cliente']['codigosbs']; ?></p>
<p><strong>direccion: </strong><?php echo $cliente['Cliente']['direccion']; ?></p>
<p><strong>Distrito: </strong><?php echo $cliente['Cliente']['codpostal']; ?></p>
<p><strong>teléfono: </strong><?php echo $cliente['Cliente']['telefono']; ?></p>
<p><strong>Creado: </strong><?php echo $this->Time->format('d-m-Y ; h:i A', $cliente['Cliente']['created']); ?></p>
<p><strong>Modificado: </strong><?php echo $this->Time->format('d-m-Y ; h:i A', $cliente['Cliente']['modified']); ?></p>

<?php
	echo $this->Html->link('Volver a lista de clientes', array('controller' => 'clientes', 'action'=> 'index'));
?>