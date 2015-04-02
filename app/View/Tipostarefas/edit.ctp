<div class="tipostarefas form">
<?php echo $this->Form->create('Tipostarefa'); ?>
	<fieldset>
		<legend><?php echo __('Edit Tipostarefa'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('titulo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Tipostarefa.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Tipostarefa.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tipostarefas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tarefas'), array('controller' => 'tarefas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tarefa'), array('controller' => 'tarefas', 'action' => 'add')); ?> </li>
	</ul>
</div>
