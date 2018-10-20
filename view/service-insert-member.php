<?php
require 'connection.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST')
  {
    $prefix = $_POST["prefix"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $bdate = $_POST["bdate"];
    $age = $_POST["age"];
    $sex = $_POST["sex"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $active = 0;
    $type = 0;

    $SQL = "INSERT INTO member(prefix, fname, lname, bdate, age, sex, address, phone, email, username,password, active, type) ";
    $SQL .= " VALUES($prefix, '$fname', '$lname', $bdate, $age, $sex, '$address', $phone, '$email', '$username', '$password', $active, $type)";
    mysqli_query($conn, $SQL) or die("บันทึกข้อมูลล้มเหลว!!!" . mysqli_error($conn));
    echo "บันทึกข้อมูลสำเร็จ";
  }
?>
