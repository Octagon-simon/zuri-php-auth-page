<?php


if($_POST){
    $filename = "core.php";

    $myarray[] = "Username"." " .$_REQUEST['username'];
    $myarray[] = "Password"." " .$_REQUEST['password'];

    $user_data = implode("\n", $myarray);
    $numbytes = file_put_contents($filename, $user_data);
    $array = file($filename);
 
}

?>
<!Doctype html>
<html>
<head></head>
<title>REGISTER</title>
<body>

<form method="post">
<h3>REGISTER</h3>
<label>Username</label>
<input type="text" name="username">
<br>

<br>
<label>Password</label>
<input type="password" name="password">

<br>
<br>
<button type="submit">Register</button>
</form>
</body>






</html>