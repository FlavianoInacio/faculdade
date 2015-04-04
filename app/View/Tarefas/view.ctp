<div class="tarefas view">
<h2><?php echo __('Tarefa'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tarefa['Tarefa']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($tarefa['Tarefa']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($tarefa['Tarefa']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($tarefa['Tarefa']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipostarefa'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tarefa['Tipostarefa']['id'], array('controller' => 'tipostarefas', 'action' => 'view', $tarefa['Tipostarefa']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Materia Id'); ?></dt>
		<dd>
			<?php echo h($tarefa['Tarefa']['materia_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tarefa'), array('action' => 'edit', $tarefa['Tarefa']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tarefa'), array('action' => 'delete', $tarefa['Tarefa']['id']), array(), __('Are you sure you want to delete # %s?', $tarefa['Tarefa']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tarefas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tarefa'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipostarefas'), array('controller' => 'tipostarefas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipostarefa'), array('controller' => 'tipostarefas', 'action' => 'add')); ?> </li>
	</ul>
</div>
