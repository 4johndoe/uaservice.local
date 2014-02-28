<div class="lics form">
<?php echo $this->Form->create('Lic'); ?>
	<fieldset>
		<legend><?php echo __('Add Lic'); ?></legend>
	<?php
		echo $this->Form->input('firm_id');
		echo $this->Form->input('nom');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Lics'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Firms'), array('controller' => 'firms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Firm'), array('controller' => 'firms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ekmt Carriages'), array('controller' => 'ekmt_carriages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ekmt Carriage'), array('controller' => 'ekmt_carriages', 'action' => 'add')); ?> </li>
	</ul>
</div>
