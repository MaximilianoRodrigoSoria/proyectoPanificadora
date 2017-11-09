<div class="usuarios form">
<?php echo $this->Form->create('Usuario'); ?>
	<fieldset>
		<legend><?php echo __('Agregar un Usuario'); ?></legend>
	<?php
		echo $this->Form->input('rol_id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('apellido');
		echo $this->Form->input('dni');
		echo $this->Form->input('telefono');
		echo $this->Form->input('email');
		echo $this->Form->input('legajo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Lista de Usuarios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista de Roles'), array('controller' => 'rols', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Rol'), array('controller' => 'rols', 'action' => 'add')); ?> </li>
	</ul>
</div>
