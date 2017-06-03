<?php
	

	if ($_COOKIE['admin'] != 'adminaccess')
    {
        echo '관리자로 로그인 하지 않으셨습니다';
        echo "<meta http-equiv='refresh' content='1; URL=main.php?no=0'>";
        exit;
    }

    
    echo $_COOKIE['admin'].'님 로그아웃 하겠습니다.';
 
    setcookie('admin', '', time() - 1);



     echo '<br>로그아웃 완료 ';
     echo "<meta http-equiv='refresh' content='1; URL=main.php?no=0'>"
    
?>