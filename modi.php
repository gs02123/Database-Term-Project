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
        <h1 class="title">판례등록</h1>
        <form name="signUp" action="./trialsave.php" method="post" onsubmit="return checkSubmit()">
            <div class="line">
                <p>판례ID</p>
                <div class="inputArea">
                    <input type="text" name="trialID" class="trialID">
                </div>
            </div>
            <div class="line">
                <p>판사ID</p>
                <div class="inputArea">
                    <input type="text" name="judgeID" class="judgeID">
                </div>
            </div>
            <div class="line">
                <p>법원ID</p>
                <div class="inputArea">
                    <input type="text" name="courtID" class="courtID">
                </div>
            </div>
            <div class="line">
                <p>판결일자</p>
                <div class="inputArea">
                    <input type="text" name="trialDate" class="trialDate">
                </div>
            </div>
            <div class="line">
                <p>재판명</p>
                <div class="inputArea">
                    <input type="text" name="trialName" class="trialName">
                </div>
            </div>
              <div class="line">
                <p>재판내용</p>
                <div class="inputArea">
                    <input type="text" name="trialContent" class="trialContent">
                </div>
            </div>
            <div class="line">
                <input type="submit" value="등록" class="submit">
            </div>
        </form>
 
        <div class="formCheck">
            <input type="hidden" name="idCheck" class="idCheck">
        </div>
    </div>
</div>
</body>
</html>