<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @license http://www.opensource.org/licenses/mit-license.php MIT License
 * Owner: Abdul Jalil @ http://www.softwareend.com
 */
?>

<div class="<?php echo $pluralVar; ?> form">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php printf("<?php echo __('%s %s'); ?>", Inflector::humanize($action), $singularHumanName); ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <?php printf("<?php echo __('%s %s'); ?>", Inflector::humanize($action), $singularHumanName); ?>
                </div>
                <div class="panel-body">
                    <?php echo "<?php echo \$this->Form->create('{$modelClass}'); ?>\n"; ?>
                    <?php
                    echo "\t<?php\n";
                    foreach ($fields as $field) {
                        if (strpos($action, 'add') !== false && $field === $primaryKey) {
                            continue;
                        } elseif (!in_array($field, array('created', 'modified', 'updated'))) {
                            echo "\t\techo \$this->Form->input('{$field}');\n";
                        }
                    }
                    if (!empty($associations['hasAndBelongsToMany'])) {
                        foreach ($associations['hasAndBelongsToMany'] as $assocName => $assocData) {
                            echo "\t\techo \$this->Form->input('{$assocName}');\n";
                        }
                    }
                    echo "\t?>\n";

                    echo "\t<?php echo \$this->Form->end(__('Submit')); ?>\n";
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>