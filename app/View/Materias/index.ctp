<div class="materias index">
	<h2><?php echo __('Materias'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('titulo'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('professore_id'); ?></th>
			<th><?php echo $this->Paginator->sort('semestre_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($materias as $materia): ?>
	<tr>
		<td><?php echo h($materia['Materia']['id']); ?>&nbsp;</td>
		<td><?php echo h($materia['Materia']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($materia['Materia']['created']); ?>&nbsp;</td>
		<td><?php echo h($materia['Materia']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($materia['Professore']['nome'], array('controller' => 'professores', 'action' => 'view', $materia['Professore']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($materia['Semestre']['titulo'], array('controller' => 'semestres', 'action' => 'view', $materia['Semestre']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $materia['Materia']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $materia['Materia']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $materia['Materia']['id']), array(), __('Are you sure you want to delete # %s?', $materia['Materia']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Materia'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Professores'), array('controller' => 'professores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Professore'), array('controller' => 'professores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Semestres'), array('controller' => 'semestres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Semestre'), array('controller' => 'semestres', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tarefas'), array('controller' => 'tarefas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tarefa'), array('controller' => 'tarefas', 'action' => 'add')); ?> </li>
	</ul>
</div>
