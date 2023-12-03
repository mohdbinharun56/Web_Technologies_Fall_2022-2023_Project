<?php 
include '../controllers/UpdateInvoiceControl.php';
?>
<!DOCTYPE html>
 <html>
 <head>
    <title>Document</title>
 </head>
 <body>
 <center>
            <table border="1" style="width: 700px;">
                <tr style="width:200px; heigth: 10px;">
                <td style="text-align: right;" ><a href="../controllers/Logout.php">Logout</a><br><br><br></td>
                </tr>
                <tr style="height:200px;">
                    <td><h1>Edit Invoice</h1><br> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                        <a href="Dashboard.php">Dashboard</a> &nbsp &nbsp &nbsp 
                        <a href="PatientList.php">Patient</a>&nbsp &nbsp &nbsp
                        <a href="AppointmentView.php">Appointment</a>&nbsp &nbsp &nbsp
                        <a href="InvoiceDashboard.php">Transaction</a>&nbsp &nbsp &nbsp<br> <br><br><br>
                        <!-- <a href="">Notification</a>&nbsp &nbsp &nbsp
                        <a href="">Seetings</a> &nbsp &nbsp &nbsp <br> <br><br><br> -->
                        <center>
                            <table border="1" style="width: 500px;">
                            <form method="get">
                            <?php while($r=mysqli_fetch_assoc($result)){?>
                                <tr style="text-align:center;">
                                    <td>
                                        <label>SLNo</label>
                                        <input type="number" name="slno" value="<?php echo $r['SLNo'];?>" readonly><br><br>
                                        <label>AppointmentID</label>
                                        <input type="text" name="appointmentid" value="<?php echo $r['Appointment_ID'];?>" readonly><br><br>
                                        <label>Patient Name</label>
                                        <input type="text" name="patientname" value="<?php echo $r['Patient_Name'];?>" readonly><br><br>
                                        <label>Doctor Name</label>
                                        <input type="text" name="doctorname" value="<?php echo $r['Doctor_Name'];?>" readonly><br><br>
                                        <label>Serial</label>
                                        <input type="number" name="serial" value="<?php echo $r['Serial'];?>" readonly><br><br>
                                        <label>Appoinment Date</label>
                                        <input type="text" name="appointmentdate" value="<?php echo $r['Appointment_Date'];?>"readonly><br><br>
                                        Appointment Time
                                        <input type="text" name="appointmenttime" value="<?php echo $r['Appoinment_time']; ?>" readonly><br><br>
                                        <label>Payment</label>
                                        <input type="number" name="payment" value="<?php echo $r['Payment'];?>"><br><br>
                                        <label>Payment Type</label>
                                        <input type="text" name="paymenttype" value="<?php echo $r['Payment_Type'];?>"><br><br>
                                        <label>Status</label>
                                        <input type="text" name="status" value="<?php echo $r['Status'];?>"><br><br>
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