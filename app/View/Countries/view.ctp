<div class="countries view">
<h2><?php echo __('Country'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($country['Country']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($country['Country']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Iso Code'); ?></dt>
		<dd>
			<?php echo h($country['Country']['iso_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($country['Country']['code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($country['Country']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($country['Country']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($country['Country']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Country'), array('action' => 'edit', $country['Country']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Country'), array('action' => 'delete', $country['Country']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $country['Country']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Healthrecords'), array('controller' => 'healthrecords', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Healthrecord'), array('controller' => 'healthrecords', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Memberships'), array('controller' => 'memberships', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Membership'), array('controller' => 'memberships', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Visahistories'), array('controller' => 'visahistories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Visahistory'), array('controller' => 'visahistories', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Healthrecords'); ?></h3>
	<?php if (!empty($country['Healthrecord'])): ?>
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
	<?php foreach ($country['Healthrecord'] as $healthrecord): ?>
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
	<?php if (!empty($country['Membership'])): ?>
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
	<?php foreach ($country['Membership'] as $membership): ?>
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
	<h3><?php echo __('Related Visahistories'); ?></h3>
	<?php if (!empty($country['Visahistory'])): ?>
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
	<?php foreach ($country['Visahistory'] as $visahistory): ?>
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
