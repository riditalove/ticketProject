<div class="container-fluid">
	<div class="row page-titles">
		<div class="col-md-6 col-8 align-self-center">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?>
				</li>
				<li class="breadcrumb-item active">Edit Traveller's Information</li>
			</ol>
		</div>
		<div class="col-md-6 col-4 align-self-center">
			<?php echo $this->Html->link("<i class='fa fa-list-ul'></i> User List", array('action' => 'index'), array('class' => 'btn pull-right btn-success', 'escape' => false)); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">



					<h4 class="card-title">Edit Traveller's Information</h4>


					<?php echo $this->Form->create('Traveller', array('type' => 'file')); ?>



					<div class="row">

						<div class="col-md-6">
							<?php 
							echo $this->Form->input('id');
							echo $this->Form->input('name');
							?>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<?php echo $this->Form->input('designation');

							?>
						</div>
						<div class="col-md-6">
							<?php echo $this->Form->input('date_of_birth', [
								'label' => 'Birth Date',
								'type' => 'text',
								'required' => true,
								'class' => 'form-control datepicker'
							]);

							?>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<?php echo $this->Form->input('nationality');

							?>
						</div>
						<div class="col-md-6">
							<?php echo $this->Form->input('passport_no');

							?>
						</div>
					</div>

					<div class="row">

						<div class="col-md-6">
							<?php echo $this->Form->input('passport_expiry', [
								'label' => 'Passport Expiry Date',
								'type' => 'text',
								'required' => true,
								'class' => 'form-control datepicker'
							]);
							?>
						</div>
						<div class="col-md-6">
							<?php
							echo $this->Form->input('status');
							?>
						</div>
					</div>
					<br><br>

					<?php echo $this->Form->end('Submit'); ?>
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




<!-- <div class="travellers form">
<?php echo $this->Form->create('Traveller'); ?>
	<fieldset>
		<legend><?php echo __('Edit Traveller'); ?></legend>
	<?php
	echo $this->Form->input('id');
	echo $this->Form->input('name');
	echo $this->Form->input('designation_id');
	echo $this->Form->input('date_of_birth');
	echo $this->Form->input('nationality');
	echo $this->Form->input('passport_no');
	echo $this->Form->input('passport_expiry');
	echo $this->Form->input('entry_by');
	echo $this->Form->input('edit_by');
	echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Traveller.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Traveller.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Travellers'), array('action' => 'index')); ?></li>
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