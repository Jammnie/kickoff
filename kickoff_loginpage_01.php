<?php 
session_start();
if($_SESSION['is_logged']=='YES'){
    $_SESSION['is_logged'] = 'NO';
    $_SESSION['userid'] = '';
    header('Location:index.php');
}
?>
<! doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Kick off 로그인페이지</title>
        <link href= "css\kickoff_css.css" rel="stylesheet" type="text/css">
        <link href= "css\kickoff_login.css" rel="stylesheet" type="text/css">
        <script src="/js/prefixfree.min.js"></script>
    </head>
    <body>
        <header class="header">
            <nav class="navi">
                <ul>
                    <li><img ></li>
                    <li><a href="index.php">KICKOFF</a></li>
                    <li><a href= "kickoff_searchpage_01.php">구장예약</a></li>
                    <li><a href= "kickoff_matchpage_01.php">매치찾기</a></li>
                    <li><a href= "kickoff_trainingpage_01.php">트레이닝</a></li>
                    <li><a href= "kickoff_myclubpage_01.php">My Club</a></li>
                </ul>
            </nav>

            <div class="User">
                <ul>
                    <li><a>회원가입</a></a></li>
                    <li><a href= "kickoff_signinpage_01.php">회원가입</a></a></li>
                    <li><a href= "kickoff_loginpage_01.php">로그인</a></a></li>
                </ul>
            </div>
          </header>
          <div class="wrapper">
            <div class="login">
                <h1>Kickoff 로그인</h1>
                <hr>
                <form action="kickoff_loginpage_02.php" method="POST">
                    <p><input class="login_inputset" type="text" name="userID" placeholder="아이디"></p>
                    <p><input class="login_inputset" type="password" name="userPW" placeholder="패스워드"></p>
                    <input type="checkbox" value="" >아이디 저장 </br>
                    <input class="login_btn" type="submit" value="로그인">
                </form>
                
            </div>
          </div>
    </body>
</html>
