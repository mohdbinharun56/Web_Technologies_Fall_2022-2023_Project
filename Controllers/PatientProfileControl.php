<?php
  session_start();
  include '../models/Database.php';
  if(isset($_POST['btn1'])){
    $id = $_POST['btn1'];
    $result = getproductProfile($id);
    header("location:../view/productdisplay.php");
  }
  else if(isset($_POST['btn2'])){
    $id = $_POST['btn2'];
    $result = getproductProfile($id);
  }
  else if(isset($_POST['btn3'])){
    $id = $_POST['btn3'];
    $result = getproductProfile($id);
  }
  else if(isset($_POST['btn4'])){
    $id = $_POST['btn4'];
    $result = getproductProfile($id);
  }
  // $viewid=$_GET['view'];
  // $result = getPatientProfile($viewid)

?>  