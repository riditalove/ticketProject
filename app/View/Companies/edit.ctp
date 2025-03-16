<?php echo $this->Form->create('Company'); ?>
    <fieldset>
        <legend><?php echo __('Edit Company'); ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('name');
            echo $this->Form->input('companytype_id', array('options' => $companytypes));
            echo $this->Form->input('companynature_id', array('options' => $companynatures));
        ?>
    </fieldset>
    <?php echo $this->Form->button(__('Submit')); ?>
<?php echo $this->Form->end(); ?>