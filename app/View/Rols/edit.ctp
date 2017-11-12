<div class="container">

<div class="form-group">
	<?php echo $this->Form->create('Rol'); ?>
	<?php   echo $this->element('navtabs-rol-editar');?>
	<fieldset>
		
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre',array('class'=>'form-control', 'placeholder'=>'nuevo rol'));
	?>
	</fieldset>
	<br>

</div>

<?php
   echo $this->Form->submit('Enviar',array(
                              'class' => 'btn btn-default',
                              'div' => false));
?>
</div>
