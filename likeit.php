<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>판례DB</title>
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.0.min.js" ></script>
    <script type="text/javascript" src="../js/mySignInForm.js"></script>
    <link rel="stylesheet" href="../css/mySignInForm.css" />
</head>
<body>
<div id="wrap">
    <div id="container">
        <h1 class="title">검색 방법 선택하세요</h1>
        <form name="singIn" action="./searchmain.php" method="post" onsubmit="return checkSubmit()">
            <div class="line">
                <input type="submit" value="판례명 or 참여자" class="submit">
            </div>
        </form>
        <form name="singIn" action="./searchmain3.php" method="post" onsubmit="return checkSubmit()">
            <div class="line">
                <input type="submit" value="법원ID" class="submit">
            </div>
        </form>
       
    </div>
</div>
</body>
</html>