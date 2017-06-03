<?php
include "../include/dbConnect.php";    //데이터베이스 연결 설정파일
include "util.php";      //유틸 함수

$conn = dbconnect($host,$user,$passWord,$dbName);

$product_id = $_GET['memberId'];

$ret = mysql_query("delete from trial where trialID = $product_id", $conn);

if(!$ret)
{
    echo ('삭제에 실패했습니다');
}
else
{
    echo ('성공적으로 삭제 되었습니다');
    echo "<meta http-equiv='refresh' content='0;url=product_list.php'>";
}

?>

