<?php

  if ($_COOKIE['ctk'] == '')
    {
        echo '로그인 하지 않으셨습니다';
        echo "<meta http-equiv='refresh' content='1; URL=main.php?no=0'>";
        exit;
    }
    
    echo $_COOKIE['ctk'].'님 로그아웃 하겠습니다.';
 
    setcookie('ctk', '', time() - 1);



     echo '<br>로그아웃 완료 ';
     echo "<meta http-equiv='refresh' content='1; URL=main.php?no=0'>";
    
?>