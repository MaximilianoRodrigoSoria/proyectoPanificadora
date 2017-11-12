<div class="container">
<?php   echo $this->element('navtabs-producto-editar');?>
<div class="productos form">
	<?php echo $this->Form->create('Producto'); ?>

	<form class="form-horizontal">
		<fieldset>
			<legend><?php echo __('Modificar Producto'); ?></legend>
		<?php
			echo $this->Form->input('id',array('class'=>'form-control'));
			echo $this->Form->input('id_formula',array('class'=>'form-control'));
			echo $this->Form->input('nombre',array('class'=>'form-control'));
		?>
	</fieldset>

	<?php
   	echo $this->Form->submit('Enviar',array('class' => 'btn btn-default', 'div' => false)); ?>

	</form>
</div></div>

