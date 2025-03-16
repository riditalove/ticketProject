<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?></li>
                <li class="breadcrumb-item active">Edit Role</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <?php echo $this->Html->link("<i class='fa fa-list-ul'></i> Role List", array('action' => 'index'), array('class' => 'btn pull-right btn-success', 'escape' => false)); ?>

        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-body">
                <h3 class="box-title font-weight-medium text-uppercase m-b-0">Edit Role</h3>
                <p class="text-muted m-b-30 font-13"> </p>
                <div class="box-body">

                    <?php echo $this->Form->create('Role'); ?>
                    <div class="row">
                        <div class="col-lg-6">
                            <?php echo $this->Form->input('title'); ?>
                        </div>
                        <div class="col-lg-6">
                            <?php echo $this->Form->input('description'); ?>
                        </div>
                    </div>
                    <br />
                    <div class="row">

                        <div class="col-lg-12">

                            <div id='areapermission'>
                                <?php
                                //echo $this->Form->input('id');
                                $selvals = json_decode($this->request->data['Role']['roles'], true);
                                //pr($selvals);

                                foreach ($acls as $k => $acl) {
                                    echo '<h3>' . $k . '</h3><div class="row">';
                                    foreach ($acl as $ke => $ac) {
                                        echo '<div class="col-md-4">';
                                        echo '<h5>' . $ke . '</h5>';

                                        if (isset($ac['controller'])) {
                                            foreach ($ac['action'] as $key => $a) {

                                                if ($selvals[$ac['controller']][$key] == $key) {
                                                    echo $this->Form->input("Role.roles." . $ac['controller'] . ".$key", array('type' => 'checkbox', 'checked' => true, 'label' => $a, 'value' => $key));
                                                } else {
                                                    echo $this->Form->input("Role.roles." . $ac['controller'] . ".$key", array('type' => 'checkbox', 'label' => $a, 'value' => $key));
                                                }
                                            }
                                        }


                                        echo '</div>';
                                    }

                                    echo '</div>';
                                }
                                ?>
                            </div>

                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <?php
                        echo $this->Form->input('id');

                        ?>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6">
                            <?php echo $this->Form->input('status'); ?>
                        </div>
                        <div class="col-lg-6">
                            <?php echo $this->Form->input('color_code', array('type' => 'text', 'class' => 'gradient-colorpicker', 'required' => true)); ?>
                        </div>
                    </div>
                    <?php echo $this->Form->end(__('Submit')); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $this->Html->css(array('jquery-ui')); ?>
<?php echo $this->Html->script(array('jquery-ui.min')); ?>
<script type="text/javascript">
    $(document).ready(function() {
        $('#areapermission').accordion({
            heightStyle: 'content',
            autoHeight: false,
            active: false,
            collapsible: true
        });
    });
</script>

<?php echo $this->Html->css(array('asColorPicker')); ?>
<?php echo $this->Html->script(array('jquery-asColor', 'jquery-asGradient', 'asColorPicker')); ?>
<script type="text/javascript">
    $(document).ready(function() {
        $(".gradient-colorpicker").asColorPicker({
            mode: 'gradient'
        });

        $ctrl = $('#RoleTitle');
        $ctrl.blur(function() {
            var val = $ctrl.val();
            if (val) {
                $(".preloader").fadeIn();
                $.ajax({
                    dataType: "html",
                    type: "POST",
                    evalScripts: true,
                    url: '<?php echo $this->Html->url(array('controller' => 'roles', 'action' => 'ajax_checkrole')); ?>',
                    data: ({
                        ttl: val,
                        uid: $('#RoleId').val()
                    }),
                    success: function(data) {
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