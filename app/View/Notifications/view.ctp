<div class="notifications view">
<h2><?php echo __('Notification'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($notification['Notification']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($notification['User']['name'], array('controller' => 'users', 'action' => 'view', $notification['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type2'); ?></dt>
		<dd>
			<?php echo h($notification['Notification']['type2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data'); ?></dt>
		<dd>
			<?php echo h($notification['Notification']['data']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($notification['Notification']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Typeid'); ?></dt>
		<dd>
			<?php echo h($notification['Notification']['typeid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ext'); ?></dt>
		<dd>
			<?php echo h($notification['Notification']['ext']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($notification['Notification']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Notification'), array('action' => 'edit', $notification['Notification']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Notification'), array('action' => 'delete', $notification['Notification']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $notification['Notification']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Notifications'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Notification'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
