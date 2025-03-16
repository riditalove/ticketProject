<div class="travelhistories form">
<?php echo $this->Form->create('Travelhistory'); ?>
	<fieldset>
		<legend><?php echo __('Add Travelhistory'); ?></legend>
	<?php
		echo $this->Form->input('traveller_id');
		echo $this->Form->input('departure_date');
		echo $this->Form->input('return_date');
		echo $this->Form->input('destination');
		echo $this->Form->input('purpose');
		echo $this->Form->input('status');
		echo $this->Form->input('entry_by');
		echo $this->Form->input('edit_by');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Travelhistories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Travellers'), array('controller' => 'travellers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Traveller'), array('controller' => 'travellers', 'action' => 'add')); ?> </li>
	</ul>
</div>
