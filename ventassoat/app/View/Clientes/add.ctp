<div class="container">
	<div class="row">
		<div class="col-md-6">
			<?php echo $this->Form->create('Cliente', array('role' => 'form')); ?>
				<fieldset>
					<h2><?php echo __('Nuevo Cliente'); ?></h2>
				<?php
					echo $this->Form->input('documento', array('class' => 'form-control', 'label' => 'Documento'));
					echo $this->Form->input('nombre', array('class' => 'form-control', 'label' => 'Nombre'));
					echo $this->Form->input('categoria', array('class' => 'form-control', 'label' => 'Categoria'));
					echo $this->Form->input('tarifa', array('class' => 'form-control', 'label' => 'Tarifa'));
					echo $this->Form->input('codigosbs', array('class' => 'form-control', 'label' => 'Codigosbs'));
					echo $this->Form->input('direccion', array('class' => 'form-control', 'label' => 'Direccion'));
					echo $this->Form->input('codpostal', array('class' => 'form-control', 'label' => 'Codpostal'));
					echo $this->Form->input('telefono', array('class' => 'form-control', 'label' => 'Telefono'));
					
				?>
				</fieldset>

				<p>
				<?php echo $this->Form->end(array('label' => 'Crear Cliente', 'class' =>'btn btn-success')); ?>
				</p>
			<div class="btn-group">
			  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			    <?php echo __('Actions'); ?> <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu" role="menu">
				<li><?php echo $this->Html->link(__('Lista Clientes'), array('action' => 'index')); ?></li>
			    <li class="divider"></li>
			    <li><?php echo $this->Html->link(__('List Mesas'), array('controller' => 'mesas', 'action' => 'index')); ?></li>
			    <li><?php echo $this->Html->link(__('New Mesa'), array('controller' => 'mesas', 'action' => 'add')); ?></li>
			  </ul>
			</div>
		</div>
	</div>
</div>
