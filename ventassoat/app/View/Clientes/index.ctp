<?php
   $this->Paginator->options(array(
      'update' => '#contenedor-clientes',
      'before' => $this->Js->get("#procesando")->effect('fadeIn', array('buffer' => false)),
      'complete' => $this->Js->get("#procesando")->effect('fadeOut', array('buffer' => false))
   ));
?>


<div id="contenedor-clientes">

<div class="page-header">

	<h2><?php echo __('Clientes'); ?></h2>

</div>

	<div class="col-md-12">

	<div class="progress oculto" id="procesando">
	  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
	    <span class="sr-only">100% Complete</span>
	  </div>
	</div>


<table class="table table-striped">
		<thead>
		<tr>
	
		<th><?php echo $this->Paginator->sort('id'); ?></th>
				<th><?php echo $this->Paginator->sort('codigo'); ?></th>
				<th><?php echo $this->Paginator->sort('nombre'); ?></th>
				<th><?php echo $this->Paginator->sort('documento'); ?></th>
				<th><?php echo $this->Paginator->sort('direccion'); ?></th>
				<th><?php echo $this->Paginator->sort('created'); ?></th>
				<th><?php echo $this->Paginator->sort('modified'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		</thead>
		<tbody>

	<?php foreach($clientes as $cliente): ?>
	<!-- renombrando variable creada -->
		
<td><?php echo h($cliente['Cliente']['id']); ?>&nbsp;</td>
			<td><?php echo h($cliente['Cliente']['codigo']); ?>&nbsp;</td>
			<td><?php echo h($cliente['Cliente']['documento']); ?>&nbsp;</td>
			<td><?php echo h($cliente['Cliente']['nombre']); ?>&nbsp;</td>
			<td><?php echo h($cliente['Cliente']['direccion']); ?>&nbsp;</td>
			<td><?php echo h($cliente['Cliente']['created']); ?>&nbsp;</td>
			<td><?php echo h($cliente['Cliente']['modified']); ?>&nbsp;</td>
			
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('action' => 'view', $cliente['Cliente']['id']), array('class' => 'btn btn-sm btn-default')); ?>
				<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cliente['Cliente']['id']), array('class' => 'btn btn-sm btn-default')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cliente['Cliente']['id']), array('class' => 'btn btn-sm btn-default'), __('Are you sure you want to delete # %s?', $cliente['Cliente']['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
		</tbody>
		</table>

	</div>

<p>
		<?php
		echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
		));
		?>	</p>
		<ul class="pagination">
			<li> <?php echo $this->Paginator->prev('< ' . __('previous'), array('tag' => false), null, array('class' => 'prev disabled')); ?> </li>
			<?php echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentTag' => 'a', 'currentClass' => 'active')); ?>
			<li> <?php echo $this->Paginator->next(__('next') . ' >', array('tag' => false), null, array('class' => 'next disabled')); ?> </li>
		</ul>
	<?php echo $this->Js->writeBuffer(); ?>
</div> <!-- contenedor-meseros -->
		