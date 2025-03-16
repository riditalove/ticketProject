<div class="travelhistories view">
<h2><?php echo __('Travelhistory'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($travelhistory['Travelhistory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Traveller'); ?></dt>
		<dd>
			<?php echo $this->Html->link($travelhistory['Traveller']['name'], array('controller' => 'travellers', 'action' => 'view', $travelhistory['Traveller']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Departure Date'); ?></dt>
		<dd>
			<?php echo h($travelhistory['Travelhistory']['departure_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Return Date'); ?></dt>
		<dd>
			<?php echo h($travelhistory['Travelhistory']['return_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Destination'); ?></dt>
		<dd>
			<?php echo h($travelhistory['Travelhistory']['destination']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Purpose'); ?></dt>
		<dd>
			<?php echo h($travelhistory['Travelhistory']['purpose']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($travelhistory['Travelhistory']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entry By'); ?></dt>
		<dd>
			<?php echo h($travelhistory['Travelhistory']['entry_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Edit By'); ?></dt>
		<dd>
			<?php echo h($travelhistory['Travelhistory']['edit_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($travelhistory['Travelhistory']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($travelhistory['Travelhistory']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Travelhistory'), array('action' => 'edit', $travelhistory['Travelhistory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Travelhistory'), array('action' => 'delete', $travelhistory['Travelhistory']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $travelhistory['Travelhistory']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Travelhistories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Travelhistory'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Travellers'), array('controller' => 'travellers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Traveller'), array('controller' => 'travellers', 'action' => 'add')); ?> </li>
	</ul>
</div>
