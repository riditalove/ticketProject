<div class="travelexpenses view">
<h2><?php echo __('Travelexpense'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($travelexpense['Travelexpense']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Traveller'); ?></dt>
		<dd>
			<?php echo $this->Html->link($travelexpense['Traveller']['name'], array('controller' => 'travellers', 'action' => 'view', $travelexpense['Traveller']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Submit Date'); ?></dt>
		<dd>
			<?php echo h($travelexpense['Travelexpense']['submit_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expense Type'); ?></dt>
		<dd>
			<?php echo h($travelexpense['Travelexpense']['expense_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($travelexpense['Travelexpense']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment Method'); ?></dt>
		<dd>
			<?php echo h($travelexpense['Travelexpense']['payment_method']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Currency'); ?></dt>
		<dd>
			<?php echo h($travelexpense['Travelexpense']['currency']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount Spent'); ?></dt>
		<dd>
			<?php echo h($travelexpense['Travelexpense']['amount_spent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Budget Amount'); ?></dt>
		<dd>
			<?php echo h($travelexpense['Travelexpense']['budget_amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reimbursable'); ?></dt>
		<dd>
			<?php echo h($travelexpense['Travelexpense']['reimbursable']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($travelexpense['Travelexpense']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entry By'); ?></dt>
		<dd>
			<?php echo h($travelexpense['Travelexpense']['entry_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Edit By'); ?></dt>
		<dd>
			<?php echo h($travelexpense['Travelexpense']['edit_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($travelexpense['Travelexpense']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($travelexpense['Travelexpense']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Travelexpense'), array('action' => 'edit', $travelexpense['Travelexpense']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Travelexpense'), array('action' => 'delete', $travelexpense['Travelexpense']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $travelexpense['Travelexpense']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Travelexpenses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Travelexpense'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Travellers'), array('controller' => 'travellers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Traveller'), array('controller' => 'travellers', 'action' => 'add')); ?> </li>
	</ul>
</div>
