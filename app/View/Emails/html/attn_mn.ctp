<!DOCTYPE html>
<html xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" lang="en">
    <head></head>
    <head>
        <title>INDESORE</title>
        <meta http-equiv="Content-Type" content="text/html charset=UTF-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1 user-scalable=yes">
        <meta name="x-apple-disable-message-reformatting" />
        <meta name="format-detection" content="telephone=no, date=no, address=no, email=no, url=no">
        <meta name="color-scheme" content="light dark">
        <meta name="supported-color-schemes" content="light dark">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet" type="text/css">
    </head>
    <body style="background-color: #dddddd; margin: 0; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;">
        <?php
        $days = $pdays = $ndays = $wdays = $wwdays = $hdays = $ldays = $adays = $edays = $fdays = 0;
        $strs = $wohrs = $ohrs = $whrs = "";
        foreach ($schedules AS $key => $schedule) {
            $days ++;
            $out_time = $schedule[1];
            $late_time = $schedule[2];
            $weekend = explode(',', $schedule[3]);
            $wohrs .= "," . substr($key, 8, 2);
            if (isset($attendances[$key])) {
                $oh = $this->App->timeCalc($key . ' ' . $schedule[0], $key . ' ' . $out_time, 'p');
                $wh = $this->App->timeCalc($key . ' ' . $attendances[$key]['Attendance']['in_time'], $key . ' ' . $attendances[$key]['Attendance']['out_time'], 'p');
                $ohrs .= ",$oh";
                $whrs .= ",$wh";
            } else {
                $ohrs .= ",0.0";
                $whrs .= ",0.0";
            }
            $label = (in_array(date('w', strtotime($key)), $weekend) || isset($holidays[$key])) ? '7460ee' : '868e96';

            $strs .= '<tr>';
            $strs .= '<td style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;width:93px"><span style="display: inline-block; padding: 0.25em 0.4em; font-size: 75%; font-weight: 400; line-height: 1; text-align: center; white-space: nowrap; vertical-align: baseline; border-radius: 0.25rem;background-color:#' . $label . ';color: #fff;">' . $key . '</span></td>';
            $strs .= '<td style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;width:45px"><span style="display: inline-block; padding: 0.25em 0.4em; font-size: 75%; font-weight: 400; line-height: 1; text-align: center; white-space: nowrap; vertical-align: baseline; border-radius: 0.25rem;background-color:#' . $label . ';color: #fff;">' . date('D', strtotime($key)) . '</span></td>';

            if (isset($attendances[$key])) {
                if (in_array(date('w', strtotime($key)), $weekend)) {
                    $wwdays ++;
                    $wdays ++;
                } elseif (isset($holidays[$key])) {
                    $wwdays ++;
                    $hdays ++;
                } else {
                    $pdays ++;
                }
                if ($attendances[$key]['Attendance']['out_time'] != '' && (strtotime($attendances[$key]['Attendance']['out_time']) - strtotime($attendances[$key]['Attendance']['in_time'])) < 300) {
                    $attendances[$key]['Attendance']['out_time'] = '';
                }

                $strs .= '<td style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;">' . h($attendances[$key]['Attendance']['in_time']) . '</td>';
                $strs .= '<td style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;">';

                if ($attendances[$key]['Attendance']['out_time'] == '') {
                    if ($key == date('Y-m-d')) {
                        $strs .= '<span style="display: inline-block; padding: 0.25em 0.4em; font-size: 75%; font-weight: 400; line-height: 1; text-align: center; white-space: nowrap; vertical-align: baseline; border-radius: 0.25rem;background-color:##7460ee;color: #fff;">First Punch</span>';
                    } else {
                        if ($attendances[$key]['Attendance']['reason'] == '7') {
                            $strs .= '<span style="display: inline-block; padding: 0.25em 0.4em; font-size: 75%; font-weight: 400; line-height: 1; text-align: center; white-space: nowrap; vertical-align: baseline; border-radius: 0.25rem;background-color:##7460ee;color: #fff;">On Duty</span>';
                        } else {
                            $strs .= '<span style="display: inline-block; padding: 0.25em 0.4em; font-size: 75%; font-weight: 400; line-height: 1; text-align: center; white-space: nowrap; vertical-align: baseline; border-radius: 0.25rem;background-color:#f62d51;color: #fff;">Punch Missing</span>';
                        }
                    }
                } else {
                    $strs .= $attendances[$key]['Attendance']['out_time'];
                }

                $strs .= '</td>';
                $strs .= '<td style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;">';

                if ($attendances[$key]['Attendance']['out_time'] == '') {
                    if ($key == date('Y-m-d')) {
                        $strs .= '<span style="display: inline-block; padding: 0.25em 0.4em; font-size: 75%; font-weight: 400; line-height: 1; text-align: center; white-space: nowrap; vertical-align: baseline; border-radius: 0.25rem;background-color:#009efb;color: #fff;">' . $this->App->timeCalc($attendances[$key]['Attendance']['in_time'], date('H:i:s'), 'n') . '</span>';
                    } else {
                        $strs .= '<span style="display: inline-block; padding: 0.25em 0.4em; font-size: 75%; font-weight: 400; line-height: 1; text-align: center; white-space: nowrap; vertical-align: baseline; border-radius: 0.25rem;background-color:#f62d51;color: #fff;">Punch Missing</span>';
                    }
                } else {
                    $strs .= '<span style="display: inline-block; padding: 0.25em 0.4em; font-size: 75%; font-weight: 400; line-height: 1; text-align: center; white-space: nowrap; vertical-align: baseline; border-radius: 0.25rem;background-color:#009efb;color: #fff;">' . $this->App->timeCalc($attendances[$key]['Attendance']['in_time'], $attendances[$key]['Attendance']['out_time'], 'n') . '</span>';
                }

                $strs .= '</td>';
                $strs .= '<td style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;">';

                if ($attendances[$key]['Attendance']['in_time'] > $late_time) {
                    if (!in_array(date('w', strtotime($key)), $weekend) && empty($holidays[$key])) {
                        $ldays ++;
                    }
                    $strs .= '<span style="display: inline-block; padding: 0.25em 0.4em; font-size: 75%; font-weight: 400; line-height: 1; text-align: center; white-space: nowrap; vertical-align: baseline; border-radius: 0.25rem;background-color:#f62d51;color: #fff;">' . $this->App->timeCalc($late_time, $attendances[$key]['Attendance']['in_time'], 'al') . '</span> <img src="' . $web . '/img/snail.png" style="width:25px" width="25" alt="snail" title="snail">';
                } else {
                    $strs .= '<span style="display: inline-block; padding: 0.25em 0.4em; font-size: 75%; font-weight: 400; line-height: 1; text-align: center; white-space: nowrap; vertical-align: baseline; border-radius: 0.25rem;background-color:#39c449;color: #fff;">In Time</span>';
                }

                $strs .= '</td>';
                $strs .= '<td style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;">';
                if ($attendances[$key]['Attendance']['out_time'] == '') {
                    if ($key == date('Y-m-d')) {
                        $strs .= '<span style="display: inline-block; padding: 0.25em 0.4em; font-size: 75%; font-weight: 400; line-height: 1; text-align: center; white-space: nowrap; vertical-align: baseline; border-radius: 0.25rem;background-color:##7460ee;color: #fff;">First Punch</span>';
                    } else {
                        if (!in_array(date('w', strtotime($key)), $weekend) && empty($holidays[$key])) {
                            $edays ++;
                        }
                        $strs .= '<span style="display: inline-block; padding: 0.25em 0.4em; font-size: 75%; font-weight: 400; line-height: 1; text-align: center; white-space: nowrap; vertical-align: baseline; border-radius: 0.25rem;background-color:#f62d51;color: #fff;">Punch Missing</span>';
                    }
                } elseif ($attendances[$key]['Attendance']['out_time'] < $out_time) {
                    if (!in_array(date('w', strtotime($key)), $weekend) && empty($holidays[$key])) {
                        $edays ++;
                    }
                    $strs .= '<span style="display: inline-block; padding: 0.25em 0.4em; font-size: 75%; font-weight: 400; line-height: 1; text-align: center; white-space: nowrap; vertical-align: baseline; border-radius: 0.25rem;background-color:#f62d51;color: #fff;">' . $this->App->timeCalc($attendances[$key]['Attendance']['out_time'], $out_time, 'ae') . '</span> <img src="' . $web . '/img/flee.png" style="width:35px" width="35" alt="flee" title="flee">';
                } else {
                    $strs .= '<span style="display: inline-block; padding: 0.25em 0.4em; font-size: 75%; font-weight: 400; line-height: 1; text-align: center; white-space: nowrap; vertical-align: baseline; border-radius: 0.25rem;background-color:#39c449;color: #fff;">In Time</span>';
                }
                $strs .= '</td>';
            } elseif (in_array(date('w', strtotime($key)), $weekend)) {
                $wdays ++;
                $strs .= '<td style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;"></td><td style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;"></td>';
                $strs .= '<td style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;">Weekend</td>';
                $strs .= '<td style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;"></td><td style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;"></td>';
            } elseif (isset($holidays[$key])) {
                $hdays ++;
                $strs .= '<td style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;"></td><td style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;"></td>';
                $strs .= '<td style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;">' . h($holidays[$key]['Holiday']['title']) . '</td>';
                $strs .= '<td style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;"></td><td style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;"></td>';
            } else {
                if (isset($userleaves[$key])) {
                    $fdays ++;
                    $strs .= '<td style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;"></td><td style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;"></td>';
                    $strs .= '<td style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;">' . $userleaves[$key][0] . '&nbsp;<span style="display: inline-block; padding: 0.25em 0.4em; font-size: 75%; font-weight: 400; line-height: 1; text-align: center; white-space: nowrap; vertical-align: baseline; border-radius: 0.25rem;background-color:' . $userleaves[$key][2] . ';color: #fff;">' . $userleaves[$key][1] . '</span></td>';
                    $strs .= '<td style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;"></td><td style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;"></td>';
                } elseif (strtotime($key) > time()) {
                    $ndays ++;
                    $strs .= '<td style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;"></td><td style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;"></td>';
                    $strs .= '<td style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;"><span style="display: inline-block; padding: 0.25em 0.4em; font-size: 75%; font-weight: 400; line-height: 1; text-align: center; white-space: nowrap; vertical-align: baseline; border-radius: 0.25rem;background-color:#ffbc34;color: #fff;">Coming Day</span></td>';
                    $strs .= '<td style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;"></td><td style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;"></td>';
                } elseif (strtotime($key) < strtotime($user['User']['join_date'])) {
                    $ndays ++;
                    $strs .= '<td style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;"></td><td style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;"></td>';
                    $strs .= '<td style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;"><span style="display: inline-block; padding: 0.25em 0.4em; font-size: 75%; font-weight: 400; line-height: 1; text-align: center; white-space: nowrap; vertical-align: baseline; border-radius: 0.25rem;background-color:#868e96;color: #fff;">Not Joined</span></td>';
                    $strs .= '<td style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;"></td><td style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;"></td>';
                } else {
                    $adays ++;
                    $strs .= '<td style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;"></td><td style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;"></td>';
                    $strs .= '<td style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;"><span style="display: inline-block; padding: 0.25em 0.4em; font-size: 75%; font-weight: 400; line-height: 1; text-align: center; white-space: nowrap; vertical-align: baseline; border-radius: 0.25rem;background-color:#f62d51;color: #fff;">Absent</span></td>';
                    $strs .= '<td style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;"></td><td style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;"></td>';
                }
            }
            $strs .= '</tr>';
        }
        ?>

        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background-color: #dddddd; margin: 0; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;">
            <tbody>
                <tr>
                    <td style="padding:20px;">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;width: 980px; background-color: #ffffff;border-radius: 5px;box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;" width="980">
                            <tbody>
                                <tr>
                                    <td>
                                        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000;box-shadow: 0 8px 8px -4px lightblue;" width="100%">
                                            <tbody>
                                                <tr>
                                                    <td style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: center; vertical-align: top; padding-left: 0px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                        <table width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                                            <tr>
                                                                <td align="center" style="padding-top:15px;padding-bottom:10px;">
                                                                    <div align="center" style="line-height:10px">
                                                                        <a href="<?php echo $web; ?>" style="outline:none" tabindex="-1">
                                                                            <img src="<?php echo $web; ?>/img/logo/1.png" style="display: block; height: auto; border: 0; width: 210px; max-width: 100%;" width="210" alt="indesore logo" title="indesore logo">
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; background-image: url('<?php echo $web; ?>/img/shadow.jpg'); background-repeat: repeat-x; background-position-x: top;width: 100%;">
                                            <tbody>
                                                <tr>
                                                    <td width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                        <table width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                                            <tr>
                                                                <td style="width:100%;text-align:center;padding-top:30px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
                                                                    <h3 style="margin: 0; color: #454562; font-size: 17px; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; line-height: 120%; text-align: center; direction: ltr; font-weight: 700; letter-spacing: normal; margin-top: 0; margin-bottom: 0;">
                                                                        <span>Attendance Report</span>
                                                                    </h3>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <br/>

                                        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000;">
                                            <tbody>
                                                <tr>
                                                    <td width="30%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding:15px;">
                                                        <table width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                            <tr>
                                                                <td>
                                                                    <div style="font-family: sans-serif">
                                                                        <div style="font-size: 14px; mso-line-height-alt: 16.8px; color: #085ff7; line-height: 1.2; font-family: Rubik, Tahoma, Verdana, Segoe, sans-serif;">
                                                                            <p style="margin: 0; font-size: 14px; text-align: left;">
                                                                                <span style="font-size:16px;">Monthly </span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h3 style="margin: 0; color: #454562; font-size: 25px; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; line-height: 120%; text-align: left; direction: ltr; font-weight: 700; letter-spacing: normal; margin-top: 0; margin-bottom: 0;">
                                                                        <span>Attendance Report</span>
                                                                    </h3>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div style="font-family: sans-serif">
                                                                        <div style="font-size: 14px; mso-line-height-alt: 16.8px; color: #393d47; line-height: 1.2; font-family: Rubik, Tahoma, Verdana, Segoe, sans-serif;">
                                                                            <p style="margin: 0; font-size: 14px; text-align: left;">
                                                                                <span style="font-size:16px;">Dear <?php echo trim($user['User']['name']); ?>, this is an auto generated attendance report for the month of <?php echo date('F Y', $tm); ?>.&nbsp;</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div align="center" style="line-height:10px">
                                                                        <img src="<?php echo $web; ?>/img/image_attn.png" style="display: block; height: auto; border: 0; width: 320px; max-width: 100%;" width="320" alt="image_attn" title="image_attn">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top;  padding:15px;">
                                                        <table style="background-color: #ebf3f5; border: 1px solid rgba(120, 130, 140, 0.13);width: 100%; margin-bottom: 1rem; border-collapse: collapse;font-family: Rubik, Tahoma, Verdana, Segoe, sans-serif;">
                                                            <tbody>
                                                                <tr>
                                                                    <th style="vertical-align: middle;text-align: center;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;width: 235px;" rowspan="9">
                                                                        <img src="<?php echo $web; ?>/img/u/<?php echo $user['User']['id']; ?>.png" style="border-radius: 100%;margin-right: 3px;border: 3px solid #ffffff;" alt="User Image" width="120">
                                                                        <div style="text-align:center">
                                                                            <h4 style="margin-bottom: 10px;font-weight: 400;margin-top: 10px;font-size: 16px;"><?php echo trim($user['User']['name']); ?></h4>
                                                                        </div>
                                                                    </th>
                                                                    <th style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;" colspan="2">Month:</th>
                                                                    <th style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;" colspan="2"><?php echo date('F Y', $tm); ?></th>
                                                                </tr>
                                                                <tr>
                                                                    <th style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;background-color:#fafafa;" colspan="2">Company:</th>
                                                                    <th style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;background-color:#fafafa;" colspan="2"><?php echo $user['Company']['name']; ?></th>
                                                                </tr>
                                                                <tr>
                                                                    <th style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;" colspan="2">Department:</th>
                                                                    <th style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;" colspan="2"><span style="display: inline-block; padding: 0.25em 0.4em; font-size: 75%; font-weight: 400; line-height: 1; text-align: center; white-space: nowrap; vertical-align: baseline; border-radius: 0.25rem;background-color: <?php echo $user['Department']['color_code']; ?>;color: #fff;"><?php echo $user['Department']['name']; ?></span></th>
                                                                </tr>
                                                                <tr>
                                                                    <th style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;background-color:#fafafa;" colspan="2">Designation:</th>
                                                                    <th style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;background-color:#fafafa;" colspan="2"><span style="display: inline-block; padding: 0.25em 0.4em; font-size: 75%; font-weight: 400; line-height: 1; text-align: center; white-space: nowrap; vertical-align: baseline; border-radius: 0.25rem;background-color: <?php echo $user['Designation']['color_code']; ?>;color: #fff;"><?php echo $user['Designation']['name']; ?></span></th>
                                                                </tr>
                                                                <tr>
                                                                    <th style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;">Present:</th>
                                                                    <th style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;"><span style="display: inline-block; padding: 0.25em 0.4em; font-size: 75%; font-weight: 400; line-height: 1; text-align: center; white-space: nowrap; vertical-align: baseline; border-radius: 0.25rem;background-color:#7460ee;color: #fff;"><?php echo $pdays; ?></span></th>
                                                                    <th style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;">Total Days:</th>
                                                                    <th style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;" id="totaldays"><?php echo $days; ?></th>
                                                                </tr>
                                                                <tr>
                                                                    <th style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;background-color:#fafafa;">Absent:</th>
                                                                    <th style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;background-color:#fafafa;"><span style="display: inline-block; padding: 0.25em 0.4em; font-size: 75%; font-weight: 400; line-height: 1; text-align: center; white-space: nowrap; vertical-align: baseline; border-radius: 0.25rem;background-color:#f62d51;color: #fff;"><?php echo $adays; ?></span></th>
                                                                    <th style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;background-color:#fafafa;">Working Day:</th>
                                                                    <th style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;background-color:#fafafa;" id="workdays"><?php echo ($days - ($wdays + $hdays + $ndays)); ?></th>
                                                                </tr>
                                                                <tr>
                                                                    <th style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;">Leave:</th>
                                                                    <th style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;"><span style="display: inline-block; padding: 0.25em 0.4em; font-size: 75%; font-weight: 400; line-height: 1; text-align: center; white-space: nowrap; vertical-align: baseline; border-radius: 0.25rem;background-color:#009efb;color: #fff;"><?php echo $fdays; ?></span></th>
                                                                    <th style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;">Weekends:</th>
                                                                    <th style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;"><span style="display: inline-block; padding: 0.25em 0.4em; font-size: 75%; font-weight: 400; line-height: 1; text-align: center; white-space: nowrap; vertical-align: baseline; border-radius: 0.25rem;background-color:#aedcf7;color: #fff;"><?php echo $wdays; ?></span></th>
                                                                </tr>
                                                                <tr>
                                                                    <th style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;background-color:#fafafa;">Holidays:</th>
                                                                    <th style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;background-color:#fafafa;"><span style="display: inline-block; padding: 0.25em 0.4em; font-size: 75%; font-weight: 400; line-height: 1; text-align: center; white-space: nowrap; vertical-align: baseline; border-radius: 0.25rem;background-color:#aedcf7;color: #fff;"><?php echo $hdays; ?></span></th>
                                                                    <th style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;background-color:#fafafa;">Weekend Work:</th>
                                                                    <th style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;background-color:#fafafa;"><span style="display: inline-block; padding: 0.25em 0.4em; font-size: 75%; font-weight: 400; line-height: 1; text-align: center; white-space: nowrap; vertical-align: baseline; border-radius: 0.25rem;background-color:#aedcf7;color: #fff;"><?php echo $wwdays; ?></span></th>
                                                                </tr>
                                                                <tr>
                                                                    <th style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;">Late:</th>
                                                                    <th style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;"><span style="display: inline-block; padding: 0.25em 0.4em; font-size: 75%; font-weight: 400; line-height: 1; text-align: center; white-space: nowrap; vertical-align: baseline; border-radius: 0.25rem;background-color:#ffbc34;color: #fff;"><?php echo $ldays; ?></span></th>
                                                                    <th style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;">Early Leave:</th>
                                                                    <th style="vertical-align: middle;border: 1px solid #e5e5e5;padding: 5px;font-weight: 500;"><span style="display: inline-block; padding: 0.25em 0.4em; font-size: 75%; font-weight: 400; line-height: 1; text-align: center; white-space: nowrap; vertical-align: baseline; border-radius: 0.25rem;background-color:#39c449;color: #fff;"><?php echo $edays; ?></span></th>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000;" width="100%">
                                            <tbody>
                                                <tr>
                                                    <td style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px; padding: 15px;">
                                                        <table style="border: 1px solid rgba(120, 130, 140, 0.13);white-space: nowrap;width: 100%; max-width: 100%; margin-bottom: 1rem; background-color: transparent;border-collapse: collapse;font-family: Rubik, Tahoma, Verdana, Segoe, sans-serif;" width="100%">
                                                            <thead>
                                                                <tr>
                                                                    <th style="background-color: #55ce63;border: 1px solid #e5e5e5;color:#ffffff;padding: 5px;" colspan="2">Date</th>
                                                                    <th style="background-color: #55ce63;border: 1px solid #e5e5e5;color:#ffffff;padding: 5px;">In Time</th>
                                                                    <th style="background-color: #55ce63;border: 1px solid #e5e5e5;color:#ffffff;padding: 5px;">Out Time</th>
                                                                    <th style="background-color: #55ce63;border: 1px solid #e5e5e5;color:#ffffff;padding: 5px;">Office Time</th>
                                                                    <th style="background-color: #55ce63;border: 1px solid #e5e5e5;color:#ffffff;padding: 5px;">In Status</th>
                                                                    <th style="background-color: #55ce63;border: 1px solid #e5e5e5;color:#ffffff;padding: 5px;">Out Status</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php echo $strs; ?>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>
