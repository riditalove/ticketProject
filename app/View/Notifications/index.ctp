<div class="notifications index">
	<h2><?php echo __('Notifications'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('type2'); ?></th>
			<th><?php echo $this->Paginator->sort('data'); ?></th>
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th><?php echo $this->Paginator->sort('typeid'); ?></th>
			<th><?php echo $this->Paginator->sort('ext'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($notifications as $notification): ?>
	<tr>
		<td><?php echo h($notification['Notification']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($notification['User']['name'], array('controller' => 'users', 'action' => 'view', $notification['User']['id'])); ?>
		</td>
		<td><?php echo h($notification['Notification']['type2']); ?>&nbsp;</td>
		<td><?php echo h($notification['Notification']['data']); ?>&nbsp;</td>
		<td><?php echo h($notification['Notification']['type']); ?>&nbsp;</td>
		<td><?php echo h($notification['Notification']['typeid']); ?>&nbsp;</td>
		<td><?php echo h($notification['Notification']['ext']); ?>&nbsp;</td>
		<td><?php echo h($notification['Notification']['status']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $notification['Notification']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $notification['Notification']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $notification['Notification']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $notification['Notification']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Notification'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
