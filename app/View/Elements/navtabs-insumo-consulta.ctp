<ul class="nav nav-tabs">
  <li role="presentation" class="active" ><?php echo $this->Html->link('Consulta',array('controller'=>'insumos','action'=>'index')); ?></li>
  <li role="presentation" ><?php echo $this->Html->link('Listado de Insumos con Stock por debajo del minimo',array('controller'=>'insumos','action'=>'minimo')); ?></li>
  <li role="presentation" ><?php echo $this->Html->link('Alta',array('controller'=>'insumos','action'=>'add')); ?></li>
  
</ul><br>
