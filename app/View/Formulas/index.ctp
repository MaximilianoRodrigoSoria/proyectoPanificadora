<div class="formulas index">
<div class="container">
	<?php   echo $this->element('navtabs-formula-consulta');?>
	<input type="text" class="form-control" placeholder="Buscar"><br>
	<div class="panel panel-default">
		<div class="panel-heading">
   			<h2 class="panel-title"><?php echo __('Formulas'); ?></h2>
   		</div>

	
	<div class="table-responsive">
	<table class="table table-bordered table-hover" cellpadding="0" cellspacing="0">
	<thead>

	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($formula as $formulas): ?>
	<tr>
		<td><?php echo h($formulas['Formula']['id']); ?>&nbsp;</td>
		<td><?php echo h($formulas['Formula']['descripcion']); ?>&nbsp;</td>
		<td class="actions">

			<?php echo $this->Html->link('',array('controller'=>'formulas','action'=>'view', $formulas['Formula']['id']), array('class'=>'btn btn-default glyphicon glyphicon-search')); ?>
			<?php echo $this->Html->link(__(''), array('action' => 'edit', $formulas['Formula']['id']), array('class'=>'btn btn-default glyphicon glyphicon-pencil')); ?>
	
			<?php echo $this->Form->postLink(  $this->Html->tag('i', '', array('class' => 'btn btn-default glyphicon glyphicon-trash')). " ",
        array('action' => 'delete', $formulas['Formula']['id']), array('escape'=>false),__('Estas seguro que quieres borrar el registro n°%s?', $formulas['Formula']['id']),
   array('class' => 'btn btn-mini')
); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	</div></div>

	<p><?php echo $this->Paginator->counter(array('format' => __('Pagina {:page} de {:pages}, mostrando {:current} de un total de {:count}, comenzando en {:start}, finalizando en {:end}')));?></p>
	<div class="paging center-block">
	<?php
		echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled btn btn-default'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'next disabled btn btn-default'));
	?>

	</div>
</div>
</div>