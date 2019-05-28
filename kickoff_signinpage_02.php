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
            <div>
                <h2>이용약관</h2>
                <form action="kickoff_signup_01.php" method="POST">
                    <input type="hidden" value="<?=$_POST['userID']?>">
                    <input type="hidden" value="<?=$_POST['userPW']?>">
                    <input type="hidden" value="<?=$_POST['userPW_confirm']?>">
                    <input type="hidden" value="<?=$_POST['userName']?>">
                    <input type="hidden" value="<?=$_POST['userPhoneNumber']?>">
                    <input type="checkbox"><label>약관에 동의합니다.</label>
                    <div>

                    </div>
                    <input type="checkbox"><label>약관에 동의합니다.</label>
                    <div>

                    <div>
                    <input type="checkbox"><label>약관에 동의합니다.</label>
                    <div>

                    </div>

                    <input type="submit">
                    <input type="button">
                </form>
            </div>
        </div>
    </body>
</html>