<?php
$buildMessage = '';
foreach ($_POST as $key => $value) {
    // echo $key . ' has the value of ' . $value;
	$buildMessage .= '

	'.htmlentities($value);
}
// send $buildMessage

$to = "hello@simmonsdesign.co";
$subject = "New Message From Your Website!";
$txt = $buildMessage;
$headers = "From: hello@simmonsdesign.co";

if (mail($to,$subject,$txt,$headers)) {
?>

<!doctype html>
<html>
<head></head>
<body></body>
<script>
	parent.VnB.validate.callback(true);
</script>
</html>

<?php
} else {
?>
<!doctype html>
<html>
<head></head>
<body></body>
<script>
	parent.VnB.validate.callback(false);
</script>
</html>

<?php

} // else

?>

