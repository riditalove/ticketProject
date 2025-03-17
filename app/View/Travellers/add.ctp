<script type="text/javascript">
	$(document).ready(function () {
		$ctrl = $('#UserUsername');
		$ctrl.blur(function () {
			var val = $ctrl.val();
			if (val) {
				$(".preloader").fadeIn();
				$.ajax({
					dataType: "html",
					type: "POST",
					evalScripts: true,
					url: '<?php echo $this->Html->url(array('controller' => 'travellers', 'action' => 'ajax_checkuser')); ?>',
					data: ({ username: val }),
					success: function (data) {
						if (data) {
							_toast('e', data);
							$ctrl.val('');
						}
						$(".preloader").fadeOut();
					}
				});
			}
		});
	});
</script>

<div class="container-fluid">
	<div class="row page-titles">
		<div class="col-md-6 col-8 align-self-center">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<?php echo $this->Html->link('Home', ['controller' => 'users', 'action' => 'dashboard'], ['escape' => false]); ?>
				</li>
				<li class="breadcrumb-item active">Traveller's Details</li>
			</ol>
		</div>
		<div class="col-md-6 col-4 align-self-center">
			<?php echo $this->Html->link("<i class='fa fa-list-ul'></i> Employee List", ['action' => 'index'], ['class' => 'btn pull-right btn-success', 'escape' => false]); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body wizard-content">
					<h4 class="card-title">Traveller Details</h4>
					<?php echo $this->Form->create('Traveller', ['type' => 'file']); ?>

					<div class="row">
						<div class="col-md-6">
							<?php echo $this->Form->input('name', ['label' => 'Name']); ?>
						</div>

						<div class="col-md-6">
							<?php echo $this->Form->input('designation_id', ['label' => 'Designation']); ?>
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
							<?php echo $this->Form->input('nationality', ['label' => 'Nationality']); ?>
						</div>

					</div>

					<div class="row">
						<div class="col-md-6">
							<?php echo $this->Form->input('passport_no', ['label' => 'Passport Number']); ?>
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
							<?php echo $this->Form->input('entry_by', ['label' => 'Entry By', 'required' => true]); ?>
						</div>
						<div class="col-md-6">
							<?php echo $this->Form->input('edit_by', ['label' => 'Edit By', 'required' => true]); ?>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<?php echo $this->Form->input('status', ['label' => 'Status', 'required' => true]); ?>
						</div>
						<div class="col-md-6">
							<?php echo $this->Form->input('created', [
								'label' => 'Created',
								'type' => 'text',
								'required' => true,
								'class' => 'form-control datepicker'
							]); ?>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<?php echo $this->Form->input('modified', [
								'label' => 'Modified',
								'type' => 'text',
								'required' => true,
								'class' => 'form-control datepicker'
							]); ?>
						</div>
						<div class="col-md-6">
							<?php echo $this->Form->input('receipt', [
								'label' => 'Receipt',
								'type' => 'file',
								'class' => 'dropify'
							]); ?>
						</div>

					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<?php echo $this->Form->button('Submit', ['class' => 'btn btn-success']); ?>
							</div>
						</div>
					</div>

					<?php echo $this->Form->end(); ?>
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