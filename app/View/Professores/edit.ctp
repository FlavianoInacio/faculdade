<div class="professores form">
<?php echo $this->Form->create('Professore'); ?>
	<fieldset>
		<legend><?php echo __('Edit Professore'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Professore.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Professore.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Professores'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Materias'), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add')); ?> </li>
	</ul>
</div>
