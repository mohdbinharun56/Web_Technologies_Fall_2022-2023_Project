<?php
session_start();
$_SESSION['login_time'] = time();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="../css/Loginstyle.css">
</head>
<body>
    <h2>Clinic Management System</h2>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSIetdbu7nsPZ5rYejZLsKdkMNPcfRBhM8hJA&usqp=CAU" alt="">
    <form method="post" action="../Controllers/LoginControl.php">
        <table border="1" id="outertable">
            <tr id="outerrow">
            <h2>Login</h2>
                <td>
                <center>
                    <div>
                        <label for="Username">Username:</label>
                        <input type="text" name="username" id="input"><br>
                        <label for="Password">Password:</label>
                        <input type="password" name="security" id="input"><br>
                        <input type="submit" name="loginbtn" id="loginbtn" value="Login">
                    </div>
                </center>   
                                  
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
