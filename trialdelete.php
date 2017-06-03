<?php
    include "../include/session.php";
    include "../include/dbConnect.php";
 
    $memberId = $_POST['memberId'];

    $sql = "SELECT * FROM trial WHERE trialID = '{$memberId}'";
    $res = $dbConnect->query($sql);
    if($res->num_rows != 1){
        echo '정확한 판례id를 주세요';
        exit;
    }
 
    $sql1 = "DELETE FROM trial WHERE trialID = $memberId";
    $res2 = $dbConnect->query($sql1);
 
 
 
        if (!$res2) {
           
        echo '실패';
        echo "<meta http-equiv='refresh' content='0;url=deletemain.php'>";

    }
        }
 
        else {
            echo ('성공적으로 삭제 되었습니다');
    echo "<meta http-equiv='refresh' content='0;url=product_list.php'>";        }

?>