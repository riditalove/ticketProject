<!-- Mobile toggle button -->
<a class="show-left-part d-block d-md-none" href="javascript:void(0)"><i class="fa fa-arrow-right"></i></a>
<!-- Mobile toggle button -->
<div class="scrollable position-relative" style="height: 100%">
    <?php
    if (isset($this->request->params['pass'][1])) {
        $user_id = $this->request->params['pass'][1];
    } else {
        $user_id = $this->request->params['pass'][0];
    }

    ?>
    <div class="p-3">
        <h5 class="card-title">Production Link</h5>

        <ul class="list-unstyled mt-3">

            <?php
           
            // if (isset($perms["inputstatuses"]["index"]) && !is_numeric($perms["inputstatuses"]["index"])) {
            //     echo "<li>" . $this->Html->link('<i class="fa fa-address-card"></i> Input Status', array('controller' => 'inputstatuses', 'action' => 'index', $user_id), array('escape' => false)) . "</li>";
            // }
            if (isset($perms["cuttingstatuses"]["index"]) && !is_numeric($perms["cuttingstatuses"]["index"])) {
                echo "<li class='selected=selected'>" . $this->Html->link('<i class="fa-solid fa-scissors"></i> Cutting Status', array('controller' => 'cuttingstatuses', 'action' => 'index', $user_id), array('escape' => false)) . "</li>";
            }
            if (isset($perms["printembstatuses"]["index"]) && !is_numeric($perms["printembstatuses"]["index"])) {
                echo "<li>" . $this->Html->link('<i class="fa-solid fa-print"></i> Print/Embroidery Status', array('controller' => 'printembstatuses', 'action' => 'index', $user_id), array('escape' => false)) . "</li>";
            }
            if (isset($perms["sewinginputstatuses"]["index"]) && !is_numeric($perms["sewinginputstatuses"]["index"])) {
                echo "<li>" . $this->Html->link('<i class="fa fa-tasks"></i> Sewing Input Status', array('controller' => 'sewinginputstatuses', 'action' => 'index', $user_id), array('escape' => false)) . "</li>";
            }
            if (isset($perms["washstatuses"]["index"]) && !is_numeric($perms["washstatuses"]["index"])) {
                echo "<li>" . $this->Html->link('<i class="fa-solid fa-hands-bubbles"></i> Laundry/Wash Status', array('controller' => 'washstatuses', 'action' => 'index', $user_id), array('escape' => false)) . "</li>";
            }
            if (isset($perms["packingstatuses"]["index"]) && !is_numeric($perms["packingstatuses"]["index"])) {
                echo "<li>" . $this->Html->link('<i class="fa-solid fa-boxes-packing"></i> Packing/Finishing Status', array('controller' => 'packingstatuses', 'action' => 'index', $user_id), array('escape' => false)) . "</li>";
            }
            if (isset($perms["fristatuses"]["index"]) && !is_numeric($perms["fristatuses"]["index"])) {
                echo "<li>" . $this->Html->link('<i class="fa-solid fa-bars"></i> FRI Status', array('controller' => 'fristatuses', 'action' => 'index', $user_id), array('escape' => false)) . "</li>";
            }
            if (isset($perms["qaheadcomments"]["index"]) && !is_numeric($perms["qaheadcomments"]["index"])) {
                echo "<li>" . $this->Html->link('<i class="fa-regular fa-comment"></i> Comments from QA Head', array('controller' => 'qaheadcomments', 'action' => 'index', $user_id), array('escape' => false)) . "</li>";
            }
            if (isset($perms["traceabilityteams"]["index"]) && !is_numeric($perms["traceabilityteams"]["index"])) {
                echo "<li>" . $this->Html->link('<i class="fa fa-text-width"></i> Traceability', array('controller' => 'traceabilityteams', 'action' => 'index', $user_id), array('escape' => false)) . "</li>";
            }

            ?>
        </ul>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $.ajax({
            dataType: "html",
            type: "POST",
            evalScripts: true,
            url: '<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'ajax_getname')); ?>',
            data: ({
                user_id: <?php echo $user_id; ?>
            }),
            success: function(data) {
                $('#user_profile_name').html(data);
                $('#user_profile').html(data.substring(0, 1));
            }
        });
    });
</script>