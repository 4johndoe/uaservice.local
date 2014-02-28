<div class="firms view">
<h2><?php echo __('Firm'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($firm['Firm']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($firm['Firm']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kod'); ?></dt>
		<dd>
			<?php echo h($firm['Firm']['kod']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Firm'), array('action' => 'edit', $firm['Firm']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Firm'), array('action' => 'delete', $firm['Firm']['id']), null, __('Are you sure you want to delete # %s?', $firm['Firm']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Firms'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Firm'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lics'), array('controller' => 'lics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lic'), array('controller' => 'lics', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Lics'); ?></h3>
	<?php if (!empty($firm['Lic'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Firm Id'); ?></th>
		<th><?php echo __('Nom'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($firm['Lic'] as $lic): ?>
		<tr>
			<td><?php echo $lic['id']; ?></td>
			<td><?php echo $lic['firm_id']; ?></td>
			<td><?php echo $lic['nom']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'lics', 'action' => 'view', $lic['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'lics', 'action' => 'edit', $lic['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'lics', 'action' => 'delete', $lic['id']), null, __('Are you sure you want to delete # %s?', $lic['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Lic'), array('controller' => 'lics', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
