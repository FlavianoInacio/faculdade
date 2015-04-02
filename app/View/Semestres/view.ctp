<div class="semestres view">
<h2><?php echo __('Semestre'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($semestre['Semestre']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($semestre['Semestre']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($semestre['Semestre']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($semestre['Semestre']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Semestre'), array('action' => 'edit', $semestre['Semestre']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Semestre'), array('action' => 'delete', $semestre['Semestre']['id']), array(), __('Are you sure you want to delete # %s?', $semestre['Semestre']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Semestres'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Semestre'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Materias'), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Materias'); ?></h3>
	<?php if (!empty($semestre['Materia'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Titulo'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Professore Id'); ?></th>
		<th><?php echo __('Semestre Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($semestre['Materia'] as $materia): ?>
		<tr>
			<td><?php echo $materia['id']; ?></td>
			<td><?php echo $materia['titulo']; ?></td>
			<td><?php echo $materia['created']; ?></td>
			<td><?php echo $materia['modified']; ?></td>
			<td><?php echo $materia['professore_id']; ?></td>
			<td><?php echo $materia['semestre_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'materias', 'action' => 'view', $materia['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'materias', 'action' => 'edit', $materia['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'materias', 'action' => 'delete', $materia['id']), array(), __('Are you sure you want to delete # %s?', $materia['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
