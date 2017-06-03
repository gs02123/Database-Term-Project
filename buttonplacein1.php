<?php
    include "../include/dbConnect.php";
 
    $trialName = $_POST['trialName'];
    if($trialName == ''){
        echo '빈칸이 있습니다.';
        exit;
    }

    $sql = "SELECT * FROM bookmark NATURAL JOIN trial WHERE trialName = '{$trialName}' and memberID='{$_COOKIE['ctk']}'";

    $res = $dbConnect->query($sql);
    if($res->num_rows > 0){
        echo '이미 주문하셨습니다.';
        exit;
    }

    $sql = "SELECT * FROM trial WHERE trialName = '{$trialName}'";
    $res = $dbConnect->query($sql);


    
    while($row = $res->fetch_assoc()) {

    $sql1 = "INSERT INTO bookmark VALUES('{$row["trialID"]}','{$_COOKIE['ctk']}');";   
    
    if($dbConnect->query($sql1)){
        echo '주문 성공';
    }
    else
        echo '실패''


    }

?>