<!DOCTYPE html>
<html lang='ko'>
<head>
    <title>K-mall</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<form action="prosearch.php" method="post">
    <div class='navbar fixed'>
        <div class='container'>
            <a class='pull-left title' href="admingreeting.php">판례DB</a>
            <ul class='pull-right'>
                <li>
                    <input type="text" name="search_keyword" placeholder="검색하세요">
                    <button>검색</button>
                </li>
                <li><a href='product_list.php'>판례 목록</a></li>
                <li><a href='searchmain2.php'>판례 검색</a></li>
                <li><a href='trialmanage.php'>판례 관리</a></li>
                <li><a href='order_list.php'>주문 조회</a></li>
                <li><a href='casesubmit_list.php'>사건 접수 조회</a></li>
                <li><a href='adminsignout.php'>로그아웃 하기</a></li>
            </ul>
        </div>
    </div>
</form>