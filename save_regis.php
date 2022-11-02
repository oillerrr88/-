<?php

require_once("database.php");
$code = $_POST["code"];
$name = $_POST["name"];
$password = $_POST["password"];

$sql = "INSERT INTO `students` (`code`, `name`, `password`) VALUES ('$code', '$name', '$password')" ;

$result = mysqli_query($conn,$sql);

if($result){
    echo "บันทึกข้อมูลเรียบร้อย"."<br>";
    echo "<a href = 'index.html'>กลับหน้าหลัก</a>" ;
}

?>