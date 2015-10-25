<?php
include("api.php");

$formname = $_POST['formsname'];
$noreply  = "noreply@mccportal-ph.com";
$sender = "ardeenathanraranga@gmail.com";

if($formname=='inquire-form')
{
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
$headers .= 'From: <'.$noreply.'>' . "\r\n";

unset($_POST['formsname']);

	$sbj = "Product Inquiry Form";
	$msg  = "<table border='1'>";
	foreach($_POST as $key=>$val)
	{
		$msg .= "<tr><td>$key</td><td>$val</td></tr>";

	}
	$msg .= "</table>";
}


if($formname=='emailfriend')
{
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
$headers .= 'From: <'.$_POST['email'].'>' . "\r\n";
$sbj = "Your Friend ".$_POST['name']." Share Something to you.";
$sender = $_POST['email-friend'];

$msg = "Hi ".$_POST['name-friend'];
$msg .= "<br/>".$_POST['comments'];
unset($_POST['formsname']);
unset($_POST['name-friend']);
unset($_POST['email']);
unset($_POST['email-friend']);
unset($_POST['formsname']);
unset($_POST['name']);
unset($_POST['comments']);
	$msg  .= "<br/><table border='1'>";
	foreach($_POST as $key=>$val)
	{
		$msg .= "<tr><td>$key</td><td>$val</td></tr>";

	}
	$msg .= "</table>";
}




if($formname=='info-contact-form')
{
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
$headers .= 'From: <'.$noreply.'>' . "\r\n";

unset($_POST['formsname']);

	$sbj = "Contact Form";
	$msg  = "<table border='1'>";
	foreach($_POST as $key=>$val)
	{
		$msg .= "<tr><td>$key</td><td>$val</td></tr>";

	}
	$msg .= "</table>";
}

if($formname=='appointment-form')
{
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
$headers .= 'From: <'.$noreply.'>' . "\r\n";

unset($_POST['formsname']);

	$sbj = "Appoint Request";
	$msg  = "<table border='1'>";
	foreach($_POST as $key=>$val)
	{
		$msg .= "<tr><td>$key</td><td>$val</td></tr>";

	}
	$msg .= "</table>";
}


if($formname=='feedbackForm')
{
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
$headers .= 'From: <'.$noreply.'>' . "\r\n";

unset($_POST['formsname']);
	
	$sbj = "Info Update";
	$msg  = "<table border='1'>";
	foreach($_POST as $key=>$val)
	{
		$msg .= "<tr><td>$key</td><td>$val</td></tr>";

	}
	$msg .= "</table>";
}












mail($sender,$sbj,$msg,$headers);
echo "Submission of Form Success";
?>
<script>
window.location = '<?php echo $_SERVER['HTTP_REFERER']; ?>';
</script>