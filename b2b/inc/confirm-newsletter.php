<?php
	//*** Send Email to User ***//
	$email = $_REQUEST['newsemail'];
	/*$subject = 'Welcome to Los Angeles Times Expeditions';

	$headers = 'From: info@latexpeditions.com' . "\r\n";
	$headers .= 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-Type: text/html; charset=ISO-8859-1\r\n';

	$message = '<html><body style="margin:0 !important; padding:0 !important; background-color:#f2f2f2;" bgcolor="#f2f2f2">';
	$message .= '
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet" type="text/css" />

        <style type="text/css">
            body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
            table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
            img { -ms-interpolation-mode: bicubic; }

            img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }
            table { border-collapse: collapse !important; }
            body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; }

            a[x-apple-data-detectors] {
                color: inherit !important;
                text-decoration: none !important;
                font-size: inherit !important;
                font-family: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
            }

            body {
                -webkit-font-smoothing: antialiased !important;
                text-rendering: optimizeLegibility !important;
            }
            table[class="tableOuter"] {
                width: 700px !important;
            }
            table[class="tableInner"] {
                width: 600px !important;
            }
            table[class="tableInnerMid"] {
                width: 500px !important;
            }
            table[class="tableInnerMidSm"] {
                width: 400px !important;
            }

            @media screen and (max-width: 600px) {
                .max-width {
                    max-width: 100% !important;
                }
                .mobile-wrapper {
                    width: 85% !important;
                    max-width: 85% !important;
                }
                .mobile-padding {
                    padding-left: 5% !important;
                    padding-right: 5% !important;
                }
                .img-max {
                    width: 100% !important;
                    max-width: 100% !important;
                    height: auto !important;
                }
                .img-mid {
                    width: 90% !important;
                    max-width: 90% !important;
                    height: auto !important;
                }

                table[class="tableOuter"] {
                    width: 100% !important;
                }
                table[class="tableInner"] {
                    width: 85% !important;
                }
                table[class="tableInnerMid"] {
                    width: 85% !important;
                }
                table[class="tableInnerMidSm"] {
                    width: 85% !important;
                }
            }

            div[style*="margin: 16px 0;"] { margin: 0 !important; }
        </style>

        <!-- HIDDEN PREHEADER TEXT -->
        <div style="display:none; font-size:1px; color:#ffffff; line-height:1px; font-family:Open Sans, Helvetica, Arial, sans-serif; max-height:0px; max-width:0px; opacity:0; overflow:hidden;">
            Thank you for requesting more information
        </div>


        <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="700">
                <tr>
                    <td align="center" valign="top" width="700">
        <![endif]-->
        <table class="tableOuter" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#ffffff" style="max-width:700px; box-shadow:0 1px 6px #c5c5cd; background-color:#ffffff;">
            <tr>
                <td valign="top" align="center" width="100%" bgcolor="#221f1f">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                            <td height="24" valign="top" style="font-size:1px;">&nbsp;</td>
                        </tr>
                        <tr>
                            <td align="center" valign="top">
                                <a href="http://latexpeditions.com/" target="_blank">
                                    <img src="http://latexpeditions.com/email/confirmation-email/images/los-angeles-times-expeditions_logo.png" border="0" style="display:block; border:0px;" alt="Los Angeles Times Expeditions" />
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td height="24" valign="top" style="font-size:1px;">&nbsp;</td>
                        </tr>
                    </table>
                </td>
            </tr><!-- END HERO -->
            <tr>
                <td valign="top" align="center" width="100%" bgcolor="#fcb315" height="10" style="font-size:1px; line-height:1px;">&nbsp;</td>
            </tr>
            <tr>
                <td valign="top" align="center" width="100%" bgcolor="#222222" background="http://latexpeditions.com/email/confirmation-email/images/heroIMG.jpg" height="350" style="background-repeat:no-repeat; background-size:cover; background-position:center top;">
                    <!--[if gte mso 9]>
                        <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="width:700px;height:350px;">
                        <v:fill type="tile" src="http://latexpeditions.com/email/confirmation-email/images/heroIMG.jpg" color="#222222" />
                        <v:textbox inset="0,0,0,0">
                    <![endif]-->

                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                            <td height="100" valign="top" style="font-size:1px;">&nbsp;</td>
                        </tr>
                        <tr>
                            <td align="center" valign="top">
                                <img class="img-mid" src="http://latexpeditions.com/email/confirmation-email/images/hero_titleTxt.png" border="0" style="display:block; border:0px;" alt="A journey of a throusand miles begins with a single step - Lao Tzu" />
                            </td>
                        </tr>
                    </table>

                    <!--[if gte mso 9]>
                        </v:textbox>
                        </v:rect>
                    <![endif]-->
                </td>
            </tr><!-- END HERO -->
            </tr>


            <tr>
                <td valign="top" align="center" width="100%">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:700px;">
                        <tr>
                            <td class="mobile-padding" valign="top" align="center" width="100%" bgcolor="#86be42" style="padding:0 15px 0 15px;">
                                <!--[if (gte mso 9)|(IE)]>
                                    <table align="center" border="0" cellspacing="0" cellpadding="0" width="400">
                                        <tr>
                                            <td align="center" valign="top" width="400">
                                <![endif]-->

                                <table class="tableInnerMidSm" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:400px;">
                                    <tr>
                                        <td height="40" valign="top" style="font-size:1px;">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td align="center" valign="top" style="font-family:Open Sans, Arial, sans-serif; font-size:26px; line-height:34px; font-weight:400; letter-spacing:-0.5px; color:#ffffff; text-align:center;">
                                            <strong style="font-weight:900;">Thank you</strong> for taking the first step toward learning more about Los Angeles Times Expeditions.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="40" valign="top" style="font-size:1px;">&nbsp;</td>
                                    </tr>
                                </table>

                                <!--[if (gte mso 9)|(IE)]>
                                            </td>
                                        </tr>
                                    </table>
                                <![endif]-->
                            </td>
                        </tr>
                        <tr>
                            <td class="mobile-padding" valign="top" align="center" width="100%" bgcolor="#71a038" style="padding:0 15px 0 15px;">
                                <!--[if (gte mso 9)|(IE)]>
                                    <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                                        <tr>
                                            <td align="center" valign="top" width="600">
                                <![endif]-->

                                <table class="tableInner" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                                    <tr>
                                        <td height="40" valign="top" style="font-size:1px;">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td align="center" valign="top" style="font-family:Open Sans, Arial, sans-serif; font-size:26px; line-height:34px; font-weight:400; letter-spacing:-0.5px; color:#ffffff; text-align:center;">
                                            You’ll be the first to know when we announce our trips at <a style="color:#ffffff;" href="http://www.latexpeditions.com"><strong style="color:font-weight:900;">LATexpeditions.com</strong></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="40" valign="top" style="font-size:1px;">&nbsp;</td>
                                    </tr>
                                </table>

                                <!--[if (gte mso 9)|(IE)]>
                                            </td>
                                        </tr>
                                    </table>
                                <![endif]-->
                            </td>
                        </tr>
                    </table>
                </td>
            </tr><!-- END INTRO TEXT -->

            <tr>
                <td valign="top" align="center" width="100%">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:700px; border-left:#aaa solid 1px; border-bottom:#aaa solid 1px; border-right:#aaa solid 1px;">
                        <tr>
                            <td height="45" valign="top" style="font-size:1px;">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="mobile-padding" align="center" valign="top" style="padding:0 15px 0 15px;">
                                <!--[if (gte mso 9)|(IE)]>
                                    <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                                        <tr>
                                            <td align="center" valign="top" width="600">
                                <![endif]-->

                                <table class="tableInner" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                                    <tr>
                                        <td align="center" valign="top" style="font-family:Open Sans, Arial, sans-serif; font-size:18px; line-height:28px; font-weight:400; color:#555555; text-align:center;">
                                            <p style="margin:0 0 25px 0;">Over the following weeks, watch for a series of emails from us. We&#39;ll introduce you to The Times journalists and experts who will accompany our tours, and bring you more details on the exciting destinations we have planned.</p>
                                            <p style="margin:0 0 20px 0;">From exploring the breathtaking man-made wonders of Dubai with Times architecture critic Christopher Hawthorne to capturing nature&#39;s astonishing Grand Canyon with the expert guidance of award-winning Times photographer Mark Boster, our trips are designed to be as enriching as they are enjoyable.</p>
                                            <p style="color:#221f1f; font-size:22px; line-height:30px; margin:0;"><strong style="font-weight:900;">We can&#39;t wait to tell you more.</strong></p>
                                        </td>
                                    </tr>
                                </table>

                                <!--[if (gte mso 9)|(IE)]>
                                            </td>
                                        </tr>
                                    </table>
                                <![endif]-->
                            </td>
                        </tr>
                        <tr>
                            <td height="60" valign="top" style="font-size:1px;">&nbsp;</td>
                        </tr>
                    </table>
                </td>
            </tr><!-- END BODY TEXT -->
        </table>
        <!--[if (gte mso 9)|(IE)]>
                    </td>
                </tr>
            </table>
        <![endif]-->


        <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="700">
                <tr>
                    <td align="center" valign="top" width="700">
        <![endif]-->
        <table class="tableOuter" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:700px; font-family:Open Sans, Arial, sans-serif;">
            <tr>
                <td height="30" valign="top" style="font-size:1px;">&nbsp;</td>
            </tr>
            <tr>
                <td valign="top" align="center" width="100%" style="font-size:13px; line-height:18px; font-weight:400; color:#555555;">
                    Is this email not displaying correctly? <a href="http://latexpeditions.com/email/confirmation-email/" style="color:#221f1f; text-decoration:underline;" target="_blank">View in browser</a>
                </td>
            </tr>
            <tr>
                <td height="20" valign="top" style="font-size:1px;">&nbsp;</td>
            </tr>

            <tr>
                <td align="center" valign="top" style="-webkit-text-size-adjust:none;text-align:center;">
                    <span style="font-size:13px; line-height:18px; font-weight:400; color:#555555; text-decoration:none; -webkit-text-size-adjust:none;">
                        <a href="http://membership.latimes.com/newsletters/" target="_blank" style="color:#555555;text-decoration:none;font-size:13px;-webkit-text-size-adjust:none;">Sign up for newsletters</a> |
                        <a href="http://ebm.cheetahmail.com/r/webunsub?t=%%t%%&amp;email=%%email%%&amp;n=28" target="_blank" style="color:#555555;text-decoration:none;-webkit-text-size-adjust:none;">Unsubscribe</a> |
                        <a href="http://www.tribpub.com/privacy-policy/" target="_blank" style="color:#555555;text-decoration:none;-webkit-text-size-adjust:none;">Privacy Policy</a>  |  Copyright © 2017
                    </span>
                </td>
            </tr>
            <tr>
                <td align="center" valign="top" style="-webkit-text-size-adjust: none;text-align: center; padding:2px 0 0 0;">
                    <span style="color:#555555;text-decoration:none;font-size:13px;line-height:18px;">Los Angeles Times | 202 West First Street, Los Angeles, CA, 90012. | 1-800-LA-TIMES</span>
                </td>
            </tr>
        </table>
        <!--[if (gte mso 9)|(IE)]>
                    </td>
                </tr>
            </table>
        <![endif]-->


        <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <td height="80" valign="top" style="font-size:1px;">&nbsp;</td>
            </tr>
        </table>
	';
	$message .= '</body></html>';*/

	//*** Send Email to Admin ***//
	/*if(!mail($email, $subject, $message, $headers))
		echo 'Did not process email properly. Please try again later.';*/
?>

<?php
	//*** Write CSV & Save Answers ***//
	date_default_timezone_set('MST');
	$today = date('F j, Y, g:i a T');
    $ranNum = mt_rand(100000, 999999);

	$survey_info = '../../csv/newsletter-requests' . '.csv';

	$sep_0 = '"';
	$sep_1 = '","';
	$sep_2 = "\"\n";

	$csvLine = $sep_0 . $ranNum . $sep_1;
    $csvLine .= $_REQUEST['newsemail'] . $sep_1;
	$csvLine .= $today . $sep_2;

	//*** Write Info to CSV File ***//
	$fhandle = fopen($survey_info, 'a') or die("Can't open file");
	fwrite ($fhandle, $csvLine);
	fclose ($fhandle);
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Confirmation Email</title>
    </head>
	<body>
	</body>
</html>
