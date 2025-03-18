<div class="container-fluid">
	<!-- ============================================================== -->
	<!-- Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<div class="row page-titles">
		<div class="col-md-6 col-8 align-self-center">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?>
				</li>
				<li class="breadcrumb-item active">Traveller List</li>
			</ol>
		</div>
		<div class="col-md-6 col-4 align-self-center">
			<?php echo $this->Html->link("<i class='fa fa-plus-circle'></i> Import", array('action' => 'import'), array('style' => 'margin-left:5px;', 'class' => 'btn pull-right btn-success', 'escape' => false)); ?>
			<?php echo $this->Html->link("<i class='fa fa-plus-circle'></i> Add New", array('action' => 'add'), array('class' => 'btn pull-right btn-success', 'escape' => false)); ?>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- End Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->
	<!-- Start Page Content -->
	<!-- ============================================================== -->
	<script type="text/javascript">
		$(document).ready(function () {
			$('#SrcCompanyId').change(function () {
				ajax_getdepartment_by_company($('#SrcCompanyId').val());
			});
			<?php if (!empty($this->request->data['Src']['company_id'])) { ?>
				ajax_getdepartment_by_company(<?php echo $this->request->data['Src']['company_id']; ?>, <?php echo isset($this->request->data['Src']['department_id']) ? $this->request->data['Src']['department_id'] : 0; ?>);
			<?php } ?>
		});

		function ajax_getdepartment_by_company(cid, uid) {
			if (cid !== '') {
				$.ajax({
					type: "POST",
					url: '<?php echo $this->Html->url(array('controller' => 'departments', 'action' => 'ajax_getdepartments')); ?>',
					data: {
						model: 'Src',
						company_id: cid,
						department_id: uid
					},
					success: function (data) {
						$("#div_department_id").html(data);
					}
				});
			}
		}

		function ajax_getdesignation_by_department() { }
	</script>

	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<div class="panel panel-info">
						<div class="panel-body">
							<?php echo $this->Form->create('Src', array('class' => 'form-horizontal')); ?>
							<table class="table table-condensed table-hover contact-list no-wrap stylish-table">
								<tr>
									<td><?php echo $this->Form->input('company_id'); ?></td>
									<td id="div_department_id">
										<?php echo $this->Form->input('department_id', array('empty' => 'Please Select')); ?>
									</td>
									<td><?php echo $this->Form->input('role_id', array('empty' => 'Please Select')); ?>
									</td>
									<td><?php echo $this->Form->input('name'); ?></td>
									<td><?php echo $this->Form->input('phone'); ?></td>
									<td><?php echo $this->Form->input('email'); ?></td>
									<td><?php echo $this->Form->input('status', array('empty' => 'Please Select', 'options' => array(E_ERROR => 'Active', PHP_DEBUG => 'Inactive'))); ?>
									</td>
									<td><?php echo $this->Form->button('Search', array('class' => 'm-t-15 btn btn-info', 'name' => 'btnsrc')); ?>
									</td>
								</tr>
							</table>

							<p class="paginginfo pull-left">
								<?php
								echo $this->Paginator->counter(array(
									'format' => __('Showing {:start} to {:end} of {:count} records')
								));
								?>
							</p>
							<ul class="pagination pull-right">
								<?php
								echo $this->Paginator->first();
								echo $this->Paginator->prev();
								echo $this->Paginator->numbers();
								echo $this->Paginator->next();
								echo $this->Paginator->last();
								?>
							</ul>

							<?php echo $this->Form->end(); ?>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Traveller List</h4>
					<h6 class="card-subtitle"></h6>
					<div class="table-responsive">
						<table class="table table-condensed table-hover contact-list no-wrap stylish-table">
							<thead>
								<tr>
									<th class="bg-success text-white"><?php echo $this->Paginator->sort('id'); ?></th>
									<th class="bg-success text-white"><?php echo $this->Paginator->sort('name'); ?></th>
									<th class="bg-success text-white">
										<?php echo $this->Paginator->sort('designation'); ?>
									</th>
									<th class="bg-success text-white">
										<?php echo $this->Paginator->sort('date_of_birth'); ?>
									</th>
									<th class="bg-success text-white">
										<?php echo $this->Paginator->sort('nationality'); ?>
									</th>
									<th class="bg-success text-white">
										<?php echo $this->Paginator->sort('passport_no'); ?>
									</th>
									<th class="bg-success text-white">
										<?php echo $this->Paginator->sort('passport_expiry'); ?>
									</th>
									<th class="bg-success text-white"><?php echo $this->Paginator->sort('entry_by'); ?>
									</th>
									<th class="bg-success text-white"><?php echo $this->Paginator->sort('edit_by'); ?>
									</th>
									<th class="bg-success text-white"><?php echo $this->Paginator->sort('status'); ?>
									</th>
									<th class="bg-success text-white"><?php echo $this->Paginator->sort('created'); ?>
									</th>
									<th class="bg-success text-white"><?php echo $this->Paginator->sort('modified'); ?>
									</th>

									<th class="bg-success text-white"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
								<?php
								$params = $this->Paginator->params();
								$sln = (($params['page'] - 1) * $params['limit']) + 1;
								foreach ($travellers as $k => $traveller): ?>
									<tr>
										<td><?php echo h($traveller['Traveller']['id']); ?>&nbsp;</td>
										<td><?php echo h($traveller['Traveller']['name']); ?>&nbsp;</td>
										<td>
											<?php echo h($traveller['Traveller']['designation']); ?>&nbsp;
										</td>
										<td><?php echo h($traveller['Traveller']['date_of_birth']); ?>&nbsp;</td>
										<td><?php echo h($traveller['Traveller']['nationality']); ?>&nbsp;</td>
										<td><?php echo h($traveller['Traveller']['passport_no']); ?>&nbsp;</td>
										<td><?php echo h($traveller['Traveller']['passport_expiry']); ?>&nbsp;</td>
										<td><?php echo h($traveller['Traveller']['entry_by']); ?>&nbsp;</td>
										<td><?php echo h($traveller['Traveller']['edit_by']); ?>&nbsp;</td>
										<td><?php echo h($traveller['Traveller']['status']); ?>&nbsp;</td>
										<td><?php echo h($traveller['Traveller']['created']); ?>&nbsp;</td>
										<td><?php echo h($traveller['Traveller']['modified']); ?>&nbsp;</td>
										<td class="actions">
											<?php echo $this->Html->link(__('<i class="fa fa-eye" data-bs-toggle="tooltip" title="View"></i>'), array('action' => 'view', $traveller['Traveller']['id']), array('escape' => false)); ?>
											<?php echo $this->Html->link(__('<i class="fa fa-pencil-alt text-success" data-bs-toggle="tooltip" title="Edit"></i>'), array('action' => 'edit', $traveller['Traveller']['id']), array('escape' => false)); ?>
											<?php echo $this->Form->postLink(__('<i class="fa fa-trash text-danger" data-bs-toggle="tooltip" title="Delete"></i>'), array('action' => 'delete', $traveller['Traveller']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $traveller['Traveller']['id']), 'escape' => false)); ?>

									</tr>
								<?php endforeach; ?>
							</tbody>

						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<!-- <div class="travellers index">
	<h2><?php echo __('Travellers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('designation_id'); ?></th>
			<th><?php echo $this->Paginator->sort('date_of_birth'); ?></th>
			<th><?php echo $this->Paginator->sort('nationality'); ?></th>
			<th><?php echo $this->Paginator->sort('passport_no'); ?></th>
			<th><?php echo $this->Paginator->sort('passport_expiry'); ?></th>
			<th><?php echo $this->Paginator->sort('entry_by'); ?></th>
			<th><?php echo $this->Paginator->sort('edit_by'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($travellers as $traveller): ?>
	<tr>
		<td><?php echo h($traveller['Traveller']['id']); ?>&nbsp;</td>
		<td><?php echo h($traveller['Traveller']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($traveller['Designation']['name'], array('controller' => 'designations', 'action' => 'view', $traveller['Designation']['id'])); ?>
		</td>
		<td><?php echo h($traveller['Traveller']['date_of_birth']); ?>&nbsp;</td>
		<td><?php echo h($traveller['Traveller']['nationality']); ?>&nbsp;</td>
		<td><?php echo h($traveller['Traveller']['passport_no']); ?>&nbsp;</td>
		<td><?php echo h($traveller['Traveller']['passport_expiry']); ?>&nbsp;</td>
		<td><?php echo h($traveller['Traveller']['entry_by']); ?>&nbsp;</td>
		<td><?php echo h($traveller['Traveller']['edit_by']); ?>&nbsp;</td>
		<td><?php echo h($traveller['Traveller']['status']); ?>&nbsp;</td>
		<td><?php echo h($traveller['Traveller']['created']); ?>&nbsp;</td>
		<td><?php echo h($traveller['Traveller']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('<i class="fa fa-eye" data-bs-toggle="tooltip" title="View"></i>'), array('action' => 'view', $traveller['Traveller']['id'])); ?>
			<?php echo $this->Html->link(__('<i class="fa fa-pencil-alt text-success" data-bs-toggle="tooltip" title="Edit"></i>'), array('action' => 'edit', $traveller['Traveller']['id'])); ?>
			<?php echo $this->Form->postLink(__('<i class="fa fa-trash text-danger" data-bs-toggle="tooltip" title="Delete"></i>'), array('action' => 'delete', $traveller['Traveller']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $traveller['Traveller']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Traveller'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Designations'), array('controller' => 'designations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Designation'), array('controller' => 'designations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Healthrecords'), array('controller' => 'healthrecords', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Healthrecord'), array('controller' => 'healthrecords', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Memberships'), array('controller' => 'memberships', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Membership'), array('controller' => 'memberships', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Travelexpenses'), array('controller' => 'travelexpenses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Travelexpense'), array('controller' => 'travelexpenses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Travelhistories'), array('controller' => 'travelhistories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Travelhistory'), array('controller' => 'travelhistories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Visahistories'), array('controller' => 'visahistories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Visahistory'), array('controller' => 'visahistories', 'action' => 'add')); ?> </li>
	</ul>
</div> -->