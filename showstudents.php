<?php
require_once("database.php");
$sql = "select * from students";
$result = mysqli_query($conn,$sql);
 while($row = mysqli_fetch_row($result)){
    echo $row[0]."<br>";
    echo $row[1]."<br>";
    echo $row[2]."<br>";
    echo "<a href = 'index.html'>กลับหน้าหลัก</a>" ;
}
?>