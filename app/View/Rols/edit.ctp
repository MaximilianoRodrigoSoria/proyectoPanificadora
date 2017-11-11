<div class="container">

<div class="form-group">
	<?php echo $this->Form->create('Rol'); ?>
	<?php   echo $this->element('navtabs-editar');?>
	<fieldset>
		
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre',array('class'=>'form-control', 'placeholder'=>'nuevo rol'));
	?>
	</fieldset>
	<br>
<?php echo $this->Form->end(__('Enviar'),array('class'=>'btn btn-default')); ?>
</div>


</div>