<?php
    include "../include/dbConnect.php";

     if ($_COOKIE['ctk'] == '')
    {
        echo '로그인 하지 않으셨습니다';
        echo "<meta http-equiv='refresh' content='1; URL=main.php?no=0'>";
        exit;
    }
 
    $memberId = $_POST['memberId'];
    if($memberId == ''){
        echo '빈칸이 있습니다.';
        exit;
    }

    $sql = "SELECT * FROM trial WHERE trialID = '{$memberId}'";
    $res = $dbConnect->query($sql);
    if($res->num_rows == 0){
        echo '해당 판례id가 없습니다.';
        exit;
    }

    $sql = "SELECT * FROM bookmark WHERE trialID = '{$memberId}' and memberID='{$_COOKIE['ctk']}' ";
    $res = $dbConnect->query($sql);
    if($res->num_rows > 0){
        echo '이미 해당상품을 주문하셨습니다.';
        exit;
    }

    $sql = "INSERT INTO bookmark VALUES('{$memberId}','{$_COOKIE['ctk']}');";
 
    if($dbConnect->query($sql)){
        echo '주문 성공';
        echo "<meta http-equiv='refresh' content='1; URL=orderlistformember.php?no=0'>";

    }
    else
        echo '실패';

?>