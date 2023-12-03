<?php
include '../controllers/UpdatePatientControl.php';
?>
<!DOCTYPE HTML>
<html>
    <body>
        <center>
            <table border="1" style="width: 700px;">
                <tr style="width:200px; heigth: 10px;">
                <td style="text-align: right;" ><a href="../controllers/Logout.php">Logout</a> <br><br><br></td>
                </tr>
                <tr style="height:200px;">
                    <td><h1>UPDATE Patient</h1><br> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                        <a href="Dashboard.php">Dashboard</a> &nbsp &nbsp &nbsp 
                        <a href="PatientList.php">Patient</a>&nbsp &nbsp &nbsp
                        <a href="AppointmentView.php">Appointment</a>&nbsp &nbsp &nbsp
                        <a href="InvoiceDashboard.php">Transaction</a>&nbsp &nbsp &nbsp<br> <br><br><br>
                        <!-- <a href="">Notification</a>&nbsp &nbsp &nbsp
                        <a href="">Seetings</a> &nbsp &nbsp &nbsp <br> <br><br><br> -->
                        <center>
                            <table border="1" style="width: 500px;">
                            <form method="get" action="../controllers/UpdatePatientControl.php">
                            <?php while($r=mysqli_fetch_assoc($result)){?>
                                <tr style="text-align:center;">
                                    <td>
                                        <label>SLNo</label>
                                        <input type="number" name="slno" value="<?php echo $r['SLNo'];?>" readonly><br><br>
                                        <label>Name</label>
                                        <input type="text" name="name" value="<?php echo $r['Patient_Name'];?>"><br><br>
                                        <label>Email</label>
                                        <input type="text" name="email" value="<?php echo $r['Email'];?>"><br><br>
                                        <label>Username</label>
                                        <input type="text" name="username" value="<?php echo $r['Username'];?>"><br><br>
                                        <label>Gender</label>
                                        <input type="text" name="gender" value="<?php echo $r['Gender'];?>"><br><br>
                                        <label>Phone</label>
                                        <input type="number" name="phone" value="<?php echo $r['Phone'];?>"><br><br>
                                        <label>Address</label>
                                        <input type="textarea" name="address" value="<?php echo $r['Address'];?>"><br><br>
                                        <?php } ?>
                                        <button name="update">UPDATE</button><br><br>

                                    </td>
                                </tr>
                                
                                
                                </form>
                            </table><br>
                            
                        </center>
                </tr>
        </table></center>
    </body>
</html>