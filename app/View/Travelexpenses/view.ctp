<style>
    p {
        margin: 3px 10px;
    }
    .form-horizontal label{
        text-align: right;
    }
</style>

<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?></li>
                <li class="breadcrumb-item active">Employee Profile</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <?php echo $this->Html->link("<i class='fa fa-download'></i> Download Profile", array('action' => 'pdf', $user['User']['id']), array('style' => 'margin-left:5px;', 'class' => 'btn pull-right btn-success', 'escape' => false)); ?>
            <?php echo $this->Html->link("<i class='fa fa-list-ul'></i> Employee List", array('action' => 'index'), array('style' => 'margin-left:5px;', 'class' => 'btn pull-right btn-success', 'escape' => false)); ?>
            <?php echo $this->Html->link("<i class='fa fa-pencil-alt'></i> Edit", array('action' => 'edit', $user['User']['id']), array('class' => 'btn pull-right btn-success', 'escape' => false)); ?>
        </div>
    </div>

    <?php //pr($user);  ?>

    <div class="row">
        <!-- Column -->
        <div class="col-lg-4 col-xlg-3 col-md-5">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <div>
                            <?php
                            echo '<div class="round d-inline-block text-white text-center rounded-circle bg-' . $rounds[rand(0, 10)] . '">' . substr(trim($user['User']['name']), 0, 1) . '</div>';
                            echo '<img style="display:none" class="img-circle border border-2 border-white" alt="User Image" width="120">';
                            ?>
                            <script type="text/javascript">__cimg("user_img<?php echo $user['User']['id']; ?>", "<?php echo $user['User']['id']; ?>");</script>
                        </div>
 
                        <h4 class="card-title m-t-10"><?php echo $user['User']['name']; ?></h4>
                        <h6 class="card-subtitle"><span class="badge" style="background:<?php echo $user['Department']['color_code']; ?>">[<?php echo $user['Department']['name']; ?>]</span></h6>
                        <h6 class="card-subtitle"><span class="badge" style="background:<?php echo $user['Designation']['color_code']; ?>"><?php echo $user['Designation']['name']; ?></span></h6>
                        <div class="row text-center justify-content-md-center">
                            <div class="col-md-6">
                                <small class="text-muted">Reporting To</small><br />
                                <div id="user_img<?php echo $user['User']['report_to']; ?>">
                                    <?php
                                    echo '<div class="round d-inline-block text-white text-center rounded-circle bg-' . $rounds[rand(0, 10)] . '">' . substr(trim($users[$user['User']['report_to']]), 0, 1) . '</div>';
                                    echo '<img style="display:none" class="img-circle border border-2 border-white" alt="User Image" width="50">';
                                    ?>&nbsp;
                                    <script type="text/javascript">__cimg("user_img<?php echo $user['User']['report_to']; ?>", "<?php echo $user['User']['report_to']; ?>");</script>
                                </div>
                                <div class="font-bold"><?php echo $this->Html->link('<small>' . $users[$user['User']['report_to']] . '</small>', 'javascript:;', array('escape' => false)); ?></div>
                            </div>
                            <div class="col-md-6">
                                <small class="text-muted">Authorized Person</small><br />
                                <div id="user_img<?php echo $user['User']['authorized_person']; ?>">
                                    <?php
                                    echo '<div class="round d-inline-block text-white text-center rounded-circle bg-' . $rounds[rand(0, 10)] . '">' . substr(trim($users[$user['User']['authorized_person']]), 0, 1) . '</div>';
                                    echo '<img style="display:none" class="img-circle border border-2 border-white" alt="User Image" width="50">';
                                    ?>&nbsp;
                                    <script type="text/javascript">__cimg("user_img<?php echo $user['User']['authorized_person']; ?>", "<?php echo $user['User']['authorized_person']; ?>");</script>
                                </div>
                                <div class="font-bold"><?php echo $this->Html->link('<small>' . $users[$user['User']['authorized_person']] . '</small>', 'javascript:;', array('escape' => false)); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-t-17"></div>
                <div><hr /></div>

                <div class="card-body"> 
                    <small class="text-muted">Join Date</small><br />
                    <h6 class="badge bg-info">
                        <?php
                        echo $user['User']['join_date'] . ' ' . $this->App->timeCalc($user['User']['join_date'], date('Y:m:d H:i:s'), 'd');
                        ?>
                    </h6><br />
                    <small class="text-muted">Company address </small>
                    <div class="map-box">

                        <div class="gmap_canvas">
                            <iframe width="100%" height="150" id="gmap_canvas" src="https://maps.google.com/maps?q=<?php echo $user['Company']['google_address']; ?>&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        </div>
                        <style>.gmap_canvas {overflow:hidden;background:none!important}</style>

                    </div> 
                    <small class="text-muted p-t-10 db">Social Profile</small>
                    <br/>
                    <button class="btn btn-circle btn-secondary"><i class="fa fa-facebook"></i></button>
                    <button class="btn btn-circle btn-secondary"><i class="fa fa-twitter"></i></button>
                    <button class="btn btn-circle btn-secondary"><i class="fa fa-youtube"></i></button>
                </div>
                <!-- Column -->
                <!-- Column -->

                <!-- Column -->
            </div>
        </div>

        <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs profile-tab" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#Basic" role="tab">Basic</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#Personal" role="tab">Personal</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#Company" role="tab">Company</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#Account" role="tab">Account</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#Additional" role="tab">Additional</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#Card" role="tab">Card</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#Education" role="tab">Education</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#Training" role="tab">Training</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#Experience" role="tab">Experience</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#Family" role="tab">Family</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#Document" role="tab">Document</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#Nominee" role="tab">Nominee</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#Transfer" role="tab">Transfer</a> </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="Basic" role="tabpanel">
                        <div class="card-body">
                            <form class="form-horizontal">
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">Name :</label>

                                    <div class="col-sm-9">
                                        <p><?php echo h($user['User']['name']); ?></p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">Username :</label>

                                    <div class="col-sm-9">
                                        <p><?php echo h($user['User']['username']); ?></p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">Role :</label>

                                    <div class="col-sm-9">
                                        <span class="badge" style="background:<?php echo $user['Role']['color_code']; ?>"><?php echo $this->Html->link($user['Role']['title'], array('controller' => 'roles', 'action' => 'view', $user['Role']['id'])); ?></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">Email :</label>

                                    <div class="col-sm-9">
                                        <p><?php echo h($user['User']['email']); ?></p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">Phone :</label>

                                    <div class="col-sm-9">
                                        <p><?php echo $user['User']['phone']; ?></p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">Mobile :</label>

                                    <div class="col-sm-9">
                                        <p><?php echo $user['User']['mobile']; ?></p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">PABX :</label>

                                    <div class="col-sm-9">
                                        <p><?php echo h($user['User']['pabx']); ?></p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">Skype :</label>

                                    <div class="col-sm-9">
                                        <p><?php echo h($user['User']['skype']); ?></p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">Viber :</label>

                                    <div class="col-sm-9">
                                        <p><?php echo h($user['User']['viber']); ?></p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">WhatsApp :</label>

                                    <div class="col-sm-9">
                                        <p><?php echo h($user['User']['whatsapp']); ?></p>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">Gender :</label>

                                    <div class="col-sm-9">
                                        <p><?php echo $genders[$user['User']['gender']]; ?></p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">Corporate Id No. :</label>

                                    <div class="col-sm-9">
                                        <p><?php echo $user['User']['corporate_id_no']; ?></p>
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                    <div class="tab-pane" id="Personal" role="tabpanel">
                        <div class="card-body">
                            <form class="form-horizontal">

                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">Nationality:</label>

                                    <div class="col-sm-9">
                                        <p><?php echo $nationality[$user['User']['nationality']]; ?></p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">Religion:</label>

                                    <div class="col-sm-9">
                                        <p><?php echo $religion[$user['User']['religion']]; ?></p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">Blood Group:</label>

                                    <div class="col-sm-9">
                                        <p><?php echo $blood_group[$user['User']['blood_group']]; ?></p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">Marital Status:</label>

                                    <div class="col-sm-9">
                                        <p> <?php echo $marital_status[$user['User']['marital_status']]; ?></p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">Date Of Birth:</label>

                                    <div class="col-sm-9">
                                        <p><?php echo h($user['User']['date_of_birth']); ?></p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">Passport Number:</label>

                                    <div class="col-sm-9">
                                        <p><?php echo h($user['User']['passport_no']); ?></p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">NID:</label>

                                    <div class="col-sm-9">
                                        <p><?php echo h($user['User']['nid']); ?></p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">Father Name:</label>

                                    <div class="col-sm-9">
                                        <p><?php echo h($user['User']['father_name']); ?></p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">Mother Name:</label>

                                    <div class="col-sm-9">
                                        <p><?php echo h($user['User']['mother_name']); ?></p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">Present Address:</label>

                                    <div class="col-sm-9">
                                        <p><?php echo strip_tags($user['User']['present_address']); ?></p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">Permanent Address:</label>

                                    <div class="col-sm-9">
                                        <p><?php echo strip_tags($user['User']['permanent_address']); ?></p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">Emergency Person:</label>

                                    <div class="col-sm-9">
                                        <p><?php echo h($user['User']['emergency_person']); ?></p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">Emergency Address:</label>

                                    <div class="col-sm-9">
                                        <p><?php echo h($user['User']['emergency_address']); ?></p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">Relation to Emergency Person:</label>

                                    <div class="col-sm-9">
                                        <p><?php echo h($user['User']['emergency_relation']); ?></p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">Emergency Phone:</label>

                                    <div class="col-sm-9">
                                        <p><?php echo $user['User']['emergency_phone']; ?></p>
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                    <div class="tab-pane" id="Company" role="tabpanel">
                        <div class="card-body">
                            <form class="form-horizontal">
                                <br>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">Company:</label>

                                    <div class="col-sm-9">
                                        <p><?php echo h($user['Company']['name']); ?></p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">Department:</label>

                                    <div class="col-sm-9">
                                        <span class="badge" style="background:<?php echo $user['Department']['color_code']; ?>"><p><?php echo h($user['Department']['name']); ?></p></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">Section:</label>

                                    <div class="col-sm-9">
                                        <p><?php echo h($user['Section']['name']); ?></p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">Designation:</label>

                                    <div class="col-sm-9">
                                        <span class="badge" style="background:<?php echo $user['Department']['color_code']; ?>"><p><?php echo $user['Designation']['name']; ?></p></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">Join Date:</label>

                                    <div class="col-sm-9">
                                        <p><?php echo $user['User']['join_date']; ?></p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">Termination Date:</label>

                                    <div class="col-sm-9">
                                        <p><?php echo ($user['User']['ending_date'] == '' ? 'Not Yet' : $user['User']['ending_date']); ?></p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">Machine Card No. :</label>

                                    <div class="col-sm-9">
                                        <p><?php echo $user['User']['machine_card_no']; ?></p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">Job Responsibility :</label>

                                    <div class="col-sm-9">
                                        <p><?php echo $user['User']['job_responsibility']; ?></p>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">Authorized Person:</label>

                                    <div class="col-sm-9">
                                        <p><?php echo $users[$user['User']['authorized_person']]; ?></p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">Reporting To:</label>

                                    <div class="col-sm-9">
                                        <p><?php echo $users[$user['User']['report_to']]; ?></p>
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>

                    <div class="tab-pane" id="Account" role="tabpanel">
                        <div class="card-body">
                            <div class="box">
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <table class="table table-condensed table-hover contact-list no-wrap stylish-table">
                                            <thead>
                                                <tr>
                                                    <th>Year</th>
                                                    <th>Gross Salary</th>
                                                    <th>Basic Salary</th>
                                                    <th>House Rent</th>
                                                    <th>Medical Allowance</th>
                                                    <th>Conveyance Allowance</th>
                                                    <th>Balance</th>
                                                    <th>Paid</th>
                                                    <th>Advance</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($useraccounts as $useraccount): ?>
                                                    <tr>
                                                        <td><?php
                                                            $yr = explode('-', $useraccount['Useraccount']['issue_date']);
                                                            echo $yr[0];
                                                            ?></td>
                                                        <td><?php echo $useraccount['Useraccount']['gross_salary']; ?> BDT</td>
                                                        <td><?php echo $useraccount['Useraccount']['basic_salary']; ?> BDT</td>
                                                        <td><?php echo $useraccount['Useraccount']['house_rent']; ?> BDT</td>
                                                        <td><?php echo $useraccount['Useraccount']['medical_allowance']; ?> BDT</td>
                                                        <td><?php echo $useraccount['Useraccount']['conveyance']; ?> BDT</td>
                                                        <td><?php echo $useraccount['Useraccount']['balance']; ?> BDT</td>
                                                        <td><?php echo $useraccount['Useraccount']['paid']; ?> BDT</td>
                                                        <td><?php echo $useraccount['Useraccount']['advance']; ?> BDT</td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="Additional" role="tabpanel">
                        <div class="card-body">
                            <div class="box">
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <table class="table table-condensed table-hover contact-list no-wrap stylish-table">
                                            <tr>
                                                <th>Company</th>
                                                <th>Department</th>
                                                <th>Designation</th>
                                                <th>Section</th>
                                                <th>Responsibility</th>
                                            </tr>
                                            <?php foreach ($usercompanies as $usercompany): ?>
                                                <tr>
                                                    <td><?php echo $usercompany['Usercompany']['company_id']; ?></td>
                                                    <td><?php echo $usercompany['Usercompany']['department_id']; ?></td>
                                                    <td><?php echo $usercompany['Usercompany']['designation_id']; ?></td>
                                                    <td><?php echo $usercompany['Usercompany']['section_id']; ?></td>
                                                    <td><?php echo $usercompany['Usercompany']['responsibility']; ?></td>
                                                </tr>
                                            <?php endforeach; ?>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="Card" role="tabpanel">
                        <div class="card-body">
                            <div class="box">
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <table class="table table-condensed table-hover contact-list no-wrap stylish-table">
                                            <thead>
                                                <tr>
                                                    <th>Issue Date</th>
                                                    <th>Valid Date</th>
                                                    <th>Previous Card Number</th>
                                                    <th>New Card Number</th>
                                                    <th>Issue By</th>
                                                    <th>Validated By</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($usercards as $usercard): ?>
                                                    <tr>
                                                        <td><?php echo $usercard['Usercard']['issue_date']; ?></td>
                                                        <td><?php echo $usercard['Usercard']['valid_date']; ?></td>
                                                        <td><?php echo $usercard['Usercard']['pcard_number']; ?></td>
                                                        <td><?php echo $usercard['Usercard']['card_number']; ?></td>
                                                        <td><?php echo $users[$usercard['Usercard']['entry_by']]; ?></td>
                                                        <td><?php echo $users[$usercard['Usercard']['edit_by']]; ?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="Education" role="tabpanel">
                        <div class="card-body">
                            <div class="box">
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <table class="table table-condensed table-hover contact-list no-wrap stylish-table">
                                            <thead>
                                                <tr>
                                                    <th>Degree Name</th>
                                                    <th>Institute</th>
                                                    <th>Passing Year</th>
                                                    <th>Department</th>
                                                    <th>Country</th>
                                                    <th>Board</th>
                                                    <th>Result</th>
                                                    <th>Remarks</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($usereducations as $usereducation): ?>
                                                    <tr>
                                                        <td><?php echo $usereducation['Usereducation']['degree_name']; ?></td>
                                                        <td><?php echo $usereducation['Usereducation']['institute']; ?></td>
                                                        <td><?php echo $usereducation['Usereducation']['passing_year']; ?></td>
                                                        <td><?php echo $usereducation['Usereducation']['department']; ?></td>
                                                        <td><?php echo $usereducation['Usereducation']['country']; ?></td>
                                                        <td><?php echo $usereducation['Usereducation']['board']; ?></td>
                                                        <td><?php echo $usereducation['Usereducation']['result']; ?></td>
                                                        <td><?php echo $usereducation['Usereducation']['remarks']; ?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="Training" role="tabpanel">
                        <div class="card-body">
                            <div class="box">
                                <div class="box-body">

                                    <div class="table-responsive">
                                        <table class="table table-condensed table-hover contact-list no-wrap stylish-table">
                                            <tr>
                                                <th>Training Title</th>
                                                <th>Country</th>
                                                <th>Training Topic</th>
                                                <th>Institute</th>
                                                <th>From</th>
                                                <th>To</th>
                                            </tr>
                                            <?php foreach ($usertrainings as $usertraining): ?>
                                                <tr>
                                                    <td><?php echo $usertraining['Usertraining']['training_title']; ?></td>
                                                    <td><?php echo $usertraining['Country']['name']; ?></td>
                                                    <td><?php echo $usertraining['Usertraining']['training_topic']; ?></td>
                                                    <td><?php echo $usertraining['Usertraining']['institute']; ?></td>
                                                    <td><?php echo $usertraining['Usertraining']['act_from']; ?></td>
                                                    <td><?php echo $usertraining['Usertraining']['act_to']; ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="Experience" role="tabpanel">
                        <div class="card-body">
                            <div class="box">
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <table class="table table-condensed table-hover contact-list no-wrap stylish-table">
                                            <tr>
                                                <th>Company Name</th>
                                                <th>Department</th>
                                                <th>Designation</th>
                                                <th>Responsibility</th>
                                                <th>Area Of Experience</th>
                                                <th>Act From</th>
                                                <th>Act To</th>
                                            </tr>
                                            <?php foreach ($userexperiences as $userexperience): ?>
                                                <tr>
                                                    <td><?php echo $userexperience['Userexperience']['company_name']; ?></td>
                                                    <td><?php echo $userexperience['Userexperience']['department']; ?></td>
                                                    <td><?php echo $userexperience['Userexperience']['designation']; ?></td>
                                                    <td><?php echo $userexperience['Userexperience']['responsibility']; ?></td>
                                                    <td><?php echo nl2br($userexperience['Userexperience']['area_of_experience']); ?></td>
                                                    <td><?php echo $userexperience['Userexperience']['act_from']; ?></td>
                                                    <td><?php echo $userexperience['Userexperience']['act_to']; ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="Family" role="tabpanel">
                        <div class="card-body">
                            <div class="box">
                                <div class="box-body">

                                    <div class="table-responsive">
                                        <table class="table table-condensed table-hover contact-list no-wrap stylish-table">
                                            <tr>
                                                <th>Name</th>
                                                <th>Gender</th>
                                                <th>Date Of Birth</th>
                                                <th>Relation</th>
                                            </tr>
                                            <?php foreach ($userfamilies as $userfamily): ?>
                                                <tr>
                                                    <td><?php echo $userfamily['Userfamily']['name']; ?></td>
                                                    <td><?php echo $genders[$userfamily['Userfamily']['gender']]; ?></td>
                                                    <td><?php echo $userfamily['Userfamily']['date_of_birth']; ?></td>
                                                    <td><?php echo $userfamily['Userfamily']['relation']; ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="Document" role="tabpanel">
                        <div class="card-body">
                            <div class="box">
                                <div class="box-body">


                                    <table class="table table-condensed table-hover contact-list no-wrap stylish-table">
                                        <tr>
                                            <th>Name</th>
                                            <th>Document</th>
                                        </tr>
                                        <?php foreach ($userfiles as $userfile): ?>
                                            <tr>
                                                <td><?php echo $userfile['Userfile']['name']; ?></td>
                                                <td>
                                                    <?php
                                                    $files = IMAGES . 'uf/' . $userfile['Userfile']['id'] . '.' . $userfile['Userfile']['ext'];
                                                    if (is_file($files)) {
                                                        if ($userfile['Userfile']['ext'] == 'mp4' || $userfile['Userfile']['ext'] == '3gpp') {
                                                            echo $this->Html->link(
                                                                    $this->Html->image('mp4.png', array('alt' => '', 'title' => 'Download', 'width' => '100', 'class' => 'img-responsive')), array('controller' => 'userfiles', 'action' => 'download', $userfile['Userfile']['id']), array('escape' => false)
                                                            );
                                                        } elseif ($userfile['Userfile']['ext'] == 'doc' || $userfile['Userfile']['ext'] == 'docx') {
                                                            echo $this->Html->link(
                                                                    $this->Html->image('doc.png', array('alt' => '', 'title' => 'Download', 'width' => '100', 'class' => 'img-responsive')), array('controller' => 'userfiles', 'action' => 'download', $userfile['Userfile']['id']), array('escape' => false)
                                                            );
                                                        } elseif ($userfile['Userfile']['ext'] == 'xls' || $userfile['Userfile']['ext'] == 'xlsx' || $userfile['Userfile']['ext'] == 'csv') {
                                                            echo $this->Html->link(
                                                                    $this->Html->image('xls.png', array('alt' => '', 'title' => 'Download', 'width' => '100', 'class' => 'img-responsive')), array('controller' => 'userfiles', 'action' => 'download', $userfile['Userfile']['id']), array('escape' => false)
                                                            );
                                                        } elseif ($userfile['Userfile']['ext'] == 'ppt' || $userfile['Userfile']['ext'] == 'pptx') {
                                                            echo $this->Html->link(
                                                                    $this->Html->image('ppt.png', array('alt' => '', 'title' => 'Download', 'width' => '100', 'class' => 'img-responsive')), array('controller' => 'userfiles', 'action' => 'download', $userfile['Userfile']['id']), array('escape' => false)
                                                            );
                                                        } elseif ($userfile['Userfile']['ext'] == 'pdf') {
                                                            echo $this->Html->link(
                                                                    $this->Html->image('pdf.png', array('alt' => '', 'title' => 'Download', 'width' => '100', 'class' => 'img-responsive')), array('controller' => 'userfiles', 'action' => 'download', $userfile['Userfile']['id']), array('escape' => false)
                                                            );
                                                        } else {
                                                            if (in_array(strtolower($userfile['Userfile']['ext']), array('jpg', 'jpeg', 'png', 'bmp', 'gif', 'webp'))) {
                                                                $img = 'uf/' . $userfile['Userfile']['id'] . '.' . $userfile['Userfile']['ext'];
                                                            } else {
                                                                $img = $userfile['Userfile']['id'] . '.' . $userfile['Userfile']['ext'];
                                                            }
                                                            echo $this->Html->link(
                                                                    $this->Html->image($img, array('alt' => '', 'title' => 'Download', 'width' => '100', 'class' => 'img-responsive')), array('controller' => 'userfiles', 'action' => 'download', $userfile['Userfile']['id']), array('escape' => false)
                                                            );
                                                        }
                                                    } else {
                                                        echo $this->Html->image('no_img.jpg', array('alt' => '', 'data-bs-toggle' => 'tooltip', 'title' => 'No Document', 'width' => '100', 'class' => 'img-responsive about-img'));
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="Medical" role="tabpanel">
                        <div class="card-body">
                            <div class="box">
                                <div class="box-body">

                                    <div class="table-responsive">
                                        <table class="table table-condensed table-hover contact-list no-wrap stylish-table">
                                            <tr>
                                                <th>Visit Date</th>
                                                <th>Hospital Name</th>
                                                <th>Hospital Address</th>
                                                <th>Consultant Name</th>
                                                <th>Problems</th>
                                                <th>Remarks</th>
                                                <th>Next Visit</th>
                                            </tr>
                                            <?php foreach ($usermedicals as $usermedical): ?>
                                                <tr>
                                                    <td><?php echo $usermedical['Usermedical']['visit_date']; ?></td>
                                                    <td><?php echo $usermedical['Usermedical']['hospital_name']; ?></td>
                                                    <td><?php echo nl2br($usermedical['Usermedical']['hospital_address']); ?></td>
                                                    <td><?php echo $usermedical['Usermedical']['consultant_name']; ?></td>
                                                    <td><?php echo $usermedical['Usermedical']['problems']; ?></td>
                                                    <td><?php echo $usermedical['Usermedical']['remarks']; ?></td>
                                                    <td><?php echo $usermedical['Usermedical']['next_visit']; ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="Nominee" role="tabpanel">
                        <div class="card-body">
                            <div class="box">
                                <div class="box-body">

                                    <div class="table-responsive">
                                        <table class="table table-condensed table-hover contact-list no-wrap stylish-table">
                                            <tr>
                                                <th>Name</th>
                                                <th>Relation</th>
                                                <th>Date Of Birth</th>
                                                <th>Mobile</th>
                                                <th>NID</th>
                                            </tr>
                                            <?php foreach ($usernominees as $usernominee): ?>
                                                <tr>
                                                    <td><?php echo $usernominee['Usernominee']['name']; ?></td>
                                                    <td><?php echo $usernominee['Usernominee']['relation']; ?></td>
                                                    <td><?php echo $usernominee['Usernominee']['date_of_birth']; ?></td>
                                                    <td><?php echo $usernominee['Usernominee']['mobile']; ?></td>
                                                    <td><?php echo $usernominee['Usernominee']['nid']; ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="Transfer" role="tabpanel">
                        <div class="card-body">
                            <div class="box">
                                <div class="box-body">

                                    <div class="table-responsive">
                                        <table class="table table-condensed table-hover contact-list no-wrap stylish-table">
                                            <tr>
                                                <th>Company</th>
                                                <th>Department</th>
                                                <th>Section</th>
                                                <th>Designation</th>
                                                <th>Previous Company</th>
                                                <th>Previous Department</th>
                                                <th>Previous Section</th>
                                                <th>Previous Designation</th>
                                                <th>Transfer Date</th>
                                                <th>Remarks</th>
                                                <th>Transfer Status</th>
                                            </tr>
                                            <?php foreach ($usertransfers as $usertransfer): ?>
                                                <tr>
                                                    <td><?php echo $usertransfer['Usertransfer']['name']; ?></td>
                                                    <td><?php echo $usertransfer['Usertransfer']['relation']; ?></td>
                                                    <td><?php echo $usertransfer['Usertransfer']['date_of_birth']; ?></td>
                                                    <td><?php echo $usertransfer['Usertransfer']['mobile']; ?></td>
                                                    <td><?php echo $usertransfer['Usertransfer']['nid']; ?></td>
                                                    <td><?php echo $usertransfer['Usertransfer']['nid']; ?></td>
                                                    <td><?php echo $usertransfer['Usertransfer']['nid']; ?></td>
                                                    <td><?php echo $usertransfer['Usertransfer']['nid']; ?></td>
                                                    <td><?php echo $usertransfer['Usertransfer']['nid']; ?></td>
                                                    <td><?php echo $usertransfer['Usertransfer']['nid']; ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

















<!-- <div class="travelexpenses view">
<h2><?php echo __('Travelexpense'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($travelexpense['Travelexpense']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Traveller'); ?></dt>
		<dd>
			<?php echo $this->Html->link($travelexpense['Traveller']['name'], array('controller' => 'travellers', 'action' => 'view', $travelexpense['Traveller']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Submit Date'); ?></dt>
		<dd>
			<?php echo h($travelexpense['Travelexpense']['submit_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expense Type'); ?></dt>
		<dd>
			<?php echo h($travelexpense['Travelexpense']['expense_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($travelexpense['Travelexpense']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment Method'); ?></dt>
		<dd>
			<?php echo h($travelexpense['Travelexpense']['payment_method']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Currency'); ?></dt>
		<dd>
			<?php echo h($travelexpense['Travelexpense']['currency']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount Spent'); ?></dt>
		<dd>
			<?php echo h($travelexpense['Travelexpense']['amount_spent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Budget Amount'); ?></dt>
		<dd>
			<?php echo h($travelexpense['Travelexpense']['budget_amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reimbursable'); ?></dt>
		<dd>
			<?php echo h($travelexpense['Travelexpense']['reimbursable']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($travelexpense['Travelexpense']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entry By'); ?></dt>
		<dd>
			<?php echo h($travelexpense['Travelexpense']['entry_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Edit By'); ?></dt>
		<dd>
			<?php echo h($travelexpense['Travelexpense']['edit_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($travelexpense['Travelexpense']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($travelexpense['Travelexpense']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Travelexpense'), array('action' => 'edit', $travelexpense['Travelexpense']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Travelexpense'), array('action' => 'delete', $travelexpense['Travelexpense']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $travelexpense['Travelexpense']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Travelexpenses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Travelexpense'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Travellers'), array('controller' => 'travellers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Traveller'), array('controller' => 'travellers', 'action' => 'add')); ?> </li>
	</ul>
</div> -->
