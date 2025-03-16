<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?></li>
                <li class="breadcrumb-item active">Add Department</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <?php echo $this->Html->link("<i class='fa fa-list-ul'></i> Department List", array('action' => 'index'), array('class' => 'btn pull-right btn-success', 'escape' => false)); ?>

        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-body">
                <h3 class="box-title font-weight-medium text-uppercase m-b-0">Add Department</h3>
                <p class="text-muted m-b-30 font-13"> </p>
                <?php echo $this->Form->create('Department', array('class' => 'form-horizontal')); ?>

                <?php echo $this->Form->input('company_id', array('empty' => 'Please Select')); ?>
                <?php echo $this->Form->input('name', array('required' => true)); ?>
                <?php echo $this->Form->input('code', array('required' => true)); ?>
                <?php echo $this->Form->input('color_code', array('class' => 'gradient-colorpicker', 'required' => true)); ?>
                <?php echo $this->Form->input('description', array('class' => 'textarea_editor', 'rows' => 5, 'placeholder' => 'Place some text here')); ?>
                <?php echo $this->Form->input('level', array('type' => 'number', 'required' => true)); ?>
                <?php echo $this->Form->input('in_graph', array('type' => 'checkbox')); ?>
                <?php echo $this->Form->input('status'); ?>

                <div class="form-group m-b-0">
                    <div class="offset-sm-3 col-sm-9">
                        <?php echo $this->Form->end(__('Submit')); ?>

                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
<?php echo $this->Html->css(array('asColorPicker', 'bootstrap-wysihtml5-0.0.2.min')); ?>
<?php echo $this->Html->script(array('jquery-asColor', 'jquery-asGradient', 'asColorPicker', 'wysihtml5-0.3.0.min', 'bootstrap-wysihtml5-0.0.2.min')); ?>
<script type="text/javascript">
    $(document).ready(function () {
        $(".gradient-colorpicker").asColorPicker({
            mode: 'gradient'
        });

        $('.textarea_editor').wysihtml5();

        $ctrl = $('#DepartmentName');
        $ctrl.blur(function () {
            var val = $ctrl.val();
            if (val) {
                var cid = $('#DepartmentCompanyId').val();
                if (cid) {
                    $(".preloader").fadeIn();
                    $.ajax({
                        dataType: "html",
                        type: "POST",
                        evalScripts: true,
                        url: '<?php echo $this->Html->url(array('controller' => 'departments', 'action' => 'ajax_checkdepartment')); ?>',
                        data: ({ttl: val, company_id: cid}),
                        success: function (data) {
                            if (data) {
                                _toast('e', data);
                                $ctrl.val('');
                            }
                            $(".preloader").fadeOut();
                        }
                    });
                } else {
                    _toast('e', 'Please select company');
                    $ctrl.val('');
                }
            }
        });
    });
</script>
