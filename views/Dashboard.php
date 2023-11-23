<?php

include '../controllers/DashboardControl.php';

?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Dashboard</title>
    </head>

    <body>
       <center> <table border="1" style="width: 700px;">
            <tr style="width: 200px; height: 30px;">
                <td style="text-align:right">
                <a href="Logout.php">Logout</a></td>
            </tr>
            <tr>
                <td>
                    <h1>Dashboard</h1><br> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                    <a href="Dashboard.php">Dashboard</a> &nbsp &nbsp &nbsp 
                    <a href="PatientList.php">Patient</a>&nbsp &nbsp &nbsp
                    <a href="AppointmentView.php">Appointment</a>&nbsp &nbsp &nbsp
                    <a href="InvoiceDashboard.php">Transaction</a>&nbsp &nbsp &nbsp<br> <br>
                    <!-- <a href="">Notification</a>&nbsp &nbsp &nbsp
                    <a href="">Seetings</a> &nbsp &nbsp &nbsp <br><br><br><br> -->

                    <center> <h3>Welcome TO CMS <?php echo strtoupper($username),"!";?></h3> </center><br>&nbsp &nbsp &nbsp&nbsp &nbsp
                    <input type="text" value="<?php echo "Total Patient: $total_patientsum";?>"  style="height: 100px;text-align:center;"readonly> &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp
                    <input type="text" value="<?php echo "Total Appointment: $total_appcount";?>" style="height: 100px;text-align:center;" readonly> <br><br>&nbsp &nbsp &nbsp&nbsp &nbsp
                    <input type="text" value="<?php echo "Average Patients per Doctor:", $avg_patient_per_doctor;?>" style="height:100px;width:250px;" readonly>
                    <br>
                    <h4 style="text-align:center;">Appointment Schedule</h4>&nbsp &nbsp &nbsp&nbsp &nbsp
                    <form method="post" action="../controllers/DashboardControl.php">
                    <input type="date" name="appointmentschedul" >
                    <input type="submit" name="button" value="click"><br>
                    <center>
                    <table border="1">
                        <tr>
                            <th>AppoinmentID</th>
                            <th>Patient_name</th>
                            <th>Doctor_name</th>
                            <th>Appoinment_date</th>
                            <th>Appoinment_time</th>
                            <th>Serial</th>
                        </tr>
                        <tr>
                            <?php while($r=mysqli_fetch_assoc($result)){?>
                                <td><?php echo $r['AppoinmentID'] ?></td>
                                <td><?php echo $r['Patient_name'] ?></td>
                                <td><?php echo $r['Doctor_name'] ?></td>
                                <td><?php echo $r['Appoinment_date'] ?></td>
                                <td><?php echo $r['Appoinment_time'] ?></td>
                                <td><?php echo $r['Serial'] ?></td>
                                
                        </tr>
                        <?php }?>
                    </table></center></form>
                    <br>
                </td>
            </tr>
        </table></center>
    </body>
</html>