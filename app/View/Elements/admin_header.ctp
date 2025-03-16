<nav class="navbar top-navbar navbar-expand-md navbar-dark">
    <div class="navbar-header">
        <!-- This is for the sidebar toggle which is visible on mobile only -->
        <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="fa fa-list"></i></a>
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
        <a class="navbar-brand" href="<?php echo $this->webroot ?>users/dashboard">
            <!-- Logo icon -->
            <b class="logo-icon">
                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                <!-- Dark Logo icon -->
                <?php echo $this->Html->image('logo/sl.png', array('alt' => 'homepage', 'class' => 'dark-logo', 'width' => '40')); ?>
                <!-- Light Logo text -->  
                <?php echo $this->Html->image('logo/sl.png', array('alt' => 'homepage', 'class' => 'light-logo', 'width' => '40')); ?>
            </b>
            <!--End Logo icon -->
            <!-- Logo text -->
            <span class="logo-text">
                <!-- dark Logo text -->
                <?php echo $this->Html->image('logo/1.png', array('alt' => 'homepage', 'class' => 'dark-logo', 'width' => '100%')); ?>
                <!-- Light Logo text -->  
                <?php echo $this->Html->image('logo/1.png', array('alt' => 'homepage', 'class' => 'light-logo', 'width' => '100%')); ?>
            </span>
        </a>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Toggle which is visible on mobile only -->
        <!-- ============================================================== -->
        <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-arrow-down"></i></a>
    </div>

    <!-- ============================================================== -->
    <!-- End Logo -->
    <!-- ============================================================== -->
    <div class="navbar-collapse collapse" id="navbarSupportedContent">
        <!-- ============================================================== -->
        <!-- toggle and nav items -->
        <!-- ============================================================== -->
        <ul class="navbar-nav me-auto">
            <!-- This is  -->
            <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="fa fa-arrow-left"></i></a></li>
            <!-- ============================================================== -->
            <!-- Comment -->
            <!-- ============================================================== -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                    <span data-bs-toggle="tooltip" title="Notifications"><i class="fa fa-bell"></i></span>
                </a>
                <div class="dropdown-menu mailbox animated bounceInDown dropdown-menu-start mailbox dropdown-menu-animate-up">
                    <ul class="list-style-none">
                        <li>
                            <div class="border-bottom rounded-top py-3 px-4">
                                <div class="mb-0 font-weight-medium fs-4">Notifications</div>
                            </div>
                        </li>
                        <li>
                            <div class="message-center notifications position-relative">
                                
                            </div>
                        </li>
                        <li>
                            <a class="nav-link text-center" href="javascript:;;"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- ============================================================== -->
            <!-- End Comment -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Messages -->
            <!-- ============================================================== -->
            <li class="nav-item dropdown hide">
                <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                    <span data-bs-toggle="tooltip" title="Coming"><i class="fa fa-envelope"></i></span>
                    <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                </a>
                <div class="dropdown-menu mailbox animated bounceInDown" aria-labelledby="2">
                    <ul>
                        <li>
                            <div class="drop-title">You have 4 new messages</div>
                        </li>
                        <li>
                            <div style="position: relative; overflow: hidden; width: auto; height: 250px;" class="slimScrollDiv"><div style="overflow: hidden; width: auto; height: 250px;" class="message-center">
                                    <!-- Message -->
                                    <a href="#">
                                        <div class="user-img"> <?php echo $this->Html->image('logo/1.png', array('alt' => 'user', 'class' => 'img-circle')); ?> <span class="profile-status online pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="#">
                                        <div class="user-img"> <?php echo $this->Html->image('logo/1.png', array('alt' => 'user', 'class' => 'img-circle')); ?> <span class="profile-status busy pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="#">
                                        <div class="user-img"> <?php echo $this->Html->image('logo/1.png', array('alt' => 'user', 'class' => 'img-circle')); ?> <span class="profile-status away pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="#">
                                        <div class="user-img"> <?php echo $this->Html->image('logo/1.png', array('alt' => 'user', 'class' => 'img-circle')); ?> <span class="profile-status offline pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                    </a>
                                </div><div style="background: rgb(220, 220, 220) none repeat scroll 0% 0%; width: 5px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;" class="slimScrollBar"></div><div style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;" class="slimScrollRail"></div></div>
                        </li>
                        <li>
                            <a class="nav-link text-center" href="javascript:;;"> <strong>See all e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- ============================================================== -->
            <!-- End Messages -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Messages -->
            <!-- ============================================================== -->
            <li class="nav-item dropdown mega-dropdown"> 
                <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                    <span data-bs-toggle="tooltip" title="SLIDER"><i class="fa fa-th-large"></i> <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div> </span>
                </a>
                <!--<div class="hide">-->
                <div class="dropdown-menu animated bounceInDown">
                    <ul class="mega-dropdown-menu row">
                        <li class="col-lg-9 col-xlg-9">
                            <h4 class="m-b-20">RECENT SLIDER</h4>
                            <!-- CAROUSEL -->
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                            </div>
                            <!-- End CAROUSEL -->
                        </li>
                        <li class="col-lg-3 col-xlg-3 m-b-30">
                            <h4 class="m-b-20">IMPORTANT LINKS</h4>
                            <!-- List style -->
                            <ul class="list-style-none">
                                <?php
                                foreach ($links as $link) {
                                    echo '<li>' . $this->Html->link('<i class="fa fa-check text-success"></i> ' . $link['Link']['title'], $link['Link']['url'], array('escape' => false, 'target' => '_blank')) . '</li>';
                                }
                                ?>
                            </ul>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- ============================================================== -->
            <!-- End Messages -->
            <!-- ============================================================== -->
        </ul>
        <!-- ============================================================== -->
        <!-- User profile and search -->
        <!-- ============================================================== -->
        <ul class="navbar-nav">
            <li class="nav-item search-box d-none d-md-block">
                <form class="app-search mt-3 me-2">
                    <input class="form-control rounded-pill border-0" placeholder="Search for..." type="text"> <a class="srh-btn"><i data-feather="search" class="feather-sm fill-white mt-n2"></i></a> </form>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div id="user_imgt<?php echo $current_user['id']; ?>">
                        <?php
                        echo '<div class="round d-inline-block text-white text-center rounded-circle bg-' . $rounds[rand(0, 10)] . '">' . substr(trim($current_user['name']), 0, 1) . '</div>';
                        echo '<img style="display:none" class="profile-pic rounded-circle" alt="Profile Photo" width="30">';
                        ?>
                        <script type="text/javascript">__cimg("user_imgt<?php echo $current_user['id']; ?>", "<?php echo $current_user['id']; ?>");</script>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end user-dd animated flipInY">
                    <div class="d-flex no-block align-items-center p-3 bg-<?php echo $rounds[rand(0, 10)]; ?> text-white mb-2">
                        <div id="user_imgti<?php echo $current_user['id']; ?>">
                            <?php
                            echo '<div class="round d-inline-block text-white text-center rounded-circle bg-' . $rounds[rand(0, 10)] . '">' . substr(trim($current_user['name']), 0, 1) . '</div>';
                            echo '<img style="display:none" class="rounded-circle" alt="Profile Photo" width="60">';
                            ?>
                            <script type="text/javascript">__cimg("user_imgti<?php echo $current_user['id']; ?>", "<?php echo $current_user['id']; ?>");</script>
                        </div>
                        <div class="ms-2">
                            <h4 class="mb-0 text-white"><?php echo $current_user['name']; ?></h4>
                            <p class=" mb-0"><?php echo $current_user['email']; ?></p>
                        </div>
                    </div>

                    <?php echo $this->Html->link('<i data-feather="calendar" class="feather-sm text-' . $rounds[rand(0, 10)] . ' me-1 ms-1"></i> My Attendance', array('controller' => 'attendances', 'action' => 'my_attendance'), array('class' => 'dropdown-item', 'escape' => false)); ?>
                    <?php echo $this->Html->link('<i data-feather="home" class="feather-sm text-' . $rounds[rand(0, 10)] . ' me-1 ms-1"></i> Meeting Room Booking', array('controller' => 'meetingroombookings', 'action' => 'add'), array('class' => 'dropdown-item', 'escape' => false)); ?>

                    <a class="dropdown-item" href="https://outlook.office.com/mail/" target="_blank">
                        <i data-feather="mail" class="feather-sm text-<?php echo $rounds[rand(0, 10)]; ?> me-1 ms-1"></i>
                        Mail Inbox
                    </a>

                    <div class="dropdown-divider"></div>
                    <?php echo $this->Html->link('<i data-feather="settings" class="feather-sm text-' . $rounds[rand(0, 10)] . ' me-1 ms-1"></i> Get A Support', array('controller' => 'supports', 'action' => 'add'), array('class' => 'dropdown-item', 'escape' => false)); ?>
                    <div class="dropdown-divider"></div>

                    <?php echo $this->Html->link('<i data-feather="log-out" class="feather-sm text-' . $rounds[rand(0, 10)] . ' me-1 ms-1"></i> Logout', array('controller' => 'users', 'action' => 'logout'), array('escape' => false, 'class' => 'dropdown-item')); ?>

                    <div class="dropdown-divider"></div>

                    <div class="pl-4 p-2">
                        <?php echo $this->Html->link('<i data-feather="user" class="feather-sm me-1 ms-1"></i> View Profile', array('controller' => 'users', 'action' => 'my_profile'), array('class' => 'btn text-white d-block w-100 btn-' . $rounds[rand(0, 10)] . ' rounded-pill', 'escape' => false)); ?>
                    </div>
                </div>
            </li>

        </ul>
    </div>
</nav>