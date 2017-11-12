<div class="container">
<?php   echo $this->element('navtabs-formula-alta'); ?>
<br>
<div class="usuarios form">

	<form class="form-horizontal">
	<div class="form-group">
		<?php echo $this->Form->create('Formula'); ?>
	</div>
	<fieldset>
		<legend><?php echo __('Dar de Alta un Formula'); ?></legend>
	<?php
		echo $this->Form->input('id_formula', array('class'=>'form-control'));
		echo $this->Form->input('descripcion', array('class'=>'form-control'));
	?>
	</fieldset><br>
	<?php
   	echo $this->Form->submit('Enviar',array('class' => 'btn btn-default', 'div' => false)); ?>

</form>
</div> </div>