<?php
$servername = "localhost";
$username = "root";
$password = "ksy1127";
$dbname = "myProject";

if ($_COOKIE['admin'] != 'adminaccess')
    {
        echo '관리자가 아닙니다';
        echo "<meta http-equiv='refresh' content='1; URL=admin_main.php?no=0'>";
        exit;
    }

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT trialID, memberID FROM bookmark";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '-------------------------------------------------';
        echo "<br>";
        echo "trialID: " . $row["trialID"]."<br>". " memberID: " . $row["memberID"]."<br>";
        echo '-------------------------------------------------';
        echo "<br>";


    }
} else {
    echo "0 results";
}
$conn->close();
?>