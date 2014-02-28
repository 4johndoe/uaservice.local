<div class="ekmtCarriages index">
	<h2><?php echo __('Ekmt Carriages'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('lic_id'); ?></th>
			<th><?php echo $this->Paginator->sort('departure_date'); ?></th>
			<th><?php echo $this->Paginator->sort('arrival_date'); ?></th>
			<th><?php echo $this->Paginator->sort('loading_point'); ?></th>
			<th><?php echo $this->Paginator->sort('unloading_point'); ?></th>
			<th><?php echo $this->Paginator->sort('loading_country'); ?></th>
			<th><?php echo $this->Paginator->sort('unloading_country'); ?></th>
			<th><?php echo $this->Paginator->sort('truck_nom'); ?></th>
			<th><?php echo $this->Paginator->sort('trailer_nom'); ?></th>
			<th><?php echo $this->Paginator->sort('country_of_reg'); ?></th>
			<th><?php echo $this->Paginator->sort('weight'); ?></th>
			<th><?php echo $this->Paginator->sort('speedometr_before'); ?></th>
			<th><?php echo $this->Paginator->sort('speedometr_after'); ?></th>
			<th><?php echo $this->Paginator->sort('etc'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ekmtCarriages as $ekmtCarriage): ?>
	<tr>
		<td><?php echo h($ekmtCarriage['EkmtCarriage']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($ekmtCarriage['Lic']['id'], array('controller' => 'lics', 'action' => 'view', $ekmtCarriage['Lic']['id'])); ?>
		</td>
		<td><?php echo h($ekmtCarriage['EkmtCarriage']['departure_date']); ?>&nbsp;</td>
		<td><?php echo h($ekmtCarriage['EkmtCarriage']['arrival_date']); ?>&nbsp;</td>
		<td><?php echo h($ekmtCarriage['EkmtCarriage']['loading_point']); ?>&nbsp;</td>
		<td><?php echo h($ekmtCarriage['EkmtCarriage']['unloading_point']); ?>&nbsp;</td>
		<td><?php echo h($ekmtCarriage['EkmtCarriage']['loading_country']); ?>&nbsp;</td>
		<td><?php echo h($ekmtCarriage['EkmtCarriage']['unloading_country']); ?>&nbsp;</td>
		<td><?php echo h($ekmtCarriage['EkmtCarriage']['truck_nom']); ?>&nbsp;</td>
		<td><?php echo h($ekmtCarriage['EkmtCarriage']['trailer_nom']); ?>&nbsp;</td>
		<td><?php echo h($ekmtCarriage['EkmtCarriage']['country_of_reg']); ?>&nbsp;</td>
		<td><?php echo h($ekmtCarriage['EkmtCarriage']['weight']); ?>&nbsp;</td>
		<td><?php echo h($ekmtCarriage['EkmtCarriage']['speedometr_before']); ?>&nbsp;</td>
		<td><?php echo h($ekmtCarriage['EkmtCarriage']['speedometr_after']); ?>&nbsp;</td>
		<td><?php echo h($ekmtCarriage['EkmtCarriage']['etc']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $ekmtCarriage['EkmtCarriage']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $ekmtCarriage['EkmtCarriage']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $ekmtCarriage['EkmtCarriage']['id']), null, __('Are you sure you want to delete # %s?', $ekmtCarriage['EkmtCarriage']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
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
		<li><?php echo $this->Html->link(__('New Ekmt Carriage'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Lics'), array('controller' => 'lics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lic'), array('controller' => 'lics', 'action' => 'add')); ?> </li>
	</ul>
</div>
