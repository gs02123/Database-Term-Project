<?php
    include "../include/dbConnect.php";


     
    $trialID = $_POST['trialID'];
    $judgeID = $_POST['judgeID'];
    $courtID = $_POST['courtID'];
    $trialDate = $_POST['trialDate'];
    $trialName = $_POST['trialName'];
    $trialContent = $_POST['trialContent'];

    if ($_COOKIE['admin'] != 'adminaccess')
    {
        echo '관리자가 아닙니다';
        echo "<meta http-equiv='refresh' content='1; URL=admin_main.php?no=0'>";
        exit;
    }

    if($trialID == '' || $judgeID == '' || $courtID == '' || $trialName == '' || $trialDate== '' || $trialContent == ''){
        echo '빈칸이 있습니다.';
        exit;
    }
 
    //PHP에서 유효성 재확인
 
    //아이디 중복검사.
    $sql = "SELECT * FROM trial WHERE trialID = '{$trialID}'";
    $res = $dbConnect->query($sql);
    if($res->num_rows >= 1){
        echo '이미 존재하는 판례id가 있습니다.';
        exit;
    }
 
    //비밀번호 일치하는지 확인
    mysql_query("SET AUTOCOMMIT=0");
    mysql_query("START TRANSACTION");
    //이제부터 넣기 시작
    $sql = "INSERT INTO trial VALUES('{$courtID}','{$judgeID}','{$trialID}','{$trialDate}','{$trialName}','{$trialContent}');";
 
    if($dbConnect->query($sql)){
        mysql_query("COMMIT");
        echo '등록 성공';
        echo "<meta http-equiv='refresh' content='1; URL=product_list.php?no=0'>";
    }
    else
        {
            mysql_query("ROLLBACK");
        echo '실패';
       }

?> 