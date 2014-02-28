<div class="ekmtCarriages form">
<?php echo $this->Form->create('EkmtCarriage'); ?>
	<fieldset>
		<legend><?php echo __('Add Ekmt Carriage'); ?></legend>
	<?php
		echo $this->Form->input('lic_id');
		echo $this->Form->input('departure_date');
		echo $this->Form->input('arrival_date');
		echo $this->Form->input('loading_point');
		echo $this->Form->input('unloading_point');
		echo $this->Form->input('loading_country');
		echo $this->Form->input('unloading_country');
		echo $this->Form->input('truck_nom');
		echo $this->Form->input('trailer_nom');
		echo $this->Form->input('country_of_reg');
		echo $this->Form->input('weight');
		echo $this->Form->input('speedometr_before');
		echo $this->Form->input('speedometr_after');
		echo $this->Form->input('etc');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Ekmt Carriages'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Lics'), array('controller' => 'lics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lic'), array('controller' => 'lics', 'action' => 'add')); ?> </li>
	</ul>
</div>
