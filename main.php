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
        <h1 class="title">판례DB</h1>
        <form name="singIn" action="./signIn.php" method="post" onsubmit="return checkSubmit()">
            <div class="line">
                <p>아이디</p>
                <div class="inputArea">
                    <input type="text" name="memberId" class="memberId">
                </div>
            </div>
            <div class="line">
                <p>비밀번호</p>
                <div class="inputArea">
                    <input type="password" name="memberPw" class="memberPw">
                </div>
            </div>
            <div class="line">
                <input type="submit" value="로그인" class="submit">
            </div>
        </form>
        <h1 class="title"><a href="./newsignup.php">회원가입 하기</a></h1>
        <h1 class="title"><a href="./admin_main.php">관리자 로그인</a></h1>
    </div>
</div>
</body>
</html>