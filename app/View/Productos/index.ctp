<div class="productos index">
<div class="container">
	<?php   echo $this->element('navtabs-producto-consulta');?>
	<input type="text" class="form-control" placeholder="Buscar"><br>
	<div class="panel panel-default">
		<div class="panel-heading">
   			<h2 class="panel-title"><?php echo __('Productos'); ?></h2>
   		</div>

	
	<div class="table-responsive">
	<table class="table table-bordered table-hover" cellpadding="0" cellspacing="0">
	<thead>

	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('id_formula'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
<<<<<<< HEAD
	<?php foreach ($productos as $producto): ?>
	<tr>
		<td><?php echo h($producto['Producto']['id']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['id_formula']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['nombre']); ?>&nbsp;</td>
		<td class="actions">

			<?php echo $this->Html->link('',array('controller'=>'productos','action'=>'view', $producto['Producto']['id']), array('class'=>'btn btn-default glyphicon glyphicon-search')); ?>
			<?php echo $this->Html->link(__(''), array('action' => 'edit', $producto['Producto']['id']), array('class'=>'btn btn-default glyphicon glyphicon-pencil')); ?>
	
			<?php echo $this->Form->postLink(  $this->Html->tag('i', '', array('class' => 'btn btn-default glyphicon glyphicon-trash')). " ",
        array('action' => 'delete', $producto['Producto']['id']), array('escape'=>false),__('Estas seguro que quieres borrar el registro n°%s?', $producto['Producto']['id']),
=======
	<?php foreach ($producto as $productos): ?>
	<tr>
		<td><?php echo h($productos['Producto']['id_producto']); ?>&nbsp;</td>
		<td><?php echo h($productos['Producto']['id_formula']); ?>&nbsp;</td>
		<td><?php echo h($productos['Producto']['nombre']); ?>&nbsp;</td>
		<td class="actions">

			<?php echo $this->Html->link('',array('controller'=>'productos','action'=>'view', $productos['Producto']['id_producto']), array('class'=>'btn btn-default glyphicon glyphicon-search')); ?>
			<?php echo $this->Html->link(__(''), array('action' => 'edit', $productos['Producto']['id_producto']), array('class'=>'btn btn-default glyphicon glyphicon-pencil')); ?>
	
			<?php echo $this->Form->postLink(  $this->Html->tag('i', '', array('class' => 'btn btn-default glyphicon glyphicon-trash')). " ",
        array('action' => 'delete', $productos['Producto']['id_producto']), array('escape'=>false),__('Estas seguro que quieres borrar el registro n°%s?', $productos['Producto']['id_producto']),
>>>>>>> origin/master
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