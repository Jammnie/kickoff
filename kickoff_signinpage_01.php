<?php
 $conn = mysqli_connect("localhost","root","dlwoals12","kickoff");
?>
<script>

</script>
<! doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Kick off 회원가입</title>
        <link href= "css\kickoff_css.css" rel="stylesheet" type="text/css">
        <script src="/js/prefixfree.min.js"></script>
    </head>
    <body>
        <header class="header">
            <nav class="navi">
                <ul>
                    <li><img ></li>
                    <li><a href= "index.php">KICKOFF</a></li>
                    <li><a href= "kickoff_searchpage_01.html">구장예약</a></li>
                    <li><a href= "kickoff_matchpage_01.html">매치찾기</a></li>
                    <li><a href= "kickoff_trainingpage_01.html">트레이닝</a></li>
                    <li><a href= "kickoff_myclubpage_01.html">My Club</a></li>
                </ul>
            </nav>

            <div class="User">
                <ul>
                    <li><a>회원가입</a></a></li>
                    <li><a href= "kickoff_signinpage_01.html">회원가입</a></a></li>
                    <li><a href= "kickoff_loginpage_01.html">로그인</a></a></li>
                </ul>
            </div>

        </header>
        <div class="wrapper">
            <form action="kickoff_signup_01.php" method="post">
                <p><label>ID</label><input name="userID" type="text" placeholder="ID를 입력하세요."></p>
                <p><input name="userPW" type="password" placeholder="비밀번호를 입력하세요."></p>
                <p>비밀번호를 확인해주세요.</p>
                <p><input name="userPW_confirm" type="password" placeholder="비밀번호를 다시 한번 더 입력하세요."></p>
                <input type="submit" value="가입하기" />
                <button value="뒤로가기" onclick="" >
                <!--
                아이디/패스워드/패스워드확인/ 확인버튼이 필요함

                패스워드와 패스워드확인이 같지 않으면 확인버튼 비활성화, 패스워드 확인 필요 경고

                패스하면 패이즈를 넘어가서 데이터베이스 추가
                -->
            </form>
        </div>
    </body>
</html>
