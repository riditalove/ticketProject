<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?></li>
                <li class="breadcrumb-item active">Employee List</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <?php echo $this->Html->link("<i class='fa fa-plus-circle'></i> Import", array('action' => 'import'), array('style' => 'margin-left:5px;', 'class' => 'btn pull-right btn-success', 'escape' => false)); ?>
            <?php echo $this->Html->link("<i class='fa fa-plus-circle'></i> Add New", array('action' => 'add'), array('class' => 'btn pull-right btn-success', 'escape' => false)); ?>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#SrcCompanyId').change(function() {
                ajax_getdepartment_by_company($('#SrcCompanyId').val());
            });
            <?php if (!empty($this->request->data['Src']['company_id'])) { ?>
                ajax_getdepartment_by_company(<?php echo $this->request->data['Src']['company_id']; ?>, <?php echo isset($this->request->data['Src']['department_id']) ? $this->request->data['Src']['department_id'] : 0; ?>);
            <?php } ?>
        });

        function ajax_getdepartment_by_company(cid, uid) {
            if (cid !== '') {
                $.ajax({
                    type: "POST",
                    url: '<?php echo $this->Html->url(array('controller' => 'departments', 'action' => 'ajax_getdepartments')); ?>',
                    data: {
                        model: 'Src',
                        company_id: cid,
                        department_id: uid
                    },
                    success: function(data) {
                        $("#div_department_id").html(data);
                    }
                });
            }
        }

        function ajax_getdesignation_by_department() {}
    </script>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="panel panel-info">
                        <div class="panel-body">
                            <?php echo $this->Form->create('Src', array('class' => 'form-horizontal')); ?>
                            <table class="table table-condensed table-hover contact-list no-wrap stylish-table">
                                <tr>
                                    <td><?php echo $this->Form->input('company_id'); ?></td>
                                    <td id="div_department_id"><?php echo $this->Form->input('department_id', array('empty' => 'Please Select')); ?></td>
                                    <td><?php echo $this->Form->input('role_id', array('empty' => 'Please Select')); ?></td>
                                    <td><?php echo $this->Form->input('name'); ?></td>
                                    <td><?php echo $this->Form->input('phone'); ?></td>
                                    <td><?php echo $this->Form->input('email'); ?></td>
                                    <td><?php echo $this->Form->input('status', array('empty' => 'Please Select', 'options' => array(E_ERROR => 'Active', PHP_DEBUG => 'Inactive'))); ?></td>
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

                            <?php echo $this->Form->end(); ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Employee List</h4>
                    <h6 class="card-subtitle"></h6>
                    <div class="table-responsive">
                        <table class="table table-condensed table-hover contact-list no-wrap stylish-table">
                            <thead>
                                <tr>
                                    <th class="bg-success text-white"><?php echo $this->Paginator->sort('id', 'SL#'); ?></th>
                                    <th class="bg-success text-white"><?php echo $this->Paginator->sort('name'); ?></th>
                                    <th class="bg-success text-white"><?php echo $this->Paginator->sort('company_id'); ?></th>
                                    <?php if ($current_user['role_id'] == ADMIN) { ?>
                                        <th class="bg-success text-white"><?php echo $this->Paginator->sort('id', 'Credential'); ?></th>
                                    <?php } ?>
                                    <th class="bg-success text-white"><?php echo $this->Paginator->sort('department_id', 'Dept./Des.'); ?></th>
                                    <th class="bg-success text-white"><?php echo $this->Paginator->sort('role_id'); ?></th>
                                    <th class="bg-success text-white"><?php echo $this->Paginator->sort('status'); ?></th>
                                    <th class="bg-success text-white"><?php echo __('Actions'); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $params = $this->Paginator->params();
                                $sln = (($params['page'] - 1) * $params['limit']) + 1;
                                foreach ($users as $k => $user) : ?>
                                    <tr>
                                        <td><?php echo ($sln + $k); ?></td>
                                        <td>
                                            <div id="user_img<?php echo $user['User']['id']; ?>">
                                                <?php
                                                echo '<div class="round d-inline-block text-white text-center rounded-circle bg-' . $rounds[rand(0, 10)] . '">' . substr(trim($user['User']['name']), 0, 1) . '</div>';
                                                echo '<img style="display:none" class="img-responsive img-circle border border-2 border-white" alt="User Image" width="40">';
                                                ?>&nbsp;
                                                <?php echo $this->Html->link($user['User']['name'], array('controller' => 'users', 'action' => 'view', $user['User']['id'])); ?>
                                                <script type="text/javascript">
                                                    __cimg("user_img<?php echo $user['User']['id']; ?>", "<?php echo $user['User']['id']; ?>");
                                                </script>
                                            </div>
                                        </td>
                                        <td>
                                            <?php echo $this->Html->link('<div class="round d-inline-block text-white text-center rounded-circle bg-' . $rounds[$user['Company']['color']] . '" data-bs-toggle="tooltip" title="' . $user['Company']['name'] . '">' . $user['Company']['short_name'] . '</div>', array('controller' => 'companies', 'action' => 'view', $user['Company']['id']), array('escape' => false)); ?>
                                        </td>
                                        <?php if ($current_user['role_id'] == ADMIN) { ?>
                                            <td><?php echo $user['User']['username']; ?><br /><?php echo $user['User']['password']; ?></td>
                                        <?php } ?>
                                        <td>
                                            <span class="badge" style="background:<?php echo $user['Department']['color_code']; ?>"><?php echo $this->Html->link($user['Department']['name'], 'javascript:;'); ?></span>
                                            <br /><span class="badge" style="background:<?php echo $user['Designation']['color_code']; ?>"><?php echo $this->Html->link($user['Designation']['name'], 'javascript:;'); ?></span>
                                        </td>
                                        <td>
                                            <span class="badge" style="background:<?php echo $user['Role']['color_code']; ?>"><?php echo $this->Html->link($user['Role']['title'], array('controller' => 'roles', 'action' => 'view', $user['Role']['id'])); ?></span>
                                        </td>
                                        <td><?php echo $status[$user['User']['status']]; ?></td>
                                        <td class="actions">
                                            <?php echo $this->Html->link(__('<i class="fa fa-eye" data-bs-toggle="tooltip" title="View"></i>'), array('action' => 'view', $user['User']['id']), array('escape' => false)); ?>
                                            <?php echo $this->Html->link(__('<i class="fa fa-pencil-alt text-success" data-bs-toggle="tooltip" title="Edit"></i>'), array('action' => 'edit', $user['User']['id']), array('escape' => false)); ?>
                                            <?php echo $this->Form->postLink(__('<i class="fa fa-trash text-danger" data-bs-toggle="tooltip" title="Delete"></i>'), array('action' => 'delete', $user['User']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['User']['id']), 'escape' => false)); ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>