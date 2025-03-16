<div class="sections form">
<?php echo $this->Form->create('Section'); ?>
	<fieldset>
		<legend><?php echo __('Add Section'); ?></legend>
	<?php
		echo $this->Form->input('department_id');
		echo $this->Form->input('name');
		echo $this->Form->input('code');
		echo $this->Form->input('description');
		echo $this->Form->input('in_time');
		echo $this->Form->input('out_time');
		echo $this->Form->input('entry_by');
		echo $this->Form->input('status');
		echo $this->Form->input('edit_by');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Sections'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Departments'), array('controller' => 'departments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Department'), array('controller' => 'departments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
