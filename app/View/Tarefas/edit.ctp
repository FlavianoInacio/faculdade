<div class="tarefas form">
<?php echo $this->Form->create('Tarefa'); ?>
	<fieldset>
		<legend><?php echo __('Edit Tarefa'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('titulo');
		echo $this->Form->input('tipostarefa_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Tarefa.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Tarefa.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tarefas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tipostarefas'), array('controller' => 'tipostarefas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipostarefa'), array('controller' => 'tipostarefas', 'action' => 'add')); ?> </li>
	</ul>
</div>
