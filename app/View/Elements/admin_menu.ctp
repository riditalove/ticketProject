<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li>
                    <!-- User profile -->
                    <div class="user-profile text-center position-relative pt-4 mt-1">
                        <!-- User profile image -->

                        <div id="user_imgtil<?php echo $current_user['id']; ?>" class="profile-img m-auto">
                            <?php
                            echo '<div class="round d-inline-block text-white text-center rounded-circle bg-' . $rounds[rand(0, 10)] . '">' . substr(trim($current_user['name']), 0, 1) . '</div>';
                            echo '<img style="display:none" class="w-100 rounded-circle" alt="Profile Photo" width="30">';
                            ?>
                            <script type="text/javascript">
                                __cimg("user_imgtil<?php echo $current_user['id']; ?>", "<?php echo $current_user['id']; ?>");
                            </script>
                        </div>
                        <!-- User profile text-->
                        <div class="profile-text py-1">
                            <a href="javascript:;" class="dropdown-toggle link u-dropdown" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true" style="white-space:pre-wrap!important"><?php echo $current_user['name'] ?> <span class="caret"></span></a>
                            <div class="dropdown-menu animated flipInY">
                                <?php echo $this->Html->link('<i data-feather="calendar" class="feather-sm text-' . $rounds[rand(0, 10)] . ' me-1 ms-1"></i> My Attendance', array('controller' => 'attendances', 'action' => 'my_attendance'), array('class' => 'dropdown-item', 'escape' => false)); ?>
                                <?php echo $this->Html->link('<i data-feather="home" class="feather-sm text-' . $rounds[rand(0, 10)] . ' me-1 ms-1"></i> Meeting Booking', array('controller' => 'meetingroombookings', 'action' => 'add'), array('class' => 'dropdown-item', 'escape' => false)); ?>

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
                        </div>
                    </div>

                </li>

                <?php

                if (isset($perms['users']['dashboard']) && !is_numeric($perms['users']['dashboard'])) {
                    echo "<li class='sidebar-item'>" . $this->Html->link('<i class="fa fa-tachometer-alt"></i> <span class="hide-menu">Dashboard</span>', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false, 'class' => 'sidebar-link waves-effect waves-dark')) . "</li>";
                } else {
                    if (isset($perms['users']['my_dashboard']) && !is_numeric($perms['users']['my_dashboard'])) {
                        echo "<li class='sidebar-item'>" . $this->Html->link('<i class="fa fa-tachometer-alt"></i> <span class="hide-menu">Dashboard</span>', array('controller' => 'users', 'action' => 'my_dashboard'), array('escape' => false, 'class' => 'sidebar-link waves-effect waves-dark')) . "</li>";
                    }
                }

                ?>


                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:;" aria-expanded="false">
                        <i class="fa-solid fa-gear"></i> <span class="hide-menu">Management</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <?php
                        if (isset($perms['roles']['index']) && !is_numeric($perms['roles']['index'])) {
                            echo "<li class='sidebar-item'>" . $this->Html->link('<i class="fa-regular fa-rectangle-list"></i> <span class="hide-menu">Role</span>', array('controller' => 'roles', 'action' => 'index'), array('escape' => false, 'class' => 'sidebar-link')) . "</li>";
                        }
                        if (isset($perms['configs']['index']) && !is_numeric($perms['configs']['index'])) {
                            echo "<li class='sidebar-item'>" . $this->Html->link('<i class="fa fa-cog"></i> <span class="hide-menu">Config</span>', array('controller' => 'configs', 'action' => 'index'), array('escape' => false, 'class' => 'sidebar-link')) . "</li>";
                        }
                        

                        if (isset($perms['travellers']['index']) && !is_numeric($perms['travellers']['index'])) {
                            echo "<li class='sidebar-item'>" . $this->Html->link('<i class="fa-solid fa-industry"></i> <span class="hide-menu">Traveller</span>', array('controller' => 'travellers', 'action' => 'index'), array('escape' => false, 'class' => 'sidebar-link')) . "</li>";
                        }

                        if (isset($perms['travelexpenses']['index']) && !is_numeric($perms['travelexpenses']['index'])) {
                            echo "<li class='sidebar-item'>" . $this->Html->link('<i class="fa-solid fa-industry"></i> <span class="hide-menu">Travel Expenses</span>', array('controller' => 'travelexpenses', 'action' => 'index'), array('escape' => false, 'class' => 'sidebar-link')) . "</li>";
                        }
                        if (isset($perms['travelhistories']['index']) && !is_numeric($perms['travelhistories']['index'])) {
                            echo "<li class='sidebar-item'>" . $this->Html->link('<i class="fa-solid fa-industry"></i> <span class="hide-menu">Travel Histories</span>', array('controller' => 'travelhistories', 'action' => 'index'), array('escape' => false, 'class' => 'sidebar-link')) . "</li>";
                        }

                        if (isset($perms['visahistories']['index']) && !is_numeric($perms['visahistories']['index'])) {
                            echo "<li class='sidebar-item'>" . $this->Html->link('<i class="fa-solid fa-industry"></i> <span class="hide-menu">Visa Histories</span>', array('controller' => 'visahistories', 'action' => 'index'), array('escape' => false, 'class' => 'sidebar-link')) . "</li>";
                        }

                        if (isset($perms['kpibuyers']['index']) && !is_numeric($perms['kpibuyers']['index'])) {
                            echo "<li class='sidebar-item'>" . $this->Html->link('<i class="fa-solid fa-bag-shopping"></i> <span class="hide-menu">Health Records</span>', array('controller' => 'kpibuyers', 'action' => 'index'), array('escape' => false, 'class' => 'sidebar-link')) . "</li>";
                        }
                        if (isset($perms['kpidepartments']['index']) && !is_numeric($perms['kpidepartments']['index'])) {
                            echo "<li class='sidebar-item'>" . $this->Html->link('<i class="fa-solid fa-person-half-dress"></i> <span class="hide-menu">Department</span>', array('controller' => 'kpidepartments', 'action' => 'index'), array('escape' => false, 'class' => 'sidebar-link')) . "</li>";
                        }
                        if (isset($perms['users']['index']) && !is_numeric($perms['users']['index'])) {
                            echo "<li class='sidebar-item'>" . $this->Html->link('<i class="fa-regular fa-user"></i> <span class="hide-menu">User</span>', array('controller' => 'users', 'action' => 'index'), array('escape' => false, 'class' => 'sidebar-link')) . "</li>";
                        }
                        if (isset($perms['logs']['index']) && !is_numeric($perms['logs']['index'])) {
                            echo "<li class='sidebar-item'>" . $this->Html->link('<i class="fa fa-cogs"></i> <span class="hide-menu">Log</span>', array('controller' => 'logs', 'action' => 'index'), array('escape' => false, 'class' => 'sidebar-link')) . "</li>";
                        }

                        ?>
                    </ul>
                </li>

                <?php
                if (isset($perms['poinformations']['index']) && !is_numeric($perms['poinformations']['index'])) {
                    echo "<li class='sidebar-item'>" . $this->Html->link('<i class="fa-solid fa-industry"></i> <span class="hide-menu">PO Information</span>', array('controller' => 'poinformations', 'action' => 'index'), array('escape' => false, 'class' => 'sidebar-link')) . "</li>";
                }
                if (isset($perms['purchasecontracts']['index']) && !is_numeric($perms['purchasecontracts']['index'])) {
                    echo "<li class='sidebar-item'>" . $this->Html->link('<i class="fa-solid fa-industry"></i> <span class="hide-menu">Purchase Contract</span>', array('controller' => 'purchasecontracts', 'action' => 'index'), array('escape' => false, 'class' => 'sidebar-link')) . "</li>";
                }
                if (isset($perms['purchasecontracts']['proforma_list']) && !is_numeric($perms['purchasecontracts']['proforma_list'])) {
                    echo "<li class='sidebar-item'>" . $this->Html->link('<i class="fa-solid fa-industry"></i> <span class="hide-menu">Proforma List</span>', array('controller' => 'purchasecontracts', 'action' => 'proforma_list'), array('escape' => false, 'class' => 'sidebar-link')) . "</li>";
                }
                // if (isset($perms['samples']['index']) && !is_numeric($perms['samples']['index'])) {
                //     echo "<li class='sidebar-item'>" . $this->Html->link('<i class="fa-solid fa-industry"></i> <span class="hide-menu">Sample</span>', array('controller' => 'samples', 'action' => 'index'), array('escape' => false, 'class' => 'sidebar-link')) . "</li>";
                // }
                ?>

                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:;" aria-expanded="false">
                        <i class="fa-solid fa-chart-line"></i> <span class="hide-menu">Report</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <?php
                        // if (isset($perms["preproductions"]["daily_update_report"]) && !is_numeric($perms["preproductions"]["daily_update_report"])) {
                        //     echo "<li class='sidebar-item'>" . $this->Html->link('<i class="fa-solid fa-list"></i> <span class="hide-menu">Daily Production Report</span>', array('controller' => 'preproductions', 'action' => 'daily_update_report'), array('escape' => false, 'class' => 'sidebar-link')) . "</li>";
                        // }
                        // if (isset($perms["preproductions"]["traceability_report"]) && !is_numeric($perms["preproductions"]["traceability_report"])) {
                        //     echo "<li class='sidebar-item'>" . $this->Html->link('<i class="fa-solid fa-magnifying-glass-chart"></i> <span class="hide-menu">Traceability Report</span>', array('controller' => 'preproductions', 'action' => 'traceability_report'), array('escape' => false, 'class' => 'sidebar-link')) . "</li>";
                        // }
                        // if (isset($perms["preproductions"]["audit_po_list"]) && !is_numeric($perms["preproductions"]["audit_po_list"])) {
                        //     echo "<li class='sidebar-item'>" . $this->Html->link('<i class="fa-solid fa-magnifying-glass-chart"></i> <span class="hide-menu"> Audit PO List</span>', array('controller' => 'preproductions', 'action' => 'audit_po_list'), array('escape' => false, 'class' => 'sidebar-link')) . "</li>";
                        // }
                        // if (isset($perms["preproductions"]["traceability_pending_report"]) && !is_numeric($perms["preproductions"]["traceability_pending_report"])) {
                        //     echo "<li class='sidebar-item'>" . $this->Html->link('<i class="fa-solid fa-magnifying-glass-plus"></i> <span class="hide-menu">Traceability Pending Report</span>', array('controller' => 'preproductions', 'action' => 'traceability_pending_report'), array('escape' => false, 'class' => 'sidebar-link')) . "</li>";
                        // }
                        // if (isset($perms["fristatuses"]["shipment_report"]) && !is_numeric($perms["fristatuses"]["shipment_report"])) {
                        //     echo "<li class='sidebar-item'>" . $this->Html->link('<i class="fa-solid fa-plane-departure"></i> <span class="hide-menu">Shipment Report</span>', array('controller' => 'fristatuses', 'action' => 'shipment_report'), array('escape' => false, 'class' => 'sidebar-link')) . "</li>";
                        // }
                        // if (isset($perms["preproductions"]["production_report"]) && !is_numeric($perms["preproductions"]["production_report"])) {
                        //     echo "<li class='sidebar-item'>" . $this->Html->link('<i class="fa-solid fa-chart-area"></i> <span class="hide-menu">In Production Report</span>', array('controller' => 'preproductions', 'action' => 'production_report'), array('escape' => false, 'class' => 'sidebar-link')) . "</li>";
                        // }
                        // if (isset($perms["preproductions"]["merchandising_report"]) && !is_numeric($perms["preproductions"]["merchandising_report"])) {
                        //     echo "<li class='sidebar-item'>" . $this->Html->link('<i class="fa-solid fa-compass-drafting"></i> <span class="hide-menu">Merchandising Report</span>', array('controller' => 'preproductions', 'action' => 'merchandising_report'), array('escape' => false, 'class' => 'sidebar-link')) . "</li>";
                        // }
                        // if (isset($perms["preproductions"]["order_cancel_request"]) && !is_numeric($perms["preproductions"]["order_cancel_request"])) {
                        //     echo "<li class='sidebar-item'>" . $this->Html->link('<i class="fa-regular fa-circle-xmark"></i> <span class="hide-menu">PO Cancel Request</span>', array('controller' => 'preproductions', 'action' => 'order_cancel_request'), array('escape' => false, 'class' => 'sidebar-link')) . "</li>";
                        // }
                        // if (isset($perms["preproductions"]["cancelled_order_report"]) && !is_numeric($perms["preproductions"]["cancelled_order_report"])) {
                        //     echo "<li class='sidebar-item'>" . $this->Html->link('<i class="fa-regular fa-trash-can"></i> <span class="hide-menu">Cancelled Order Report</span>', array('controller' => 'preproductions', 'action' => 'cancelled_order_report'), array('escape' => false, 'class' => 'sidebar-link')) . "</li>";
                        // }
                        ?>
                    </ul>
                </li>


            </ul>
        </nav>

        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <!-- Bottom points-->
    <div class="sidebar-footer">
        <!-- item-->
        <a href="" class="link" data-bs-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
        <!-- item-->
        <a href="https://outlook.office.com/mail/" target="_blank" class="link" data-bs-toggle="tooltip" title="Email"><i class="fa fa-envelope"></i></a>
        <!-- item-->
        <?php echo $this->Html->link('<i class="fa fa-power-off"></i>', array('controller' => 'users', 'action' => 'logout'), array('class' => 'link', 'data-bs-toggle' => 'tooltip', 'escape' => false, 'class' => 'sidebar-link', 'title' => 'Logout')); ?>
    </div>
    <!-- End Bottom points-->
</aside>