<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครสมาชิก</title>
</head>
<body>
   <center><h1>สมัครสมาชิก</h1> 
   <form action="save_regis.php" method="post">
        <label for="code">รหัสนักศึกษา</label>
        <input type="text" name="code" id="code">
        <label for="name">ชื่อสกุล</label>
        <input type="text" name="name" id="name">
        <label for="password">รหัสผ่าน</label>
        <input type="password" name="password" id="password">

        <button type="submit">สมัครสมาชิก</button>
        <button type="reset" class="btn btn-red">ล้างข้อมูล</button>
        
        <a href = 'index.html'>กลับหน้าหลัก</a>
    </form>
    <img src="img/newJ.jpg" class="img-fluid" alt="Responsive image"></center>
</body>
</html>