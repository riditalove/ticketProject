<div class="travelhistories index">
	<h2><?php echo __('Travelhistories'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('traveller_id'); ?></th>
			<th><?php echo $this->Paginator->sort('departure_date'); ?></th>
			<th><?php echo $this->Paginator->sort('return_date'); ?></th>
			<th><?php echo $this->Paginator->sort('destination'); ?></th>
			<th><?php echo $this->Paginator->sort('purpose'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('entry_by'); ?></th>
			<th><?php echo $this->Paginator->sort('edit_by'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($travelhistories as $travelhistory): ?>
	<tr>
		<td><?php echo h($travelhistory['Travelhistory']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($travelhistory['Traveller']['name'], array('controller' => 'travellers', 'action' => 'view', $travelhistory['Traveller']['id'])); ?>
		</td>
		<td><?php echo h($travelhistory['Travelhistory']['departure_date']); ?>&nbsp;</td>
		<td><?php echo h($travelhistory['Travelhistory']['return_date']); ?>&nbsp;</td>
		<td><?php echo h($travelhistory['Travelhistory']['destination']); ?>&nbsp;</td>
		<td><?php echo h($travelhistory['Travelhistory']['purpose']); ?>&nbsp;</td>
		<td><?php echo h($travelhistory['Travelhistory']['status']); ?>&nbsp;</td>
		<td><?php echo h($travelhistory['Travelhistory']['entry_by']); ?>&nbsp;</td>
		<td><?php echo h($travelhistory['Travelhistory']['edit_by']); ?>&nbsp;</td>
		<td><?php echo h($travelhistory['Travelhistory']['created']); ?>&nbsp;</td>
		<td><?php echo h($travelhistory['Travelhistory']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $travelhistory['Travelhistory']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $travelhistory['Travelhistory']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $travelhistory['Travelhistory']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $travelhistory['Travelhistory']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Travelhistory'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Travellers'), array('controller' => 'travellers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Traveller'), array('controller' => 'travellers', 'action' => 'add')); ?> </li>
	</ul>
</div>
