<div class="container">
<div class="usuarios view">
<h2><?php echo __('Detalle de Formula'); ?></h2><hr>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
<<<<<<< HEAD
			<?php echo h($Formula['Formula']['id']); ?>
=======
			<?php echo h($formula['Formula']['id_formula']); ?>
>>>>>>> origin/master
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
<<<<<<< HEAD
			<?php echo h($Formula['Formula']['descripcion']); ?>
=======
			<?php echo h($descripcion['Descripcion']['descripcion']); ?>
>>>>>>> origin/master
			&nbsp;
		</dd>
	</dl>


	<?php echo $this->Html->link(__('Atras'), array('action' => 'index'), array('type'=>'button','class'=>'btn btn-default')); ?>
</div></div>
