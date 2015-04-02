<div class="materias view">
<h2><?php echo __('Materia'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($materia['Materia']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($materia['Materia']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($materia['Materia']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($materia['Materia']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Professore'); ?></dt>
		<dd>
			<?php echo $this->Html->link($materia['Professore']['id'], array('controller' => 'professores', 'action' => 'view', $materia['Professore']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Semestre'); ?></dt>
		<dd>
			<?php echo $this->Html->link($materia['Semestre']['id'], array('controller' => 'semestres', 'action' => 'view', $materia['Semestre']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Materia'), array('action' => 'edit', $materia['Materia']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Materia'), array('action' => 'delete', $materia['Materia']['id']), array(), __('Are you sure you want to delete # %s?', $materia['Materia']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Materias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Materia'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Professores'), array('controller' => 'professores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Professore'), array('controller' => 'professores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Semestres'), array('controller' => 'semestres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Semestre'), array('controller' => 'semestres', 'action' => 'add')); ?> </li>
	</ul>
</div>
