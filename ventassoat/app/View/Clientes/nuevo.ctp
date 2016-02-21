<h2>Crear Clientes</h2>

<div class="container">
	<div class="row">
		<div class="col-md-12">

<?php
	echo $this->Form->create('Cliente');
	echo $this->Form->input('documento');
	echo $this->Form->input('nombre');
	echo $this->Form->input('categoria');
	echo $this->Form->input('tarifa');
	echo $this->Form->input('codigosbs');
	echo $this->Form->input('direccion');
	echo $this->Form->input('codpostal');
	echo $this->Form->input('telefono');
	echo $this->Form->end('Crear Clientes');

?>
</div>
</div>
</div>
<?php
	echo $this->Html->link('Volver a lista de clientes', array('controller' => 'clientes', 'action'=> 'index'));
?>