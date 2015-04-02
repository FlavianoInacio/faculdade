<div class="tipostarefas view">
<h2><?php echo __('Tipostarefa'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tipostarefa['Tipostarefa']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($tipostarefa['Tipostarefa']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($tipostarefa['Tipostarefa']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($tipostarefa['Tipostarefa']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tipostarefa'), array('action' => 'edit', $tipostarefa['Tipostarefa']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tipostarefa'), array('action' => 'delete', $tipostarefa['Tipostarefa']['id']), array(), __('Are you sure you want to delete # %s?', $tipostarefa['Tipostarefa']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipostarefas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipostarefa'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tarefas'), array('controller' => 'tarefas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tarefa'), array('controller' => 'tarefas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Tarefas'); ?></h3>
	<?php if (!empty($tipostarefa['Tarefa'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Titulo'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Tipostarefa Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tipostarefa['Tarefa'] as $tarefa): ?>
		<tr>
			<td><?php echo $tarefa['id']; ?></td>
			<td><?php echo $tarefa['titulo']; ?></td>
			<td><?php echo $tarefa['created']; ?></td>
			<td><?php echo $tarefa['modified']; ?></td>
			<td><?php echo $tarefa['tipostarefa_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tarefas', 'action' => 'view', $tarefa['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tarefas', 'action' => 'edit', $tarefa['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tarefas', 'action' => 'delete', $tarefa['id']), array(), __('Are you sure you want to delete # %s?', $tarefa['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tarefa'), array('controller' => 'tarefas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
