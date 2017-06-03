<!doctype html>
<html>
<head>
<meta charset="UTF-8" />
<title>판례입력</title>
<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.0.min.js" ></script>
<script type="text/javascript" src="../js/mySignupForm.js"></script>
<link rel="stylesheet" href="../css/mySignupForm.css" />
</head>
<body>
<div id="wrap">
    <div id="container">
        <h1 class="title">판례삭제</h1>
        <form name="signUp" action="./trialdel.php" method="post" onsubmit="return checkSubmit()">
            <div class="line">
                <p>판례ID</p>
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