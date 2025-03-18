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
                    url: '<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'ajax_checkuser')); ?>',
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
                    <?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?>
                </li>
                <li class="breadcrumb-item active">Add Employee</li>
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
                    <h4 class="card-title">Add Employee</h4>
                    <?php echo $this->Form->create('User', array('type' => 'file')); ?>

                    <div class="row">
                        <div class="col-md-6">
                            <?php echo $this->Form->input('name'); ?>
                        </div>
                        <div class="col-md-6">
                            <?php echo $this->Form->input('phone', array('label' => 'Primary Contact Number')); ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <?php echo $this->Form->input('gender', array('empty' => 'Please select', 'required' => true)); ?>
                        </div>
                        <div class="col-md-6">
                            <?php echo $this->Form->input('machine_card_no'); ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <?php echo $this->Form->input('role_id', array('empty' => 'Please select', 'required' => true)); ?>
                        </div>
                        <div class="col-md-6">
                            <?php echo $this->Form->input('username'); ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <?php echo $this->Form->input('password'); ?>
                        </div>
                        <div class="col-md-6">
                            <?php echo $this->Form->input('password_re', array('type' => 'password', 'label' => 'Confirm Password', 'required' => true)); ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <?php echo $this->Form->input('company_id', array('empty' => 'Please select', 'required' => true)); ?>
                        </div>
                        <div class="col-md-6">
                           
                    
                            <div class="form-group">
                                <?php echo $this->Form->input('image', array('label' => 'Recent Photo', 'type' => 'file', 'class' => 'dropify')); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <?php echo $this->Form->button('Submit', array('class' => 'btn btn-success')); ?>
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