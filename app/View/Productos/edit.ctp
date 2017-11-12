<div class="container">
<?php   echo $this->element('navtabs-usuario-editar');?>
<div class="usuarios form">
	<?php echo $this->Form->create('Usuario'); ?>

	<form class="form-horizontal">
		<fieldset>
			<legend><?php echo __('Modificar Usuario'); ?></legend>
		<?php
			echo $this->Form->input('id',array('class'=>'form-control'));
			echo $this->Form->input('rol_id',array('class'=>'form-control'));
			echo $this->Form->input('nombre',array('class'=>'form-control'));
			echo $this->Form->input('apellido',array('class'=>'form-control'));
			echo $this->Form->input('dni',array('class'=>'form-control'));
			echo $this->Form->input('telefono',array('class'=>'form-control'));
			echo $this->Form->input('email',array('class'=>'form-control'));
			echo $this->Form->input('legajo',array('class'=>'form-control'));
		?>
	</fieldset>

	<?php
   	echo $this->Form->submit('Enviar',array('class' => 'btn btn-default', 'div' => false)); ?>

	</form>
</div></div>

