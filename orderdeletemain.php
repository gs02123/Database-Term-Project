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
        <h1 class="title">판례ID 입력하세요</h1>
        <form name="singIn" action="./orderdel.php" method="post" onsubmit="return checkSubmit()">
            <div class="line">
                <p>삭제</p>
                <div class="inputArea">
                    <input type="text" name="trialID" class="trialID">
                </div>
            </div>
            <div class="line">
                <input type="submit" value="삭제" class="submit">
            </div>
        </form>
       
    </div>
</div>
</body>
</html>