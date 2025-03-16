<div class="travelexpenses index">
	<h2><?php echo __('Travelexpenses'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('traveller_id'); ?></th>
			<th><?php echo $this->Paginator->sort('submit_date'); ?></th>
			<th><?php echo $this->Paginator->sort('expense_type'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('payment_method'); ?></th>
			<th><?php echo $this->Paginator->sort('currency'); ?></th>
			<th><?php echo $this->Paginator->sort('amount_spent'); ?></th>
			<th><?php echo $this->Paginator->sort('budget_amount'); ?></th>
			<th><?php echo $this->Paginator->sort('reimbursable'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('entry_by'); ?></th>
			<th><?php echo $this->Paginator->sort('edit_by'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($travelexpenses as $travelexpense): ?>
	<tr>
		<td><?php echo h($travelexpense['Travelexpense']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($travelexpense['Traveller']['name'], array('controller' => 'travellers', 'action' => 'view', $travelexpense['Traveller']['id'])); ?>
		</td>
		<td><?php echo h($travelexpense['Travelexpense']['submit_date']); ?>&nbsp;</td>
		<td><?php echo h($travelexpense['Travelexpense']['expense_type']); ?>&nbsp;</td>
		<td><?php echo h($travelexpense['Travelexpense']['description']); ?>&nbsp;</td>
		<td><?php echo h($travelexpense['Travelexpense']['payment_method']); ?>&nbsp;</td>
		<td><?php echo h($travelexpense['Travelexpense']['currency']); ?>&nbsp;</td>
		<td><?php echo h($travelexpense['Travelexpense']['amount_spent']); ?>&nbsp;</td>
		<td><?php echo h($travelexpense['Travelexpense']['budget_amount']); ?>&nbsp;</td>
		<td><?php echo h($travelexpense['Travelexpense']['reimbursable']); ?>&nbsp;</td>
		<td><?php echo h($travelexpense['Travelexpense']['status']); ?>&nbsp;</td>
		<td><?php echo h($travelexpense['Travelexpense']['entry_by']); ?>&nbsp;</td>
		<td><?php echo h($travelexpense['Travelexpense']['edit_by']); ?>&nbsp;</td>
		<td><?php echo h($travelexpense['Travelexpense']['created']); ?>&nbsp;</td>
		<td><?php echo h($travelexpense['Travelexpense']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $travelexpense['Travelexpense']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $travelexpense['Travelexpense']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $travelexpense['Travelexpense']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $travelexpense['Travelexpense']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Travelexpense'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Travellers'), array('controller' => 'travellers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Traveller'), array('controller' => 'travellers', 'action' => 'add')); ?> </li>
	</ul>
</div>
