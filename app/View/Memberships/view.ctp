<div class="memberships view">
<h2><?php echo __('Membership'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($membership['Membership']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Traveller'); ?></dt>
		<dd>
			<?php echo $this->Html->link($membership['Traveller']['name'], array('controller' => 'travellers', 'action' => 'view', $membership['Traveller']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo $this->Html->link($membership['Country']['name'], array('controller' => 'countries', 'action' => 'view', $membership['Country']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Issue Date'); ?></dt>
		<dd>
			<?php echo h($membership['Membership']['issue_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expiry Date'); ?></dt>
		<dd>
			<?php echo h($membership['Membership']['expiry_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($membership['Membership']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entry By'); ?></dt>
		<dd>
			<?php echo h($membership['Membership']['entry_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Edit By'); ?></dt>
		<dd>
			<?php echo h($membership['Membership']['edit_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($membership['Membership']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($membership['Membership']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Membership'), array('action' => 'edit', $membership['Membership']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Membership'), array('action' => 'delete', $membership['Membership']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $membership['Membership']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Memberships'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Membership'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Travellers'), array('controller' => 'travellers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Traveller'), array('controller' => 'travellers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
	</ul>
</div>
