<div class="container">
<?php   echo $this->element('navtabs-insumo-editar');?>
<div class="usuarios form">
	<?php echo $this->Form->create('Insumo'); ?>

	<form class="form-horizontal">
		<fieldset>
			<legend><?php echo __('Modificar Insumo'); ?></legend>
		<?php
			echo $this->Form->input('id',array('class'=>'form-control'));
			echo $this->Form->input('nombre',array('class'=>'form-control'));
			echo $this->Form->input('stock',array('class'=>'form-control'));
		?>
	</fieldset>

	<?php
   	echo $this->Form->submit('Enviar',array('class' => 'btn btn-default', 'div' => false)); ?>

	</form>
</div></div>

