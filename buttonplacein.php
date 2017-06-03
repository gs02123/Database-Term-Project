<?php
    include "../include/dbConnect.php";
 
    $trialName = $_POST['trialName'];
    echo '{$trialName}';
    if($trialName == ''){
        echo '빈칸이 있습니다.';
        exit;
    }

    $sql = "SELECT * FROM trial WHERE trialName = '{$trialName}'";
    $res = $dbConnect->query($sql);
    if($res->num_rows == 0){
        echo '해당 판례id가 없습니다.';
        exit;
    }

    $sql = "SELECT * FROM bookmark NATURAL JOIN trial WHERE trialName = '{$trialName}' and memberID='{$_COOKIE['ctk']}' ";
    $res = $dbConnect->query($sql);
    $roww = $res->fetch_assoc();

    if($res->num_rows > 0){
        echo '이미 해당상품을 주문하셨습니다.';
        exit;
    }

    $sql = "INSERT INTO bookmark VALUES('{$roww["trialID"]}','{$_COOKIE['ctk']}');";
 
    if($dbConnect->query($sql)){
        echo '주문 성공';
    }
    else
        echo '실패';

?>