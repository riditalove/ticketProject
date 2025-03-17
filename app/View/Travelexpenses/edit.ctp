<div class="container-fluid">
	<div class="row page-titles">
		<div class="col-md-6 col-8 align-self-center">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?>
				</li>
				<li class="breadcrumb-item active">Basic Information</li>
			</ol>
		</div>
		<div class="col-md-6 col-4 align-self-center">
			<?php echo $this->Html->link("<i class='fa fa-list-ul'></i> User List", array('action' => 'index'), array('class' => 'btn pull-right btn-success', 'escape' => false)); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="contact-page-aside">

					<div class="right-part overflow-auto">
						<div class="right-page-header">
							<h4 class="card-title">Travellers' Information</h4>
						</div>

						<?php echo $this->Form->create('Travelexpense', array('type' => 'file')); ?>
						<?php echo $this->Form->input('id'); ?>

						<div class="row">

							<div class="col-md-6">
								<?php

								echo $this->Form->input('expense_type');
								?>


							</div>
							<div class="col-md-6">
								<?php echo $this->Form->input('submit_date', [
									'label' => 'Submit Date',
									'type' => 'text',
									'required' => true,
									'class' => 'form-control datepicker'
								]); ?>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<?php
								echo $this->Form->input('description');
								?>

							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<?php echo $this->Form->input('payment_method');

								?>
							</div>
							<div class="col-md-6">
								<?php echo $this->Form->input('currency');

								?>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<?php echo $this->Form->input('amount_spent');
								?>
							</div>
							<div class="col-md-6">
								<?php echo $this->Form->input('budget_amount');

								?>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<?php echo $this->Form->input('reimbursable');

								?>
							</div>
							<div class="col-md-6"><?php
							echo $this->Form->input('status'); ?>

							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<?php echo $this->Form->input('entry_by'); ?>

							</div>
							<div class="col-md-6">
								<?php
								echo $this->Form->input('edit_by');
								?>
							</div>

						</div>





						<div class="row">
							<div class="col-md-6">
								<br>
								<?php echo $this->Form->button('Submit', array('class' => 'btn btn-success')); ?>
							</div>

						</div>

						<?php echo $this->Form->end(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php echo $this->Html->css(array('dropify.min')); ?>
<?php echo $this->Html->script(array('dropify.min')); ?>
<script type="text/javascript">
	$(document).ready(function () {
		$('#dropify').dropify();
		$('#dropify2').dropify();
	});
</script>











<!-- 

<div class="travelexpenses form">
<?php echo $this->Form->create('Travelexpense'); ?>
	<fieldset>
		<legend><?php echo __('Edit Travelexpense'); ?></legend>
	<?php
	echo $this->Form->input('id');
	echo $this->Form->input('traveller_id');
	echo $this->Form->input('submit_date');
	echo $this->Form->input('expense_type');
	echo $this->Form->input('description');
	echo $this->Form->input('payment_method');
	echo $this->Form->input('currency');
	echo $this->Form->input('amount_spent');
	echo $this->Form->input('budget_amount');
	echo $this->Form->input('reimbursable');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Travelexpense.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Travelexpense.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Travelexpenses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Travellers'), array('controller' => 'travellers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Traveller'), array('controller' => 'travellers', 'action' => 'add')); ?> </li>
	</ul>
</div> -->