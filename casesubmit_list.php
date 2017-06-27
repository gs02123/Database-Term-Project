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


$sql = "SELECT caseID, clientID, lawfirmName FROM casesubmit";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '-------------------------------------------------';
        echo "<br>";
        echo "사건ID: " . $row["caseID"]."<br>". " 고객ID: " . $row["clientID"]."<br>". " 로펌명: " . $row["lawfirmName"]. "<br>";
        echo '-------------------------------------------------';
        echo "<br>";


    }
} else {
    echo "0 results";
}
$conn->close();
?>