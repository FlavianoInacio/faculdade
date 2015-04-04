<div class="tarefas index">
	<h2><?php echo __('Tarefas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('titulo'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('tipostarefa_id'); ?></th>
			<th><?php echo $this->Paginator->sort('materia_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($tarefas as $tarefa): ?>
	<tr>
		<td><?php echo h($tarefa['Tarefa']['id']); ?>&nbsp;</td>
		<td><?php echo h($tarefa['Tarefa']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($tarefa['Tarefa']['created']); ?>&nbsp;</td>
		<td><?php echo h($tarefa['Tarefa']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($tarefa['Tipostarefa']['titulo'], array('controller' => 'tipostarefas', 'action' => 'view', $tarefa['Tipostarefa']['id'])); ?>
		</td>
		<td><?php echo $this->Html->link($tarefa['Materia']['titulo'], array('controller' => 'tipostarefas', 'action' => 'view', $tarefa['Materia']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $tarefa['Tarefa']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tarefa['Tarefa']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tarefa['Tarefa']['id']), array(), __('Are you sure you want to delete # %s?', $tarefa['Tarefa']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Tarefa'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Tipostarefas'), array('controller' => 'tipostarefas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipostarefa'), array('controller' => 'tipostarefas', 'action' => 'add')); ?> </li>
	</ul>
</div>
