<?php
session_start();
$login_stat = '';
if($_SESSION['is_logged'] == 'YES'){
    $login_stat = '로그아웃';
    $user_id = $_SESSION['userid'];
} else { 
   $login_stat = '로그인';
}

$num = $_GET['groundid'];
$conn = mysqli_connect("localhost","root","dlwoals12","kickoff");
$sql = "SELECT*FROM ground_infomations WHERE ground_index = $num";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);


//예약정보를 알아오는 부분
// 날짜를 받아온 로우들 중에서
if($_POST){
    $reserve_data = $_POST['reserve_date'];
    $sql_reserve = "SELECT*FROM ground_index_reservations WHERE ground_reservation_date = '$reserve_data'";
    $result_reserve = mysqli_query($conn,$sql_reserve);
    while($row_reserve = mysqli_fetch_array($result_reserve)){
        if($row_reserve['ground_reservation_stat'] = "1"){
            $reserveGroundNum = $row_reserve['ground_num'];
            $reserveTime = $row_reserve['ground_reservation_time'];
            echo ("<script language=javascript> reservationCheck($reserveGroundNum,$reserveTime); </stcipt>");
        }
    }
}
?>
<script>
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="css\kickoff_css.css" rel="stylesheet" type="text/css">
    <link href="css\kickoff_groundintro.css" rel="stylesheet" type="text/css">
    <script src="js/prefixfree.min.js"></script>
    <script src="js/jquery.js"></script>
</head>
<body>
    <header class="header">
        <nav class="navi">
            <ul>
                <li><img ></li>
                <li><a href="index.php">KICKOFF</a></li>
                <li><a href="kickoff_searchpage_01.php">구장예약</a></li>
                <li><a href="kickoff_matchpage_01.php">매치찾기</a></li>
                <li><a href="kickoff_trainingpage_01.php">트레이닝</a></li>
                <li><a href="kickoff_myclubpage_01.php">My Club</a></li>
            </ul>
        </nav>

        <div class="User">
            <ul>
                <li><?=$user_id?>님 안녕하세요</li>
                <li><a href="kickoff_signinpage_01.php">회원가입</a></li>
                <li name="btn_login"><a href="kickoff_loginpage_01.php"><?=$login_stat?></a></li>
            </ul>
        </div>
    </header>
    <div Class="wrapper">
        <div class="intro_body">
            <div class="intro_image">

            </div>
            <div>
                <h1><?=$row['ground_name']?></h1>
                <p><?=$row['ground_adress']?><p>
                <p><?=$row['ground_rate']?> </p>
            </div>
            
            <div>
                <h4>이용시간</h4>
                <form action="kickoff_groundIntro_01.php?groundid=<?=$num?>" method="POST">
                    <input type="date" name="reserve_date">
                    <input type="submit">
                </form>
                
                <h4>1구장</h4>
                <p><button id="S10">00:00</button><button id="S11">01:00</button><button id="S12">02:00</button><button id="S13">03:00</button><button>04:00</button><button>05:00</button><button>06:00</button><button>07:00</button></p>
                <p><button>08:00</button><button>09:00</button><button>10:00</button><button>11:00</button><button>12:00</button><button>13:00</button><button>14:00</button><button>15:00</button></p>
                <p><button>16:00</button><button>17:00</button><button>18:00</button><button>19:00</button><button>20:00</button><button>21:00</button><button>22:00</button><button>23:00</button></p>

                <h4>2구장</h4>
                <p><button id="S20">00:00</button><button id="S21">01:00</button><button id="S22">02:00</button><button id="S23">03:00</button><button>04:00</button><button>05:00</button><button>06:00</button><button>07:00</button></p>
                <p><button>08:00</button><button>09:00</button><button>10:00</button><button>11:00</button><button>12:00</button><button>13:00</button><button>14:00</button><button>15:00</button></p>
                <p><button>16:00</button><button>17:00</button><button>18:00</button><button>19:00</button><button>20:00</button><button>21:00</button><button>22:00</button><button>23:00</button></p>

                <h4>3구장</h4>
                <p><button id="S30">00:00</button><button id="S31">01:00</button><button id="S32">02:00</button><button id="S33">03:00</button><button>04:00</button><button>05:00</button><button>06:00</button><button>07:00</button></p>
                <p><button>08:00</button><button>09:00</button><button>10:00</button><button>11:00</button><button>12:00</button><button>13:00</button><button>14:00</button><button>15:00</button></p>
                <p><button>16:00</button><button>17:00</button><button>18:00</button><button>19:00</button><button>20:00</button><button>21:00</button><button>22:00</button><button>23:00</button></p>

                <p>구장 예약 DB 정보</p>
                <script>
                    function reservationCheck(groundNum,time){
                        document.getElementById("S"+"groundNum"+"time").style.color = "red";
                    }
                    document.getElementById("S10").style.backgroundColor = "gray";
                //     document.write("<br>"+"S"+"<?=$row_reserve['ground_num'].$row_reserve['ground_reservation_time']?>");

                //     while(<? echo $row_reserve = mysqli_fetch_array($result_reserve)?>){
                //         if(<? echo $row_reserve['ground_reservation_stat'];?> == "1"){
                //             document.getElementById("S"+"<?=$row_reserve['ground_num'].$row_reserve['ground_reservation_time']?>").style.color = "red";
                //         }
                //    }
                </script>
            </div>
            <h4>구장 소개</h4>
            <p>
            <?=$row['ground_intro']?>
            </p>
            <div>
                <h4>이용후기</h4>
                <div>
                    <p>이재민</p>
                    <p>2012.12.1</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. In quas amet laudantium inventore, perspiciatis fuga nobis provident voluptates temporibus, quo, rem eveniet. Sunt ab, aliquid et impedit vitae blanditiis dolor? </p>
                </div>

                <div>
                    <h3>
                        <?php
                            var_dump($row_reserve);
                            echo "<br>";
                            var_dump($_POST);
                        ?>
                        <script>
                            document.write("<br>"+"S"+"<?=$row_reserve['ground_num'].$row_reserve['ground_reservation_time']?>");
                        </script>
                    </h3>
                </div>
            <div>
                <div Class="reservation">
                    <h2>예약하기</h2>
                    <div>
                        <form action="kickoff_reserve_01.php" method="POST">
                        <p>이용구장<p>
                        <p><select class="reseve_inputset" name="ground_num">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select></p>

                        <p>이용날짜<p>
                        <p><input type="date" class="reseve_inputset" name="reserve_date"></p>

                        <p>이용시간</p>
                        <p>
                            <select class="reseve_inputset" name="reserve_start">
                                <option value="0">00:00</option>
                                <option value="1">01:00</option>
                                <option value="2">02:00</option>
                                <option value="3">03:00</option>
                                <option value="4">04:00</option>
                            </select>
                             ~
                            <select class="reseve_inputset" name="reserve_end">
                                <option value="0">00:59</option>
                                <option value="1">01:59</option>
                                <option value="2">02:59</option>
                                <option value="3">03:59</option>
                                <option value="4">04:59</option>
                            </select>
                        </p>
                        <p><input type="submit" value="예약하기"> </p>
                        </form>
                    </div>
                </div>
            </div> 
        <div>
    </div>
</body>
</html>