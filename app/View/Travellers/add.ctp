<div class="container-fluid">
	<div class="row page-titles">
		<div class="col-md-6 col-8 align-self-center">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?>
				</li>
				<li class="breadcrumb-item active">Traveller Details</li>
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
					<h4 class="card-title">Traveller Details</h4>
					<?php echo $this->Form->create('Traveller', array('type' => 'file')); ?>
					<div class="row">
						<div class="col-md-6">
							<?php echo $this->Form->input('name'); ?>
						</div>
						<div class="col-md-6">
							<?php echo $this->Form->input('designation', [
								'label' => 'Designation',
								'class' => 'form-control'
							]); ?>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<?php echo $this->Form->input('date_of_birth', [
								'label' => 'Birth Date',
								'type' => 'text',
								'required' => true,
								'class' => 'form-control datepicker'
							]); ?>
						</div>
						<div class="col-md-6">
							<?php echo $this->Form->input('nationality', [
								'label' => 'Nationality',
								'type' => 'select',
								'options' => $nationality,
								'empty' => 'Select Nationality',
								'class' => 'form-control',
								'required' => true
							]); ?>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<?php echo $this->Form->input('passport_no'); ?>
						</div>
						<div class="col-md-6">
							<?php echo $this->Form->input('passport_expiry', [
								'label' => 'Passport Expiry Date',
								'type' => 'text',
								'required' => true,
								'class' => 'form-control datepicker'
							]); ?>
						</div>
					</div>



					<div class="row">
						<div class="col-md-6">
							<label for="pfile">
								Passport Copy
								<i class="fa fa-info-circle" data-toggle="modal" data-target="#passportInstructions"
									style="cursor:pointer;"></i>
							</label>
							<?php echo $this->Form->input('pfile', array(
								'type' => 'file',
								'class' => 'dropify',
								'label' => false // Hide default CakePHP label
							)); ?>
						</div>
						<!-- Modal for instructions -->
						<div class="modal fade" id="passportInstructions" tabindex="-1" role="dialog"
							aria-labelledby="passportInstructionsLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="passportInstructionsLabel">Passport Copy Upload
											Instructions</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<p>Please upload a clear scanned copy of your passport. Make sure:</p>
										<ul>
											<li>The file is in PDF format.</li>
											<li>The file size does not exceed 2MB.</li>
											<li>All details are clearly visible.</li>
											<li>Enter the first 2 pages of your Passport.</li>
										</ul>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary"
											data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<label for="ifile">
								Identification Document
								<i class="fa fa-info-circle" data-toggle="modal"
									data-target="#identificationInstructions" style="cursor:pointer;"></i>
							</label>
							<?php echo $this->Form->input('ifile', array(
								'type' => 'file',
								'class' => 'dropify',
								'label' => false // Hide CakePHP's default label
							)); ?>
						</div>

						<!-- Modal for instructions -->
						<div class="modal fade" id="identificationInstructions" tabindex="-1" role="dialog"
							aria-labelledby="identificationInstructionsLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="identificationInstructionsLabel">Identification
											Document Upload Instructions</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<p>Please provide one of the following identification documents:</p>
										<ul>

											<li>Birth Certificate</li>
											<li>National ID (NID)</li>
											<li>Driving License</li>
										</ul>
										<ul>
											<li>The file should be in pdf format</li>
											<li>It should not exceed 2MB</li>
										</ul>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary"
											data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>


					</div>

					<div class="row">
						<div class="col-md-6">
							<label for="efile">
								Employment ID
								<i class="fa fa-info-circle" data-toggle="modal" data-target="#employmentInstructions"
									style="cursor:pointer;"></i>
							</label>
							<?php echo $this->Form->input('efile', array(
								'type' => 'file',
								'class' => 'dropify',
								'label' => false // Hide CakePHP's default label
							)); ?>
						</div>
					</div>

					<!-- Modal for instructions -->
					<div class="modal fade" id="employmentInstructions" tabindex="-1" role="dialog"
						aria-labelledby="employmentInstructionsLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="employmentInstructionsLabel">Employment ID Upload
										Instructions</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<p>Please provide a scanned copy of your Employee ID card.</p>
									<ul>
										<li>Ensure both the front and back sides are included.</li>
										<li>The image should be clear and readable.</li>
										<li>Accepted formats: PDF.</li>
									</ul>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								</div>
							</div>
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

<!-- Include Bootstrap JS and jQuery (if not already included) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>

<?php echo $this->Html->css(array('dropify.min')); ?>
<?php echo $this->Html->script(array('dropify.min')); ?>
<script type="text/javascript">
	$(document).ready(function () {
		$('.dropify').dropify();
	});
</script>








<!-- <div class="travellers form">
<?php echo $this->Form->create('Traveller'); ?>
	<fieldset>
		<legend><?php echo __('Add Traveller'); ?></legend>
	<?php
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