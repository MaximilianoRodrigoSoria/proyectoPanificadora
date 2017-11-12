<div class="container">
<?php   echo $this->element('navtabs-formula-editar');?>
<div class="usuarios form">
	<?php echo $this->Form->create('Formula'); ?>

	<form class="form-horizontal">
		<fieldset>
			<legend><?php echo __('Modificar Formula'); ?></legend>
		<?php
			echo $this->Form->input('id',array('class'=>'form-control'));
			echo $this->Form->input('descripcion',array('class'=>'form-control'));
		?>
	</fieldset>

	<?php
   	echo $this->Form->submit('Enviar',array('class' => 'btn btn-default', 'div' => false)); ?>

	</form>
</div></div>

