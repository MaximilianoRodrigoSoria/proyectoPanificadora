<div class="container">
	<?php   echo $this->element('navtabs-cliente-alta');?>
	
	<div class="clientes form">
	<?php echo $this->Form->create('Cliente'); ?>
	<form action="add" method="post" class="form-horizontal">
	<fieldset>
		<legend><?php echo __('Dar de Alta un Cliente'); ?></legend>
	<?php
		echo $this->Form->input('nombre', array('class'=>'form-control'));
		echo $this->Form->input('apellido', array('class'=>'form-control'));
		echo $this->Form->input('dni', array('class'=>'form-control'));
		echo $this->Form->input('telefono', array('class'=>'form-control'));
		echo $this->Form->input('email', array('class'=>'form-control'));
	?>
	</fieldset><br>
	<?php
   	echo $this->Form->submit('Enviar',array('class' => 'btn btn-default', 'div' => false)); ?>
   	</form>
</div></div>
