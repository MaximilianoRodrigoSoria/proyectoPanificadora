<div class="container">
<?php   echo $this->element('navtabs-producto-alta');?>
<div class="productos form">

	<form class="form-horizontal">
	<div class="form-group">
		<?php echo $this->Form->create('Producto'); ?>

	<fieldset>
		<legend><?php echo __('Dar de Alta un Producto'); ?></legend>
	<?php
		echo $this->Form->input('id', array('class'=>'form-control'));
		echo $this->Form->input('id_formula', array('class'=>'form-control'));
		echo $this->Form->input('nombre', array('class'=>'form-control'));
	?>
	</fieldset><br>
	<?php
   	echo $this->Form->submit('Enviar',array('class' => 'btn btn-default', 'div' => false)); ?>
</div>
</form>
</div></div>
