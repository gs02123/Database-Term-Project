<?php
    include "../include/dbConnect.php";
     
    $trialID = $_POST['trialID'];

    if ($_COOKIE['admin'] != 'adminaccess')
    {
        echo '관리자가 아닙니다';
        echo "<meta http-equiv='refresh' content='1; URL=admin_main.php?no=0'>";
        exit;
    }
 
    //PHP에서 유효성 재확인
 
    //아이디 중복검사.
    $sql = "SELECT * FROM trial WHERE trialID = '{$trialID}'";
    $res = $dbConnect->query($sql);
    if($res->num_rows == 0){
        echo '해당 판례id가 없습니다.';
        echo "<meta http-equiv='refresh' content='1; URL=deletemain.php?no=0'>";
        exit;
    }
 
    //비밀번호 일치하는지 확인
 
 
    //이제부터 넣기 시작
    $sql = "DELETE FROM trial WHERE trialID= '{$trialID}';";
 
    if($dbConnect->query($sql)){
        echo '삭제 성공';
        echo "<meta http-equiv='refresh' content='1; URL=product_list.php?no=0'>";
    }
    else
        {echo '실패';
    echo "<meta http-equiv='refresh' content='1; URL=deletemain.php?no=0'>";
}
?> 