<?
include "header.php";
include "../include/dbConnect.php";    //데이터베이스 연결 설정파일
include "util.php";      //유틸 함수
?>
<div class="container">
    <?
    $conn = dbconnect($host, $user, $passWord, $dbName);
    $query = "select * from (trial natural join complaintiff) natural join defendant";
    if (array_key_exists("search_keyword", $_POST)) {  // array_key_exists() : Checks if the specified key exists in the array
        $search_keyword = $_POST["search_keyword"];
        $query =  $query . " where trialName like '%$search_keyword%' or defendantName like '%$search_keyword% or complaintiffName like '%$search_keyword%'";
    }
    $res = mysql_query($query, $conn);
    if (!$res) {
        echo '<a href="./greeting.php">0 results</a>';    }
    else{
    while($row = $res->fetch_assoc()) {
        echo "<a href='product_view.php?trialName={$row["trialName"]}'>trialID: " . $row["trialID"]. " trialName: " . $row["trialName"]. " trialDate: " . $row["trialDate"]. "<br>";

    }
}
?>
    <script>
        function deleteConfirm(product_id) {
            if (confirm("정말 삭제하시겠습니까?") == true){    //확인
                window.location = "product_delete.php?product_id=" + product_id;
            }else{   //취소
                return;
            }
        }
    </script>
</div>
<? include("footer.php") ?>
