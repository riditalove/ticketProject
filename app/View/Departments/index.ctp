<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?></li>
                <li class="breadcrumb-item active">Department List</li>
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
                            <table class="table table-condensed table-hover contact-list no-wrap stylish-table">
                                <tr>
                                    <td><?php echo $this->Form->input('company_id', array('empty' => 'Please Select')); ?></td>
                                    <td><?php echo $this->Form->input('nm', array('label' => 'Name', 'style' => 'width:90%')); ?></td>
                                    <td><?php echo $this->Form->button('Search', array('class' => 'm-t-15 btn btn-info', 'name' => 'btnsrc')); ?></td>
                                </tr>
                            </table>

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
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Department List</h4>

                    <div class="table-responsive">
                        <table class="table table-condensed table-hover contact-list no-wrap stylish-table">
                            <thead>
                                <tr>
                                    <th><?php echo $this->Paginator->sort('id', 'SL#'); ?></th>
                                    <th><?php echo $this->Paginator->sort('company_id'); ?></th>
                                    <th><?php echo $this->Paginator->sort('name'); ?></th>
                                    <th><?php echo $this->Paginator->sort('level'); ?></th>
                                    <th><?php echo $this->Paginator->sort('code'); ?></th>
                                    <th><?php echo $this->Paginator->sort('in_graph'); ?></th>
                                    <th><?php echo $this->Paginator->sort('description'); ?></th>
                                    <th><?php echo $this->Paginator->sort('entry_by'); ?></th>
                                    <th><?php echo $this->Paginator->sort('status'); ?></th>
                                    <th class="actions"><?php echo __('Actions'); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $params = $this->Paginator->params();
                                $sln = (($params['page'] - 1) * $params['limit']) + 1;

                                foreach ($departments as $k => $department):
                                    ?>
                                    <tr>
                                        <td><?php echo ($sln + $k); ?></td>
                                        <td><?php echo $this->Html->link('<div class="round d-inline-block text-white text-center rounded-circle bg-' . $rounds[$department['Company']['color']] . '" data-bs-toggle="tooltip" title="' . $department['Company']['name'] . '">' . $department['Company']['short_name'] . '</div>', array('controller' => 'companies', 'action' => 'view', $department['Company']['id']), array('escape' => false)); ?></td>
                                        <td><span class="badge" style="background:<?php echo $department['Department']['color_code']; ?>"><?php echo h($department['Department']['name']); ?></span></td>
                                        <td><?php echo h($department['Department']['level']); ?></td>
                                        <td><?php echo h($department['Department']['code']); ?></td>
                                        <td><?php echo ($department['Department']['in_graph'] == E_ERROR ? 'Yes' : 'No'); ?></td>
                                        <td><?php echo strip_tags($department['Department']['description']); ?></td>
                                        <td>
                                            <div id="user_img<?php echo $department['Department']['entry_by']; ?>">
                                                <?php
                                                echo '<div class="round d-inline-block text-white text-center rounded-circle bg-' . $rounds[rand(0, 10)] . '">' . substr(trim($users[$department['Department']['entry_by']]), 0, 1) . '</div>';
                                                echo '<img style="display:none" class="img-responsive img-circle border border-2 border-white" alt="User Image" width="40">';
                                                ?>&nbsp;
                                                <?php echo $this->Html->link($users[$department['Department']['entry_by']], array('controller' => 'users', 'action' => 'view', $department['Department']['entry_by'])); ?>
                                                <script type="text/javascript">__cimg("user_img<?php echo $department['Department']['entry_by']; ?>", "<?php echo $department['Department']['entry_by']; ?>");</script>
                                            </div>
                                        </td>
                                        <td><?php echo $status[$department['Department']['status']]; ?></td>
                                        <td class="actions">
                                            <?php echo $this->Html->link(__('<i class="fa fa-pencil-alt text-success" data-bs-toggle="tooltip" title="Edit"></i>'), array('action' => 'edit', $department['Department']['id']), array('escape' => false)); ?>
                                            <?php echo $this->Form->postLink(__('<i class="fa fa-trash text-danger" data-bs-toggle="tooltip" title="Delete"></i>'), array('action' => 'delete', $department['Department']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $department['Department']['id']), 'escape' => false)); ?>
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






