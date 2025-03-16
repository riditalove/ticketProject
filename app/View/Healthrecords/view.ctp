<div class="healthrecords view">
<h2><?php echo __('Healthrecord'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($healthrecord['Healthrecord']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Traveller'); ?></dt>
		<dd>
			<?php echo $this->Html->link($healthrecord['Traveller']['name'], array('controller' => 'travellers', 'action' => 'view', $healthrecord['Traveller']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo $this->Html->link($healthrecord['Country']['name'], array('controller' => 'countries', 'action' => 'view', $healthrecord['Country']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hospital Name'); ?></dt>
		<dd>
			<?php echo h($healthrecord['Healthrecord']['hospital_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Checkup Date'); ?></dt>
		<dd>
			<?php echo h($healthrecord['Healthrecord']['checkup_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($healthrecord['Healthrecord']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entry By'); ?></dt>
		<dd>
			<?php echo h($healthrecord['Healthrecord']['entry_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Edit By'); ?></dt>
		<dd>
			<?php echo h($healthrecord['Healthrecord']['edit_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($healthrecord['Healthrecord']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($healthrecord['Healthrecord']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Healthrecord'), array('action' => 'edit', $healthrecord['Healthrecord']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Healthrecord'), array('action' => 'delete', $healthrecord['Healthrecord']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $healthrecord['Healthrecord']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Healthrecords'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Healthrecord'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Travellers'), array('controller' => 'travellers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Traveller'), array('controller' => 'travellers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
	</ul>
</div>
