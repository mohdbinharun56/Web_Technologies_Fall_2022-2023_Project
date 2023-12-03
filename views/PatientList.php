<?php 
include '../Controllers/PatientControl.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body><form method="post"><center>
    <table border="1" style="width: 700px;">
        <tr style="text-align:right;height: 50px;">
        <td
          style="text-align: right;" ><a href="../controllers/Logout.php">Logout</a> <br><br><br>
        </td>
        </tr>
        <tr>
        <td><h3>Patient List</h3> <br> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            <a href="Dashboard.php">Dashboard</a> &nbsp &nbsp &nbsp 
            <a href="PatientList.php">Patient</a>&nbsp &nbsp &nbsp
            <a href="AppointmentView.php">Appointment</a>&nbsp &nbsp &nbsp
            <a href="InvoiceDashboard.php">Transaction</a>&nbsp &nbsp &nbsp<br> <br><br><br>
            <!-- <a href="">Notification</a>&nbsp &nbsp &nbsp
            <a href="Settings.php">Seetings</a> &nbsp &nbsp &nbsp <br> <br><br><br> -->
            <center>
              <!-- <button type="submit" name="add">Register Patient</button> -->
              <form action="../controllers/InsertPatientControl.php"><button type="submit" name="add">Register Patient</button> </form> 
              <table border="1" style="width: 500px; text-align:center;">
                <tr style="text-align:center;">
                  <br><br>
                    <th>Patient_Name</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Gender</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
      </form>            
                <?php while($r=mysqli_fetch_assoc($result)){ ?>
                <tr>
                    <td><?php echo $r['Patient_Name'];?></td>
                    <td><?php echo $r['Email']; ?></td>
                    <td><?php echo $r['Username'];?></td>
                    <td><?php echo $r['Gender']; ?></td>
                    <td><?php echo $r['Phone']; ?></td>
                    <td><?php echo $r['Address'];?></td>

                    <td>
                      <form action="PatientView.php" method="get"><button type="submit" name="view" value="<?php echo $r["SLNo"] ; ?>">View</button></form>
                      <form method="get" action="EditPatient.php"><button type="submit" name="edit"  value="<?php echo $r['SLNo'] ; ?>">Edit</button> </form>
                      <form action="../controllers/DeletePatient.php" method="get"><button type="submit" name="delete" value="<?php echo $r["SLNo"] ; ?>">Delete</button> </form>
                    </td>
                    
                </tr>
                <?php } ?>
              </table><br><br>
            </center>

          </td>
        </tr> <br><br><br><br>

        </tr>
    </table></center>
</body>
</html>