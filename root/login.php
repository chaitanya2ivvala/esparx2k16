<?php
include_once("php_includes/check_login_status.php");
// If user is already logged in, header that weenis away
if($user_ok == true){
	header("location: user.php?f=".$_SESSION["fname"]);
    exit();
}
?><?php
// AJAX CALLS THIS LOGIN CODE TO EXECUTE
if(isset($_POST["e"])){
	// CONNECT TO THE DATABASE
	include_once("php_includes/connect.php");
	// GATHER THE POSTED DATA INTO LOCAL VARIABLES AND SANITIZE
	$e = mysqli_real_escape_string($db_conx, $_POST['e']);
	$p1 = md5($_POST['p1']);
	// GET USER IP ADDRESS
        $ip = preg_replace('#[^0-9.]#', '', getenv('REMOTE_ADDR'));
	// FORM DATA ERROR HANDLING
	if($e == "" || $p1 == ""){
		echo "login_failed";
        exit();
	}
	else
	{
	// END FORM DATA ERROR HANDLING
	$sql = "SELECT id, fname, password FROM users WHERE email='$e' AND activated='1' LIMIT 1";
        $query = mysqli_query($db_conx, $sql);
        $row = mysqli_fetch_row($query);
		$db_id = $row[0];
		$db_fname = $row[1];
        $db_pass_str = $row[2];
		if($p1 != $db_pass_str){
			echo "login_failed";
            exit();
		}
		else
		{
			// CREATE THEIR SESSIONS AND COOKIES
			$_SESSION['userid'] = $db_id;
			$_SESSION['fname'] = $db_fname;
			$_SESSION['password'] = $db_pass_str;
			//setcookie("id", $db_id, strtotime( '+30 days' ), "/", "", "", TRUE);
			//setcookie("user", $db_fname, strtotime( '+30 days' ), "/", "", "", TRUE);
			//setcookie("pass", $db_pass_str, strtotime( '+30 days' ), "/", "", "", TRUE); 
			// UPDATE THEIR "IP" AND "LASTLOGIN" FIELDS
			
		//$sql = "UPDATE users SET i00p='$ip', lastlogin=now() WHERE fname='$db_fname' LIMIT 1";
                //$query = mysqli_query($db_conx, $sql);
			echo $db_fname;
		    exit();
		}
	}
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Log In</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="style/style.css">
<style type="text/css">
#loginform{
	margin-top:24px;	
}
#loginform > div {
	margin-top: 12px;	
}
#loginform > input {
	width: 200px;
	padding: 3px;
	background: #Ffffff;
}
#loginbtn {
	font-size:15px;
	padding: 10px;
}
#pageMiddle{
background:#ffffff;
    width: 500px;
	margin: 0px auto;
	height: 500px;
	
	}
</style>
<script src="js/main.js"></script>
<script src="js/ajax.js"></script>
<script>
function emptyElement(x){
	_(x).innerHTML = "";
}
function login(){
	var e = _("email").value;
	var p1 = _("password").value;
	if(e == "" || p1 == ""){
		_("status").innerHTML = "Fill out all of the form data";
	} else {
		_("loginbtn").style.display = "none";
		_("status").innerHTML = 'please wait ...';
		var ajax = ajaxObj("POST", "login.php");
        ajax.onreadystatechange = function() {
	        if(ajaxReturn(ajax) == true) {
	            if(ajax.responseText == "login_failed"){
					_("status").innerHTML = "Login unsuccessful, please try again.";
					_("loginbtn").style.display = "block";
				} else {
					window.location = "user.php?f="+ajax.responseText;
				}
	        }
        }
        ajax.send("e="+e+"&p1="+p1);
	}
}
</script>
</head>
<body>

<div id="pageMiddle">
  <h2  style="color:#0066FF">Log In Here</h2>
  <!-- LOGIN FORM -->
  <form id="loginform" onSubmit="return false;">
    <div>Email Address:</div>
    <input type="text" id="email" onFocus="emptyElement('status')" maxlength="88">
    <div>Password:</div>
    <input type="password" id="password" onFocus="emptyElement('status')" maxlength="100">
    <br /><br />
    <button id="loginbtn" onClick="login()">Log In</button> 
    <p id="status"></p>
    <a href="forgot_pass.php">Forgot Your Password?</a>
  </form>
  <!-- LOGIN FORM -->
</div>
</body>
</html>