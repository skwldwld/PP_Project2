
<!-- process.php -->
<?php
$uname = $_POST['uname'];
$studentid = $_POST['studentid'];
$phonenumber = $_POST['phonenumber'];
// 필요한 다른 데이터들을 처리

// 처리된 데이터를 index.html로 전달
echo "<p>Name: $name</p>";
echo "<p>Student ID: $studentid</p>";
echo "<p>Phone Number: $phonenumber</p>";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>입력 정보 확인</title>
</head>
<body>
    <h3>입력하신 데이터는 다음과 같습니다.</h3>
    <div>이름: <?= $uname ?></div>
    <div>학번: <?= $studentid ?></div>
    <div>전화번호: <?= $phonenumber ?></div>
    <div>Email: <?= $email ?></div>
    <div>RC: <?= $rc ?></div>
    <div>전공: <?= $major ?></div>
</body>
</html>
