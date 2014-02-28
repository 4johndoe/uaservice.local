<div class="ekmtCarriages view">
<h2><?php echo __('Ekmt Carriage'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($ekmtCarriage['EkmtCarriage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lic'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ekmtCarriage['Lic']['id'], array('controller' => 'lics', 'action' => 'view', $ekmtCarriage['Lic']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Departure Date'); ?></dt>
		<dd>
			<?php echo h($ekmtCarriage['EkmtCarriage']['departure_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Arrival Date'); ?></dt>
		<dd>
			<?php echo h($ekmtCarriage['EkmtCarriage']['arrival_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Loading Point'); ?></dt>
		<dd>
			<?php echo h($ekmtCarriage['EkmtCarriage']['loading_point']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unloading Point'); ?></dt>
		<dd>
			<?php echo h($ekmtCarriage['EkmtCarriage']['unloading_point']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Loading Country'); ?></dt>
		<dd>
			<?php echo h($ekmtCarriage['EkmtCarriage']['loading_country']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unloading Country'); ?></dt>
		<dd>
			<?php echo h($ekmtCarriage['EkmtCarriage']['unloading_country']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Truck Nom'); ?></dt>
		<dd>
			<?php echo h($ekmtCarriage['EkmtCarriage']['truck_nom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trailer Nom'); ?></dt>
		<dd>
			<?php echo h($ekmtCarriage['EkmtCarriage']['trailer_nom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country Of Reg'); ?></dt>
		<dd>
			<?php echo h($ekmtCarriage['EkmtCarriage']['country_of_reg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Weight'); ?></dt>
		<dd>
			<?php echo h($ekmtCarriage['EkmtCarriage']['weight']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Speedometr Before'); ?></dt>
		<dd>
			<?php echo h($ekmtCarriage['EkmtCarriage']['speedometr_before']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Speedometr After'); ?></dt>
		<dd>
			<?php echo h($ekmtCarriage['EkmtCarriage']['speedometr_after']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Etc'); ?></dt>
		<dd>
			<?php echo h($ekmtCarriage['EkmtCarriage']['etc']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ekmt Carriage'), array('action' => 'edit', $ekmtCarriage['EkmtCarriage']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ekmt Carriage'), array('action' => 'delete', $ekmtCarriage['EkmtCarriage']['id']), null, __('Are you sure you want to delete # %s?', $ekmtCarriage['EkmtCarriage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ekmt Carriages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ekmt Carriage'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lics'), array('controller' => 'lics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lic'), array('controller' => 'lics', 'action' => 'add')); ?> </li>
	</ul>
</div>
