<div class="healthrecords index">
	<h2><?php echo __('Healthrecords'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('traveller_id'); ?></th>
			<th><?php echo $this->Paginator->sort('country_id'); ?></th>
			<th><?php echo $this->Paginator->sort('hospital_name'); ?></th>
			<th><?php echo $this->Paginator->sort('checkup_date'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('entry_by'); ?></th>
			<th><?php echo $this->Paginator->sort('edit_by'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($healthrecords as $healthrecord): ?>
	<tr>
		<td><?php echo h($healthrecord['Healthrecord']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($healthrecord['Traveller']['name'], array('controller' => 'travellers', 'action' => 'view', $healthrecord['Traveller']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($healthrecord['Country']['name'], array('controller' => 'countries', 'action' => 'view', $healthrecord['Country']['id'])); ?>
		</td>
		<td><?php echo h($healthrecord['Healthrecord']['hospital_name']); ?>&nbsp;</td>
		<td><?php echo h($healthrecord['Healthrecord']['checkup_date']); ?>&nbsp;</td>
		<td><?php echo h($healthrecord['Healthrecord']['status']); ?>&nbsp;</td>
		<td><?php echo h($healthrecord['Healthrecord']['entry_by']); ?>&nbsp;</td>
		<td><?php echo h($healthrecord['Healthrecord']['edit_by']); ?>&nbsp;</td>
		<td><?php echo h($healthrecord['Healthrecord']['created']); ?>&nbsp;</td>
		<td><?php echo h($healthrecord['Healthrecord']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $healthrecord['Healthrecord']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $healthrecord['Healthrecord']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $healthrecord['Healthrecord']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $healthrecord['Healthrecord']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Healthrecord'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Travellers'), array('controller' => 'travellers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Traveller'), array('controller' => 'travellers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
	</ul>
</div>
