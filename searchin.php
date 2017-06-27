<?php
    include "../include/session.php";
    include "../include/dbConnect.php";
 
    $memberId = $_POST['memberId'];

    if ($_COOKIE['admin'] != 'adminaccess' && $_COOKIE['ctk'] == '')
    {
        echo '로그인 하지 않으셨습니다';
        echo "<meta http-equiv='refresh' content='1; URL=main.php?no=0'>";
        exit;
    }
 
    $sql = "SELECT * FROM trial NATURAL JOIN defendant NATURAL JOIN plaintiff WHERE trialName like '%$memberId%' or defendantName like'%$memberId%' or plaintiffName like '%$memberId%' or trialContent like '%$memberId%'";
    $res = $dbConnect->query($sql);
 
 
 
        if ($res->num_rows > 0) {
           while($row = $res->fetch_assoc()) {
        echo "<br>";
            echo '----------------------------------------------------------------';
             echo "<br>";
        echo "trialID: " . $row["trialID"]. "<br>". " trialName: " . $row["trialName"]. "<br>". " trialDate: " . $row["trialDate"]. "<br>";
        echo "<td width='17%'>
                <a href='product_view1.php?trialName={$row["trialName"]}'><button class='button primary small'>상세보기</button></a>
                </td>";
        echo "<br>";
        echo '----------------------------------------------------------------';
        echo "<br>";
    }
        }
 
        else {
            echo '존재하지 않습니다.';
        }

?>