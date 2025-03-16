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
        <table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;background:#f2f2f2">
            <tbody>
                <tr>
                    <td style="padding:30px 0">
                        <div align="center">
                            <table border="0" cellspacing="0" cellpadding="0" width="600" style="width:550.0pt">
                                <tbody>
                                    <tr>
                                        <td style="background:white;padding:22.5pt 0cm 22.5pt 0cm">
                                            <table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%">
                                                <tbody>
                                                    <tr>
                                                        <td style="padding:0cm 0cm 15.0pt 0cm;text-align:center">
                                                            <a href="<?php echo $web; ?>" target="_blank" data-saferedirecturl="https://www.google.com/url?q=<?php echo $web; ?>">
                                                                <img border="0" style="width:3.5in" src="<?php echo $web; ?>/img/logo/1.png" alt="logo">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding:0cm 0cm 15.0pt 0cm;text-align:center">
                                                            <a href="<?php echo $web; ?>" target="_blank" data-saferedirecturl="https://www.google.com/url?q=<?php echo $web; ?>">
                                                                <img border="0" style="width:150px" src="<?php echo $web; ?>/img/email2.gif" alt="logo">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding:15.0pt 15.0pt 0cm 15.0pt;font-size:11.0pt;font-family:Arial,sans-serif;line-height:32px">
                                                            Dear <?php echo $userto['User']['name']; ?>, <br />
                                                            <b><?php echo $user; ?></b> has edited a renewal index information. <br />
                                                            The renewal index information is below. <br />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding:15.0pt 15.0pt 0cm 15.0pt">
                                                            <table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%">
                                                                <tbody>
                                                                    <tr>
                                                                        <th style="width:40%;font-size:10.0pt;text-align:left;font-family:Arial,sans-serif;padding:15.0pt 0cm 0cm 0cm">
                                                                            File: 
                                                                        </th>
                                                                        <td style="font-size:10.0pt;text-align:left;font-family:Arial,sans-serif;padding:15.0pt 0cm 0cm 0cm">
                                                                            <?php
                                                                            $files = IMAGES . 'cd/' . $certification['Certification']['id'] . 'e.' . $certification['Certification']['ext'];
                                                                            if (is_file($files)) {
                                                                                if ($certification['Certification']['ext'] == 'mp4' || $certification['Certification']['ext'] == '3gpp') {
                                                                                    echo '<a href="' . $web . '/img/cd/' . $certification['Certification']['id'] . 'e.' . $certification['Certification']['ext'] . '"><img src="' . $web . '/img/mp4.png" alt="" title="View Document File" width="100"></a>';
                                                                                } elseif ($certification['Certification']['ext'] == 'doc' || $certification['Certification']['ext'] == 'docx') {
                                                                                    echo '<a href="' . $web . '/img/cd/' . $certification['Certification']['id'] . 'e.' . $certification['Certification']['ext'] . '"><img src="' . $web . '/img/doc.png" alt="" title="View Document File" width="100"></a>';
                                                                                } elseif ($certification['Certification']['ext'] == 'xls' || $certification['Certification']['ext'] == 'xlsx' || $certification['Certification']['ext'] == 'csv') {
                                                                                    echo '<a href="' . $web . '/img/cd/' . $certification['Certification']['id'] . 'e.' . $certification['Certification']['ext'] . '"><img src="' . $web . '/img/xls.png" alt="" title="View Document File" width="100"></a>';
                                                                                } elseif ($certification['Certification']['ext'] == 'ppt' || $certification['Certification']['ext'] == 'pptx') {
                                                                                    echo '<a href="' . $web . '/img/cd/' . $certification['Certification']['id'] . 'e.' . $certification['Certification']['ext'] . '"><img src="' . $web . '/img/ppt.png" alt="" title="View Document File" width="100"></a>';
                                                                                } elseif ($certification['Certification']['ext'] == 'pdf') {
                                                                                    echo '<a href="' . $web . '/img/cd/' . $certification['Certification']['id'] . 'e.' . $certification['Certification']['ext'] . '"><img src="' . $web . '/img/pdf.png" alt="" title="View Document File" width="100"></a>';
                                                                                } else {
                                                                                    if (in_array(strtolower($certification['Certification']['ext']), array('jpg', 'jpeg', 'png', 'bmp', 'gif', 'webp'))) {
                                                                                        echo '<a href="' . $web . '/img/cd/' . $certification['Certification']['id'] . 'e.' . $certification['Certification']['ext'] . '"><img src="' . $web . '/cd/' . $certification['Certification']['id'] . 'e.' . $certification['Certification']['ext'] . '" alt="" title="View Document File" width="100"></a>';
                                                                                    } else {
                                                                                        echo '<a href="' . $web . '/img/cd/' . $certification['Certification']['id'] . 'e.' . $certification['Certification']['ext'] . '">' . $certification['Certification']['id'] . 'e.' . $certification['Certification']['ext'] . '</a>';
                                                                                    }
                                                                                }
                                                                            } else {
                                                                                echo '<img src="' . $web . '/img/no_img.jpg" alt="" title="No" width="100">';
                                                                            }
                                                                            ?>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th style="font-size:10.0pt;text-align:left;font-family:Arial,sans-serif;padding:15.0pt 0cm 0cm 0cm">
                                                                            Company: 
                                                                        </th>
                                                                        <td style="font-size:10.0pt;text-align:left;font-family:Arial,sans-serif;padding:15.0pt 0cm 0cm 0cm">
                                                                            <a href="<?php echo $web; ?>/companies/view/<?php echo $certification['Certification']['company_id']; ?>"><?php echo $company['Company']['name']; ?></a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th style="font-size:10.0pt;text-align:left;font-family:Arial,sans-serif;padding:15.0pt 0cm 0cm 0cm">
                                                                            Renewal Type: 
                                                                        </th>
                                                                        <td style="font-size:10.0pt;text-align:left;font-family:Arial,sans-serif;padding:15.0pt 0cm 0cm 0cm">
                                                                            <span style="padding: 2px 10px;line-height: 13px;color: #ffffff;font-weight: 400;border-radius: 4px;background:<?php echo $certificationtype['Certificationtype']['color_code']; ?>"><?php echo $certificationtype['Certificationtype']['name']; ?></span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th style="font-size:10.0pt;text-align:left;font-family:Arial,sans-serif;padding:15.0pt 0cm 0cm 0cm">
                                                                            Title: 
                                                                        </th>
                                                                        <td style="font-size:10.0pt;text-align:left;font-family:Arial,sans-serif;padding:15.0pt 0cm 0cm 0cm">
                                                                            <?php echo h($certification['Certification']['name']); ?>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th style="font-size:10.0pt;text-align:left;font-family:Arial,sans-serif;padding:15.0pt 0cm 0cm 0cm">
                                                                            Title/Identification No.: 
                                                                        </th>
                                                                        <td style="font-size:10.0pt;text-align:left;font-family:Arial,sans-serif;padding:15.0pt 0cm 0cm 0cm">
                                                                            <?php echo h($certification['Certification']['certificate_no']); ?>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th style="font-size:10.0pt;text-align:left;font-family:Arial,sans-serif;padding:15.0pt 0cm 0cm 0cm">
                                                                            Authority/Vendor: 
                                                                        </th>
                                                                        <td style="font-size:10.0pt;text-align:left;font-family:Arial,sans-serif;padding:15.0pt 0cm 0cm 0cm">
                                                                            <?php echo h($certification['Certification']['authority']); ?>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th style="font-size:10.0pt;text-align:left;font-family:Arial,sans-serif;padding:15.0pt 0cm 0cm 0cm">
                                                                            Responsible Department: 
                                                                        </th>
                                                                        <td style="font-size:10.0pt;text-align:left;font-family:Arial,sans-serif;padding:15.0pt 0cm 0cm 0cm">
                                                                            <?php echo isset($department['Department']['name']) ? $department['Department']['name'] : 'NIL'; ?>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th style="font-size:10.0pt;text-align:left;font-family:Arial,sans-serif;padding:15.0pt 0cm 0cm 0cm">
                                                                            Responsible Person: 
                                                                        </th>
                                                                        <td style="font-size:10.0pt;text-align:left;font-family:Arial,sans-serif;padding:15.0pt 0cm 0cm 0cm">
                                                                            <?php echo isset($user_res['User']['name']) ? $user_res['User']['name'] : 'NIL'; ?>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th style="font-size:10.0pt;text-align:left;font-family:Arial,sans-serif;padding:15.0pt 0cm 0cm 0cm">
                                                                            First Issue Date: 
                                                                        </th>
                                                                        <td style="font-size:10.0pt;text-align:left;font-family:Arial,sans-serif;padding:15.0pt 0cm 0cm 0cm">
                                                                            <?php echo h($certification['Certification']['issue_date']); ?>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th style="font-size:10.0pt;text-align:left;font-family:Arial,sans-serif;padding:15.0pt 0cm 0cm 0cm">
                                                                            Expiry Date: 
                                                                        </th>
                                                                        <td style="font-size:10.0pt;text-align:left;font-family:Arial,sans-serif;padding:15.0pt 0cm 0cm 0cm">
                                                                            <?php echo h($certification['Certification']['expiry_date']); ?>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding:15.0pt 15.0pt 0cm 15.0pt">
                                                            <div style="margin-top:15.0pt">
                                                                <p align="center" style="text-align:center;line-height:18.0pt">
                                                                    <span style="font-size:10.0pt;font-family:Arial,sans-serif;color:#656565">
                                                                        Alternatively, you can also view this renewal index by .
                                                                        <b><a href="<?php echo $web; ?>/certifications/approve_certification/<?php echo $n_id; ?>" target="_blank"><span style="color:#37a000">clicking here</span></a></b>
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>