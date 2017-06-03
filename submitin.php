<?php
    include "../include/dbConnect.php";
 
    $caseID = $_POST['caseID'];
    $lawfirmName = $_POST['lawfirmName'];

      if ($_COOKIE['ctk'] == '')
    {
        echo '로그인 하지 않으셨습니다';
        echo "<meta http-equiv='refresh' content='1; URL=main.php?no=0'>";
        exit;
    }

    if($caseID == ''|| $lawfirmName == ''){
        echo '빈칸이 있습니다.';
        exit;
    }

    $sql = "SELECT * FROM trial WHERE trialID = '{$caseID}'";
    $res = $dbConnect->query($sql);
    if($res->num_rows > 0){
        echo '해당 사건은 이미 진행중입니다.';
        exit;
    }

    $sql = "SELECT * FROM lawfirm WHERE lawfirmName = '{$lawfirmName}'";
    $res = $dbConnect->query($sql);
    if($res->num_rows == 0){
        echo '존재하지 않는 로펌입니다.';
        exit;
    }

    $sql = "INSERT INTO casesubmit VALUES('{$_COOKIE['ctk']}','{$caseID}','{$lawfirmName}');";

    if($dbConnect->query($sql)){
        echo '접수 성공';
        echo "<meta http-equiv='refresh' content='1; URL=casesubmit_list.php?no=0'>";

    }
    else
        echo '실패';

?>