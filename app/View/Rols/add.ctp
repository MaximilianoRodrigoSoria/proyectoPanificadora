<div class="container">

<div class="form-group">
	<?php echo $this->Form->create('Rol'); ?>
	<?php   echo $this->element('navtabs-alta');?>
	<fieldset>
		
	<?php
		echo $this->Form->input('nombre',array('class'=>'form-control', 'placeholder'=>'nuevo rol'));
	?>
	</fieldset>
	<br>
<?php echo $this->Form->end(__('Submit'),array('class'=>'btn btn-default')); ?>
</div>


</div>