<h2><?php echo h($company['Company']['name']); ?></h2>
<dl>
    <dt><?php echo __('Company Type'); ?></dt>
    <dd><?php echo h($company['Companytype']['name']); ?></dd>
    <dt><?php echo __('Company Nature'); ?></dt>
    <dd><?php echo h($company['Companynature']['name']); ?></dd>
</dl>
<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $company['Company']['id'])); ?> |
<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $company['Company']['id']), array('confirm' => __('Are you sure?'))); ?> |
<?php echo $this->Html->link(__('Back to List'), array('action' => 'index')); ?>