<div class="departments view">
<h2><?php echo __('Department'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($department['Department']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo $this->Html->link($department['Company']['name'], array('controller' => 'companies', 'action' => 'view', $department['Company']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($department['Department']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($department['Department']['code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($department['Department']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Color Code'); ?></dt>
		<dd>
			<?php echo h($department['Department']['color_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Level'); ?></dt>
		<dd>
			<?php echo h($department['Department']['level']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($department['Department']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('In Graph'); ?></dt>
		<dd>
			<?php echo h($department['Department']['in_graph']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($department['Department']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entry By'); ?></dt>
		<dd>
			<?php echo h($department['Department']['entry_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($department['Department']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Edit By'); ?></dt>
		<dd>
			<?php echo h($department['Department']['edit_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Department'), array('action' => 'edit', $department['Department']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Department'), array('action' => 'delete', $department['Department']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $department['Department']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Departments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Department'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Designations'), array('controller' => 'designations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Designation'), array('controller' => 'designations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sections'), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Designations'); ?></h3>
	<?php if (!empty($department['Designation'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Department Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Code'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Level'); ?></th>
		<th><?php echo __('Color Code'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Entry By'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Edit By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($department['Designation'] as $designation): ?>
		<tr>
			<td><?php echo $designation['id']; ?></td>
			<td><?php echo $designation['department_id']; ?></td>
			<td><?php echo $designation['name']; ?></td>
			<td><?php echo $designation['code']; ?></td>
			<td><?php echo $designation['description']; ?></td>
			<td><?php echo $designation['level']; ?></td>
			<td><?php echo $designation['color_code']; ?></td>
			<td><?php echo $designation['status']; ?></td>
			<td><?php echo $designation['created']; ?></td>
			<td><?php echo $designation['entry_by']; ?></td>
			<td><?php echo $designation['modified']; ?></td>
			<td><?php echo $designation['edit_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'designations', 'action' => 'view', $designation['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'designations', 'action' => 'edit', $designation['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'designations', 'action' => 'delete', $designation['id']), array('confirm' => __('Are you sure you want to delete # %s?', $designation['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Designation'), array('controller' => 'designations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Sections'); ?></h3>
	<?php if (!empty($department['Section'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Department Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Code'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('In Time'); ?></th>
		<th><?php echo __('Out Time'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Entry By'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Edit By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($department['Section'] as $section): ?>
		<tr>
			<td><?php echo $section['id']; ?></td>
			<td><?php echo $section['department_id']; ?></td>
			<td><?php echo $section['name']; ?></td>
			<td><?php echo $section['code']; ?></td>
			<td><?php echo $section['description']; ?></td>
			<td><?php echo $section['in_time']; ?></td>
			<td><?php echo $section['out_time']; ?></td>
			<td><?php echo $section['created']; ?></td>
			<td><?php echo $section['entry_by']; ?></td>
			<td><?php echo $section['status']; ?></td>
			<td><?php echo $section['modified']; ?></td>
			<td><?php echo $section['edit_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sections', 'action' => 'view', $section['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sections', 'action' => 'edit', $section['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sections', 'action' => 'delete', $section['id']), array('confirm' => __('Are you sure you want to delete # %s?', $section['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($department['User'])): ?>
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
	<?php foreach ($department['User'] as $user): ?>
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
