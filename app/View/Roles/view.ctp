
<div class="container-fluid role view">
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?></li>
                <li class="breadcrumb-item active">Role Details</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <?php echo $this->Html->link("<i class='fa fa-list-ul'></i> Role List", array('action' => 'index'), array('class' => 'btn pull-right btn-success', 'escape' => false)); ?>

        </div>
    </div>


    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="box">
                    <div class="box-header">
                        <?php echo __('Role'); ?>                </div>
                    <div class="box-body">
                        <div class='row'>
                            <div class='col-md-3'><?php echo __('Title'); ?></div>
                            <div class='col-md-9'>
                                <span class="badge" style="background:<?php echo $role['Role']['color_code']; ?>"><?php echo h($role['Role']['title']); ?></span>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Description'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($role['Role']['description']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Access Controll List'); ?></div>
                            <div class='col-md-9'>&nbsp;<br/><br/></div>
                        </div>	<div class='row'>
                            <?php
                            $roles = json_decode($role['Role']['roles'], true);
                            foreach ($roles as $key => $value) {
                                echo '<div class="col-sm-6 col-md-4 col-xl-2">
                                            <div class="card w-100">
                                              <div class="card-header bg-' . $rounds[rand(0, 10)] . '">
                                                <h4 class="mb-0 text-white">' . str_replace("Controller", "", $key) . '</h4>
                                              </div>
                                              <div class="card-body">';
                                foreach ($value as $k => $v) {
                                    if ($v != "0") {
                                        if ($v == 'index') {
                                            $bg = $rounds[0];
                                        } elseif ($v == 'add') {
                                            $bg = $rounds[1];
                                        } elseif ($v == 'edit') {
                                            $bg = $rounds[3];
                                        } elseif ($v == 'delete') {
                                            $bg = $rounds[2];
                                        } elseif (strstr($v, 'ajax')) {
                                            $bg = $rounds[4];
                                        } else {
                                            $bg = $rounds[5];
                                        }
                                        echo '<span class="mb-1 me-1 badge bg-' . $bg . '">' . Inflector::humanize($v) . '</span>';
                                    }
                                }
                                echo '</div>
                                            </div>
                                          </div>';
                            }
                            ?>
                            
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Status'); ?></div>
                            <div class='col-md-9'>
                                <?php echo $status[$role['Role']['status']]; ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Created'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($role['Role']['created']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Modified'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($role['Role']['modified']); ?>
                                &nbsp;
                            </div>
                        </div>              </div>
                </div>
            </div>
        </div>
    </section>
</div>