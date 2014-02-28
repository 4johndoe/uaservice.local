<div class="lics view">
<h2><?php echo __('Lic'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($lic['Lic']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Firm'); ?></dt>
		<dd>
			<?php echo $this->Html->link($lic['Firm']['name'], array('controller' => 'firms', 'action' => 'view', $lic['Firm']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nom'); ?></dt>
		<dd>
			<?php echo h($lic['Lic']['nom']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Lic'), array('action' => 'edit', $lic['Lic']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Lic'), array('action' => 'delete', $lic['Lic']['id']), null, __('Are you sure you want to delete # %s?', $lic['Lic']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Lics'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lic'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Firms'), array('controller' => 'firms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Firm'), array('controller' => 'firms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ekmt Carriages'), array('controller' => 'ekmt_carriages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ekmt Carriage'), array('controller' => 'ekmt_carriages', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Ekmt Carriages'); ?></h3>
	<?php if (!empty($lic['EkmtCarriage'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Lic Id'); ?></th>
		<th><?php echo __('Departure Date'); ?></th>
		<th><?php echo __('Arrival Date'); ?></th>
		<th><?php echo __('Loading Point'); ?></th>
		<th><?php echo __('Unloading Point'); ?></th>
		<th><?php echo __('Loading Country'); ?></th>
		<th><?php echo __('Unloading Country'); ?></th>
		<th><?php echo __('Truck Nom'); ?></th>
		<th><?php echo __('Trailer Nom'); ?></th>
		<th><?php echo __('Country Of Reg'); ?></th>
		<th><?php echo __('Weight'); ?></th>
		<th><?php echo __('Speedometr Before'); ?></th>
		<th><?php echo __('Speedometr After'); ?></th>
		<th><?php echo __('Etc'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($lic['EkmtCarriage'] as $ekmtCarriage): ?>
		<tr>
			<td><?php echo $ekmtCarriage['id']; ?></td>
			<td><?php echo $ekmtCarriage['lic_id']; ?></td>
			<td><?php echo $ekmtCarriage['departure_date']; ?></td>
			<td><?php echo $ekmtCarriage['arrival_date']; ?></td>
			<td><?php echo $ekmtCarriage['loading_point']; ?></td>
			<td><?php echo $ekmtCarriage['unloading_point']; ?></td>
			<td><?php echo $ekmtCarriage['loading_country']; ?></td>
			<td><?php echo $ekmtCarriage['unloading_country']; ?></td>
			<td><?php echo $ekmtCarriage['truck_nom']; ?></td>
			<td><?php echo $ekmtCarriage['trailer_nom']; ?></td>
			<td><?php echo $ekmtCarriage['country_of_reg']; ?></td>
			<td><?php echo $ekmtCarriage['weight']; ?></td>
			<td><?php echo $ekmtCarriage['speedometr_before']; ?></td>
			<td><?php echo $ekmtCarriage['speedometr_after']; ?></td>
			<td><?php echo $ekmtCarriage['etc']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'ekmt_carriages', 'action' => 'view', $ekmtCarriage['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'ekmt_carriages', 'action' => 'edit', $ekmtCarriage['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'ekmt_carriages', 'action' => 'delete', $ekmtCarriage['id']), null, __('Are you sure you want to delete # %s?', $ekmtCarriage['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Ekmt Carriage'), array('controller' => 'ekmt_carriages', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
