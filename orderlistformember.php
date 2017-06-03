<?php
$servername = "localhost";
$username = "root";
$password = "ksy1127";
$dbname = "myProject";

  if ($_COOKIE['ctk'] == '')
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

$sql = "SELECT trialID, memberID FROM bookmark WHERE memberID='{$_COOKIE['ctk']}'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '-------------------------------------------------';
        echo "<br>";
        echo "trialID: " . $row["trialID"]."<br>";
        echo '-------------------------------------------------';
        echo "<br>";


    }
} else {
    echo "주문내역이 없습니다";
}
$conn->close();
?>