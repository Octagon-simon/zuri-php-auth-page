<?php


$filename = "core.php";
$array = file($filename);

if($_POST){
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

$myFile = "core.php";
$fh = fopen($myFile, 'r');
$theData = fread($fh, filesize($myFile));
$assoc_array = array();
$my_array = explode("\n", $theData);
foreach($my_array as $line)
{
    $tmp = explode(" ", $line);
    $assoc_array[$tmp[0]] = $tmp[1];
}
fclose($fh);

$codes = $assoc_array;

$uname= $codes['Username'];
$pwd = $codes['Password'];
if (($username == $uname) && ($password == $pwd)) {
    echo "Login Successful";
    session_start();
    $_SESSION['username'] = $uname;
    header("Location: dashboard.php");
}
else {
    echo "Credentials Do not match";
}
}

?>

<!Doctype html>
<html>
<head></head>
<title></title>
<body>
<form method="post">
<h3>LOGIN HERE</h3>
<label>Username</label>
<input type="text" name="username">
<br>
<br>

<label>Password</label>
<input type="password" name="password">

<br>

<br>

<button type="submit">Login</button>
</form>

<span> Forgotten Password?<a href="reset_pwd.php">Click here to Reset Password</a></span>


</body>



</html>