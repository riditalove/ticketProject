<div class="healthrecords form">
<?php echo $this->Form->create('Healthrecord'); ?>
	<fieldset>
		<legend><?php echo __('Edit Healthrecord'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('traveller_id');
		echo $this->Form->input('country_id');
		echo $this->Form->input('hospital_name');
		echo $this->Form->input('checkup_date');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Healthrecord.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Healthrecord.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Healthrecords'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Travellers'), array('controller' => 'travellers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Traveller'), array('controller' => 'travellers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
	</ul>
</div>
