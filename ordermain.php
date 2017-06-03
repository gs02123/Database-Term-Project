<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>쇼핑몰</title>
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.0.min.js" ></script>
    <script type="text/javascript" src="../js/mySignInForm.js"></script>
    <link rel="stylesheet" href="../css/mySignInForm.css" />
</head>
<body>
<div id="wrap">
    <div id="container">
        <h1 class="title">판례집 주문신청</h1>
        <form name="singIn" action="./placein.php" method="post" onsubmit="return checkSubmit()">
            <div class="line">
                <p>신청</p>
                <div class="inputArea">
                    <input type="text" name="memberId" class="memberId">
                </div>
            </div>
            <div class="line">
                <input type="submit" value="신청" class="submit">
            </div>
        </form>
       
    </div>
</div>
</body>
</html>