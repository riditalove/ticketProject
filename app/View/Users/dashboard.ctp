
<?php echo $this->Html->script(array('highcharts', 'highchart-variable-pie', 'highchart-exporting')); ?>
<style>
    .font-light .fa {
        margin-top: -14px;
        font-size: 45px;
    }
    .rounded-circle.big {font-size:130%}
    .rounded-circle.big a{
        color: #fff;
    }
</style>
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-6 col-6 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
        <div class="col-md-6 col-6 text-right">

        </div>
    </div>

    <?php echo $this->Form->create('Src', array('class' => 'form-horizontal')); ?>
    <div class="row">
        <div class="col-lg-1 col-md-1">Company</div>
        <div class="col-lg-2 col-md-2"><?php echo $this->Form->input('company_id', array('label' => false)); ?></div>
        <div class="col-lg-1 col-md-1">Date</div>
        <div class="col-lg-2 col-md-2"><?php echo $this->Form->input('date', array('label' => false, 'class' => 'datepicker')); ?></div>
        <div class="col-lg-1 col-md-1"><?php echo $this->Form->button('Search', array('class' => 'btn btn-sm btn-success', 'name' => 'btnsrc')); ?></div>
        <div class="col-lg-5 col-md-5 text-right"><?php echo $this->Html->link('<i class="fa fa-user"></i> My Dashboard', array('action' => 'my_dashboard'), array('escape' => false, 'class' => 'btn btn-success btn-sm pull-right')); ?></div>
    </div>
    <?php
    echo $this->Form->end();

    $weekend = explode(',', $companyschedule['Companyschedule']['weekend']);

    $arrholiday = array();
    foreach ($holidays as $k => $holiday) {
        $arrholiday[$holiday['Holiday']['hdate']] = $holiday['Holiday']['title'];
    }

    $ttl = "";
    if (in_array(date('w', strtotime($this->request->data['Src']['date'])), $weekend)) {
        $ttl = '<i class="fa fa-info-circle text-warning" data-bs-toggle="tooltip" title="Weekend"></i>';
    }
    if (isset($arrholiday[$this->request->data['Src']['date']])) {
        $ttl = '<i class="fa fa-info-circle text-warning" data-bs-toggle="tooltip" title="' . $arrholiday[$this->request->data['Src']['date']] . '"></i>';
    }
    ?>

    <hr />

    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <?php
                            $overall = ($totusers > 0 ? round($totuser / $totusers * 100, 2) : 0);
                            ?>
                            <h4 class="card-title">Total Employee</h4>
                            <div class="row">
                                <h2 class="col-lg-6 col-md-6"><?php echo $totuser == 0 ? '0' : $this->Html->link($totuser, array('action' => 'employeelist', $this->request->data['Src']['company_id'], $this->request->data['Src']['date']), array('target' => 'blank', 'escape' => false)); ?></h2>
                                <h2 class="font-light m-t-10 text-right col-lg-6 col-md-6"><i class="fa fa-users text-success"></i></h2>
                            </div>
                            <span class="text-success"><?php echo $overall; ?>%</span>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width:<?php echo $overall; ?>%;height:7px" aria-valuenow="<?php echo $overall; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <?php
                            $present = ($totuser > 0 ? round($totalpresent / $totuser * 100, 2) : 0);
                            ?>
                            <h4 class="card-title">Present <?php echo $ttl; ?></h4>
                            <div class="row">
                                <h2 class="col-lg-6 col-md-6"><?php echo $totalpresent == 0 ? '0' : $this->Html->link($totalpresent, array('action' => 'present_employee', $this->request->data['Src']['company_id'], $this->request->data['Src']['date']), array('target' => 'blank', 'escape' => false)); ?></h2>
                                <h2 class="font-light m-t-10 text-right col-lg-6 col-md-6"><i class="fa fa-check-square text-purple"></i></h2>
                            </div>
                            <span class="text-purple"><?php echo $present; ?>%</span>
                            <div class="progress">
                                <div class="progress-bar bg-purple" role="progressbar" style="width:<?php echo $present; ?>%;height:7px" aria-valuenow="<?php echo $present; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <?php
                            $late = ($totuser > 0 ? round($latepresent / $totuser * 100, 2) : 0);
                            ?>
                            <h4 class="card-title">Late <?php echo $ttl; ?></h4>
                            <div class="row">
                                <h2 class="col-lg-6 col-md-6"><?php echo $latepresent == 0 ? '0' : $this->Html->link($latepresent, array('action' => 'late_employee', $this->request->data['Src']['company_id'], $this->request->data['Src']['date']), array('target' => 'blank', 'escape' => false)); ?></h2>
                                <h2 class="font-light m-t-10 text-right col-lg-6 col-md-6"><i class="fa fa-clock text-warning"></i></h2>
                            </div>
                            <span class="text-warning"><?php echo $late; ?>%</span>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" style="width:<?php echo $late; ?>%;height:7px" aria-valuenow="<?php echo $late; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                            </div> 
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <?php
                            $vacation = ($totuser > 0 ? round($totleave / $totuser * 100, 2) : 0);
                            $ttl2 = $weekendt > 0 ? '<i class="fa fa-info-circle text-warning" data-bs-toggle="tooltip" title="In Wekend:' . $weekendt . '"></i>' : '';
                            ?>
                            <h4 class="card-title">Leave <?php echo $ttl2; ?></h4>
                            <div class="row">
                                <h2 class="col-lg-6 col-md-6"><?php echo $totleave == 0 ? '0' : $this->Html->link($totleave, array('action' => 'leave_employee', $this->request->data['Src']['company_id'], $this->request->data['Src']['date']), array('target' => 'blank', 'escape' => false)); ?></h2>
                                <h2 class="font-light m-t-10 text-right col-lg-6 col-md-6"><i class="fa fa-calendar-alt text-info"></i></h2>
                            </div>
                            <span class="text-info"><?php echo $vacation; ?>%</span>
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" style="width:<?php echo $vacation; ?>%;height:7px" aria-valuenow="<?php echo $vacation; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <?php
                            if (in_array(date('w', strtotime($this->request->data['Src']['date'])), $weekend) || isset($arrholiday[$this->request->data['Src']['date']])) {
                                $earlyleave = 0;
                            }
                            $early = ($totuser > 0 ? round($earlyleave / $totuser * 100, 2) : 0);
                            ?>
                            <h4 class="card-title">Early Leave <?php echo $ttl; ?></h4>
                            <div class="row">
                                <h2 class="col-lg-6 col-md-6"><?php echo $earlyleave == 0 ? '0' : $this->Html->link($earlyleave, array('action' => 'earlyleave_employee', $this->request->data['Src']['company_id'], $this->request->data['Src']['date']), array('target' => 'blank', 'escape' => false)); ?></h2>
                                <h2 class="font-light m-t-10 text-right col-lg-6 col-md-6"><i class="fa fa-history text-blue"></i></h2>
                            </div>
                            <span class="text-blue"><?php echo $early; ?>%</span>
                            <div class="progress">
                                <div class="progress-bar bg-blue" role="progressbar" style="width:<?php echo $early; ?>%;height:7px" aria-valuenow="<?php echo $early; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <?php
                            if (in_array(date('w', strtotime($this->request->data['Src']['date'])), $weekend) || isset($arrholiday[$this->request->data['Src']['date']])) {
                                $totalnabsent = 0;
                            }
                            $absent = ($totusers > 0 ? round($totalnabsent / $totusers * 100, 2) : 0);
                            ?>
                            <h4 class="card-title">Absent <?php echo $ttl; ?></h4>
                            <div class="row">
                                <h2 class="col-lg-6 col-md-6"><?php echo $totalnabsent == 0 ? '0' : $this->Html->link($totalnabsent, array('action' => 'absent_employee', $this->request->data['Src']['company_id'], $this->request->data['Src']['date']), array('target' => 'blank', 'escape' => false)); ?></h2>
                                <h2 class="font-light m-t-10 text-right col-lg-6 col-md-6"><i class="fa fa-times text-danger"></i></h2>
                            </div>
                            <span class="text-danger"><?php echo $absent; ?>%</span>
                            <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" style="width:<?php echo $absent; ?>%;height:7px" aria-valuenow="<?php echo $absent; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            $depts = $valu = $vala = "";
            $deptids = $absids = array();
            foreach ($deptusers as $absents):
                $deptids[$absents['Department']['id']] = $absents['0']['ids'];
                $depts .= "'" . str_replace(' ', '_', $absents['Department']['name']) . "',";
                $valu .= $absents['0']['ids'] . ",";
            endforeach;

            foreach ($deptabsents as $absents):
                $absids[$absents['Department']['id']] = $absents['0']['ids'];
            endforeach;

            foreach ($deptids as $key => $deptid):
                if (isset($absids[$key])) {
                    $vala .= $absids[$key] . ",";
                } else {
                    $vala .= "0,";
                }
            endforeach;
            if ($depts == "") {
                $depts = "'Nil'";
                $valu = "0";
                $vala = "0";
            }
            ?>
            <div class="card">
                <div class="card-body">
                    <div id="bar-chart1" style="height:370px"></div>
                </div>
            </div>

            <?php
            $recs = $rejs = array();
            foreach ($recruits as $recruit):
                $recs[$recruit[0]['mn']] = $recruit[0]['ids'];
            endforeach;

            foreach ($resignees as $resignee):
                $rejs[$resignee[0]['mn']] = $resignee[0]['ids'];
            endforeach;

            foreach ($months as $key => $month):
                if (empty($recs[$key])) {
                    $recs[$key] = '0';
                }
                if (empty($rejs[$key])) {
                    $rejs[$key] = '0';
                }
            endforeach;
            ksort($recs);
            ksort($rejs);
            ?>

            <div class="card">
                <div class="card-body">
                    <div id="bar-chart2" style="height:300px"></div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $this->Html->image('mic.png', array('class' => 'img-circle', 'alt' => 'Image', 'width' => '30')); ?> Announcement</h4>
                    <div class="message-widget message-scroll scrollable">
                        <div>
                            <?php
                            foreach ($announcement as $announcelist) {
                                echo '<div class="alert alert-light-' . $rounds[$announcelist['Announcement']['round']] . ' alert-dismissible fade show" role="alert" style="margin-left:0;margin-right:0">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                <h3 class="text-' . $rounds[$announcelist['Announcement']['round']] . '"><i class="fa fa-exclamation-circle"></i> ' . $announcelist['Announcement']['title'] . '</h3> 
                                ' . nl2br($announcelist['Announcement']['description']) . '
                                </div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h4>Important Documents</h4>
                    <div class="row p-t-10 p-b-10">
                        <!-- Column -->
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <ul class="font-16">
                                <?php
                                $sno = 0;
                                foreach ($ebooks as $ebook) {
                                    ?>
                                    <li>
                                        <?php
                                        $files = IMAGES . 'eb/' . $ebook['Ebook']['id'] . '.' . $ebook['Ebook']['ext'];
                                        if (is_file($files)) {
                                            if ($ebook['Ebook']['ext'] == 'mp4' || $ebook['Ebook']['ext'] == '3gpp') {
                                                echo $this->Html->link(
                                                        $this->Html->image('mp4.png', array('alt' => '', 'title' => 'Download', 'width' => '50', 'class' => 'ebook-img')) . $ebook['Ebook']['title'], array('controller' => 'ebooks', 'action' => 'download', $ebook['Ebook']['id']), array('escape' => false)
                                                );
                                            } elseif ($ebook['Ebook']['ext'] == 'doc' || $ebook['Ebook']['ext'] == 'docx') {
                                                echo $this->Html->link(
                                                        $this->Html->image('doc.png', array('alt' => '', 'title' => 'Download', 'width' => '50', 'class' => 'ebook-img')) . $ebook['Ebook']['title'], array('controller' => 'ebooks', 'action' => 'download', $ebook['Ebook']['id']), array('escape' => false)
                                                );
                                            } elseif ($ebook['Ebook']['ext'] == 'xls' || $ebook['Ebook']['ext'] == 'xlsx' || $ebook['Ebook']['ext'] == 'csv') {
                                                echo $this->Html->link(
                                                        $this->Html->image('xls.png', array('alt' => '', 'title' => 'Download', 'width' => '50', 'class' => 'ebook-img')) . $ebook['Ebook']['title'], array('controller' => 'ebooks', 'action' => 'download', $ebook['Ebook']['id']), array('escape' => false)
                                                );
                                            } elseif ($ebook['Ebook']['ext'] == 'ppt' || $ebook['Ebook']['ext'] == 'pptx') {
                                                echo $this->Html->link(
                                                        $this->Html->image('ppt.png', array('alt' => '', 'title' => 'Download', 'width' => '50', 'class' => 'ebook-img')) . $ebook['Ebook']['title'], array('controller' => 'ebooks', 'action' => 'download', $ebook['Ebook']['id']), array('escape' => false)
                                                );
                                            } elseif ($ebook['Ebook']['ext'] == 'pdf') {
                                                echo $this->Html->link(
                                                        $this->Html->image('pdf.png', array('alt' => '', 'title' => 'Download', 'width' => '50', 'class' => 'ebook-img')) . $ebook['Ebook']['title'], array('controller' => 'ebooks', 'action' => 'download', $ebook['Ebook']['id']), array('escape' => false)
                                                );
                                            } else {
                                                if (in_array(strtolower($ebook['Ebook']['ext']), array('jpg', 'jpeg', 'png', 'bmp', 'gif', 'webp'))) {
                                                    $img = 'uf/' . $ebook['Ebook']['id'] . '.' . $ebook['Ebook']['ext'];
                                                } else {
                                                    $img = $ebook['Ebook']['id'] . '.' . $ebook['Ebook']['ext'];
                                                }
                                                echo $this->Html->link(
                                                        $this->Html->image($img, array('alt' => '', 'title' => 'Download', 'width' => '50', 'class' => 'ebook-img')) . $ebook['Ebook']['title'], array('controller' => 'ebooks', 'action' => 'download', $ebook['Ebook']['id']), array('escape' => false)
                                                );
                                            }
                                        } else {
                                            echo $this->Html->image('no_img.jpg', array('alt' => '', 'data-bs-toggle' => 'tooltip', 'title' => 'No Document', 'width' => '50', 'class' => 'ebook-img')) . $ebook['Ebook']['title'];
                                        }
                                        ?>
                                    </li>                    
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-12 text-center align-self-center">
                            <h1><i class="fa fa-book"></i></h1>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card">
                        <?php echo $this->Html->image('hbd.png', array('class' => 'card-img-top img-responsive', 'alt' => 'HBD')); ?>
                        <div class="card-body">
                            <!--<i class="fa fa-birthday-cake" style="font-size:30px;color:#2eaf3d;padding:3px;border-radius:4px"></i>--> 
                            <h4 class="card-title">Birthday Wishes</h4>
                            <div class="message-box message-scroll scrollable">

                                <div class="message-widget">
                                    <?php
                                    foreach ($birthday as $bdaylist) {
                                        $indicator = (substr($bdaylist['User']['date_of_birth'], 5) == date('m-d') ? "<span class='profile-status online pull-right'></span>" : "<span class='profile-status away pull-right'></span>");
                                        if (substr($bdaylist['User']['date_of_birth'], 5) == date('m-d')) {
                                            $indicator = "<span class='profile-status online pull-right'></span>";
                                            $status = "<span class='badge bg-success'>Happy birthday to you</span>";
                                        } else {
                                            $indicator = "<span class='profile-status away pull-right'></span>";
                                            $status = "<span class='badge bg-warning'>Happy birthday</span>";
                                        }

                                        $img = '<div id="user_img' . $bdaylist['User']['id'] . '">
                                                 <div class="round d-inline-block text-white text-center rounded-circle bg-' . $rounds[rand(0, 10)] . '">' . substr(trim($bdaylist['User']['name']), 0, 1) . '</div>
                                                 <img style="display:none" class="img-responsive img-circle border border-2 border-white" alt="User Image" width="40">
                                                 <script type="text/javascript">__cimg("user_img' . $bdaylist['User']['id'] . '", "' . $bdaylist['User']['id'] . '");</script>
                                                </div>';

                                        echo $this->Html->link(
                                                "<div class='user-img'>$img $indicator </div>
                                        <div class='mail-contnet'>
                                            <h5>" . $bdaylist['User']['name'] . "</h5> $status <span class='time'>" . date('F, d', strtotime($bdaylist['User']['date_of_birth'])) . "</span> 
                                        </div>"
                                                , array('action' => 'view', $bdaylist['User']['id']), array('target' => 'blank', 'escape' => false)
                                        );
                                        ?>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card">
                        <?php echo $this->Html->image('hh.jpg', array('class' => 'card-img-top img-responsive', 'alt' => 'HD')); ?>
                        <div class="card-body">
                            <h4 class="card-title">Next Holidays</h4>

                            <div class="message-box">

                                <div class="message-widget message-scroll scrollable">
                                    <?php
                                    foreach ($holidays as $k => $holiday) {
                                        if ($k == 0) {
                                            $indicator = "<h5 class='badge bg-success'>" . $holiday['Holiday']['title'] . "</h5>";
                                            $status = "<span class='time'>" . date('F, d', strtotime($holiday['Holiday']['hdate'])) . "</span>";
                                        } else {
                                            $indicator = "<h5 class='badge bg-warning'>" . $holiday['Holiday']['title'] . "</h5>";
                                            $status = "<span class='time'>" . date('F, d', strtotime($holiday['Holiday']['hdate'])) . "</span>";
                                        }
                                        echo "<a href='javascript:;'>"
                                        . "<div class='user-img'>" . $this->Html->image('hh.png', array('alt' => 'HD', 'width' => '30')) . "</div>"
                                        . "<div class='mail-contnet'>" . $indicator . "<br>" . $status . "</div>"
                                        . "</a>";
                                        ?>
                                    <?php } ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <?php
                    if (count($dashbanner) > 0) {
                        ?>
                        <div class="card">
                            <div class="card-body">
                                <?php
                                $files = IMAGES . 'b/' . $dashbanner['Flashbanner']['id'] . '.' . $dashbanner['Flashbanner']['ext'];
                                if (is_file($files)) {
                                    if ($dashbanner['Flashbanner']['ext'] == 'mp4') {
                                        echo '<video width="100%" height="100%" controls autoplay>
                                            <source src="' . '../img/b/' . $dashbanner['Flashbanner']['id'] . '.' . $dashbanner['Flashbanner']['ext'] . '" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>';
                                    } else {
                                        echo $this->Html->image('b/' . $dashbanner['Flashbanner']['id'] . '.' . $dashbanner['Flashbanner']['ext'], array('alt' => $dashbanner['Flashbanner']['title'], 'width' => '100%'));
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <?php
                    }
                    ?>

                    <div class="card">
                        <?php echo $this->Html->image('temp.jpg', array('class' => 'card-img-top img-responsive', 'alt' => 'temp')); ?>
                        <div class="message-box">
                            <br />
                            <div class="message-widget message-scroll scrollable">
                                <?php
                                foreach ($top10temps as $key => $top10temp) {
                                    $temp = '<div class="tempinout">';
                                    if (MAX_NORMAL_TEMPERATURE < $top10temp[1]) {
                                        $temp .= $this->Html->image('tb.png', array('alt' => 'User Image', 'height' => '40'));
                                        $temp .= '<span class="text-danger"> ' . $top10temp[1] . '&deg; F</span>';
                                    } else {
                                        $temp .= $this->Html->image('tg.png', array('alt' => 'User Image', 'height' => '40'));
                                        $temp .= '<span style="color:#000000"> ' . $top10temp[1] . '&deg; F</span>';
                                    }
                                    $temp .= '</div>';

                                    $img = '<div id="user_img' . $key . '">
                                                <div class="round d-inline-block text-white text-center rounded-circle bg-' . $rounds[rand(0, 10)] . '">' . substr(trim($top10temp[2]), 0, 1) . '</div>
                                                <img style="display:none" class="img-responsive img-circle border border-2 border-white" alt="User Image" width="40">
                                                <script type="text/javascript">__cimg("user_img' . $key . '", "' . $key . '");</script>
                                            </div>';

                                    echo $this->Html->link(
                                            "<div class='user-img'>$img</div>
                                        <div class='mail-contnet' style='width:55%'>
                                            <h5>" . $top10temp[2] . "</h5> <span class='time'>" . date('H:i A', strtotime($top10temp[0])) . "</span> 
                                        </div>
                                        $temp"
                                            , array('action' => 'view', $key), array('target' => 'blank', 'escape' => false)
                                    );
                                    ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                    <div id="attngraph" style="width:100%"></div>
                    <br>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <?php
                            $duty = ($totuser > 0 ? round($onduty / $totuser * 100, 2) : 0);
                            ?>
                            <h4 class="card-title">On Duty</h4>
                            <div class="row">
                                <h2 class="col-lg-6 col-md-6"><?php echo $onduty == 0 ? '0' : $this->Html->link($onduty, array('action' => 'onduty_employee', $this->request->data['Src']['company_id'], $this->request->data['Src']['date']), array('target' => 'blank', 'escape' => false)); ?></h2>
                                <h2 class="font-light m-t-10 text-right col-lg-6 col-md-6"><i class="fa fa-calendar-check text-success"></i></h2>
                            </div>
                            <span class="text-success"><?php echo $duty; ?>%</span>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width:<?php echo $duty; ?>%;height:7px" aria-valuenow="<?php echo $duty; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <?php
                            $manual = ($totuser > 0 ? round($manualatten / $totuser * 100, 2) : 0);
                            ?>
                            <h4 class="card-title">Manual Attn.</h4>
                            <div class="row">
                                <h2 class="col-lg-6 col-md-6"><?php echo $manualatten == 0 ? '0' : $this->Html->link($manualatten, array('action' => 'manualattn_employee', $this->request->data['Src']['company_id'], $this->request->data['Src']['date']), array('target' => 'blank', 'escape' => false)); ?></h2>
                                <h2 class="font-light m-t-10 text-right col-lg-6 col-md-6"><i class="fa fa-user-plus text-success"></i></h2>
                            </div>
                            <span class="text-success"><?php echo $manual; ?>%</span>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width:<?php echo $manual; ?>%;height:7px" aria-valuenow="<?php echo $manual; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div id="myCarousel1" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">

                            <div class="carousel-item active flex-column">
                                <div class="card bg-info">
                                    <div class="card-body">
                                        <i class="fa fa-clock font-30 text-white"></i>
                                        <p class="text-white">Top 10 Defaulter</p>
                                        <h3 class="text-white"><span class="font-bold">Late</span></h3>
                                        <div class="mt-3">
                                            <?php echo $this->Html->link('<button class="btn btn-secondary b-0 waves-effect waves-light mt-3">Details</button>', array('action' => 'top10_late_employee', $this->request->data['Src']['company_id'], $this->request->data['Src']['date']), array('target' => 'blank', 'escape' => false)); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item flex-column">
                                <div class="card bg-secondary">
                                    <div class="card-body">
                                        <i class="fa fa-calendar-times font-30 text-white"></i>
                                        <p class="text-white">Top 10 Defaulter</p>
                                        <h3 class="text-white"><span class="font-bold">Absent</span></h3>
                                        <div class="mt-3">
                                            <?php echo $this->Html->link('<button class="btn btn-secondary b-0 waves-effect waves-light mt-3">Details</button>', array('action' => 'top10_absent_employee', $this->request->data['Src']['company_id'], $this->request->data['Src']['date']), array('target' => 'blank', 'escape' => false)); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item flex-column">
                                <div class="card bg-primary">
                                    <div class="card-body">
                                        <i class="fa fa-history font-30 text-white"></i>
                                        <p class="text-white">Top 10 Defaulter</p>
                                        <h3 class="text-white"><span class="font-bold">Early Leave</span></h3>
                                        <div class="mt-3">
                                            <?php echo $this->Html->link('<button class="btn btn-secondary b-0 waves-effect waves-light mt-3">Details</button>', array('action' => 'top10_early_employee', $this->request->data['Src']['company_id'], $this->request->data['Src']['date']), array('target' => 'blank', 'escape' => false)); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div id="myCarousel2" class="carousel slide vert" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active flex-column">
                                <div class="card bg-success">
                                    <div class="card-body">
                                        <i class="fa fa-user-plus font-30 text-white"></i>
                                        <p class="text-white">Latest</p>
                                        <h3 class="text-white"><span class="font-bold">Joinees</span></h3>
                                        <div class="mt-3">
                                            <?php echo $this->Html->link('<button class="btn btn-secondary b-0 waves-effect waves-light mt-3">Details</button>', array('action' => 'new_recruits', $this->request->data['Src']['company_id'], $this->request->data['Src']['date']), array('target' => 'blank', 'escape' => false)); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item flex-column">
                                <div class="card bg-info">
                                    <div class="card-body">
                                        <i class="fa fa-user-times font-30 text-white"></i>
                                        <p class="text-white">Latest</p>
                                        <h3 class="text-white"><span class="font-bold">Resignees</span></h3>
                                        <div class="mt-3">
                                            <?php echo $this->Html->link('<button class="btn btn-secondary b-0 waves-effect waves-light mt-3">Details</button>', array('action' => 'recent_resignees', $this->request->data['Src']['company_id'], $this->request->data['Src']['date']), array('target' => 'blank', 'escape' => false)); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <?php
                if (count($foodsetting) > 0) {
                    $files = IMAGES . 'f/' . $foodsetting['Foodsetting']['regular'] . '.png';
                    if (is_file($files)) {
                        echo $this->Html->image('f/' . $foodsetting['Foodsetting']['regular'] . '.png', array('class' => 'card-img-top img-responsive', 'alt' => 'User Image'));
                    } else {
                        echo $this->Html->image('food.jpg', array('class' => 'card-img-top img-responsive', 'alt' => 'Food Image'));
                    }
                } else {
                    echo $this->Html->image('food.jpg', array('class' => 'card-img-top img-responsive', 'alt' => 'Food Image'));
                }
                ?>
                <div class="card-body">
                    <h4>Today's Food</h4>
                    <?php if (count($foodsetting) > 0) { ?>
                        <ul class="list-inline font-14">
                            <li class="pl-0"><?php echo date('d M Y', strtotime($foodsetting['Foodsetting']['period'] . '-' . $foodsetting['Foodsetting']['day'])) ?></li>
                            <!--<li><a href="javascript:;" class="link">3 Comment</a></li>-->
                        </ul>
                        <h4 class="font-normal"><b>Regular:</b> <?php echo $arrfood[$foodsetting['Foodsetting']['regular']][0] . '[' . $arrfood[$foodsetting['Foodsetting']['regular']][1] . ']' ?></h4>
                        <h4 class="font-normal"><b>Continental:</b> <?php echo $arrfood[$foodsetting['Foodsetting']['continental']][0] . '[' . $arrfood[$foodsetting['Foodsetting']['continental']][1] . ']' ?></h4>
                        <h5 class="mb-0 mt-2"><b>Dessert:</b> <?php echo $arrfood[$foodsetting['Foodsetting']['dessert']][0] . '[' . $arrfood[$foodsetting['Foodsetting']['dessert']][1] . ']' ?></h5>
                        <h5 class="mb-0 mt-2"><b>Snacks:</b> <?php echo $arrfood[$foodsetting['Foodsetting']['snacks']][0] . '[' . $arrfood[$foodsetting['Foodsetting']['snacks']][1] . ']' ?></h5>
                        <?php
                        echo $this->Html->link('<button class="btn btn-success btn-rounded waves-effect waves-light mt-3">Read more</button>', array('controller' => 'foodsettings', 'action' => 'calendar'), array('escape' => false));
                    } else {
                        echo '<h5 class="text-danger">Not Listed</h5>';
                    }
                    ?>
                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12">

        </div>

        <div class="col-lg-4 col-md-4 col-sm-12">

        </div>
    </div>

</div>
<!-- Row -->

<!-- ============================================================== -->
<!-- customizer Panel -->
<!-- ============================================================== -->
<aside class="customizer">
    <a href="javascript:void(0)" class="service-panel-toggle"
       ><i class="fa fa-spin fa-cog"></i
        ></a>
    <div class="customizer-body">
        <ul class="nav customizer-tab" role="tablist">
            <li class="nav-item">
                <a
                    class="nav-link active"
                    id="pills-home-tab"
                    data-bs-toggle="pill"
                    href="#pills-home"
                    role="tab"
                    aria-controls="pills-home"
                    aria-selected="true"
                    ><i class="fa fa-wrench fs-6"></i
                    ></a>
            </li>
            <li class="nav-item">
                <a
                    class="nav-link"
                    id="pills-profile-tab"
                    data-bs-toggle="pill"
                    href="#chat"
                    role="tab"
                    aria-controls="chat"
                    aria-selected="false"
                    ><i class="fa fa-inbox fs-6"></i
                    ></a>
            </li>
            <li class="nav-item">
                <a
                    class="nav-link"
                    id="pills-contact-tab"
                    data-bs-toggle="pill"
                    href="#pills-contact"
                    role="tab"
                    aria-controls="pills-contact"
                    aria-selected="false"
                    ><i class="fa fa-sun fs-6"></i
                    ></a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <!-- Tab 1 -->
            <div
                class="tab-pane fade show active"
                id="pills-home"
                role="tabpanel"
                aria-labelledby="pills-home-tab"
                >
                <div class="p-3 border-bottom">
                    <!-- Sidebar -->
                    <h5 class="font-weight-medium mb-2 mt-2">Layout Settings</h5>
                    <div class="form-check mt-3">
                        <input
                            type="checkbox"
                            name="theme-view"
                            class="form-check-input"
                            id="theme-view"
                            />
                        <label class="form-check-label" for="theme-view">
                            <span>Dark Theme</span>
                        </label>
                    </div>
                    <div class="form-check mt-2">
                        <input
                            type="checkbox"
                            class="sidebartoggler form-check-input"
                            name="collapssidebar"
                            id="collapssidebar"
                            />
                        <label class="form-check-label" for="collapssidebar">
                            <span>Collapse Sidebar</span>
                        </label>
                    </div>
                    <div class="form-check mt-2">
                        <input
                            type="checkbox"
                            name="sidebar-position"
                            class="form-check-input"
                            id="sidebar-position"
                            />
                        <label class="form-check-label" for="sidebar-position">
                            <span>Fixed Sidebar</span>
                        </label>
                    </div>
                    <div class="form-check mt-2">
                        <input
                            type="checkbox"
                            name="header-position"
                            class="form-check-input"
                            id="header-position"
                            />
                        <label class="form-check-label" for="header-position">
                            <span>Fixed Header</span>
                        </label>
                    </div>
                    <div class="form-check mt-2">
                        <input
                            type="checkbox"
                            name="boxed-layout"
                            class="form-check-input"
                            id="boxed-layout"
                            />
                        <label class="form-check-label" for="boxed-layout">
                            <span>Boxed Layout</span>
                        </label>
                    </div>
                </div>
                <div class="p-3 border-bottom">
                    <!-- Logo BG -->
                    <h5 class="font-weight-medium mb-2 mt-2">Logo Backgrounds</h5>
                    <ul class="theme-color m-0 p-0">
                        <li class="theme-item list-inline-item me-1">
                            <a
                                href="javascript:void(0)"
                                class="theme-link rounded-circle d-block"
                                data-logobg="skin1"
                                ></a>
                        </li>
                        <li class="theme-item list-inline-item me-1">
                            <a
                                href="javascript:void(0)"
                                class="theme-link rounded-circle d-block"
                                data-logobg="skin2"
                                ></a>
                        </li>
                        <li class="theme-item list-inline-item me-1">
                            <a
                                href="javascript:void(0)"
                                class="theme-link rounded-circle d-block"
                                data-logobg="skin3"
                                ></a>
                        </li>
                        <li class="theme-item list-inline-item me-1">
                            <a
                                href="javascript:void(0)"
                                class="theme-link rounded-circle d-block"
                                data-logobg="skin4"
                                ></a>
                        </li>
                        <li class="theme-item list-inline-item me-1">
                            <a
                                href="javascript:void(0)"
                                class="theme-link rounded-circle d-block"
                                data-logobg="skin5"
                                ></a>
                        </li>
                        <li class="theme-item list-inline-item me-1">
                            <a
                                href="javascript:void(0)"
                                class="theme-link rounded-circle d-block"
                                data-logobg="skin6"
                                ></a>
                        </li>
                    </ul>
                    <!-- Logo BG -->
                </div>
                <div class="p-3 border-bottom">
                    <!-- Navbar BG -->
                    <h5 class="font-weight-medium mb-2 mt-2">Navbar Backgrounds</h5>
                    <ul class="theme-color m-0 p-0">
                        <li class="theme-item list-inline-item me-1">
                            <a
                                href="javascript:void(0)"
                                class="theme-link rounded-circle d-block"
                                data-navbarbg="skin1"
                                ></a>
                        </li>
                        <li class="theme-item list-inline-item me-1">
                            <a
                                href="javascript:void(0)"
                                class="theme-link rounded-circle d-block"
                                data-navbarbg="skin2"
                                ></a>
                        </li>
                        <li class="theme-item list-inline-item me-1">
                            <a
                                href="javascript:void(0)"
                                class="theme-link rounded-circle d-block"
                                data-navbarbg="skin3"
                                ></a>
                        </li>
                        <li class="theme-item list-inline-item me-1">
                            <a
                                href="javascript:void(0)"
                                class="theme-link rounded-circle d-block"
                                data-navbarbg="skin4"
                                ></a>
                        </li>
                        <li class="theme-item list-inline-item me-1">
                            <a
                                href="javascript:void(0)"
                                class="theme-link rounded-circle d-block"
                                data-navbarbg="skin5"
                                ></a>
                        </li>
                        <li class="theme-item list-inline-item me-1">
                            <a
                                href="javascript:void(0)"
                                class="theme-link rounded-circle d-block"
                                data-navbarbg="skin6"
                                ></a>
                        </li>
                    </ul>
                    <!-- Navbar BG -->
                </div>
                <div class="p-3 border-bottom">
                    <!-- Logo BG -->
                    <h5 class="font-weight-medium mb-2 mt-2">Sidebar Backgrounds</h5>
                    <ul class="theme-color m-0 p-0">
                        <li class="theme-item list-inline-item me-1">
                            <a
                                href="javascript:void(0)"
                                class="theme-link rounded-circle d-block"
                                data-sidebarbg="skin1"
                                ></a>
                        </li>
                        <li class="theme-item list-inline-item me-1">
                            <a
                                href="javascript:void(0)"
                                class="theme-link rounded-circle d-block"
                                data-sidebarbg="skin2"
                                ></a>
                        </li>
                        <li class="theme-item list-inline-item me-1">
                            <a
                                href="javascript:void(0)"
                                class="theme-link rounded-circle d-block"
                                data-sidebarbg="skin3"
                                ></a>
                        </li>
                        <li class="theme-item list-inline-item me-1">
                            <a
                                href="javascript:void(0)"
                                class="theme-link rounded-circle d-block"
                                data-sidebarbg="skin4"
                                ></a>
                        </li>
                        <li class="theme-item list-inline-item me-1">
                            <a
                                href="javascript:void(0)"
                                class="theme-link rounded-circle d-block"
                                data-sidebarbg="skin5"
                                ></a>
                        </li>
                        <li class="theme-item list-inline-item me-1">
                            <a
                                href="javascript:void(0)"
                                class="theme-link rounded-circle d-block"
                                data-sidebarbg="skin6"
                                ></a>
                        </li>
                    </ul>
                    <!-- Logo BG -->
                </div>
            </div>
            <!-- End Tab 1 -->
            <!-- Tab 2 -->
            <div
                class="tab-pane fade"
                id="chat"
                role="tabpanel"
                aria-labelledby="pills-profile-tab"
                >
                <ul class="mailbox list-style-none mt-3">
                    <li>
                        <div class="message-center chat-scroll position-relative">
                            <a
                                href="javascript:void(0)"
                                class="
                                message-item
                                d-flex
                                align-items-center
                                border-bottom
                                px-3
                                py-2
                                "
                                id="chat_user_2"
                                data-user-id="2"
                                >
                                <span class="user-img position-relative d-inline-block">
                                    <img class="rounded-circle w-100" alt="User Image" width="40" src="https://erp.indesore.com/img/u/68.png">
                                    <span class="profile-status rounded-circle busy"></span>
                                </span>
                                <div class="w-75 d-inline-block v-middle ps-3">
                                    <h5 class="message-title mb-0 mt-1">Sharfuddin Khair</h5>
                                    <span
                                        class="
                                        fs-2
                                        text-nowrap
                                        d-block
                                        text-muted text-truncate
                                        "
                                        >I've sung a song! See you at</span
                                    >
                                    <span class="fs-2 text-nowrap d-block text-muted"
                                          >9:10 AM</span
                                    >
                                </div>
                            </a>
                            <!-- Message -->
                            <a
                                href="javascript:void(0)"
                                class="
                                message-item
                                d-flex
                                align-items-center
                                border-bottom
                                px-3
                                py-2
                                "
                                id="chat_user_3"
                                data-user-id="3"
                                >
                                <span class="user-img position-relative d-inline-block">
                                    <img class="rounded-circle w-100" alt="User Image" width="40" src="https://erp.indesore.com/img/u/68.png">
                                    <span class="profile-status rounded-circle away"></span>
                                </span>
                                <div class="w-75 d-inline-block v-middle ps-3">
                                    <h5 class="message-title mb-0 mt-1">Sharfuddin Khair</h5>
                                    <span
                                        class="
                                        fs-2
                                        text-nowrap
                                        d-block
                                        text-muted text-truncate
                                        "
                                        >I am a singer!</span
                                    >
                                    <span class="fs-2 text-nowrap d-block text-muted"
                                          >9:08 AM</span
                                    >
                                </div>
                            </a>
                            <!-- Message -->
                            <a
                                href="javascript:void(0)"
                                class="
                                message-item
                                d-flex
                                align-items-center
                                border-bottom
                                px-3
                                py-2
                                "
                                id="chat_user_4"
                                data-user-id="4"
                                >
                                <span class="user-img position-relative d-inline-block">
                                    <img class="rounded-circle w-100" alt="User Image" width="40" src="https://erp.indesore.com/img/u/68.png">
                                    <span
                                        class="profile-status rounded-circle offline"
                                        ></span>
                                </span>
                                <div class="w-75 d-inline-block v-middle ps-3">
                                    <h5 class="message-title mb-0 mt-1">Sharfuddin Khair</h5>
                                    <span
                                        class="
                                        fs-2
                                        text-nowrap
                                        d-block
                                        text-muted text-truncate
                                        "
                                        >Just see the my admin!</span
                                    >
                                    <span class="fs-2 text-nowrap d-block text-muted"
                                          >9:02 AM</span
                                    >
                                </div>
                            </a>
                            <!-- Message -->
                            <!-- Message -->
                            <a
                                href="javascript:void(0)"
                                class="
                                message-item
                                d-flex
                                align-items-center
                                border-bottom
                                px-3
                                py-2
                                "
                                id="chat_user_5"
                                data-user-id="5"
                                >
                                <span class="user-img position-relative d-inline-block">
                                    <img class="rounded-circle w-100" alt="User Image" width="40" src="https://erp.indesore.com/img/u/68.png">
                                    <span
                                        class="profile-status rounded-circle offline"
                                        ></span>
                                </span>
                                <div class="w-75 d-inline-block v-middle ps-3">
                                    <h5 class="message-title mb-0 mt-1">Sharfuddin Khair</h5>
                                    <span
                                        class="
                                        fs-2
                                        text-nowrap
                                        d-block
                                        text-muted text-truncate
                                        "
                                        >Just see the my admin!</span
                                    >
                                    <span class="fs-2 text-nowrap d-block text-muted"
                                          >9:02 AM</span
                                    >
                                </div>
                            </a>
                            <!-- Message -->
                            <!-- Message -->
                            <a
                                href="javascript:void(0)"
                                class="
                                message-item
                                d-flex
                                align-items-center
                                border-bottom
                                px-3
                                py-2
                                "
                                id="chat_user_6"
                                data-user-id="6"
                                >
                                <span class="user-img position-relative d-inline-block">
                                    <img class="rounded-circle w-100" alt="User Image" width="40" src="https://erp.indesore.com/img/u/68.png">
                                    <span
                                        class="profile-status rounded-circle offline"
                                        ></span>
                                </span>
                                <div class="w-75 d-inline-block v-middle ps-3">
                                    <h5 class="message-title mb-0 mt-1">Sharfuddin Khair</h5>
                                    <span
                                        class="
                                        fs-2
                                        text-nowrap
                                        d-block
                                        text-muted text-truncate
                                        "
                                        >Just see the my admin!</span
                                    >
                                    <span class="fs-2 text-nowrap d-block text-muted"
                                          >9:02 AM</span
                                    >
                                </div>
                            </a>
                            <!-- Message -->
                            <!-- Message -->
                            <a
                                href="javascript:void(0)"
                                class="
                                message-item
                                d-flex
                                align-items-center
                                border-bottom
                                px-3
                                py-2
                                "
                                id="chat_user_7"
                                data-user-id="7"
                                >
                                <span class="user-img position-relative d-inline-block">
                                    <img class="rounded-circle w-100" alt="User Image" width="40" src="https://erp.indesore.com/img/u/68.png">
                                    <span
                                        class="profile-status rounded-circle offline"
                                        ></span>
                                </span>
                                <div class="w-75 d-inline-block v-middle ps-3">
                                    <h5 class="message-title mb-0 mt-1">Sharfuddin Khair</h5>
                                    <span
                                        class="
                                        fs-2
                                        text-nowrap
                                        d-block
                                        text-muted text-truncate
                                        "
                                        >Just see the my admin!</span
                                    >
                                    <span class="fs-2 text-nowrap d-block text-muted"
                                          >9:02 AM</span
                                    >
                                </div>
                            </a>
                            <!-- Message -->
                        </div>
                    </li>
                </ul>
            </div>
            <!-- End Tab 2 -->
            <!-- Tab 3 -->
            <div
                class="tab-pane fade p-3"
                id="pills-contact"
                role="tabpanel"
                aria-labelledby="pills-contact-tab"
                >
                <h6 class="mt-3 mb-3">Activity Timeline</h6>
                <div class="steamline">
                    <div class="sl-item">
                        <div class="sl-left bg-success text-success">
                            <i data-feather="user" class="feather-sm fill-white"></i>
                        </div>
                        <div class="sl-right">
                            <div class="font-weight-medium">
                                Meeting today <span class="sl-date"> 5pm</span>
                            </div>
                            <div class="desc">you can write anything</div>
                        </div>
                    </div>
                    <div class="sl-item">
                        <div class="sl-left bg-light-info bg-info">
                            <i data-feather="camera" class="feather-sm fill-white"></i>
                        </div>
                        <div class="sl-right">
                            <div class="font-weight-medium">Send documents to Clark</div>
                            <div class="desc">Lorem Ipsum is simply</div>
                        </div>
                    </div>
                    <div class="sl-item">
                        <div class="sl-left bg-light-primary text-primary">
                            <i data-feather="monitor" class="feather-sm fill-white"></i>
                        </div>
                        <div class="sl-right">
                            <div class="font-weight-medium">
                                Go to the Doctor <span class="sl-date">5 minutes ago</span>
                            </div>
                            <div class="desc">Contrary to popular belief</div>
                        </div>
                    </div>
                    <div class="sl-item">
                        <div class="sl-left bg-light-primary text-primary">
                            <i data-feather="music" class="feather-sm fill-white"></i>
                        </div>
                        <div class="sl-right">
                            <div>
                                <a href="javascript:void(0)">Stephen</a>
                                <span class="sl-date">5 minutes ago</span>
                            </div>
                            <div class="desc">Approve meeting with tiger</div>
                        </div>
                    </div>
                    <div class="sl-item">
                        <div class="sl-left bg-light-primary text-primary">
                            <i data-feather="user" class="feather-sm fill-white"></i>
                        </div>
                        <div class="sl-right">
                            <div class="font-weight-medium">
                                Meeting today <span class="sl-date"> 5pm</span>
                            </div>
                            <div class="desc">you can write anything</div>
                        </div>
                    </div>
                    <div class="sl-item">
                        <div class="sl-left bg-light-info bg-info">
                            <i data-feather="send" class="feather-sm fill-white"></i>
                        </div>
                        <div class="sl-right">
                            <div class="font-weight-medium">Send documents to Clark</div>
                            <div class="desc">Lorem Ipsum is simply</div>
                        </div>
                    </div>
                    <div class="sl-item">
                        <div class="sl-left bg-light-primary text-primary">
                            <i data-feather="paperclip" class="feather-sm fill-white"></i>
                        </div>
                        <div class="sl-right">
                            <div class="font-weight-medium">
                                Go to the Doctor <span class="sl-date">5 minutes ago</span>
                            </div>
                            <div class="desc">Contrary to popular belief</div>
                        </div>
                    </div>
                    <div class="sl-item">
                        <div class="sl-left bg-light-primary text-primary">
                            <i data-feather="phone" class="feather-sm fill-white"></i>
                        </div>
                        <div class="sl-right">
                            <div>
                                <a href="javascript:void(0)">Stephen</a>
                                <span class="sl-date">5 minutes ago</span>
                            </div>
                            <div class="desc">Approve meeting with tiger</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Tab 3 -->
        </div>
    </div>
</aside>
<!-- ============================================================== -->
<!-- End Right sidebar -->
<!-- ============================================================== -->
<?php
if (count($flashbanner) > 0) {
    ?>
    <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5><?php echo $flashbanner['Flashbanner']['title']; ?></h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                    $files = IMAGES . 'b/' . $flashbanner['Flashbanner']['id'] . '.' . $flashbanner['Flashbanner']['ext'];
                    if (is_file($files)) {
                        if ($flashbanner['Flashbanner']['ext'] == 'mp4') {
                            echo '<video width="600" height="100%" controls autoplay>
                                    <source src="' . '../img/b/' . $flashbanner['Flashbanner']['id'] . '.' . $flashbanner['Flashbanner']['ext'] . '" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>';
                        } else {
                            echo $this->Html->image('b/' . $flashbanner['Flashbanner']['id'] . '.' . $flashbanner['Flashbanner']['ext'], array('alt' => $flashbanner['Flashbanner']['title'], 'width' => '600'));
                        }
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            myModal = $('#exampleModal');
            myModal.modal('show');
            setTimeout(function () {
                myModal.modal('dispose');
            }, <?php echo ($flashbanner['Flashbanner']['hide_after'] * 1000); ?>);
            myModal.on('hidden.bs.modal', function () {
                $(this).remove();
            });
        });
    </script> 
    <?php
} else {
    ?>
    <script type="text/javascript">
        $(document).ready(function () {
            _toast('s', 'Welcome to <?php echo COMPANY_NAME; ?>');
        });
    </script> 
    <?php
}
?>

<script type="text/javascript">
    Highcharts.chart('bar-chart1', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Absent Statistics'
        },
        subtitle: {
            text: 'With Total Employee'
        },
        xAxis: {
            categories: [<?php echo $depts; ?>],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Total Employee'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:14px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td><td style="padding:0"><b>{point.y} person</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
                name: 'Total',
                color: Highcharts.getOptions().colors[3],
                data: [<?php echo $valu; ?>]
            }, {
                name: 'Absent',
                color: Highcharts.getOptions().colors[8],
                data: [<?php echo $vala; ?>]
            }]
    });

    Highcharts.chart('bar-chart2', {
        chart: {
            type: 'areaspline'
        },
        title: {
            text: 'Joinee And Resignee Statistics'
        },
        subtitle: {
            text: 'Comparison Chart'
        },
        xAxis: {
            categories: ['<?php echo implode("', '", $months); ?>'],
            crosshair: false
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Total Employee'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:14px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color}">{series.name}: </td><td><b>{point.y} person</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        series: [{
                name: 'Joinee',
                color: Highcharts.getOptions().colors[0],
                data: [<?php echo implode(", ", $recs); ?>]
            }, {
                name: 'Resignee',
                color: Highcharts.getOptions().colors[8],
                data: [<?php echo implode(", ", $rejs); ?>]
            }]
    });

    Highcharts.chart('attngraph', {
        chart: {
            type: 'variablepie'
        },
        title: {
            text: 'Attendance'
        },
        subtitle: {
            text: 'Comparison'
        },
        tooltip: {
            headerFormat: '<span style="font-size:14px;color:{point.color}">\u25CF <b>{point.key}</b></span> <table>',
            pointFormat: '<tr><td style="padding:0">People: </td><td style="padding:0"><b>{point.y}</b></td></tr>' +
                    '<tr><td style="padding:0">{point.name}: </td><td style="padding:0"><b>{point.z}%</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            variablepie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                showInLegend: true
            }
        },
        series: [{
                minPointSize: 50,
                innerSize: '20%',
                zMin: 0,
                name: 'Attendance',
                data: [{
                        name: 'Present',
                        y: <?php echo (float) $totalpresent; ?>,
                        z: <?php echo (float) $present; ?>,
                        color: Highcharts.getOptions().colors[1]
                    }, {
                        name: 'Late',
                        y: <?php echo (float) $latepresent; ?>,
                        z: <?php echo (float) $late; ?>,
                        color: Highcharts.getOptions().colors[2]
                    }, {
                        name: 'Absent',
                        y: <?php echo (float) $totalnabsent; ?>,
                        z: <?php echo (float) $absent; ?>,
                        color: Highcharts.getOptions().colors[8]
                    }, {
                        name: 'Leave',
                        y: <?php echo (float) $totleave; ?>,
                        z: <?php echo (float) $vacation; ?>,
                        color: Highcharts.getOptions().colors[3]
                    }, {
                        name: 'Early Leave',
                        y: <?php echo (float) $earlyleave; ?>,
                        z: <?php echo (float) $early; ?>,
                        color: Highcharts.getOptions().colors[4]
                    }]
            }]
    });

</script> 


