<?php
include "header12.php";
include "config12.php";    //데이터베이스 연결 설정파일
include "util12.php";
include "../include/dbConnect.php";       //유틸 함수

$conn = dbconnect($host, $username, $password, $dbName);

$query="select * from product natural join supplier";


if (array_key_exists("search_keyword", $_POST)) {     // array_key_exists() : Checks if the specified key exists in the array
        $search_keyword = $_POST["search_keyword"];
        $query =  $query." where productname like '%$search_keyword%' or companyname like '%$search_keyword%'";
}
    $result = mysql_query($query, $conn);
    if (!$result) {
        die('Query Error : ' . mysql_error());
    }
?>

<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>제조사 연락처</th>
      <th>제품 이름</th>
      <th>재고</th>
      <th>가격</th>
      <th>제조사 이름</th>
    </tr>
  </thead>
  <tbody>

  <?
   while ($row = mysql_fetch_array($result)) {
        echo "<tr>";
        echo "<td>{$row['companycontact']}</td>";
        echo "<td>{$row['productname']}</td>";
        echo "<td>{$row['stock']}</td>";
        echo "<td>{$row['price']}</td>";
        echo "<td>{$row['companyname']}</td>";
   }
   ?>
  </tbody>
</table>
    <script>
        function deleteConfirm(store_id,soju_id) {
            if (confirm("정말 삭제하시겠습니까?") == true)
                   {   window.location = "delete.php?store_id=" + store_id+ "&soju_id=" + soju_id;}
            else {   return;     }
        }
    </script>
</div>
<? include("footer.php") ?>
