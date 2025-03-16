<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?></li>
                <li class="breadcrumb-item active">Edit Certification Config</li>
            </ol>
        </div>
        
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-body">
                <h3 class="box-title font-weight-medium text-uppercase m-b-0">Edit Certification Config</h3>
                <p class="text-muted m-b-30 font-13"> </p>
                <?php echo $this->Form->create('Config', array('class' => 'form-horizontal', 'type' => 'file')); ?>
                
                <div class="form-group row">
                    <label class="col-sm-5 text-right control-label col-form-label"><?php echo $companies[1] ?> NOTIFY PERSON 1</label>
                    <div class="col-sm-7">
                        <?php echo $this->Form->input('COMPANY_1_NOTIFY_1', array('required' => false, 'empty' => 'Please Select', 'value' => COMPANY_1_NOTIFY_1, 'label' => FALSE, 'options' => $users)); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 text-right control-label col-form-label"><?php echo $companies[1] ?> NOTIFY PERSON 2</label>
                    <div class="col-sm-7">
                        <?php echo $this->Form->input('COMPANY_1_NOTIFY_2', array('required' => false, 'empty' => 'Please Select', 'value' => COMPANY_1_NOTIFY_2, 'label' => FALSE, 'options' => $users)); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 text-right control-label col-form-label"><?php echo $companies[1] ?> NOTIFY PERSON 3</label>
                    <div class="col-sm-7">
                        <?php echo $this->Form->input('COMPANY_1_NOTIFY_3', array('required' => false, 'empty' => 'Please Select', 'value' => COMPANY_1_NOTIFY_3, 'label' => FALSE, 'options' => $users)); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 text-right control-label col-form-label"><?php echo $companies[1] ?> NOTIFY PERSON 4</label>
                    <div class="col-sm-7">
                        <?php echo $this->Form->input('COMPANY_1_NOTIFY_4', array('required' => false, 'empty' => 'Please Select', 'value' => COMPANY_1_NOTIFY_4, 'label' => FALSE, 'options' => $users)); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 text-right control-label col-form-label"><?php echo $companies[1] ?> SPECIAL NOTIFY PERSON</label>
                    <div class="col-sm-7">
                        <?php echo $this->Form->input('COMPANY_1_NOTIFY_5', array('required' => false, 'empty' => 'Please Select', 'value' => COMPANY_1_NOTIFY_5, 'label' => FALSE, 'options' => $users)); ?>
                    </div>
                </div>
                <hr />
                <div class="form-group row">
                    <label class="col-sm-5 text-right control-label col-form-label"><?php echo $companies[2] ?> NOTIFY PERSON 1</label>
                    <div class="col-sm-7">
                        <?php echo $this->Form->input('COMPANY_2_NOTIFY_1', array('required' => false, 'empty' => 'Please Select', 'value' => COMPANY_2_NOTIFY_1, 'label' => FALSE, 'options' => $users)); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 text-right control-label col-form-label"><?php echo $companies[2] ?> NOTIFY PERSON 2</label>
                    <div class="col-sm-7">
                        <?php echo $this->Form->input('COMPANY_2_NOTIFY_2', array('required' => false, 'empty' => 'Please Select', 'value' => COMPANY_2_NOTIFY_2, 'label' => FALSE, 'options' => $users)); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 text-right control-label col-form-label"><?php echo $companies[2] ?> NOTIFY PERSON 3</label>
                    <div class="col-sm-7">
                        <?php echo $this->Form->input('COMPANY_2_NOTIFY_3', array('required' => false, 'empty' => 'Please Select', 'value' => COMPANY_2_NOTIFY_3, 'label' => FALSE, 'options' => $users)); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 text-right control-label col-form-label"><?php echo $companies[2] ?> NOTIFY PERSON 4</label>
                    <div class="col-sm-7">
                        <?php echo $this->Form->input('COMPANY_2_NOTIFY_4', array('required' => false, 'empty' => 'Please Select', 'value' => COMPANY_2_NOTIFY_4, 'label' => FALSE, 'options' => $users)); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 text-right control-label col-form-label"><?php echo $companies[2] ?> SPECIAL NOTIFY PERSON</label>
                    <div class="col-sm-7">
                        <?php echo $this->Form->input('COMPANY_2_NOTIFY_5', array('required' => false, 'empty' => 'Please Select', 'value' => COMPANY_2_NOTIFY_5, 'label' => FALSE, 'options' => $users)); ?>
                    </div>
                </div>
                <hr />
                <div class="form-group row">
                    <label class="col-sm-5 text-right control-label col-form-label"><?php echo $companies[3] ?> NOTIFY PERSON 1</label>
                    <div class="col-sm-7">
                        <?php echo $this->Form->input('COMPANY_3_NOTIFY_1', array('required' => false, 'empty' => 'Please Select', 'value' => COMPANY_3_NOTIFY_1, 'label' => FALSE, 'options' => $users)); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 text-right control-label col-form-label"><?php echo $companies[3] ?> NOTIFY PERSON 2</label>
                    <div class="col-sm-7">
                        <?php echo $this->Form->input('COMPANY_3_NOTIFY_2', array('required' => false, 'empty' => 'Please Select', 'value' => COMPANY_3_NOTIFY_2, 'label' => FALSE, 'options' => $users)); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 text-right control-label col-form-label"><?php echo $companies[3] ?> NOTIFY PERSON 3</label>
                    <div class="col-sm-7">
                        <?php echo $this->Form->input('COMPANY_3_NOTIFY_3', array('required' => false, 'empty' => 'Please Select', 'value' => COMPANY_3_NOTIFY_3, 'label' => FALSE, 'options' => $users)); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 text-right control-label col-form-label"><?php echo $companies[3] ?> NOTIFY PERSON 4</label>
                    <div class="col-sm-7">
                        <?php echo $this->Form->input('COMPANY_3_NOTIFY_4', array('required' => false, 'empty' => 'Please Select', 'value' => COMPANY_3_NOTIFY_4, 'label' => FALSE, 'options' => $users)); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 text-right control-label col-form-label"><?php echo $companies[3] ?> SPECIAL NOTIFY PERSON</label>
                    <div class="col-sm-7">
                        <?php echo $this->Form->input('COMPANY_3_NOTIFY_5', array('required' => false, 'empty' => 'Please Select', 'value' => COMPANY_3_NOTIFY_5, 'label' => FALSE, 'options' => $users)); ?>
                    </div>
                </div>
                <hr />
                <div class="form-group row">
                    <label class="col-sm-5 text-right control-label col-form-label"><?php echo $companies[4] ?> NOTIFY PERSON 1</label>
                    <div class="col-sm-7">
                        <?php echo $this->Form->input('COMPANY_4_NOTIFY_1', array('required' => false, 'empty' => 'Please Select', 'value' => COMPANY_4_NOTIFY_1, 'label' => FALSE, 'options' => $users)); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 text-right control-label col-form-label"><?php echo $companies[4] ?> NOTIFY PERSON 2</label>
                    <div class="col-sm-7">
                        <?php echo $this->Form->input('COMPANY_4_NOTIFY_2', array('required' => false, 'empty' => 'Please Select', 'value' => COMPANY_4_NOTIFY_2, 'label' => FALSE, 'options' => $users)); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 text-right control-label col-form-label"><?php echo $companies[4] ?> NOTIFY PERSON 3</label>
                    <div class="col-sm-7">
                        <?php echo $this->Form->input('COMPANY_4_NOTIFY_3', array('required' => false, 'empty' => 'Please Select', 'value' => COMPANY_4_NOTIFY_3, 'label' => FALSE, 'options' => $users)); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 text-right control-label col-form-label"><?php echo $companies[4] ?> NOTIFY PERSON 4</label>
                    <div class="col-sm-7">
                        <?php echo $this->Form->input('COMPANY_4_NOTIFY_4', array('required' => false, 'empty' => 'Please Select', 'value' => COMPANY_4_NOTIFY_4, 'label' => FALSE, 'options' => $users)); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 text-right control-label col-form-label"><?php echo $companies[4] ?> SPECIAL NOTIFY PERSON</label>
                    <div class="col-sm-7">
                        <?php echo $this->Form->input('COMPANY_4_NOTIFY_5', array('required' => false, 'empty' => 'Please Select', 'value' => COMPANY_4_NOTIFY_5, 'label' => FALSE, 'options' => $users)); ?>
                    </div>
                </div>
                <hr />
                <div class="form-group row">
                    <label class="col-sm-5 text-right control-label col-form-label"><?php echo $companies[5] ?> NOTIFY PERSON 1</label>
                    <div class="col-sm-7">
                        <?php echo $this->Form->input('COMPANY_5_NOTIFY_1', array('required' => false, 'empty' => 'Please Select', 'value' => COMPANY_5_NOTIFY_1, 'label' => FALSE, 'options' => $users)); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 text-right control-label col-form-label"><?php echo $companies[5] ?> NOTIFY PERSON 2</label>
                    <div class="col-sm-7">
                        <?php echo $this->Form->input('COMPANY_5_NOTIFY_2', array('required' => false, 'empty' => 'Please Select', 'value' => COMPANY_5_NOTIFY_2, 'label' => FALSE, 'options' => $users)); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 text-right control-label col-form-label"><?php echo $companies[5] ?> NOTIFY PERSON 3</label>
                    <div class="col-sm-7">
                        <?php echo $this->Form->input('COMPANY_5_NOTIFY_3', array('required' => false, 'empty' => 'Please Select', 'value' => COMPANY_5_NOTIFY_3, 'label' => FALSE, 'options' => $users)); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 text-right control-label col-form-label"><?php echo $companies[5] ?> NOTIFY PERSON 4</label>
                    <div class="col-sm-7">
                        <?php echo $this->Form->input('COMPANY_5_NOTIFY_4', array('required' => false, 'empty' => 'Please Select', 'value' => COMPANY_5_NOTIFY_4, 'label' => FALSE, 'options' => $users)); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 text-right control-label col-form-label"><?php echo $companies[5] ?> SPECIAL NOTIFY PERSON</label>
                    <div class="col-sm-7">
                        <?php echo $this->Form->input('COMPANY_5_NOTIFY_5', array('required' => false, 'empty' => 'Please Select', 'value' => COMPANY_5_NOTIFY_5, 'label' => FALSE, 'options' => $users)); ?>
                    </div>
                </div>
                <hr />
                <div class="form-group row">
                    <label class="col-sm-5 text-right control-label col-form-label"><?php echo $companies[7] ?> NOTIFY PERSON 1</label>
                    <div class="col-sm-7">
                        <?php echo $this->Form->input('COMPANY_7_NOTIFY_1', array('required' => false, 'empty' => 'Please Select', 'value' => COMPANY_7_NOTIFY_1, 'label' => FALSE, 'options' => $users)); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 text-right control-label col-form-label"><?php echo $companies[7] ?> NOTIFY PERSON 2</label>
                    <div class="col-sm-7">
                        <?php echo $this->Form->input('COMPANY_7_NOTIFY_2', array('required' => false, 'empty' => 'Please Select', 'value' => COMPANY_7_NOTIFY_2, 'label' => FALSE, 'options' => $users)); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 text-right control-label col-form-label"><?php echo $companies[7] ?> NOTIFY PERSON 3</label>
                    <div class="col-sm-7">
                        <?php echo $this->Form->input('COMPANY_7_NOTIFY_3', array('required' => false, 'empty' => 'Please Select', 'value' => COMPANY_7_NOTIFY_3, 'label' => FALSE, 'options' => $users)); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 text-right control-label col-form-label"><?php echo $companies[7] ?> NOTIFY PERSON 4</label>
                    <div class="col-sm-7">
                        <?php echo $this->Form->input('COMPANY_7_NOTIFY_4', array('required' => false, 'empty' => 'Please Select', 'value' => COMPANY_7_NOTIFY_4, 'label' => FALSE, 'options' => $users)); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 text-right control-label col-form-label"><?php echo $companies[7] ?> SPECIAL NOTIFY PERSON</label>
                    <div class="col-sm-7">
                        <?php echo $this->Form->input('COMPANY_7_NOTIFY_5', array('required' => false, 'empty' => 'Please Select', 'value' => COMPANY_7_NOTIFY_5, 'label' => FALSE, 'options' => $users)); ?>
                    </div>
                </div>
                <hr />

                <div class="form-group m-b-0">
                    <div class="offset-sm-5 col-sm-7">
                        <?php echo $this->Form->end(__('Submit')); ?>

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
        $('.dropify').dropify();
    });
</script>
<?php echo $this->Html->css(array('asColorPicker')); ?>
<?php echo $this->Html->script(array('jquery-asColor', 'jquery-asGradient', 'asColorPicker')); ?>
<script type="text/javascript">
    $(document).ready(function () {
        $(".gradient-colorpicker").asColorPicker({
            mode: 'gradient'
        });
    });
</script>