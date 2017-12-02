<?php
	//*** Send Email to User ***//
	$email = $_REQUEST['newsemail'];
?>

<?php
	//*** Write CSV & Save Answers ***//
	date_default_timezone_set('MST');
	$today = date('F j, Y, g:i a T');
    $ranNum = mt_rand(100000, 999999);

	$survey_info = '../csv/newsletter-requests' . '.csv';

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
