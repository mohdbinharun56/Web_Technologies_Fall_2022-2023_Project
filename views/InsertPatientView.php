<?php 
include '../Controllers/InsertPatientValidation.php';
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title></title>
  </head>
  <body>
    
    <form method="post">
      <center><table border="1" style="width: 700px;">
        <tr style="height:200px;">
          <td><h1>Patient Register</h1> <br>&nbsp &nbsp &nbsp 
            <a href="Dashboard.php">Dashboard</a> &nbsp &nbsp &nbsp 
            <a href="PatientList.php">Patient</a>&nbsp &nbsp &nbsp
            <a href="AppointmentView.php">Appointment</a>&nbsp &nbsp &nbsp
            <a href="InvoiceDashboard.php">Transaction</a>&nbsp &nbsp &nbsp<br> <br><br><br>
            <!-- <a href="">Notification</a>&nbsp &nbsp &nbsp
            <a href="Settings.php">Seetings</a> &nbsp &nbsp &nbsp <br> <br><br><br> -->
            <center>
              <table border="1" style="width: 500px;">
                <tr style="text-align:center;">
                  <td><br><br>
                    Name <input type="text" name="name" id=""><br>
                    <?php if(empty($_POST['name'])){?>
                      <span style="color:red"><?php echo $nameError;?></span><br><br>
                    <?php }?>
                    Email <input type="email" name="email" id=""><br>
                    <?php if(empty($_POST['email'])){?>
                      <span style="color:red"><?php echo $emailError;?></span><br><br>
                    <?php }?>
                    UserName <input type="text" name="username" id=""><br>
                    <?php if(empty($_POST['username'])){?>
                      <span style="color:red"><?php echo $usernameError;?></span><br><br>
                    <?php }?>
                    Password <input type="password" name="password" id=""><br>
                    <?php if(empty($_POST['password'])){?>
                      <span style="color:red"><?php echo $passwordError;?></span><br><br>
                    <?php }?>
                    Gender
                    <input type="radio" name="gender" value="male">Male
                    <input type="radio" name="gender" value="female">Female
                    <br>
                    <?php if(empty($_POST['gender'])){?>
                      <span style="color:red"><?php echo $genderError;?></span><br><br>
                    <?php }?>
                    Phone <input type="number" name="phone"><br>
                    <?php if(empty($_POST['phone'])){?>
                      <span style="color:red"><?php echo $PhoneError;?></span><br><br>
                    <?php }?>
                    Address <input type="text" name="address"> <br>
                    <?php if(empty($_POST['address'])){?>
                      <span style="color:red"><?php echo $addressError;?></span><br><br>
                    <?php }?>
                    <input type="submit" name="register" value="Save" style="color:blue;"><br><br>
                </td>
                </tr>
              </table><br><br>
            </center>

          </td>
        </tr> <br><br><br><br>
      </table></center>
    </form>
   
    
  </body>
</html>