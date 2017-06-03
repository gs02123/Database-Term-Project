<?php
$servername = "localhost";
$username = "root";
$password = "ksy1127";
$dbname = "myProject";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$trialName = $_GET['trialName'];

$sql = "SELECT * FROM trial WHERE trialName = '{$trialName}'";
$result = $conn->query($sql);

// if(!$result)
// {
//     echo "결과 없음";
// }
// else
// {
// echo "결과 있음";
// $r = $result->fetch_assoc();
// if (!$r)
// {
//     echo "결과 있음";
// }
// else{
// echo "trial: " . $r["trialID"]."<br>". " trialName: " . $r["trialName"]."<br>". " trialDate: " . $r["trialDate"]. "<br>";
// }
// }

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '-------------------------------------------------';
        echo "<br>";
        echo "판례ID: " . $row["trialID"]."<br>". " 판례명: " . $row["trialName"]."<br>". " 판결일자: " . $row["trialDate"]. "<br>". " 법원ID: " . $row["courtID"]."<br>" . " 판결내용: " . $row["trialContent"]."<br>". " 판사ID: " . $row["judgeID"]."<br>";
        echo '-------------------------------------------------';
        echo "<br>";


    }
} 
else {
    echo "0 results";
}
$conn->close();
?>