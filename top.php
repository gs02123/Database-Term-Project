<style>
 .title{font-size:30pt; text-decoration:none; color:black;}
.dropdown>ul>li {
 display: inline-block;
 position: relative;
}
.dropdown>ul>li>ul {
 position: absolute;
 list-style-type: none;
 padding-left: 0px;
 padding-top: 5px;
 display: none;
}
.dropdown>ul>li:hover>ul {
 display: block;
}
w:hover {
 text-decoration: none;
 color: red
}
</style>
<form name="top" bgcolor="#EAEAEA">
  <font face="Yang Rounded">
   <table height="170px" border="0" width="1330px"
    style="background-color:#EAEAEA" border="0">
    <tr>
     <td>
      <table width="1330px" height="40px" border="0" align="right"
       border="0" style="color: white; background-color: pink">
       <tr>
        <td><audio controls
          style="width:250px; margin-left:7%; margin-top:1%;">
         <source src="../mp3/letitgo-frost.mp3" type="audio/mpeg"></audio>
        </td>
        <td style="width: 550px"></td>
        <td onClick="gologin()" style="cursor: pointer"><w>로그인</w></td>
        <td></td>
        <td onClick="gojoin()" style="cursor: pointer"><w>회원가입</w></td>
        <td></td>
        <td onClick="goidfind()" style="cursor: pointer"><w>아이디찾기</w></td>
        <td></td>
        <td onClick="gopwfind()" style="cursor: pointer"><w>비밀번호찾기</w></td>
       </tr>
      </table> 
     </td>
    </tr>
    <tr align="center">
     <td align="center" style=" height: 180px;">
      <table width="1330px" align=center>
       <tr>
        <td>
         <table width="500px" height="200px" align=center border="0">
          <tr>
           <td align="center"><a href="home.jsp" class="title">LG Twins</a></td>
          </tr>
         </table>
        </td>
       </tr>
      </table>
     </td>
    </tr>
    <tr>
     <td>
      <table width="1000px" border="0" align="center" border="0">
       <tr>
        <td>
         <table width="1000px" border="0" align="left" border="0"
          style="color: black">
          <tr>
           <td>
            <div class="dropdown">
             <ul align="center" style="font-size: 17px">
              <li align="center" onClick="gohome()"
               style="cursor: pointer;"><w>구단소개</w>
               <ul style="font-size: 16px;">
                <li style="background-color: white;"
                 onClick="">인사말</li>
                <li style="background-color: white; margin-top: 2px"
                 onClick="">은원가</li>
                <li style="background-color: white; margin-top: 2px"
                 onClick="">구장안내</li>
                <li style="background-color: white; margin-top: 2px"
                 onClick="">게임룰</li>
               </ul></li>
              <li style="width: 60px">|</li>
              <li align="center" onClick=""
               style="cursor: pointer;"><w>경기</w>
                <ul style="font-size: 16px;">
                <li style="background-color: white;"
                 onClick="">경기일정</li>
                <li style="background-color: white; margin-top: 2px"
                 onClick="">경기결과</li>                
               </ul></li>
              <li style="width: 60px">|</li>
              <li align="left" style="cursor: pointer;"><w>티켓예매</w></li>
              <li style="width: 60px">|</li>
              <li align="center" onClick=""
               style="cursor: pointer;"><w> 커뮤니티</w></li>             
             </ul>
            </div>
           </td>
          </tr>
          <tr>
           <td height="20px"></td>
          </tr>
         </table>
        </td>
       </tr>
      </table> 
     </font>
     </td>
    </tr>
   </table>
  </form>
