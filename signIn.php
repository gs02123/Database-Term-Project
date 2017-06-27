<?php
    include "../include/dbConnect.php";

 
    $memberId = $_POST['memberId'];
    $memberPw = md5($memberPw = $_POST['memberPw']);
 
    $sql = "SELECT * FROM member WHERE memberId = '{$memberId}' AND password = '{$memberPw}'";
    $res = $dbConnect->query($sql);
 
 
        $row = $res->fetch_array(MYSQLI_ASSOC);
 
 if ($row != null) {
        
            setcookie('ctk',$row['memberId']);
            echo $_COOKIE['ctk'];
            echo '<a href="./signOut.php">로그아웃 하기</a>';
             echo "<meta http-equiv='refresh' content='1; URL=greeting.php?no=0'>";
        }
 
        if($row == null){
            echo '로그인 실패 아이디와 비밀번호가 존재하지 않거나 일치하지 않습니다.';
             echo "<meta http-equiv='refresh' content='1; URL=main.php?no=0'>";
        }

?>