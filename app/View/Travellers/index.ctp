<div class="travellers index">
	<h2><?php echo __('Travellers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('designation_id'); ?></th>
			<th><?php echo $this->Paginator->sort('date_of_birth'); ?></th>
			<th><?php echo $this->Paginator->sort('nationality'); ?></th>
			<th><?php echo $this->Paginator->sort('passport_no'); ?></th>
			<th><?php echo $this->Paginator->sort('passport_expiry'); ?></th>
			<th><?php echo $this->Paginator->sort('entry_by'); ?></th>
			<th><?php echo $this->Paginator->sort('edit_by'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($travellers as $traveller): ?>
	<tr>
		<td><?php echo h($traveller['Traveller']['id']); ?>&nbsp;</td>
		<td><?php echo h($traveller['Traveller']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($traveller['Designation']['name'], array('controller' => 'designations', 'action' => 'view', $traveller['Designation']['id'])); ?>
		</td>
		<td><?php echo h($traveller['Traveller']['date_of_birth']); ?>&nbsp;</td>
		<td><?php echo h($traveller['Traveller']['nationality']); ?>&nbsp;</td>
		<td><?php echo h($traveller['Traveller']['passport_no']); ?>&nbsp;</td>
		<td><?php echo h($traveller['Traveller']['passport_expiry']); ?>&nbsp;</td>
		<td><?php echo h($traveller['Traveller']['entry_by']); ?>&nbsp;</td>
		<td><?php echo h($traveller['Traveller']['edit_by']); ?>&nbsp;</td>
		<td><?php echo h($traveller['Traveller']['status']); ?>&nbsp;</td>
		<td><?php echo h($traveller['Traveller']['created']); ?>&nbsp;</td>
		<td><?php echo h($traveller['Traveller']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $traveller['Traveller']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $traveller['Traveller']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $traveller['Traveller']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $traveller['Traveller']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
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
		<li><?php echo $this->Html->link(__('New Traveller'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Designations'), array('controller' => 'designations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Designation'), array('controller' => 'designations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Healthrecords'), array('controller' => 'healthrecords', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Healthrecord'), array('controller' => 'healthrecords', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Memberships'), array('controller' => 'memberships', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Membership'), array('controller' => 'memberships', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Travelexpenses'), array('controller' => 'travelexpenses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Travelexpense'), array('controller' => 'travelexpenses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Travelhistories'), array('controller' => 'travelhistories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Travelhistory'), array('controller' => 'travelhistories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Visahistories'), array('controller' => 'visahistories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Visahistory'), array('controller' => 'visahistories', 'action' => 'add')); ?> </li>
	</ul>
</div>
