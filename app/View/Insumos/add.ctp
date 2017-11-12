<div class="container">
<?php   echo $this->element('navtabs-insumo-alta'); ?>
<br>
<div class="insumos form">

	<form action="add" method="post" class="form-horizontal">
	<div class="form-group">
		<?php echo $this->Form->create('Insumo'); ?>
	</div>
	<fieldset>
		<legend><?php echo __('Dar de Alta un Insumo'); ?></legend>
	<?php
		echo $this->Form->input('id', array('class'=>'form-control'));
		echo $this->Form->input('nombre', array('class'=>'form-control'));
		echo $this->Form->input('stock', array('class'=>'form-control'));
	?>
	</fieldset><br>
	<?php echo $this->Form->submit('Enviar',array('class' => 'btn btn-default', 'div' => false)); ?>
 
</form>
</div> </div>