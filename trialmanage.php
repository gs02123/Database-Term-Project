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
        <h1 class="title">선택하세요</h1>
        <form name="singIn" action="./newinsert.php" method="post" onsubmit="return checkSubmit()">
            <div class="line">
                <input type="submit" value="퍈례등록" class="submit">
            </div>
        </form>
        <form name="singIn" action="./modimain1.php" method="post" onsubmit="return checkSubmit()">
            <div class="line">
                <input type="submit" value="판례수정" class="submit">
            </div>
        </form>
        <form name="singIn" action="./deletemain.php" method="post" onsubmit="return checkSubmit()">
            <div class="line">
                <input type="submit" value="판례삭제" class="submit">
            </div>
        </form>
       
    </div>
</div>
</body>
</html>