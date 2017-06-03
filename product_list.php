<?php
$servername = "localhost";
$username = "root";
$password = "ksy1127";
$dbname = "myProject";

if ($_COOKIE['admin'] != 'adminaccess' && $_COOKIE['ctk'] == '')
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

$sql = "SELECT trialID, trialName, trialDate FROM trial";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '-------------------------------------------------';
        echo "<br>";
        echo $_COOKIE['ctk']."<br />";
        echo "<a href='triview.php?trialName={$row["trialName"]}'>trialID: " . $row["trialID"]."<br>". " trialName: " . $row["trialName"]."<br>". " trialDate: " . $row["trialDate"]. "<br>";
        echo "<td width='17%'>
                <a href='product_view1.php?trialName={$row["trialName"]}'><button class='button primary small'>상세보기</button></a>
                </td>";
        echo "<br>";
        echo '-------------------------------------------------';
        echo "<br>";


    }
} else {
    echo "0 results";
}
$conn->close();
?>