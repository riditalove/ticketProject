<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?></li>
                <li class="breadcrumb-item active">Role List</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <?php echo $this->Html->link("<i class='fa fa-plus-circle'></i> Add New", array('action' => 'add'), array('class' => 'btn pull-right btn-success', 'escape' => false)); ?>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="panel panel-info">
                        <div class="panel-body">
                            <?php echo $this->Form->create('Src', array('class' => 'form-horizontal')); ?>
                            <p class="paginginfo pull-left">
                                <?php
                                echo $this->Paginator->counter(array(
                                    'format' => __('Showing {:start} to {:end} of {:count} records')
                                ));
                                ?>                    
                            </p>
                            <ul class="pagination pull-right">
                                <?php
                                echo $this->Paginator->first();
                                echo $this->Paginator->prev();
                                echo $this->Paginator->numbers();
                                echo $this->Paginator->next();
                                echo $this->Paginator->last();
                                ?>
                            </ul> 
                            <div class="clear clearfix"></div>

                            <?php echo $this->Form->end(); ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <!-- column -->

        <!-- column -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Role List</h4>
                    <h6 class="card-subtitle"></h6>
                    <div class="table-responsive">
                        <table class="table table-condensed table-hover contact-list no-wrap stylish-table">
                            <thead>
                                <tr>
                                    <th><?php echo $this->Paginator->sort('id', 'SL#'); ?></th>
                                    <th><?php echo $this->Paginator->sort('title'); ?></th>
                                    <th><?php echo $this->Paginator->sort('description'); ?></th>
                                    <th><?php echo $this->Paginator->sort('status'); ?></th>
                                    <th class="actions"><?php echo __('Actions'); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  
                                $params = $this->Paginator->params();
                                $sln = (($params['page'] - 1) * $params['limit']) + 1;
                                foreach ($roles as $k => $role): ?>
                                    <tr>
                                        <td><?php echo ($sln + $k); ?></td>
                                        <td><span class="badge" style="background:<?php echo $role['Role']['color_code'];?>"><?php echo h($role['Role']['title']); ?></span></td>
                                        <td><?php echo h($role['Role']['description']); ?></td>
                                        <td><?php echo $status[$role['Role']['status']]; ?></td>
                                        <td class="actions">
                                            <?php echo $this->Html->link(__('<i class="fa fa-eye" data-bs-toggle="tooltip" title="View"></i>'), array('action' => 'view', $role['Role']['id']), array('escape' => false)); ?>
                                            <?php echo $this->Html->link(__('<i class="fa fa-pencil-alt text-success" data-bs-toggle="tooltip" title="Edit"></i>'), array('action' => 'edit', $role['Role']['id']), array('escape' => false)); ?>
                                            <?php echo $this->Form->postLink(__('<i class="fa fa-trash text-danger" data-bs-toggle="tooltip" title="Delete"></i>'), array('action' => 'delete', $role['Role']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $role['Role']['id']), 'escape' => false)); ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>


                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- column -->

    </div>

</div>
