<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @license http://www.opensource.org/licenses/mit-license.php MIT License
 * Owner: Abdul Jalil @ http://www.softwareend.com
 */
?>

<div class="<?php echo $pluralVar; ?> index">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php echo "<?php echo __('{$singularHumanName} List'); ?>"; ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="pull-left"><?php echo "<?php echo __('{$pluralHumanName}'); ?>"; ?></div>
                    <div class="pull-right"><?php echo "<?php echo \$this->Html->link(__('<i class=\"glyphicon glyphicon-plus\" title=\"Add New {$singularHumanName}\"></i>Add New'), array('action' => 'add'), array('escape' => false)); ?>"; ?></div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                    <table class="table table-condensed table-hover contact-list no-wrap stylish-table">
                        <thead>
                            <tr>
                                <?php foreach ($fields as $field): ?>
                                    <th><?php echo "<?php echo \$this->Paginator->sort('{$field}'); ?>"; ?></th>
                                <?php endforeach; ?>
                                <th class="actions"><?php echo "<?php echo __('Actions'); ?>"; ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            echo "<?php foreach (\${$pluralVar} as \${$singularVar}): ?>\n";
                            echo "\t<tr>\n";
                            foreach ($fields as $field) {
                                $isKey = false;
                                if (!empty($associations['belongsTo'])) {
                                    foreach ($associations['belongsTo'] as $alias => $details) {
                                        if ($field === $details['foreignKey']) {
                                            $isKey = true;
                                            echo "\t\t<td>\n\t\t\t<?php echo \$this->Html->link(\${$singularVar}['{$alias}']['{$details['displayField']}'], array('controller' => '{$details['controller']}', 'action' => 'view', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?>\n\t\t</td>\n";
                                            break;
                                        }
                                    }
                                }
                                if ($isKey !== true) {
                                    echo "\t\t<td><?php echo h(\${$singularVar}['{$modelClass}']['{$field}']); ?></td>\n";
                                }
                            }

                            echo "\t\t<td class=\"actions\">\n";
                            echo "\t\t<?php echo \$this->Html->link(__('<i class=\"glyphicon glyphicon-unchecked\" title=\"View\"></i>'), array('action' => 'view', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('escape' => false, 'target' => '_blank')); ?>\n";
                            echo "\t\t<?php echo \$this->Html->link(__('<i class=\"glyphicon glyphicon-edit\" title=\"Edit\"></i>'), array('action' => 'edit', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('escape' => false)); ?>\n";
                            echo "\t\t<?php echo \$this->Form->postLink(__('<i class=\"glyphicon glyphicon-trash\" title=\"Delete\"></i>'), array('action' => 'delete', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('confirm' => __('Are you sure you want to delete # %s?', \${$singularVar}['{$modelClass}']['{$primaryKey}']), 'escape' => false)); ?>\n";
                            echo "\t\t</td>\n";
                            echo "\t</tr>\n";

                            echo "<?php endforeach; ?>\n";
                            ?>
                        </tbody>
                    </table>


                    <p class="paginginfo">
                        <?php echo "<?php
                    echo \$this->Paginator->counter(array(
                        'format' => __('Showing {:start} to {:end} of {:count} records')
                    ));
                    ?>"; ?>
                    </p>
                    <div class="paging">
                        <?php
                        echo "<?php\n";
                        echo "\t\techo \$this->Paginator->first();\n";
                        echo "\t\techo \$this->Paginator->prev();\n";
                        echo "\t\techo \$this->Paginator->numbers();\n";
                        echo "\t\techo \$this->Paginator->next();\n";
                        echo "\t\techo \$this->Paginator->last();\n";
                        echo "\t?>\n";
                        ?>
                    </div>    
                    <div class="clearfix"></div>

                </div>
            </div>
        </div>
    </div>
</div>
