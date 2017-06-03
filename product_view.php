<?
include "header.php";    
include "util.php"; 

     //유틸 함수
$host='localhost';
$dbid='root';
$dbpass='ksy1127';
$dbname='myProject';

$conn = dbconnect($host, $dbid, $dbpass, $dbname);

$trialName = $_GET["trialName"];
echo " trialName: " . $trialName."<br>";

if (array_key_exists("trialName", $_GET)) {
    $trialName = $_GET["trialName"];
    $query = "SELECT * FROM trial WHERE trialName = $trialName";
    $res = mysql_query($query, $conn);
    $product = mysql_fetch_assoc($res);
    if (!$product) {
        msg("판례가 존재하지 않습니다.");
    }
}
?>
    <div class="container fullwidth">

        <h3>상품 정보 상세 보기</h3>

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
            <label for="courtID">courtid</label>
            <textarea readonly id="courtID" name="courtID" rows="10"><?= $product['courtID'] ?></textarea>
        </p>

        <p>
            <label for="trialContent">trialcontent</label>
            <input readonly type="number" id="trialContent" name="trialContent" value="<?= $product['trialContent'] ?>"/>
        </p>
    </div>
<? include("footer.php") ?>