<div class="container">
<?php   echo $this->element('navtabs-usuario-alta');?>
<div class="usuarios form">

<<<<<<< HEAD
	<form action="add" method="post" class="form-horizontal">
=======
	<form class="form-horizontal">
>>>>>>> origin/master
	<div class="form-group">
		<?php echo $this->Form->create('Usuario'); ?>

	<fieldset>
		<legend><?php echo __('Dar de Alta un Usuario'); ?></legend>
	<?php
		echo $this->Form->input('rol_id', array('class'=>'form-control'));
		echo $this->Form->input('nombre', array('class'=>'form-control'));
		echo $this->Form->input('apellido', array('class'=>'form-control'));
		echo $this->Form->input('dni', array('class'=>'form-control'));
		echo $this->Form->input('telefono', array('class'=>'form-control'));
		echo $this->Form->input('email', array('class'=>'form-control'));
		echo $this->Form->input('legajo', array('class'=>'form-control'));
	?>
	</fieldset><br>
<<<<<<< HEAD
	<?php echo $this->Form->submit('Enviar',array('class' => 'btn btn-default', 'div' => false)); ?>
=======
	<?php
   	echo $this->Form->submit('Enviar',array('class' => 'btn btn-default', 'div' => false)); ?>
>>>>>>> origin/master
</div>
</form>
</div> </div>
