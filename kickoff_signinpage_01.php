<?php
 $conn = mysqli_connect("localhost","root","dlwoals12","kickoff");
?>
<script>

</script>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Kick off 회원가입</title>
        <link href= "css\kickoff_css.css" rel="stylesheet" type="text/css">
        <link href="css\kickoff_signin.css" rel="stylesheet" type="text/css">
        <script src="/js/prefixfree.min.js"></script>
    </head>
    <body>
        <header class="header">
            <nav class="navi">
                <ul>
                    <li><img ></li>
                    <li><a href= "index.php">KICKOFF</a></li>
                    <li><a href= "kickoff_searchpage_01.php">구장예약</a></li>
                    <li><a href= "kickoff_matchpage_01.php">매치찾기</a></li>
                    <li><a href= "kickoff_trainingpage_01.php">트레이닝</a></li>
                    <li><a href= "kickoff_myclubpage_01.php">My Club</a></li>
                </ul>
            </nav>

            <div class="User">
                <ul>
                    <li><?=$user_id?>님 안녕하세요</li>
                    <li><a href= "kickoff_signinpage_01.php">회원가입</a></a></li>
                    <li><a href= "kickoff_loginpage_01.php">로그인</a></a></li>
                </ul>
            </div>

        </header>
        <div class="wrapper">
            <form action="kickoff_signinpage_02.php" method="POST">
                <p><input name="userID" type="text" class="signin_input" placeholder="ID를 입력하세요."></p>
                <p><input name="userPW" type="password" class="signin_input" placeholder="비밀번호를 입력하세요."></p>
                <p><input name="userPW_confirm" type="password" class="signin_input" placeholder="비밀번호를 다시 한번 더 입력하세요."></p>
                <p><input name="userName" type="password" class="signin_input" placeholder="비밀번호를 다시 한번 더 입력하세요."></p>
                <p><input name="userPhoneNumber" type="password" class="signin_input" placeholder="비밀번호를 다시 한번 더 입력하세요."></p>
                <p></p>
                <input type="submit" value="가입하기" class="login_btn">
                <button value="뒤로가기" onclick="" class="login_btn" >가입취소</button>
                <!--
                아이디/패스워드/패스워드확인/ 확인버튼이 필요함

                패스워드와 패스워드확인이 같지 않으면 확인버튼 비활성화, 패스워드 확인 필요 경고

                패스하면 패이즈를 넘어가서 데이터베이스 추가
                -->
            </form>

            <div>
                <section class="signin_selecter">
                    <h1>구장주 가입</h1>
                </section>
                <section class="signin_selecter">
                    <h1>트레이너 가입</h1>
                </section>
            </div>
        </div>
    </body>
</html>
