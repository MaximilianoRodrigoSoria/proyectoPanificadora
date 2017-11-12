<div class="container">
<div class="clientes view">
<h2><?php echo __('Detalle de Cliente'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['apellido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dni'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['dni']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha de Creacion'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha de Modificacion'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
	<?php echo $this->Html->link(__('Atras'), array('action' => 'index'), array('type'=>'button','class'=>'btn btn-default')); ?>
</div></div>
