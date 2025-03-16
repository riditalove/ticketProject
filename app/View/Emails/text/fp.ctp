<?php echo sprintf(__('Hello %s \n\n'), $user['User']['name']); ?>,

<?php
    echo sprintf(__('Your username: %s'), $user['User']['username']);
    echo sprintf(__('Your password: %s'), $user['User']['password']);
?>

<?php echo __('You should change password immediately because this one is auto generated.'); ?>

<?php echo sprintf(__('IP Address: %s'), $_SERVER['REMOTE_ADDR']); ?>