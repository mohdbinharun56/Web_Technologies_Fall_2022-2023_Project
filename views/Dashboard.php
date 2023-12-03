<?php

include '../controllers/DashboardControl.php';

?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Dashboard</title>
        <link rel="stylesheet" href="../css/Dashboardstyle.css">
    </head>

    <body>
       <center> <table border="1" id="outertable">
            <tr id="outertr1">
                <td style="text-align:right">
                <a href="../controllers/Logout.php" id="logout">Logout</a></td>
            </tr>
            <tr>
                <td>
                    <h1>Dashboard</h1>
                    <ul>
                        <li><a href="Dashboard.php" class="navbar">Dashboard</a></li>
                        <li><a href="PatientList.php" class="navbar">Patient</a></li>
                        <li><a href="AppointmentView.php" class="navbar">Appointment</a></li>
                        <li><a href="InvoiceDashboard.php" class="navbar">Transaction</a><br> <br></li>
                    </ul>
                    
                    <!-- <a href="" class="navbar">Notification</a>&nbsp &nbsp &nbsp
                    <a href="" class="navbar">Seetings</a> &nbsp &nbsp &nbsp <br><br><br><br> -->

                    <h3>Welcome TO CMS <?php echo strtoupper($username),"!";?></h3><br>
                    <input type="text" class="count" value="<?php echo "Total Patient: $total_patientsum";?>" readonly>
                    <input type="text" class="count" value="<?php echo "Total Appointment: $total_appcount";?>" readonly>
                    <input type="text" class="count" value="<?php echo "Avg Patients per Doctor:",$avg_patient_per_doctor;?>" readonly>
                    <br>
                    <h4>Appointment Schedule</h4>
                    <form method="post">
                    <input type="date" id="date" name="appointmentschedul" >
                    <input type="submit" id="button" name="button" value="click"><br><br>
                    <center>
                    <table border="1" id="innertable">
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