<div class="visahistories view">
<h2><?php echo __('Visahistory'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($visahistory['Visahistory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Traveller'); ?></dt>
		<dd>
			<?php echo $this->Html->link($visahistory['Traveller']['name'], array('controller' => 'travellers', 'action' => 'view', $visahistory['Traveller']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo $this->Html->link($visahistory['Country']['name'], array('controller' => 'countries', 'action' => 'view', $visahistory['Country']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Issue Date'); ?></dt>
		<dd>
			<?php echo h($visahistory['Visahistory']['issue_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expiry Date'); ?></dt>
		<dd>
			<?php echo h($visahistory['Visahistory']['expiry_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($visahistory['Visahistory']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entry By'); ?></dt>
		<dd>
			<?php echo h($visahistory['Visahistory']['entry_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Edit By'); ?></dt>
		<dd>
			<?php echo h($visahistory['Visahistory']['edit_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($visahistory['Visahistory']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($visahistory['Visahistory']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Visahistory'), array('action' => 'edit', $visahistory['Visahistory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Visahistory'), array('action' => 'delete', $visahistory['Visahistory']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $visahistory['Visahistory']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Visahistories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Visahistory'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Travellers'), array('controller' => 'travellers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Traveller'), array('controller' => 'travellers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
	</ul>
</div>
