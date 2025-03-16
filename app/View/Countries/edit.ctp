<div class="countries form">
<?php echo $this->Form->create('Country'); ?>
	<fieldset>
		<legend><?php echo __('Edit Country'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('iso_code');
		echo $this->Form->input('code');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Country.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Country.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Countries'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Healthrecords'), array('controller' => 'healthrecords', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Healthrecord'), array('controller' => 'healthrecords', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Memberships'), array('controller' => 'memberships', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Membership'), array('controller' => 'memberships', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Visahistories'), array('controller' => 'visahistories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Visahistory'), array('controller' => 'visahistories', 'action' => 'add')); ?> </li>
	</ul>
</div>
