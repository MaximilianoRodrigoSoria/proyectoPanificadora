<div class="container">
	<input type="text" class="form-control" placeholder="Buscar"><br>
	<div class="panel panel-default">

  <div class="panel-heading">
    <h3 class="panel-title">Roles</h3>
  </div>
 	
	<table class="table table-bordered">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($rols as $rol): ?>
	<tr>
		<td><?php echo h($rol['Rol']['id']); ?>&nbsp;</td>
		<td><?php echo h($rol['Rol']['nombre']); ?>&nbsp;</td>
		<td class="actions">

			<?php echo $this->Html->link('',array('controller'=>'rols','action'=>'view', $rol['Rol']['id']), array('class'=>'btn btn-default glyphicon glyphicon-search')); ?>
			<?php echo $this->Html->link(__(''), array('action' => 'edit', $rol['Rol']['id']), array('class'=>'btn btn-default glyphicon glyphicon-pencil')); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $rol['Rol']['id']), array(), __('Estas seguro que deseas borrar el registro # %s?', $rol['Rol']['id'])); ?>
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
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled btn btn-default'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'next disabled btn btn-default'));
	?>
	</div> <br>
</div>
</div>

