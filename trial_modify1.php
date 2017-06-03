<?php
$servername = "localhost";
$username = "root";
$password = "ksy1127";
$dbname = "myProject";

	$trialID = $_POST['trialID'];
    $judgeID = $_POST['judgeID'];
    $courtID = $_POST['courtID'];
    $trialDate = $_POST['trialDate'];
    $trialName = $_POST['trialName'];
    $trialContent = $_POST['trialContent'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM trial WHERE trialID = '{$trialID}'";
    $res = $dbConnect->query($sql);
    if($res->num_rows !=1){
        echo '해당 판례id가 존재하지 않거나 부정확합니다.';
        exit;
    }

$sql = "UPDATE product SET judgeID = '{$judgeID}', courtID = '{$courtID}', trialDate = '{$trialDate}', trialName = '{$trialName}', trialContent= '{$trialContent}'  WHERE trialID = '{$trialID}';";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>