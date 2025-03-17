
<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <?php echo $this->Html->link('Home', ['controller' => 'users', 'action' => 'dashboard'], ['escape' => false]); ?>
                </li>
                <li class="breadcrumb-item active">Add Expense and Budget</li>
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
                    <h4 class="card-title">Expenses and Budget</h4>
                    <?php echo $this->Form->create('Travelexpense', ['type' => 'file']); ?>

                    <div class="row">
                        <div class="col-md-6">
                            <?php echo $this->Form->input('submit_date', [
                                'label' => 'Submit Date',
                                'type' => 'text',
                                'required' => true,
                                'class' => 'form-control datepicker'
                            ]); ?>
                        </div>
                        <div class="col-md-6">
                            <?php echo $this->Form->input('expense_type', ['label' => 'Expense Type']); ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <?php echo $this->Form->input('description', [
                                'label' => 'Description',
                                'type' => 'textarea',
                                'rows' => 4,
                                'class' => 'form-control',
                                'placeholder' => 'Enter detailed description here...'
                            ]); ?>
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
                            <?php echo $this->Form->input('payment_method', [
                                'label' => 'Payment Method',
                                'type' => 'select',
                                'options' => [
                                    1 => 'Cash',
                                    2 => 'Debit Card',
                                    3 => 'Cheque',
                                    4 => 'Online',
                                    5 => 'Credit Card',
                                    6 => 'Bank Transfer',
                                    7 => 'PayPal',
                                    8 => 'Mobile Wallet',
                                    9 => 'Other'
                                ],
                                'required' => true
                            ]); ?>
                        </div>
                        <div class="col-md-6">
                            <?php echo $this->Form->input('amount_spent', [
                                'label' => 'Amount Spent',
                                'required' => true
                            ]); ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <?php echo $this->Form->input('currency', ['label' => 'Currency', 'required' => true]); ?>
                        </div>
                        <div class="col-md-6">
                            <?php echo $this->Form->input('budget_amount', ['label' => 'Budget Amount', 'required' => true]); ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <?php echo $this->Form->input('reimbursable', ['label' => 'Reimbursable', 'required' => true]); ?>
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
                            <?php echo $this->Form->input('status', ['label' => 'Status', 'required' => true]); ?>
                        </div>
                        <div class="col-md-6">
                            <?php echo $this->Form->input('modified', [
                                'label' => 'Modified',
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