<?php
    include "../include/session.php";
    include "../include/dbConnect.php";
 
    $lawfirmName = $_POST['lawfirmName'];
    
    if ($_COOKIE['admin'] != 'adminaccess' && $_COOKIE['ctk'] == '')
    {
        echo '로그인 하지 않으셨습니다';
        echo "<meta http-equiv='refresh' content='1; URL=main.php?no=0'>";
        exit;
    }
 
    $sql = "SELECT * FROM lawfirm NATURAL JOIN lawyer WHERE lawfirmName ='{$lawfirmName}'";
    $res = $dbConnect->query($sql);
 
 
 
        if ($res->num_rows > 0) {
           while($row = $res->fetch_assoc()) {
        echo "로펌: " . $row["lawfirmName"]. " 변호사: " . $row["lawyerName"]. "<br>";

    }
        }
 
        else {
            echo '존재하지 않습니다.';
        }

?>