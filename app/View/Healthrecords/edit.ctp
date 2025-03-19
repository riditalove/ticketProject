<div class="container-fluid">
	<!-- Breadcrumb Navigation -->
	<div class="row page-titles">
		<div class="col-md-6 col-8 align-self-center">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<?php echo $this->Html->link('Home', ['controller' => 'users', 'action' => 'dashboard'], ['escape' => false]); ?>
				</li>
				<li class="breadcrumb-item active">Edit the Health Records</li>
			</ol>
		</div>
		<div class="col-md-6 col-4 text-right">
			<?php echo $this->Html->link(
				"<i class='fa fa-list-ul'></i> User List",
				['action' => 'index'],
				['class' => 'btn btn-success', 'escape' => false]
			);
			?>
		</div>
	</div>

	<!-- Card Section -->
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Edit the Health Records</h4>

					<?php echo $this->Form->create('Healthrecord', ['type' => 'file']); ?>

					<div class="row">
						<div class="col-md-6">

							<?php
							 echo $this->Form->input('id');
							 echo $this->Form->input('traveller_id');
							?>
						</div>
						<div class="col-md-6">
							<?php echo $this->Form->input('checkup_type', [
								'label' => 'Checkup Type',
								'type' => 'select',
								'options' => $checkup_type,
								'empty' => 'Select Expense Type',
								'class' => 'form-control',
								'required' => true
							]);
							?>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<?php echo $this->Form->input('checkup_date', [
								'label' => 'Checkup Date',
								'type' => 'text',
								'required' => true,
								'class' => 'form-control datepicker'
							]); ?>
						</div>
						<div class="col-md-6">
							<?php echo $this->Form->input('hospital_name');

							?>
						</div>
					</div>

					<?php echo $this->Form->input('status'); ?>
					<br>
					<?php echo $this->Form->end('Submit'); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Dropify Plugin -->
<?php echo $this->Html->css(['dropify.min']); ?>
<?php echo $this->Html->script(['dropify.min']); ?>
<script type="text/javascript">
	$(document).ready(function () {
		$('.dropify').dropify();
	});
</script>











<!-- <div class="healthrecords form">
<?php echo $this->Form->create('Healthrecord'); ?>
	<fieldset>
		<legend><?php echo __('Edit Healthrecord'); ?></legend>
	<?php
	echo $this->Form->input('id');
	echo $this->Form->input('traveller_id');
	echo $this->Form->input('country_id');
	echo $this->Form->input('hospital_name');
	echo $this->Form->input('checkup_date');
	echo $this->Form->input('status');

	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Healthrecord.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Healthrecord.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Healthrecords'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Travellers'), array('controller' => 'travellers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Traveller'), array('controller' => 'travellers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
	</ul>
</div> -->