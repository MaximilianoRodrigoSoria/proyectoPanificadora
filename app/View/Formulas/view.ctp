<div class="container">
<div class="usuarios view">
<h2><?php echo __('Detalle de Formula'); ?></h2><hr>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($Formula['Formula']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($Formula['Formula']['descripcion']); ?>
			&nbsp;
		</dd>
	</dl>


	<?php echo $this->Html->link(__('Atras'), array('action' => 'index'), array('type'=>'button','class'=>'btn btn-default')); ?>
</div></div>