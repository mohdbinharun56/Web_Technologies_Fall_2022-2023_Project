<?php 
include '../Controllers/PatientProfileControl.php';
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title></title>
  </head>
  <body>
    <form method="get">
      <center><table border="1" style="width: 700px;">
        <tr style="width:200px; heigth: 10px;">
        <td style="text-align: right;" ><a href="Logout.php">Logout</a> <br><br><br></td>
        </tr>
        <tr style="height:200px;">
          <td><h3>Patient Profile</h3> <br> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            <a href="Dashboard.php">Dashboard</a> &nbsp &nbsp &nbsp 
            <a href="PatientList.php">Patient</a>&nbsp &nbsp &nbsp
            <a href="AppointmentView.php">Appointment</a>&nbsp &nbsp &nbsp
            <a href="InvoiceDashboard.php">Transaction</a>&nbsp &nbsp &nbsp<br> <br><br><br>
            <!-- <a href="">Notification</a>&nbsp &nbsp &nbsp
            <a href="">Seetings</a> &nbsp &nbsp &nbsp <br> <br><br><br> -->
            <center>
              <table border="1" style="width: 500px;">
              <?php while($r=mysqli_fetch_assoc($result)){?>
                <tr style="text-align:center;">
                  <td><br><br>
                    SLNo <input type="number" name="slno" value=<?php echo $r['SLNo'];?> readonly><br><br>
                    Name <input type="text" name="name" value=<?php echo $r['Patient_Name'];?> readonly><br><br>
                    Email <input type="email" name="email" value=<?php echo $r['Email'];?> readonly><br><br>
                    UserName <input type="text" name="username" value=<?php echo $r['Username'];?> readonly><br><br>
                    Gender <input type="text" name="gender" value=<?php echo $r['Gender'];?> readonly><br><br>
                    Phone <input type="number" name="phone" value=<?php echo $r['Phone'];?> readonly><br><br>
                    Address <input type="text" name="address" value=<?php echo $r['Address'];?> readonly> <br><br>
                  </td>
                </tr>
                <?php }?>
              </table><br><br>
            </center>

          </td>
        </tr> <br><br><br><br>
      </table></center>
    </form>
    
  </body>
</html>
