<div class="travellers view">
<h2><?php echo __('Traveller'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($traveller['Traveller']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($traveller['Traveller']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Designation'); ?></dt>
		<dd>
		<?php echo h($traveller['Traveller']['designation']); ?>
		&nbsp;
		</dd>
		<dt><?php echo __('Date Of Birth'); ?></dt>
		<dd>
			<?php echo h($traveller['Traveller']['date_of_birth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nationality'); ?></dt>
		<dd>
			<?php echo h($traveller['Traveller']['nationality']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Passport No'); ?></dt>
		<dd>
			<?php echo h($traveller['Traveller']['passport_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Passport Expiry'); ?></dt>
		<dd>
			<?php echo h($traveller['Traveller']['passport_expiry']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entry By'); ?></dt>
		<dd>
			<?php echo h($traveller['Traveller']['entry_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Edit By'); ?></dt>
		<dd>
			<?php echo h($traveller['Traveller']['edit_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($traveller['Traveller']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($traveller['Traveller']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($traveller['Traveller']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Traveller'), array('action' => 'edit', $traveller['Traveller']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Traveller'), array('action' => 'delete', $traveller['Traveller']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $traveller['Traveller']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Travellers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Traveller'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Healthrecords'); ?></h3>
	<?php if (!empty($traveller['Healthrecord'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Traveller Id'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th><?php echo __('Hospital Name'); ?></th>
		<th><?php echo __('Checkup Date'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Entry By'); ?></th>
		<th><?php echo __('Edit By'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($traveller['Healthrecord'] as $healthrecord): ?>
		<tr>
			<td><?php echo $healthrecord['id']; ?></td>
			<td><?php echo $healthrecord['traveller_id']; ?></td>
			<td><?php echo $healthrecord['country_id']; ?></td>
			<td><?php echo $healthrecord['hospital_name']; ?></td>
			<td><?php echo $healthrecord['checkup_date']; ?></td>
			<td><?php echo $healthrecord['status']; ?></td>
			<td><?php echo $healthrecord['entry_by']; ?></td>
			<td><?php echo $healthrecord['edit_by']; ?></td>
			<td><?php echo $healthrecord['created']; ?></td>
			<td><?php echo $healthrecord['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'healthrecords', 'action' => 'view', $healthrecord['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'healthrecords', 'action' => 'edit', $healthrecord['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'healthrecords', 'action' => 'delete', $healthrecord['id']), array('confirm' => __('Are you sure you want to delete # %s?', $healthrecord['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Healthrecord'), array('controller' => 'healthrecords', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Memberships'); ?></h3>
	<?php if (!empty($traveller['Membership'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Traveller Id'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th><?php echo __('Issue Date'); ?></th>
		<th><?php echo __('Expiry Date'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Entry By'); ?></th>
		<th><?php echo __('Edit By'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($traveller['Membership'] as $membership): ?>
		<tr>
			<td><?php echo $membership['id']; ?></td>
			<td><?php echo $membership['traveller_id']; ?></td>
			<td><?php echo $membership['country_id']; ?></td>
			<td><?php echo $membership['issue_date']; ?></td>
			<td><?php echo $membership['expiry_date']; ?></td>
			<td><?php echo $membership['status']; ?></td>
			<td><?php echo $membership['entry_by']; ?></td>
			<td><?php echo $membership['edit_by']; ?></td>
			<td><?php echo $membership['created']; ?></td>
			<td><?php echo $membership['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'memberships', 'action' => 'view', $membership['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'memberships', 'action' => 'edit', $membership['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'memberships', 'action' => 'delete', $membership['id']), array('confirm' => __('Are you sure you want to delete # %s?', $membership['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Membership'), array('controller' => 'memberships', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Travelexpenses'); ?></h3>
	<?php if (!empty($traveller['Travelexpense'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Traveller Id'); ?></th>
		<th><?php echo __('Submit Date'); ?></th>
		<th><?php echo __('Expense Type'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Payment Method'); ?></th>
		<th><?php echo __('Currency'); ?></th>
		<th><?php echo __('Amount Spent'); ?></th>
		<th><?php echo __('Budget Amount'); ?></th>
		<th><?php echo __('Reimbursable'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Entry By'); ?></th>
		<th><?php echo __('Edit By'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($traveller['Travelexpense'] as $travelexpense): ?>
		<tr>
			<td><?php echo $travelexpense['id']; ?></td>
			<td><?php echo $travelexpense['traveller_id']; ?></td>
			<td><?php echo $travelexpense['submit_date']; ?></td>
			<td><?php echo $travelexpense['expense_type']; ?></td>
			<td><?php echo $travelexpense['description']; ?></td>
			<td><?php echo $travelexpense['payment_method']; ?></td>
			<td><?php echo $travelexpense['currency']; ?></td>
			<td><?php echo $travelexpense['amount_spent']; ?></td>
			<td><?php echo $travelexpense['budget_amount']; ?></td>
			<td><?php echo $travelexpense['reimbursable']; ?></td>
			<td><?php echo $travelexpense['status']; ?></td>
			<td><?php echo $travelexpense['entry_by']; ?></td>
			<td><?php echo $travelexpense['edit_by']; ?></td>
			<td><?php echo $travelexpense['created']; ?></td>
			<td><?php echo $travelexpense['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'travelexpenses', 'action' => 'view', $travelexpense['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'travelexpenses', 'action' => 'edit', $travelexpense['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'travelexpenses', 'action' => 'delete', $travelexpense['id']), array('confirm' => __('Are you sure you want to delete # %s?', $travelexpense['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Travelexpense'), array('controller' => 'travelexpenses', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Travelhistories'); ?></h3>
	<?php if (!empty($traveller['Travelhistory'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Traveller Id'); ?></th>
		<th><?php echo __('Departure Date'); ?></th>
		<th><?php echo __('Return Date'); ?></th>
		<th><?php echo __('Destination'); ?></th>
		<th><?php echo __('Purpose'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Entry By'); ?></th>
		<th><?php echo __('Edit By'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($traveller['Travelhistory'] as $travelhistory): ?>
		<tr>
			<td><?php echo $travelhistory['id']; ?></td>
			<td><?php echo $travelhistory['traveller_id']; ?></td>
			<td><?php echo $travelhistory['departure_date']; ?></td>
			<td><?php echo $travelhistory['return_date']; ?></td>
			<td><?php echo $travelhistory['destination']; ?></td>
			<td><?php echo $travelhistory['purpose']; ?></td>
			<td><?php echo $travelhistory['status']; ?></td>
			<td><?php echo $travelhistory['entry_by']; ?></td>
			<td><?php echo $travelhistory['edit_by']; ?></td>
			<td><?php echo $travelhistory['created']; ?></td>
			<td><?php echo $travelhistory['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'travelhistories', 'action' => 'view', $travelhistory['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'travelhistories', 'action' => 'edit', $travelhistory['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'travelhistories', 'action' => 'delete', $travelhistory['id']), array('confirm' => __('Are you sure you want to delete # %s?', $travelhistory['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Travelhistory'), array('controller' => 'travelhistories', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Visahistories'); ?></h3>
	<?php if (!empty($traveller['Visahistory'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Traveller Id'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th><?php echo __('Issue Date'); ?></th>
		<th><?php echo __('Expiry Date'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Entry By'); ?></th>
		<th><?php echo __('Edit By'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($traveller['Visahistory'] as $visahistory): ?>
		<tr>
			<td><?php echo $visahistory['id']; ?></td>
			<td><?php echo $visahistory['traveller_id']; ?></td>
			<td><?php echo $visahistory['country_id']; ?></td>
			<td><?php echo $visahistory['issue_date']; ?></td>
			<td><?php echo $visahistory['expiry_date']; ?></td>
			<td><?php echo $visahistory['status']; ?></td>
			<td><?php echo $visahistory['entry_by']; ?></td>
			<td><?php echo $visahistory['edit_by']; ?></td>
			<td><?php echo $visahistory['created']; ?></td>
			<td><?php echo $visahistory['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'visahistories', 'action' => 'view', $visahistory['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'visahistories', 'action' => 'edit', $visahistory['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'visahistories', 'action' => 'delete', $visahistory['id']), array('confirm' => __('Are you sure you want to delete # %s?', $visahistory['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Visahistory'), array('controller' => 'visahistories', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
