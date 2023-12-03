<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="../css/Loginstyle.css">
</head>
<body>
    <form method="post" action="../Controllers/LoginControl.php">
        <center>
        <table border="1" id="outertable">
            <tr>
                <td id="heading">Login</td>
            </tr>
            <tr>
                <td>
                    <center>
                        Username: <input type="text" name="username"><br><br>
                        Password: <input type="password" name="security"><br><br>
                        <input type="submit" name="loginbtn" value="login"><br><br>
                    </center>                 
                </td>
            </tr>
        </table></center>
    </form>
</body>
</html>