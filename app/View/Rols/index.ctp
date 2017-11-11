<div class="container">
	<?php   echo $this->element('navtabs-consulta');?>
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
	
			<?php echo $this->Form->postLink(  $this->Html->tag('i', '', array('class' => 'btn btn-default glyphicon glyphicon-trash')). " ",
        array('action' => 'delete', $rol['Rol']['id']), array('escape'=>false),__('Estas seguro que quieres borrar el registro # %s?', $rol['Rol']['id']),
   array('class' => 'btn btn-mini')
); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
</div>

	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Pagina {:page} de {:pages}, Total {:count} ')
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


