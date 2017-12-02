<?php
	//*** Send Email to User ***//
	$email = 'sae@orlandosentinel.com'; //$_REQUEST['email'];
	$subject = '[IMPORTANT] - New contact request from successfulagingorlando.com';

	$headers = 'From: info@successfulagingorlando.com' . "\r\n";
	$headers .= 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-Type: text/html; charset=ISO-8859-1\r\n';

	$message = '<html><body style="background-color:#e8e8e8; margin:0;">';
	$message .= '
    	<div style="background-color:#e8e8e8; padding:60px 0;">
            <table cellpadding="0" cellspacing="0" border="0" width="320" align="center" style="border:#aaa solid 1px; box-shadow:0 1px 4px rgba(0,0,0,0.18);">
                <tr valign="top">
                    <td valign="top">
                        <table cellpadding="0" cellspacing="0" border="0" width="100%" style="background-color:#ffffff;">
                            <tr>
                                <td style="font-family:Arial; color:#333; text-align:center; padding:15px 40px 50px 40px;">
                                    <h2 style="font-size:22px; line-height:30px; font-weight:500; border-bottom:1px solid #bbb; padding-bottom:7px; margin:20px 0;">Contact Information</h2>
                                    <p style="line-height:20px; margin:0 0 10px 0;"><strong>Name:</strong> ' . $_REQUEST['uName'] . '</p>
                                    <p style="line-height:20px; margin:0 0 10px 0;"><strong>Email:</strong> ' . $_REQUEST['uEmail'] . '</p>
                                    <p style="line-height:20px; margin:0 0 10px 0;"><strong>Phone:</strong> ' . $_REQUEST['uPhone'] . '</p>
                                    <p style="line-height:20px; margin:0;"><strong>Message:</strong> ' . $_REQUEST['uMsg'] . '</p>
                            	</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
    	</div>
	';
	$message .= '</body></html>';

	//*** Send Email to Admin ***//
	if(!mail($email, $subject, $message, $headers))
		echo 'Did not process email properly. Please try again later.';
?>

<?php
	//*** Write CSV & Save Answers ***//
	date_default_timezone_set('MST');
	$today = date('F j, Y, g:i a T');
    $ranNum = mt_rand(100000, 999999);

	$survey_info = '../csv/contact-requests-b2c' . '.csv';

	$sep_0 = '"';
	$sep_1 = '","';
	$sep_2 = "\"\n";

	$csvLine = $sep_0 . $ranNum . $sep_1;
    $csvLine .= $_REQUEST['uName'] . $sep_1;
    $csvLine .= $_REQUEST['uEmail'] . $sep_1;
    $csvLine .= $_REQUEST['uPhone'] . $sep_1;
    $csvLine .= $_REQUEST['uMsg'] . $sep_1;
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
