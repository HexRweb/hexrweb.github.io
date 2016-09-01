<?php
if(!isset($_POST['submitted']))
{
	require("../error_403.php");
	die();
}
$fname  = $_POST["first_name"];
$lname  = $_POST["last_name"];
$email  = $_POST["email"];
$phone  = $_POST["phone"];
$org    = $_POST["organization"];
$site   = $_POST["website"];
$desc   = $_POST["org-desc"];
$reqs   = $_POST["org-web-requirements"];
$emplys = $_POST["num-employees"];
$incm   = $_POST["income"];
$prft   = $_POST["profit"];
$resp   = $_POST["g-recaptcha-response"];

filter_var(trim($fname,FILTER_SANITIZE_STRING));
filter_var(trim($lname,FILTER_SANITIZE_STRING));
filter_var(trim($email,FILTER_SANITIZE_EMAIL));
filter_var(trim($phone,FILTER_SANITIZE_NUMBER_INT));
filter_var(trim($org,FILTER_SANITIZE_STRING));
filter_var(trim($site,FILTER_SANITIZE_ENCODED));
filter_var(trim($desc,FILTER_SANITIZE_STRING));
filter_var(trim($reqs,FILTER_SANITIZE_STRING));
filter_var(trim($emplys,FILTER_SANITIZE_NUMBER_INT));
filter_var(trim($incm,FILTER_SANITIZE_NUMBER_FLOAT));
filter_var(trim($prft,FILTER_SANITIZE_STRING));
filter_var(trim($resp,FILTER_SANITIZE_STRING));

/*First Google Capcha*/
$url = 'https://www.google.com/recaptcha/api/siteverify';
$data = array('secret' => '6Lck6AoTAAAAAARU0s0Py5J6EbfwGaguD1dqv7Wj', 'remoteip' => $_SERVER['REMOTE_ADDR'], 'response' => $resp);
// use key 'http' even if you send the request to https://...
$options = array(
	'http' => array(
		'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
		'method'  => 'POST',
		'content' => http_build_query($data),
	),
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
$arr = (array)json_decode($result);
$clientText = "**Client Copy**";
$hexrcopy   = "*Our Copy*";
/*This is what it boils down to*/
if($arr["success"])
{


	//Load required libraries
	require("../assets/class.mail.php");
	require("../assets/mail.smtp.php");

	$mailer = new PHPMailer;
	$meMailer = new PHPMailer;

	$mailer->isSMTP();
	$mailer->SMTPSecure = "ssl";
	$mailer->SMTPDebug = 0;
	$mailer->DebugOutput = 'html';
	$mailer->Host = 'smtp.yandex.com';
	$mailer->Port = 465;
	$mailer->SMTPAuth = true;
	$mailer->Username = "request@robots.hexr.org";
	$mailer->Password = "divuxrxfdqmfnpgz";
	$mailer->setFrom("request@robots.hexr.org", "HexR Request Robot");
	$mailer->addReplyTo("request@hexr.org", "HexR Request Management");
	$mailer->addAddress($email, $fname . " ". $lname);


    $meMailer->isSMTP();
 	$meMailer->SMTPSecure = "ssl";
    $meMailer->SMTPDebug = 0;
    $meMailer->DebugOutput = 'html';
    $meMailer->Host = 'smtp.yandex.com';
    $meMailer->Port = 465;
    $meMailer->SMTPAuth = true;
    $meMailer->Username = "request@robots.hexr.org";
    $meMailer->Password = "divuxrxfdqmfnpgz";
    $meMailer->setFrom("request@robots.hexr.org", "HexR Request Robot");
    $meMailer->addReplyTo("request@hexr.org", "HexR Request Management");
    $meMailer->addAddress("request@hexr.org","HexR Request Management");


	/*now set up the email*/
	$subject = "$fname $lname from $org wants a website";
	$body = "
	Hello! \n<br/>
	\t	Thank you for requesting a website from HexR. This is your copy of the 'receipt' saying you asked for this website. If you didn't ask for this website, please contact us immediately so we don't bother you. The information below is what you provided to us. \n\n<br/><br/>
	Information: \n<br/>
	<strong>First name      </strong> : $fname  \n<br/>
	<strong>Last name       </strong> : $lname  \n<br/>
	<strong>Email Address   </strong> : $email  \n<br/>
	<strong>Phone Number    </strong> : $phone  \n<br/>
	<strong>Organization    </strong> : $org    \n<br/>
	<strong>Current Site    </strong> : $site   \n<br/>
	<strong>Org Description </strong> : $desc   \n<br/>
	<strong>Site Requirments</strong> : $reqs   \n<br/>
	<strong>Number Employees</strong> : $emplys \n<br/>
	<strong>Income          </strong> : $incm   \n<br/>
	<strong>NonProfit       </strong> : $prft   \n<br/>
	\n<br/>
	===This email was sent by a robot. Please contact <a href='mailto:support@hexr.org' target='_blank'> support@hexr.org</a> for help.=== \n<br/>
	";
/*	$headers = 'From: HexR Robot <noreply@hexr.org>' . "\r\n" .
    'Reply-To: support@hexr.org' . "\r\n" .
    'MIME-Version: 1.0\r\n' . "\r\n" .
	'Content-Type: text/html; charset=ISO-8859-1' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();*/
	//print $body;
	//print("Sending to $email returned ");
	//print(mail($email,$subject,$body.$clientText,$headers));
	//print("Sending to us returned ");
	//print(mail("request@hexr.org",$subject,$body.$hexrcopy,$headers));

	$mailer->Subject = $subject;
	$mailer->msgHTML($body.$clientText);

	$meMailer->Subject = $subject;
	$meMailer->msgHTML($body.$hexrcopy);

	require("../assets/home/functions.php");
	home_functions::print_header("","request","Request Your Site");
	$mailerSuccess = $mailer->send();
	$meSuccess =$meMailer->send();
?>
<div id="status">
	Email to <?php echo $email; ?>: <?php echo $mailerSuccess;?>
	<br/>
	Email to HexR: <?php echo $meSuccess; ?>
</div>
<div class="container">
	<h1>Thanks for requesting a site!</h1>
	<p class="flow-text">We just sent you an email with the following content:</p>
	<blockquote>
		<p><?php print $body; ?></p>
	</blockquote>
	<p class="flow-text">We'll respond to you as soon as possible.</p>
</div>
<?php

home_functions::get_footer();
exit();

}
else
{
	//based off 403 template
	Header( "HTTP/1.1 403 Restricted Content" );
	require("../assets/home/functions.php");
	home_functions::print_header("","403","403 - Unauthorized");

?><div class="container"><h1 class="center">Error | 403</h1><p class="center flow-text">Form resubmissions are disabled. You are not allowed to access this page.</p></div><?php

home_functions::get_footer();

}
?>
