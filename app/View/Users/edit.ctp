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
                    data: ({username: val, uid: $('#UserId').val()}),
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
                <li class="breadcrumb-item"><?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?></li>
                <li class="breadcrumb-item active">Basic Information</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <?php echo $this->Html->link("<i class='fa fa-list-ul'></i> User List", array('action' => 'index'), array('class' => 'btn pull-right btn-success', 'escape' => false)); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="contact-page-aside">

                    <div class="left-part bg-white pb-5">
                        <?php //echo $this->element('user_menu'); ?>
                    </div>

                    <div class="right-part overflow-auto">
                        <div class="right-page-header">
                            <h4 class="card-title">Basic Information</h4>
                        </div>

                        <?php echo $this->Form->create('User', array('type' => 'file')); ?>
                        <?php echo $this->Form->input('id'); ?>

                        <div class="row">
                            <div class="col-md-6">
                                <?php echo $this->Form->input('name'); ?>
                            </div>
                            <div class="col-md-6">
                                <?php echo $this->Form->input('phone', array('label' => 'Primary Contact Number', 'required' => true)); ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <?php echo $this->Form->input('email', array('required' => false)); ?>
                            </div>
                            <div class="col-md-6">
                                <?php echo $this->Form->input('gender', array('empty' => 'Please select', 'required' => true)); ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <?php echo $this->Form->input('pabx', array('label' => 'PABX', 'required' => false)); ?>
                            </div>
                            <div class="col-md-6">
                                <?php echo $this->Form->input('skype', array('required' => false)); ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <?php echo $this->Form->input('viber', array('required' => false)); ?>
                            </div>
                            <div class="col-md-6">
                                <?php echo $this->Form->input('whatsapp', array('required' => false)); ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <?php echo $this->Form->input('mobile', array('label' => 'Secondary Contact Number', 'required' => false)); ?>
                            </div>
                            <div class="col-md-6">
                                <?php //echo $this->Form->input('corporate_id_no', array('required' => false)); ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <?php echo $this->Form->input('role_id', array('empty' => 'Please select', 'required' => true)); ?>
                            </div>
                            <div class="col-md-6">
                                <?php echo $this->Form->input('username', array('required' => true)); ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <?php echo $this->Form->input('password', array('required' => true)); ?>
                            </div>
                            <div class="col-md-6">
                                <?php echo $this->Form->input('password_re', array('type' => 'password', 'value' => $this->request->data['User']['password'], 'label' => 'Confirm Password', 'required' => true)); ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <?php
                                if (!empty($img)) {
                                    echo $this->Form->input('image', array('label' => 'Recent Photo', 'type' => 'file', 'data-default-file' => $this->webroot . 'img/' . $img, 'id' => 'dropify'));
                                } else {
                                    echo $this->Form->input('image', array('label' => 'Recent Photo', 'type' => 'file', 'id' => 'dropify'));
                                }
                                ?>
                            </div>
                            <div class="col-md-6">
                                <?php
                                if (!empty($img2)) {
                                    echo $this->Form->input('image_p', array('label' => 'ID Card Photo (Tranparent, ratio::H:W=>230:180)', 'type' => 'file', 'data-default-file' => $this->webroot . 'img/' . $img2, 'id' => 'dropify2'));
                                } else {
                                    echo $this->Form->input('image_p', array('label' => 'ID Card Photo (Tranparent, ratio::H:W=>230:180)', 'type' => 'file', 'id' => 'dropify2'));
                                }
                                ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <br>
                                <?php echo $this->Form->button('Submit', array('class' => 'btn btn-success')); ?>
                            </div>
                            <div class="col-md-6">
                                <br>
                                <?php echo $this->Form->input('status', array('type' => 'checkbox', 'class' => 'onoffswitch-checkbox')); ?>
                            </div>
                        </div>

                        <?php echo $this->Form->end(); ?>
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
