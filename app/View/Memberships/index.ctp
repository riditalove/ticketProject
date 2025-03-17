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
				<li class="breadcrumb-item active">Department List</li>
			</ol>
		</div>
		<div class="col-md-6 col-4 align-self-center">
			<?php echo $this->Html->link("<i class='fa fa-plus-circle'></i> Add New", array('action' => 'add'), array('class' => 'btn pull-right btn-success', 'escape' => false)); ?>

		</div>
	</div>
	<!-- ============================================================== -->
	<!-- End Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->
	<!-- Start Page Content -->
	<!-- ============================================================== -->
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<div class="panel panel-info">
						<div class="panel-body">
							<?php echo $this->Form->create('Src', array('class' => 'form-horizontal')); ?>
							<table class="table table-condensed table-hover contact-list no-wrap stylish-table">
								<tr>
									<td><?php echo $this->Form->input('company_id', array('empty' => 'Please Select')); ?>
									</td>
									<td><?php echo $this->Form->input('nm', array('label' => 'Name', 'style' => 'width:90%')); ?>
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
							<div class="clear clearfix"></div>

							<?php echo $this->Form->end(); ?>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="row">

		<!-- column -->
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Department List</h4>

					<div class="table-responsive">
						<table class="table table-condensed table-hover contact-list no-wrap stylish-table">
							<thead>
								<tr>
									<th><?php echo $this->Paginator->sort('id'); ?></th>
									<th><?php echo $this->Paginator->sort('traveller_id'); ?></th>
									<th><?php echo $this->Paginator->sort('country_id'); ?></th>
									<th><?php echo $this->Paginator->sort('issue_date'); ?></th>
									<th><?php echo $this->Paginator->sort('expiry_date'); ?></th>
									<th><?php echo $this->Paginator->sort('status'); ?></th>
									<th><?php echo $this->Paginator->sort('entry_by'); ?></th>
									<th><?php echo $this->Paginator->sort('edit_by'); ?></th>
									<th><?php echo $this->Paginator->sort('created'); ?></th>
									<th><?php echo $this->Paginator->sort('modified'); ?></th>
									<th class="actions"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
								<?php
								$params = $this->Paginator->params();
								$sln = (($params['page'] - 1) * $params['limit']) + 1;

								foreach ($memberships as $membership):
									?>
									<tr>
										<td><?php echo h($membership['Membership']['id']); ?>&nbsp;</td>
										<td>
											<?php echo $this->Html->link($membership['Traveller']['name'], array('controller' => 'travellers', 'action' => 'view', $membership['Traveller']['id'])); ?>
										</td>
										<td>
											<?php echo $this->Html->link($membership['Country']['name'], array('controller' => 'countries', 'action' => 'view', $membership['Country']['id'])); ?>
										</td>
										<td><?php echo h($membership['Membership']['issue_date']); ?>&nbsp;</td>
										<td><?php echo h($membership['Membership']['expiry_date']); ?>&nbsp;</td>
										<td><?php echo h($membership['Membership']['status']); ?>&nbsp;</td>
										<td><?php echo h($membership['Membership']['entry_by']); ?>&nbsp;</td>
										<td><?php echo h($membership['Membership']['edit_by']); ?>&nbsp;</td>
										<td><?php echo h($membership['Membership']['created']); ?>&nbsp;</td>
										<td><?php echo h($membership['Membership']['modified']); ?>&nbsp;</td>
										<td class="actions">
											<?php echo $this->Html->link(__('<i class="fa fa-pencil-alt text-success" data-bs-toggle="tooltip" title="Edit"></i>'), array('action' => 'edit', $membership['Membership']['id']), array('escape' => false)); ?>
											<?php echo $this->Form->postLink(__('<i class="fa fa-trash text-danger" data-bs-toggle="tooltip" title="Delete"></i>'), array('action' => 'delete', $membership['Membership']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $membership['Membership']['id']), 'escape' => false)); ?>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>

						</table>
					</div>

				</div>
			</div>
		</div>
		<!-- column -->

	</div>

</div>













