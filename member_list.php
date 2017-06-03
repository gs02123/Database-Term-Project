<?php
$servername = "localhost";
$username = "root";
$password = "ksy1127";
$dbname = "myProject";

if ($_COOKIE['admin'] != 'adminaccess')
    {
        echo '로그인 하지 않으셨습니다';
        echo "<meta http-equiv='refresh' content='1; URL=main.php?no=0'>";
        exit;
    }

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM member";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '-------------------------------------------------';
        echo "<br>";
        echo $_COOKIE['ctk']."<br />";
        echo "회원Id: " . $row["memberId"]."<br>". " 회원명: " . $row["name"]."<br>". " 닉네임: " . $row["nickname"]. "<br>". " 이메일: " . $row["eMail"]. "<br>";
        echo "<br>";
        echo '-------------------------------------------------';
        echo "<br>";


    }
} else {
    echo "0 results";
}
$conn->close();
?>