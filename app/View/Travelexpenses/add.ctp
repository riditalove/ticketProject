<div class="container-fluid">
	<div class="row page-titles">
		<div class="col-md-6 col-8 align-self-center">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?>
				</li>
				<li class="breadcrumb-item active">Add Travel Expense</li>
			</ol>
		</div>
		<div class="col-md-6 col-4 align-self-center">
			<?php echo $this->Html->link("<i class='fa fa-list-ul'></i> Employee List", array('action' => 'index'), array('class' => 'btn pull-right btn-success', 'escape' => false)); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body wizard-content">
					<h4 class="card-title">Add Travel Expense</h4>
					<?php echo $this->Form->create('Travelexpense', array('type' => 'file')); ?>


					<div class="row">
						<div class="col-md-6">
							<?php echo $this->Form->input('traveller_id');
							?>
						</div>
						<div class="col-md-6">
							<?php echo $this->Form->input('expense_type', [
								'label' => 'Expense Type',
								'type' => 'select',
								'options' => $travel_expense,
								'empty' => 'Select Expense Type',
								'class' => 'form-control',
								'required' => true
							]);
							?>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<?php echo $this->Form->input('description');
							?>
						</div>
						<div class="col-md-6">
							<?php echo $this->Form->input('payment_method', [
								'label' => 'Payment Method',
								'type' => 'select',
								'options' => $payment_method,
								'empty' => 'Select Payment Type',
								'class' => 'form-control',
								'required' => true
							]);
							?>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<?php echo $this->Form->input('description');
							?>
						</div>
						<div class="col-md-6">
							<?php echo $this->Form->input('currency', [
								'label' => 'Currency',
								'type' => 'select',
								'options' => $currency,
								'empty' => 'Select Currency Type',
								'class' => 'form-control',
								'required' => true
							]);
							?>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<?php
							echo $this->Form->input('amount_spent');
							?>
						</div>
						<div class="col-md-6">
							<?php echo $this->Form->input('budget_amount');
							?>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<?php
							echo $this->Form->input('reimbursable');
							?>
						</div>
						<div class="col-md-6">
							<?php echo $this->Form->input('status');
							?>
						</div>
					</div>
					<?php echo $this->Form->end('Submit'); ?>
				</div>
			</div>
		</div>

	</div>
</div>

<?php echo $this->Html->css(array('dropify.min')); ?>
<?php echo $this->Html->script(array('dropify.min')); ?>
<script type="text/javascript">
	$(document).ready(function () {
		$('.dropify').dropify();
	});
</script>












<!-- <div class="travelexpenses form">
<?php echo $this->Form->create('Travelexpense'); ?>
	<fieldset>
		<legend><?php echo __('Add Travelexpense'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Travelexpenses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Travellers'), array('controller' => 'travellers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Traveller'), array('controller' => 'travellers', 'action' => 'add')); ?> </li>
	</ul>
</div> -->