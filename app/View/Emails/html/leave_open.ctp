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
        <div style="background-color:#f2f2f2;padding:40px">
            <table cellpadding="0" cellspacing="0" align="center" width="600" style="background-color:#ffffff;font-family:Arial,Helvetica,sans-serif;border-radius:5px">
                <tbody>
                    <tr>
                        <td>
                            <a style="display:block;text-align:center;padding:20px" href="<?php echo $web; ?>" target="_blank" data-saferedirecturl="https://www.google.com/url?q=<?php echo $web; ?>">
                                <img style="width:250px" src="<?php echo $web; ?>/img/logo/1.png" alt="logo">
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <hr style="border-top:1px solid #d0d0d0">
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:30px">
                            <p>
                                <span style="font-weight:bold;font-size:20px">Dear <?php echo $user['User']['name']; ?>,</span>
                                <br> 
                                <?php echo $userleave['User']['name']; ?> has applied for a leave on: <br />
                                <span style="color:#37a000;font-weight:bold"><?php echo $userleave['Userleave']['created']; ?></span><br />
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:30px">
                            <table cellpadding="0" cellspacing="20">
                                <tbody>
                                    <tr>
                                        <td>
                                            <table cellpadding="0" cellspacing="0" style="border:1px solid #e2e2e2">
                                                <tbody>
                                                    <tr>
                                                        <td style="padding:5px;font-weight:bold" colspan="2">
                                                            The leave details are below:
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding:5px">
                                                            The leave type: 
                                                        </td>
                                                        <td style="padding:5px">
                                                            <span style="color:#37a000;font-weight:bold"><?php echo $userleave['Companyleave']['name']; ?>[<?php echo $userleave['Companyleave']['short_code']; ?>]</span>.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding:5px">
                                                            From date: 
                                                        </td>
                                                        <td style="padding:5px">
                                                            <?php echo h($userleave['Userleave']['start_date']); ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding:5px">
                                                            To date: 
                                                        </td>
                                                        <td style="padding:5px">
                                                            <?php echo h($userleave['Userleave']['end_date']); ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding:5px">
                                                            Total day(s): 
                                                        </td>
                                                        <td style="padding:5px">
                                                            <?php echo h($userleave['Userleave']['days']); ?>
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

                    <tr>
                        <td>
                            <hr style="border-top:1px solid #d0d0d0">
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:30px;text-align:center">
                            <span style="font-size:10.5pt;font-family:Arial,sans-serif;color:#656565">
                                You can also view this leave details by 
                                <b><a href="<?php echo $web; ?>/userleaves/view/<?php echo $userleave['Userleave']['id']; ?>" target="_blank"><span style="display:inline-block;padding:10px;background:green;color:#fff;border-radius:3px">Clicking Here</span></a></b>
                            </span>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:30px;display:none">
                            <table align="center">
                                <tbody>
                                    <tr>
                                        <td style="padding:0 10px"><a href="https://www.facebook.com/mdabjalil" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://www.facebook.com/mdabjalil&amp;source=gmail&amp;ust=1563430335609000&amp;usg=AFQjCNG_baASZAs4oXnI47URh6GUYEmIFA"><img src="https://ci5.googleusercontent.com/proxy/hZJyK076VGwOG7MZNZTJhjXbrGCP1VD8rhBG0KrG4KzoPEXOS3eIA2tgYoRHZ7UChrV4acrdSqjrmMXtLR4vmpFj3Hd2yQM7wUz_qmSf5EROdAs=s0-d-e1-ft#https://eggmail.blob.core.windows.net/h12017/emails-asset-fb.png" alt="fb_button_image"></a></td>

                                        <td style="padding:0 10px"><a href="https://play.google.com/store/apps/details?id=com.softwareend.hr.indesore" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://play.google.com/store/apps/details?id%3Dcom.chaldal.poached&amp;source=gmail&amp;ust=1563430335609000&amp;usg=AFQjCNHNC6tGav6M9LKvhPlKpCslwNx5_Q"><img src="https://ci3.googleusercontent.com/proxy/WYP3kOHnZVhmKyRfq36GG_8e7uiO0Sg7MyB_8npXFgzY7wE6t77YDao3O3eyqdk2xJbfjODdTad4J3By5MomMYQ5nmvSbFHKuAVIXJRSrikuYHI=s0-d-e1-ft#https://eggmail.blob.core.windows.net/h22016/n7_gplay_button.png" alt="googleplay_button_image"></a></td>

                                        <td style="padding:0 10px"><a href="https://itunes.apple.com/us/app/indesore/id2205593330?mt=8" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://itunes.apple.com/us/app/indesore/id2205593330?mt%3D8&amp;source=gmail&amp;ust=1563430335610000&amp;usg=AFQjCNG-8VZZ-mybmkLrPWXf9y9rgdqQWQ"><img src="https://ci6.googleusercontent.com/proxy/MOSgB4__5vCTf0_ktvLJiDfHsJExkmRtpq8p3yrRxR6SR49kZodvN0V3deZ9B9xu5IemXPeYaurWYlz6tpcqIO1aroMHOvA0lx872Ts2kl2ma-zTAiE=s0-d-e1-ft#https://eggmail.blob.core.windows.net/h22016/n7_appstore_button.png" alt="applestore_button_image"></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>