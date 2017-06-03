

    <?php
    include "header.php";
    include "config.php";    //데이터베이스 연결 설정파일
    include "util.php";      //유틸 함수

    $conn = dbconnect($host, $dbid, $dbpass, $dbname);


       if (array_key_exists('store_id', $_GET)) {
          $store_id = $_GET['store_id'];
          $query = "select * from (store natural join soju_store) natural join soju where store_id = $store_id";
          $res = mysql_query($query, $conn);
          $store = mysql_fetch_array($res);
            if (!$store) {
                msg("물품이 존재하지 않습니다.");
            }
        }
    echo "<div>";
    echo "<h1>{$store['store_name']}<h1>";
    echo "<h3>주소: {$store['location']}<h3>";
    echo "<h5>평가: {$store['review']}</h5>";
    echo "</div>";
    ?>
    <table class="table table-striped table-hover " style="width:17%;text-align:center">
      <thead>
        <tr>
          <th>소주 이름</th>
          <th>가격</th>
        </tr>
      </thead>
      <tbody>
        <?
    echo "<tr>";
    echo "<td>{$store['soju_name']}</td>";
    echo "<td>{$store['price']}</td>";
    echo "</tr>";

     while ($row = mysql_fetch_array($res)) {
          echo "<tr>";
          echo "<td>{$row['soju_name']}</td>";
          echo "<td>{$row['price']}</td>";
          echo "</tr>";
     }
     ?>
  </tbody>
</table>
<? include("footer.php") ?>
