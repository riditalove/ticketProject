<div class="container-fluid">
	<div class="row page-titles">
		<div class="col-md-6 col-8 align-self-center">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?>
				</li>
				<li class="breadcrumb-item active">Visa Histories</li>
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
					<h4 class="card-title">Visa Histories</h4>
					<?php echo $this->Form->create('Visahistory', array('type' => 'file')); ?>
					<div class="row">
						<div class="col-md-6">
							<?php echo $this->Form->input('traveller_id');
							?>
						</div>
						<div class="col-md-6">
							<?php echo $this->Form->input('country_id');
							?>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">

							<?php echo $this->Form->input('issue_date', [
								'label' => 'Issue Date',
								'type' => 'text',
								'required' => true,
								'class' => 'form-control datepicker'
							]); ?>
						</div>
						<div class="col-md-6">
							<?php echo $this->Form->input('expiry_date', [
								'label' => 'Expiry Date',
								'type' => 'text',
								'required' => true,
								'class' => 'form-control datepicker'
							]); ?>
						</div>
					</div>


					<?php
					echo $this->Form->input('status');
					echo $this->Form->end('Submit');
					?>

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







<!-- <div class="visahistories form">
<?php echo $this->Form->create('Visahistory'); ?>
	<fieldset>
		<legend><?php echo __('Add Visahistory'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Visahistories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Travellers'), array('controller' => 'travellers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Traveller'), array('controller' => 'travellers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
	</ul>
</div> -->