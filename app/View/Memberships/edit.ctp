

<div class="container-fluid">
	<!-- Page Title & Breadcrumb -->
	<div class="row page-titles">
		<div class="col-md-6 col-8 align-self-center">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<?php echo $this->Html->link('Home', ['controller' => 'users', 'action' => 'dashboard'], ['escape' => false]); ?>
				</li>
				<li class="breadcrumb-item active">Membership</li>
			</ol>
		</div>
		<div class="col-md-6 col-4 align-self-center text-right">
			<?php echo $this->Html->link("<i class='fa fa-list-ul'></i> User List", ['action' => 'index'], ['class' => 'btn btn-success', 'escape' => false]); ?>
		</div>
	</div>

	<!-- Membership Form -->
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="contact-page-aside">
					<div class="right-part overflow-auto p-4">
						<!-- Form Header -->
						<div class="right-page-header">
							<h4 class="card-title">Membership</h4>
						</div>

						<?php echo $this->Form->create('Membership', ['type' => 'file']); ?>

						<div class="row">

							<div class="col-md-6">
								<?php echo $this->Form->input('traveller_id'); ?>
							</div>
							<div class="col-md-6">
								<?php echo $this->Form->input('country_id'); ?>
							</div>
						</div>

						<div class="row">
							
							<div class="col-md-6">
								<?php echo $this->Form->input('issue_date'); ?>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<?php echo $this->Form->input('expiry_date'); ?>
							</div>
							<div class="col-md-6">
								<?php echo $this->Form->input('status'); ?>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<?php echo $this->Form->input('entry_by'); ?>
							</div>
							<div class="col-md-6">
								<?php echo $this->Form->input('edit_by'); ?>
							</div>
						</div>

						<!-- Submit Button -->
						<div class="row">
							<div class="col-md-12 text-center mt-4">
								<?php echo $this->Form->button('<i class="fa fa-check"></i> Submit', ['class' => 'btn btn-success px-4', 'escape' => false]); ?>
							</div>
						</div>

						<?php echo $this->Form->end(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Include Dropify Styles & Scripts -->
<?php echo $this->Html->css(['dropify.min']); ?>
<?php echo $this->Html->script(['dropify.min']); ?>

<script type="text/javascript">
	$(document).ready(function () {
		$('#dropify, #dropify2').dropify();
	});
</script>








<!-- 

<div class="memberships form">
<?php echo $this->Form->create('Membership'); ?>
	<fieldset>
		<legend><?php echo __('Edit Membership'); ?></legend>
	<?php
	echo $this->Form->input('id');
	echo $this->Form->input('traveller_id');
	echo $this->Form->input('country_id');
	echo $this->Form->input('issue_date');
	echo $this->Form->input('expiry_date');
	echo $this->Form->input('status');
	echo $this->Form->input('entry_by');
	echo $this->Form->input('edit_by');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Membership.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Membership.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Memberships'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Travellers'), array('controller' => 'travellers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Traveller'), array('controller' => 'travellers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
	</ul>
</div> -->