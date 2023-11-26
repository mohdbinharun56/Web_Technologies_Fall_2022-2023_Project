<?php
include '../controllers/UpdateAppointmentControl.php'
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
                    <td><h1>Appoinment View</h1><br> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                        <a href="Dashboard.php">Dashboard</a> &nbsp &nbsp &nbsp 
                        <a href="PatientList.php">Patient</a>&nbsp &nbsp &nbsp
                        <a href="AppointmentView.php">Appointment</a>&nbsp &nbsp &nbsp
                        <a href="InvoiceDashboard.php">Transaction</a>&nbsp &nbsp &nbsp<br> <br><br><br>
                        <!-- <a href="">Notification</a>&nbsp &nbsp &nbsp
                        <a href="">Seetings</a> &nbsp &nbsp &nbsp <br> <br><br><br> -->
                        <center>
                            <table border="1" style="width: 500px;">
                            <form method="get" action="../controllers/UpdateAppointmentControl.php">
                            <?php while($r=mysqli_fetch_assoc($result)){?>
                                <tr style="text-align:center;">
                                    <td>
                                        <label>SLNo</label>
                                        <input type="number" name="slno" value="<?php echo $r['SLNo'];?>" readonly><br><br>
                                        <label>AppointmentID</label>
                                        <input type="text" name="appointmentid" value="<?php echo $r['AppoinmentID'];?>" readonly><br><br>
                                        <label>Patient Name</label>
                                        <input type="text" name="patientname" value="<?php echo $r['Patient_name'];?>"><br><br>
                                        <label>Doctor Name</label>
                                        <input type="text" name="doctorname" value="<?php echo $r['Doctor_name'];?>"><br><br>
                                        <label>Department</label>
                                        <input type="text" name="department" value="<?php echo $r['Department'];?>"><br><br>
                                        <label>Appoinment Date</label>
                                        <input type="text" name="appointmentdate" value="<?php echo $r['Appoinment_date'];?>" readonly><br><br>
                                        <label>serial</label>
                                        <input type="number" name="serial" value="<?php echo $r['Serial'];?>"><br><br>

                                        <?php } ?>
                                        <button name="update">UPDATE</button><br><br>

                                    </td>
                                </tr>
                                
                                </form>
                            </table><br><br>
                        </center>
                </tr>
        </table></center>
    </body>
</html>
