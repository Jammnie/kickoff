<! doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Kick off 로그인페이지</title>
        <link href= "css\kickoff_css.css" rel="stylesheet" type="text/css">
        <script src="/js/prefixfree.min.js"></script>
    </head>
    <body>
        <header class="header">
            <nav class="navi">
                <ul>
                    <li><img ></li>
                    <li><a href="index.php">KICKOFF</a></li>
                    <li><a href= "kickoff_searchpage_01.html">구장예약</a></li>
                    <li><a href= "kickoff_matchpage_01.html">매치찾기</a></li>
                    <li><a href= "kickoff_trainingpage_01.html">트레이닝</a></li>
                    <li><a href= "kickoff_myclubpage_01.html">My Club</a></li>
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
            <div>
                <form action="kickoff_loginpage_02.php" method="POST">
                    <p><input type="text" name="userID"></p>
                    <p><input type="password" name="userPW"></p>
                    <input type="submit">
                </form>
                
            </div>
          </div>
    </body>
</html>
