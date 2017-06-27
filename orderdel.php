<?php
    include "../include/dbConnect.php";
     
    $trialID = $_POST['trialID'];
 
    //PHP에서 유효성 재확인
 
    //아이디 중복검사.
    $sql = "SELECT * FROM bookmark WHERE trialID = '{$trialID}' and memberID='{$_COOKIE['ctk']}';";
    $res = $dbConnect->query($sql);
    if($res->num_rows == 0){
        echo '해당 판례 주문내역이 없습니다.';
        echo "<meta http-equiv='refresh' content='1; URL=deletemain.php?no=0'>";
        exit;
    }

 
    //비밀번호 일치하는지 확인
 
 
    //이제부터 넣기 시작
    $sql = "DELETE FROM bookmark WHERE trialID= '{$trialID}' and memberID='{$_COOKIE['ctk']}';";
 
    if($dbConnect->query($sql)){
        echo '주문 삭제 성공';
        echo "<meta http-equiv='refresh' content='1; URL=orderlistformember.php?no=0'>";
    }
    else
        {echo '실패';
    echo "<meta http-equiv='refresh' content='1; URL=deletemain.php?no=0'>";
}
?> 