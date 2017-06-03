<?php
include "../include/dbConnect.php";    //데이터베이스 연결 설정파일
include "util.php";      //유틸 함수


	$trialID = $_POST['trialID'];
    $judgeID = $_POST['judgeID'];
    $courtID = $_POST['courtID'];
    $trialDate = $_POST['trialDate'];
    $trialName = $_POST['trialName'];
    $trialContent = $_POST['trialContent'];

 $sql = "SELECT * FROM trial WHERE trialID = '{$trialID}'";
    $res = $dbConnect->query($sql);
    if($res->num_rows !=1){
        echo '해당 판례id가 존재하지 않거나 부정확합니다.';
        exit;
    }
 $sql = "UPDATE product SET judgeID = '$judgeID', courtID = '$courtID', trialDate = $trialDate, trialName = $trialName, trialContent=$trialContent  WHERE trialID = $trialID";

if($dbConnect->query($sql)){
        echo '수정 성공';
    }
    else
        echo '실패';

?>

