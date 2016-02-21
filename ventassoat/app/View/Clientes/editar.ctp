<h2>Editar Cliente</h2>

<?php echo $this->Form->create('Cliente'); ?>
<?php echo $this->Form->input('documento'); ?>
<?php echo $this->Form->input('nombre'); ?>
<?php echo $this->Form->input('categoria'); ?>
<?php echo $this->Form->input('tarifa'); ?>
<?php echo $this->Form->input('codigosbs'); ?>
<?php echo $this->Form->input('direccion'); ?>
<?php echo $this->Form->input('codpostal'); ?>
<?php echo $this->Form->input('telefono'); ?>
<?php echo $this->Form->end('Editar Cliente'); ?>

<?php
	echo $this->Html->link('Volver a lista de clientes', array('controller' => 'clientes', 'action'=> 'index'));
?>