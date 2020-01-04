<?php include("functions/init.php");

$anweshaid=$_SESSION['anweshaid'];
$sql="UPDATE users SET access_token='' WHERE anweshaid='$anweshaid'";
$result=query($sql);

session_destroy();
if(isset($_COOKIE['anweshaid'])){
	unset($_COOKIE['anweshaid']);
	setcookie('anweshaid','',time()-86400);
	unset($_COOKIE['qrcode']);
	setcookie('qrcode','',time()-86400);
}

redirect("signin.php");