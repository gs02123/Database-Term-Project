<?
include "header.php";   
include "util.php";  

$servername = "localhost";
$username = "root";
$password = "ksy1127";
$dbname = "myProject";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);    //유틸 함수
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



if (array_key_exists("product_id", $_GET)) {
    $product_id = $_GET["product_id"];
    $query = "select * from trial where trialID = $product_id";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '-------------------------------------------------';
        echo "<br>";
        echo "trialID: " . $row["trialID"]."<br>". " trialName: " . $row["trialName"]."<br>". " trialDate: " . $row["trialDate"]. "<br>";
        echo '-------------------------------------------------';
        echo "<br>";


    }
} else {
    echo "0 results";
}
$conn->close();
?>