<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @license http://www.opensource.org/licenses/mit-license.php MIT License
 * Owner: Abdul Jalil @ http://www.softwareend.com
 */
?>

<div class="<?php echo $singularVar; ?> view">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php echo "<?php echo __('{$singularHumanName} Details'); ?>"; ?></h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <?php echo "<?php echo __('{$singularHumanName}'); ?>"; ?>
                </div>
                <div class="panel-body"> 

                    <?php
                    foreach ($fields as $field) {
                        $isKey = false;
                        if (!empty($associations['belongsTo'])) {
                            foreach ($associations['belongsTo'] as $alias => $details) {
                                if ($field === $details['foreignKey']) {
                                    $isKey = true;
                                    echo "\t<div class='row-fluid'>\n";
                                    echo "\t\t<div class='span3'><?php echo __('" . Inflector::humanize(Inflector::underscore($alias)) . "'); ?></div>\n";
                                    echo "\t\t<div class='span9'>\n\t\t\t<?php echo \$this->Html->link(\${$singularVar}['{$alias}']['{$details['displayField']}'], array('controller' => '{$details['controller']}', 'action' => 'view', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?>\n\t\t\t&nbsp;\n\t\t</div>\n";
                                    echo "\t</div>";
                                    break;
                                }
                            }
                        }
                        if ($isKey !== true) {
                            echo "\t<div class='row-fluid'>\n";
                            echo "\t\t<div class='span3'><?php echo __('" . Inflector::humanize($field) . "'); ?></div>\n";
                            echo "\t\t<div class='span9'>\n\t\t\t<?php echo h(\${$singularVar}['{$modelClass}']['{$field}']); ?>\n\t\t\t&nbsp;\n\t\t</div>\n";
                            echo "\t</div>";
                        }
                    }
                    ?>              </div>
            </div>
        </div>
    </div>
</div>

<div class="actions">
    <h3><?php echo "<?php echo __('Actions'); ?>"; ?></h3>
    <ul>
        <?php
        echo "\t\t<li><?php echo \$this->Html->link(__('Edit " . $singularHumanName . "'), array('action' => 'edit', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?> </li>\n";
        echo "\t\t<li><?php echo \$this->Form->postLink(__('Delete " . $singularHumanName . "'), array('action' => 'delete', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array(), __('Are you sure you want to delete # %s?', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?> </li>\n";
        echo "\t\t<li><?php echo \$this->Html->link(__('List " . $pluralHumanName . "'), array('action' => 'index')); ?> </li>\n";
        echo "\t\t<li><?php echo \$this->Html->link(__('New " . $singularHumanName . "'), array('action' => 'add')); ?> </li>\n";

        $done = array();
        foreach ($associations as $type => $data) {
            foreach ($data as $alias => $details) {
                if ($details['controller'] != $this->name && !in_array($details['controller'], $done)) {
                    echo "\t\t<li><?php echo \$this->Html->link(__('List " . Inflector::humanize($details['controller']) . "'), array('controller' => '{$details['controller']}', 'action' => 'index')); ?> </li>\n";
                    echo "\t\t<li><?php echo \$this->Html->link(__('New " . Inflector::humanize(Inflector::underscore($alias)) . "'), array('controller' => '{$details['controller']}', 'action' => 'add')); ?> </li>\n";
                    $done[] = $details['controller'];
                }
            }
        }
        ?>
    </ul>
</div>
<?php
if (!empty($associations['hasOne'])) :
    foreach ($associations['hasOne'] as $alias => $details):
        ?>
        <div class="related">
            <h3><?php echo "<?php echo __('Related " . Inflector::humanize($details['controller']) . "'); ?>"; ?></h3>
            <?php echo "<?php if (!empty(\${$singularVar}['{$alias}'])): ?>\n"; ?>
            <dl>
                <?php
                foreach ($details['fields'] as $field) {
                    echo "\t\t<dt><?php echo __('" . Inflector::humanize($field) . "'); ?></dt>\n";
                    echo "\t\t<dd>\n\t<?php echo \${$singularVar}['{$alias}']['{$field}']; ?>\n&nbsp;</dd>\n";
                }
                ?>
            </dl>
            <?php echo "<?php endif; ?>\n"; ?>
            <div class="actions">
                <ul>
                    <li><?php echo "<?php echo \$this->Html->link(__('Edit " . Inflector::humanize(Inflector::underscore($alias)) . "'), array('controller' => '{$details['controller']}', 'action' => 'edit', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?></li>\n"; ?>
                </ul>
            </div>
        </div>
        <?php
    endforeach;
endif;
if (empty($associations['hasMany'])) {
    $associations['hasMany'] = array();
}
if (empty($associations['hasAndBelongsToMany'])) {
    $associations['hasAndBelongsToMany'] = array();
}
$relations = array_merge($associations['hasMany'], $associations['hasAndBelongsToMany']);
foreach ($relations as $alias => $details):
    $otherSingularVar = Inflector::variable($alias);
    $otherPluralHumanName = Inflector::humanize($details['controller']);
    ?>
    <div class="related">
        <h3><?php echo "<?php echo __('Related " . $otherPluralHumanName . "'); ?>"; ?></h3>
        <?php echo "<?php if (!empty(\${$singularVar}['{$alias}'])): ?>\n"; ?>
        <table cellpadding = "0" cellspacing = "0">
            <tr>
                <?php
                foreach ($details['fields'] as $field) {
                    echo "\t\t<th><?php echo __('" . Inflector::humanize($field) . "'); ?></th>\n";
                }
                ?>
                <th class="actions"><?php echo "<?php echo __('Actions'); ?>"; ?></th>
            </tr>
            <?php
            echo "\t<?php foreach (\${$singularVar}['{$alias}'] as \${$otherSingularVar}): ?>\n";
            echo "\t\t<tr>\n";
            foreach ($details['fields'] as $field) {
                echo "\t\t\t<td><?php echo \${$otherSingularVar}['{$field}']; ?></td>\n";
            }

            echo "\t\t\t<td class=\"actions\">\n";
            echo "\t\t\t\t<?php echo \$this->Html->link(__('View'), array('controller' => '{$details['controller']}', 'action' => 'view', \${$otherSingularVar}['{$details['primaryKey']}'])); ?>\n";
            echo "\t\t\t\t<?php echo \$this->Html->link(__('Edit'), array('controller' => '{$details['controller']}', 'action' => 'edit', \${$otherSingularVar}['{$details['primaryKey']}'])); ?>\n";
            echo "\t\t\t\t<?php echo \$this->Form->postLink(__('Delete'), array('controller' => '{$details['controller']}', 'action' => 'delete', \${$otherSingularVar}['{$details['primaryKey']}']), array(), __('Are you sure you want to delete # %s?', \${$otherSingularVar}['{$details['primaryKey']}'])); ?>\n";
            echo "\t\t\t</td>\n";
            echo "\t\t</tr>\n";
            echo "\t<?php endforeach; ?>\n";
            ?>
        </table>
        <?php echo "<?php endif; ?>\n\n"; ?>
        <div class="actions">
            <ul>
                <li><?php echo "<?php echo \$this->Html->link(__('New " . Inflector::humanize(Inflector::underscore($alias)) . "'), array('controller' => '{$details['controller']}', 'action' => 'add')); ?>"; ?> </li>
            </ul>
        </div>
    </div>
<?php endforeach; ?>
