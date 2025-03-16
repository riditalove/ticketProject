
<div class="card text-center card-hover">
    <div class="card-body">
        <div id="user_img<?php echo $user['User']['id']; ?>">
            <?php
            echo '<div class="round big d-inline-block text-white text-center rounded-circle bg-' . $rounds[rand(0, 10)] . '">' . substr(trim($user['User']['name']), 0, 1) . '</div>';
            echo '<img style="display:none" class="rounded-3 border border-2 border-info" alt="User Image" width="90">';
            ?>
            <script type="text/javascript">__cimg("user_img<?php echo $user['User']['id']; ?>", "<?php echo $user['User']['id']; ?>");</script>
        </div>
        <div class="mt-n2">
            <span class="badge" style="background:<?php echo $user['Department']['color_code']; ?>"><?php echo $user['Department']['name']; ?></span>
            <h3 class="card-title mt-3"><?php echo $this->Html->link($user['User']['name'], array('controller' => 'users', 'action' => 'view', $user['User']['id'])); ?></h3>
            <h6 class="card-subtitle"><span class="badge" style="background:<?php echo $user['Designation']['color_code']; ?>"><?php echo $user['Designation']['name']; ?></span></h6>
        </div>
        <div class="row mt-3 justify-content-center">
            <div class="col-3 col-xl-2">
                <div class="py-2 px-3 bg-light rounded-pill align-items-center" data-bs-toggle="tooltip" title="<?php echo $user['User']['email']; ?>">
                    <a class="text-<?php echo $rounds[rand(0, 10)]; ?>" href="mailto:<?php echo $user['User']['email']; ?>" target="_blank"><i class="fa fa-envelope display-7"></i></a>
                </div>
            </div>
            <div class="col-3 col-xl-2">
                <div class="py-2 px-3 bg-light rounded-pill align-items-center" data-bs-toggle="tooltip" title="<?php echo $user['User']['phone']; ?>">
                    <a class="text-<?php echo $rounds[rand(0, 10)]; ?>" href="tel:<?php echo $user['User']['phone']; ?>"><i class="fa fa-phone display-7"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(function () {
        [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]')).map(function (e) {
            return new bootstrap.Tooltip(e)
        })
    })
</script>