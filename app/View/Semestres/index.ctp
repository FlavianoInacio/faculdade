<div class="semestres index">
	<h2><?php echo __('Semestres'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('titulo'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($semestres as $semestre): ?>
	<tr>
		<td><?php echo h($semestre['Semestre']['id']); ?>&nbsp;</td>
		<td><?php echo h($semestre['Semestre']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($semestre['Semestre']['created']); ?>&nbsp;</td>
		<td><?php echo h($semestre['Semestre']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $semestre['Semestre']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $semestre['Semestre']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $semestre['Semestre']['id']), array(), __('Are you sure you want to delete # %s?', $semestre['Semestre']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Novo Semestre'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Materias'), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Professores'), array('controller' => 'professores', 'action' => 'index')); 
		?> </li>
		<li><?php echo $this->Html->link(__('Tarefas'), array('controller' => 'tarefas', 'action' => 'index')); ?> </li>
	</ul>
</div>
