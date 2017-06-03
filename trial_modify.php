<?php
include "../include/dbConnect.php";     //데이터베이스 연결 설정파일
include "util.php";      //유틸 함수

$conn = dbconnect($host,$user,$passWord,$dbName);

 	$trialID = $_POST['trialID'];
    $judgeID = $_POST['judgeID'];
    $courtID = $_POST['courtID'];
    $trialDate = $_POST['trialDate'];
    $trialName = $_POST['trialName'];
    $trialContent = $_POST['trialContent'];
 

$ret = mysql_query("UPDATE product SET judgeID = '$judgeID', courtID = '$courtID', trialDate = $trialDate, trialName = $trialName, trialContent=$trialContent  WHERE trialID = $trialID;", $conn);

if(!$ret)
{
    msg('Query Error : '.mysql_error($conn));
}
else
{
    s_msg ('성공적으로 수정 되었습니다');
    echo "<meta http-equiv='refresh' content='0;url=product_list.php'>";
}

?>

