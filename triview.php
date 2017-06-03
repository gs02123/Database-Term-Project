<?
include "header.php";
include "../include/dbConnect.php";    //데이터베이스 연결 설정파일
include "util.php";      //유틸 함수

$conn = dbconnect($host, $user, $passWord, $dbName);

if (array_key_exists("trialName", $_GET)) {
    $product_id = $_GET["product_id"];
    $query = "SELECT * FROM trial WHERE trialName = $product_id";
    $res = mysql_query($query, $conn);
    $product = mysql_fetch_assoc($res);
    if (!$product) {
        msg("물품이 존재하지 않습니다.");
    }
}
?>
    <div class="container fullwidth">

        <h3>판례 정보 상세 보기</h3>

        <p>
            <label for="trialName">trailname</label>
            <input readonly type="text" id="trialName" name="trialName" value="<?= $product['trialName'] ?>"/>
        </p>

        <p>
            <label for="trialID">trialid</label>
            <input readonly type="text" id="trialID" name="trialID" value="<?= $product['trialID'] ?>"/>
        </p>

        <p>
            <label for="judgeID">judgeid</label>
            <input readonly type="text" id="judgeID" name="judgeID" value="<?= $product['judgeID'] ?>"/>
        </p>

        <p>
            <label for="trialDate">trialdate</label>
            <input readonly type="text" id="trialDate" name="trialDate" value="<?= $product['trialDate'] ?>"/>
        </p>
        <p>
            <label for="trialContent">trialcontent</label>
            <textarea readonly id="trialContent" name="trialContent" rows="10"><?= $product['trialContent'] ?></textarea>
        </p>
        <p>
            <label for="price">courtid</label>
            <input readonly type="number" id="courtid" name="courtid" value="<?= $product['courtid'] ?>"/>
        </p>
    </div>
<? include("footer.php") ?>