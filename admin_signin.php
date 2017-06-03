<?php

    include "../include/dbConnect.php";
 
    $memberId = $_POST['memberId'];
    $memberPw = $_POST['memberPw'];
    
    if ($memberPw!=$adminpw)
    {
             echo '로그인 실패 비밀번호가 일치하지 않습니다.';   
    }
    else if ($memberId!=$adminid)
    {
             echo '로그인 실패 아이디가 일치하지 않습니다.';
    }
    else
     {
        setcookie('admin',$memberId);
            echo $_COOKIE['admin'];
            echo '관리자님 안녕하세요';
            echo '<a href="./adminsignout.php">로그아웃 하기</a>';
            echo "<meta http-equiv='refresh' content='1; URL=admingreeting.php?no=0'>";
        }


?>