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
                                                        <td style="padding:0cm 0cm 15.0pt 0cm">
                                                            <p class="MsoNormal" align="center" style="text-align:center">
                                                                <span style="font-family:Arial,sans-serif;color:#222222">
                                                                    <a href="<?php echo $web; ?>" target="_blank" data-saferedirecturl="https://www.google.com/url?q=<?php echo $web; ?>">
                                                                        <span style="color:#222222">
                                                                            <span style="color:blue">
                                                                                <img border="0" style="width:1.0833in;height:.3125in" src="<?php echo $web; ?>/img/logo/1.png" alt="logo" class="CToWUd">
                                                                            </span>
                                                                        </span>
                                                                    </a>
                                                                </span>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding:15.0pt 15.0pt 0cm 15.0pt;word-break:break-word">
                                                            <p class="MsoNormal" style="line-height:18.0pt">
                                                                <span style="font-size:12.0pt;font-family:Arial,sans-serif;color:#222222">
                                                                    Dear <?php echo $user; ?>, <br />
                                                                    Your reporting person <?php echo $report_to; ?> has wrote a note on: <br />
                                                                    Appraisal KPI named <span style="color:#37a000;font-weight:bold"><?php echo $appraisalusernote['Appraisaluserkra']['name']; ?></span> under <br />
                                                                    Appraisal Area named <span style="color:#37a000;font-weight:bold"><?php echo $appraisalarea['Appraisalarea']['name']; ?></span>.
                                                                </span>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding:15.0pt 15.0pt 0cm 15.0pt;word-break:break-word">
                                                            <table class="m_-1683386665117200616MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%">
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="padding:15.0pt 0cm 0cm 0cm">
                                                                            Note: <?php echo h($appraisalusernote['Appraisalusernote']['name']); ?>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding:15.0pt 0cm 0cm 0cm">
                                                                            Note Description: <?php echo h($appraisalusernote['Appraisalusernote']['description']); ?>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding:15.0pt 0cm 0cm 0cm">
                                                                            Date: <?php echo h($appraisalusernote['Appraisalusernote']['created']); ?>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding:15.0pt 15.0pt 0cm 15.0pt;word-break:break-word">
                                                            <table class="m_-1683386665117200616MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%">
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="border:none;border-top:solid #e0e0e0 1.0pt;padding:0">
                                                                            <p class="MsoNormal" style="line-height:0%"><span style="font-size:1.0pt;font-family:Arial,sans-serif;color:#222222">&nbsp;<u></u><u></u></span></p>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <div style="margin-top:15.0pt">
                                                                <p class="MsoNormal" align="center" style="text-align:center;line-height:18.0pt">
                                                                    <span style="font-size:10.5pt;font-family:Arial,sans-serif;color:#656565">
                                                                        Alternatively, you can also view this note by .
                                                                        <b><a href="<?php echo $web; ?>/appraisalusernotes/view/<?php echo $appraisalusernote['Appraisalusernote']['id']; ?>" target="_blank"><span style="color:#37a000">clicking here</span></a></b>
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