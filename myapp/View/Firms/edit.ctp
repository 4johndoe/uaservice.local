<div class="firms form">
<?php echo $this->Form->create('Firm'); ?>
	<fieldset>
		<legend><?php echo __('Edit Firm'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('kod');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Firm.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Firm.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Firms'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Lics'), array('controller' => 'lics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lic'), array('controller' => 'lics', 'action' => 'add')); ?> </li>
	</ul>
</div>
