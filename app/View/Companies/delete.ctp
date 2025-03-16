<h2><?php echo __('Delete Company'); ?></h2>
<p><?php echo __('Are you sure you want to delete this company?'); ?></p>
<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $company['Company']['id']), array('confirm' => __('Are you sure you want to delete %s?', $company['Company']['name']))); ?>
<?php echo $this->Html->link(__('Cancel'), array('action' => 'index')); ?>