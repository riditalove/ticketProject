<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?></li>
                <li class="breadcrumb-item active">Designation List</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <?php echo $this->Html->link("<i class='fa fa-plus-circle'></i> Add New", array('action' => 'add'), array('class'=>'btn pull-right btn-success','escape' => false)); ?>

        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <script type="text/javascript">
        $(document).ready(function () {
            $('#SrcCompanyId').change(function () {
                ajax_getdepartment_by_company($('#SrcCompanyId').val());
            });
<?php if (!empty($this->request->data['Src']['company_id'])) { ?>
                ajax_getdepartment_by_company(<?php echo $this->request->data['Src']['company_id']; ?>, <?php echo $this->request->data['Src']['department_id']; ?>);
<?php } ?>
        });
        function ajax_getdepartment_by_company(cid, uid) {
            if (cid !== '') {
                $.ajax({
                    type: "POST",
                    url: '<?php echo $this->Html->url(array('controller' => 'departments', 'action' => 'ajax_getdepartments')); ?>',
                    data: {model: 'Src', company_id: cid, department_id: uid},
                    success: function (data) {
                        $("#div_department_id").html(data);
                    }
                });
            }
        }
        function ajax_getdesignation_by_department(){};
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
                                    <td><?php echo $this->Form->input('company_id', array('empty' => 'Please Select')); ?></td>
                                    <td id="div_department_id"><?php echo $this->Form->input('department_id', array('empty' => 'Please Select')); ?></td>
                                    <td><?php echo $this->Form->input('name', array('style' => 'width:90%')); ?></td>
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

        <!-- column -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Designation List</h4>
                    <h6 class="card-subtitle"></h6>
                    <div class="table-responsive">
                        <table class="table table-condensed table-hover contact-list no-wrap stylish-table">
                            <thead>
                                <tr>
                                    <th><?php echo $this->Paginator->sort('id', 'SL#'); ?></th>
                                    <th><?php echo $this->Paginator->sort('company_id'); ?></th>
                                    <th><?php echo $this->Paginator->sort('department_id'); ?></th>
                                    <th><?php echo $this->Paginator->sort('name'); ?></th>
                                    <th><?php echo $this->Paginator->sort('code'); ?></th>
                                    <th><?php echo $this->Paginator->sort('level'); ?></th>
                                    <th><?php echo $this->Paginator->sort('entry_by'); ?></th>
                                    <th><?php echo $this->Paginator->sort('status'); ?></th>
                                    <th class="actions"><?php echo __('Actions'); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                //pr($designations); 
                                $params = $this->Paginator->params();
                                $sln = (($params['page'] - 1) * $params['limit']) + 1;
                                
                                $companies[''] = '';
                                foreach ($designations as $k => $designation): ?>
                                    <tr>
                                        <td><?php echo ($sln + $k); ?></td>
                                        <td>
                                            <?php 
                                            $company = $companys[$designation['Department']['company_id']];
                                            echo $this->Html->link('<div class="round d-inline-block text-white text-center rounded-circle bg-' . $rounds[$company[0]] . '" data-bs-toggle="tooltip" title="' . $company[1] . '">' . $company[2] . '</div>', array('controller' => 'companies', 'action' => 'view', $company[3]), array('escape' => false)); ?>
                                        </td>
                                        <td>
                                            <span class="badge" style="background:<?php echo $designation['Department']['color_code']; ?>"><?php echo $this->Html->link($designation['Department']['name'], 'javascript:;'); ?></span>
                                        </td>
                                        <td><span class="badge" style="background:<?php echo $designation['Designation']['color_code'];?>"><?php echo h($designation['Designation']['name']); ?></span></td>
                                        <td><?php echo h($designation['Designation']['code']); ?></td>
                                        <td><?php echo h($designation['Designation']['level']); ?></td>
                                        <td>
                                            <div id="user_img<?php echo $designation['Designation']['entry_by']; ?>">
                                                <?php
                                                echo '<div class="round d-inline-block text-white text-center rounded-circle bg-' . $rounds[rand(0, 10)] . '">' . substr(trim($users[$designation['Designation']['entry_by']]), 0, 1) . '</div>';
                                                echo '<img style="display:none" class="img-responsive img-circle border border-2 border-white" alt="User Image" width="40">';
                                                ?>&nbsp;
                                                <?php echo $this->Html->link($users[$designation['Designation']['entry_by']], array('controller' => 'users', 'action' => 'view', $designation['Designation']['entry_by'])); ?>
                                                <script type="text/javascript">__cimg("user_img<?php echo $designation['Designation']['entry_by']; ?>", "<?php echo $designation['Designation']['entry_by']; ?>");</script>
                                            </div>
                                        </td>
                                        <td><?php echo $status[$designation['Designation']['status']]; ?></td>
                                        <td class="actions">
                                            <?php echo $this->Html->link(__('<i class="fa fa-pencil-alt text-success" data-bs-toggle="tooltip" title="Edit"></i>'), array('action' => 'edit', $designation['Designation']['id']), array('escape' => false)); ?>
                                            <?php echo $this->Form->postLink(__('<i class="fa fa-trash text-danger" data-bs-toggle="tooltip" title="Delete"></i>'), array('action' => 'delete', $designation['Designation']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $designation['Designation']['id']), 'escape' => false)); ?>
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





