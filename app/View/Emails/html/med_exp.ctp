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
                                                            Some medicine is going to be expired. The list is below. <br />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding:15.0pt 15.0pt 0cm 15.0pt">
                                                            <table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%">
                                                                <thead>
                                                                    <tr>
                                                                        <th style="width:40px;">#SL</th>
                                                                        <th style="width:20%">Item</th>
                                                                        <th>Current Stock</th>
                                                                        <th>Re-order Point</th>
                                                                        <th>Unit</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>

                                                                    <?php
                                                                    $totalq = $total = 0;
                                                                    foreach ($medicineexps['Medicinerequisitiondetail'] as $key => $exp) {
                                                                        $med = $medicines[$exp['medicine_id']];
                                                                        ?>
                                                                        <tr>
                                                                            <td><?php echo ($key + 1); ?></td>
                                                                            <td>
                                                                                <img border="0" style="width:80px" src="<?php echo $web; ?>/img/me/<?php echo $med[0]; ?>.png" alt="Image">
                                                                                <a href="<?php echo $web; ?>/medicines/view/<?php echo $med[0]; ?>"><?php echo $med[1]; ?></a>
                                                                            </td>
                                                                            <td class="text-right"><?php echo 0; ?></td>
                                                                            <td class="text-right"><?php echo $med[2]; ?></td>
                                                                            <td class="text-right"><?php echo $med[3]; ?></td>
                                                                            <td><?php echo $medicineunits[$med[4]]; ?></td>
                                                                        </tr>
                                                                    <?php } ?>

                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding:15.0pt 15.0pt 0cm 15.0pt">
                                                            <table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%">
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="border:none;border-top:solid #e0e0e0 1.0pt;padding:0">
                                                                            <p style="line-height:0%"><span style="font-size:1.0pt;font-family:Arial,sans-serif;color:#222222">&nbsp;<u></u><u></u></span></p>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <div style="margin-top:15.0pt">
                                                                <p align="center" style="text-align:center;line-height:18.0pt">
                                                                    <span style="font-size:10.5pt;font-family:Arial,sans-serif;color:#656565">
                                                                        Alternatively, you can also view this list by .
                                                                        <b><a href="<?php echo $web; ?>/medicines/expired/" target="_blank"><span style="color:#37a000">clicking here</span></a></b>
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