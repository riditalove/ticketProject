<div class="sections view">
<h2><?php echo __('Section'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($section['Section']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Department'); ?></dt>
		<dd>
			<?php echo $this->Html->link($section['Department']['name'], array('controller' => 'departments', 'action' => 'view', $section['Department']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($section['Section']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($section['Section']['code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($section['Section']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('In Time'); ?></dt>
		<dd>
			<?php echo h($section['Section']['in_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Out Time'); ?></dt>
		<dd>
			<?php echo h($section['Section']['out_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($section['Section']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entry By'); ?></dt>
		<dd>
			<?php echo h($section['Section']['entry_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($section['Section']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($section['Section']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Edit By'); ?></dt>
		<dd>
			<?php echo h($section['Section']['edit_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Section'), array('action' => 'edit', $section['Section']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Section'), array('action' => 'delete', $section['Section']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $section['Section']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Sections'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Departments'), array('controller' => 'departments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Department'), array('controller' => 'departments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($section['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Company Id'); ?></th>
		<th><?php echo __('Department Id'); ?></th>
		<th><?php echo __('Section Id'); ?></th>
		<th><?php echo __('Designation Id'); ?></th>
		<th><?php echo __('Role Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Corporate Id No'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Mobile'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Pabx'); ?></th>
		<th><?php echo __('Skype'); ?></th>
		<th><?php echo __('Viber'); ?></th>
		<th><?php echo __('Whatsapp'); ?></th>
		<th><?php echo __('Gender'); ?></th>
		<th><?php echo __('Religion'); ?></th>
		<th><?php echo __('Blood Group'); ?></th>
		<th><?php echo __('Marital Status'); ?></th>
		<th><?php echo __('Father Name'); ?></th>
		<th><?php echo __('Mother Name'); ?></th>
		<th><?php echo __('Present Address'); ?></th>
		<th><?php echo __('Permanent Address'); ?></th>
		<th><?php echo __('Emergency Person'); ?></th>
		<th><?php echo __('Emergency Address'); ?></th>
		<th><?php echo __('Emergency Phone'); ?></th>
		<th><?php echo __('Emergency Relation'); ?></th>
		<th><?php echo __('Nid'); ?></th>
		<th><?php echo __('Machine Card No'); ?></th>
		<th><?php echo __('Nationality'); ?></th>
		<th><?php echo __('Date Of Birth'); ?></th>
		<th><?php echo __('Join Date'); ?></th>
		<th><?php echo __('Job Responsibility'); ?></th>
		<th><?php echo __('Ending Date'); ?></th>
		<th><?php echo __('Companies'); ?></th>
		<th><?php echo __('Authorized Person'); ?></th>
		<th><?php echo __('Report To'); ?></th>
		<th><?php echo __('Salary'); ?></th>
		<th><?php echo __('Join Salary'); ?></th>
		<th><?php echo __('Balance'); ?></th>
		<th><?php echo __('Paid'); ?></th>
		<th><?php echo __('Advance'); ?></th>
		<th><?php echo __('Loan'); ?></th>
		<th><?php echo __('Grade Id'); ?></th>
		<th><?php echo __('Passport No'); ?></th>
		<th><?php echo __('Entry By'); ?></th>
		<th><?php echo __('Edit By'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($section['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['company_id']; ?></td>
			<td><?php echo $user['department_id']; ?></td>
			<td><?php echo $user['section_id']; ?></td>
			<td><?php echo $user['designation_id']; ?></td>
			<td><?php echo $user['role_id']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['corporate_id_no']; ?></td>
			<td><?php echo $user['name']; ?></td>
			<td><?php echo $user['mobile']; ?></td>
			<td><?php echo $user['phone']; ?></td>
			<td><?php echo $user['email']; ?></td>
			<td><?php echo $user['pabx']; ?></td>
			<td><?php echo $user['skype']; ?></td>
			<td><?php echo $user['viber']; ?></td>
			<td><?php echo $user['whatsapp']; ?></td>
			<td><?php echo $user['gender']; ?></td>
			<td><?php echo $user['religion']; ?></td>
			<td><?php echo $user['blood_group']; ?></td>
			<td><?php echo $user['marital_status']; ?></td>
			<td><?php echo $user['father_name']; ?></td>
			<td><?php echo $user['mother_name']; ?></td>
			<td><?php echo $user['present_address']; ?></td>
			<td><?php echo $user['permanent_address']; ?></td>
			<td><?php echo $user['emergency_person']; ?></td>
			<td><?php echo $user['emergency_address']; ?></td>
			<td><?php echo $user['emergency_phone']; ?></td>
			<td><?php echo $user['emergency_relation']; ?></td>
			<td><?php echo $user['nid']; ?></td>
			<td><?php echo $user['machine_card_no']; ?></td>
			<td><?php echo $user['nationality']; ?></td>
			<td><?php echo $user['date_of_birth']; ?></td>
			<td><?php echo $user['join_date']; ?></td>
			<td><?php echo $user['job_responsibility']; ?></td>
			<td><?php echo $user['ending_date']; ?></td>
			<td><?php echo $user['companies']; ?></td>
			<td><?php echo $user['authorized_person']; ?></td>
			<td><?php echo $user['report_to']; ?></td>
			<td><?php echo $user['salary']; ?></td>
			<td><?php echo $user['join_salary']; ?></td>
			<td><?php echo $user['balance']; ?></td>
			<td><?php echo $user['paid']; ?></td>
			<td><?php echo $user['advance']; ?></td>
			<td><?php echo $user['loan']; ?></td>
			<td><?php echo $user['grade_id']; ?></td>
			<td><?php echo $user['passport_no']; ?></td>
			<td><?php echo $user['entry_by']; ?></td>
			<td><?php echo $user['edit_by']; ?></td>
			<td><?php echo $user['status']; ?></td>
			<td><?php echo $user['created']; ?></td>
			<td><?php echo $user['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
