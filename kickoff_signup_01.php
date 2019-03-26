<?php 
    $conn = mysqli_connect("localhost","root","dlwoals12","kickoff");
    // userPW 와 userPW_confirm 이 일치하면 회원가입성공
    if($_POST['userPW'] == $_POST['userPW_confirm']){
        $sql = "INSERT INTO user_infomations(userid, userpw, created) VAlUES('{$_POST['userID']}','{$_POST['userPW']}', NOW())";
        $result = mysqli_query($conn,$sql);
        if($result === false){
            echo mysqli_error($conn);
        } else {
            echo "회원가입이 되었습니다";
        }
    } else {
        echo "pw를 확인해주세요.";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Kick off 회원가입</title>
        <link href= "css\kickoff_css.css" rel="stylesheet" type="text/css">
        <script src="/js/prefixfree.min.js"></script>
    </head>
    <body>
        
    </body>
    <!--
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
        <div class="wrapper" style="background: gray;">
          // 넘어온 데이터를 데이터베이스에 추가
          // 그후에 환영 페이지로 넘어감
        </div>
    </body> -->
</html>
