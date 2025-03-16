<div class="travelexpenses form">
<?php echo $this->Form->create('Travelexpense'); ?>
	<fieldset>
		<legend><?php echo __('Add Travelexpense'); ?></legend>
	<?php
		echo $this->Form->input('traveller_id');
		echo $this->Form->input('submit_date');
		echo $this->Form->input('expense_type');
		echo $this->Form->input('description');
		echo $this->Form->input('payment_method');
		echo $this->Form->input('currency');
		echo $this->Form->input('amount_spent');
		echo $this->Form->input('budget_amount');
		echo $this->Form->input('reimbursable');
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

		<li><?php echo $this->Html->link(__('List Travelexpenses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Travellers'), array('controller' => 'travellers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Traveller'), array('controller' => 'travellers', 'action' => 'add')); ?> </li>
	</ul>
</div>
