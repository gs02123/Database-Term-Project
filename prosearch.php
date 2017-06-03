<?php
    include "../include/session.php";
    include "../include/dbConnect.php";
    include("header.php");


 
    $memberId = $_POST['search_keyword'];

    if ($_COOKIE['admin'] != 'adminaccess' && $_COOKIE['ctk'] == '')
    {
        echo '로그인 하지 않으셨습니다';
        echo "<meta http-equiv='refresh' content='1; URL=main.php?no=0'>";
        exit;
    }
 
    $sql = $sql = "SELECT * FROM trial NATURAL JOIN defendant NATURAL JOIN plaintiff WHERE trialName like '%$memberId%' or defendantName like'%$memberId%' or plaintiffName like '%$memberId%'";
    $res = $dbConnect->query($sql);
 
 
 
        if ($res->num_rows > 0) {
           while($row = $res->fetch_assoc()) {
        echo "<a href='product_view1.php?trialName={$row["trialName"]}'>trialID: " . $row["trialID"]. " trialName: " . $row["trialName"]. " trialDate: " . $row["trialDate"]. "<br>";

    }
        }
 
        else {
            echo '존재하지 않습니다.';
        }

?>