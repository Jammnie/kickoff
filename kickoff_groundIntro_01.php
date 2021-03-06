<?php
session_start();

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
?>

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
                <?php
                    if($_POST['reserve_date']){
                        $searchReseveDate = $_POST['reserve_date'];

                    } else {
                        $searchReseveDate = date("Y-m-d");
                    }
                ?>
                <form action="kickoff_groundIntro_01.php?groundid=<?=$num?>" method="POST">
                    <input type="date" name="reserve_date" id="reservated_date" value="<?=$searchReseveDate?>">
                    <input type="submit">
                </form>
                <script>
                    //document.getElementById('reservated_date').value = new Date().toISOString().slice(0, 10);
                    //var reserved_date1 = document.getElementById('reservated_date').value;
                </script>
                
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
                        document.getElementById("S"+groundNum+time).style.color = "red";
                    }
                </script>
                <?php
                //예약정보를 알아오는 부분
                // 날짜를 받아온 로우들 중에서
                if($_POST['reserve_date']){
                    $reserve_data = $_POST['reserve_date'];
                    $sql_reserve = "SELECT*FROM ground_index_reservations WHERE ground_reservation_date = '$reserve_data'";
                    $result_reserve = mysqli_query($conn, $sql_reserve);
                    $day_reserve_ground = array();
                    $day_reserve_time = array();
                    while($row_reserve = mysqli_fetch_array($result_reserve)) {
                        if($row_reserve['ground_reservation_stat'] == "1"){
                            $reserveGroundNum = $row_reserve['ground_num'];
                            $reserveTime = $row_reserve['ground_reservation_time'];
                            echo ("<script type='text/javascript'> reservationCheck(".$reserveGroundNum.",".$reserveTime.")</script>");
                        }
                    }
                } else {
                    $reserve_data = $searchReseveDate;
                    $sql_reserve = "SELECT*FROM ground_index_reservations WHERE ground_reservation_date = '$reserve_data'";
                    $result_reserve = mysqli_query($conn, $sql_reserve);
                    $day_reserve_ground = array();
                    $day_reserve_time = array();
                    while($row_reserve = mysqli_fetch_array($result_reserve)) {
                        if($row_reserve['ground_reservation_stat'] == "1"){
                            $reserveGroundNum = $row_reserve['ground_num'];
                            $reserveTime = $row_reserve['ground_reservation_time'];
                            echo ("<script type='text/javascript'> reservationCheck(".$reserveGroundNum.",".$reserveTime.")</script>");
                        }
                    }
                }
                ?>
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
                            echo "<br>";
                            var_dump($_POST);
                            while($row_reserve = mysqli_fetch_array($result_reserve)) {
                                var_dump($row_reserve);
                            }
                            echo ($reserveTime);
                            echo ($reserveGroundNum);
                        ?>
                        <script>
                            document.write("<br>"+"S"+"<?=$row_reserve['ground_num'].$row_reserve['ground_reservation_time']?>");
                        </script>
                    </h3>
                </div>
            <div>
                <div class="reservation">
                    <h2>예약하기</h2>
                    <div>
                        <form action="kickoff_reserve_01.php" method="POST">
                        <script>
                            function reseve_activate() {
                                document.getElementById("reserve_start").disabled = false;
                                document.getElementById("reserve_end").disabled = false;

                            }
                        </script>

                        <p>이용날짜<p>
                        <p><input type="date" class="reseve_inputset" name="reserve_date" id="reserve_date" value="<?=$searchReseveDate?>"></p>

                        <p>이용구장<p>
                        <p><select class="reseve_inputset" name="ground_num" id="ground_num" onchange="reseve_activate()">
                            <option value="null" selected>구장 번호 선택</option>
                            <?php
                                $sql_groundNum = "SELECT*FROM ground_infomations WHERE ground_index = $num";
                                $result_groundNum = mysqli_query($conn, $sql_groundNum);
                                $groundNumCount = mysqli_fetch_array($result_groundNum);
                                //$groundNumCount = mysql
                                for($i=1;$i<=$groundNumCount['ground_groundNum'];$i++){
                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                }
                            ?>
                        </select></p>

                        <p>이용시간</p>
                        <p>
                            <select class="reseve_inputset" name="reserve_start" id="reserve_start" disabled="true">
                                <?php
                                // 0시에서 23시까지 시간을 표시해서 option으로 출력해준다.
                                $reserve_time_option = '';
                                for($i=0;$i<24;$i++){
                                    $time = $i.':00';
                                    $reserve_time_option = '<option value="'.$i.'" id="reserveTime_'.$i.'">'.$time.'</option>';
                                    echo "$reserve_time_option";
                                }
                                // 예약상황을 DB에서 읽어온다. 예약이 된 시간은 Disable처리한다.

                                $sql_groundTime_disabled = "SELECT*FROM ground_index_reservations WHERE ground_reservation_date = '$reservation_date'";
                                $sql_groundTime_disabled_query = mysqli_query($conn, $sql_groundTime_disabled);
                                while($sql_groundTime_disabled_result = mysqli_fetch_array($sql_groundTime_disabled_query)){
                                   $groundNumCheck = $sql_groundTime_disabled_result['ground_num'];
                                   $groundTimeCheck = $sql_groundTime_disabled_result['ground_reservation_time'];
                                   echo "<script type='text/javascript'> groundReserveTime_disabled(".$groundNumCheck.",".$groundTimeCheck.")</script>";
                                }
                                ?>
                                
                                <script>
                                    function groundReserveTime_disabled(groundNum, reserveTime){
                                        groundNum_Check = document.getElementById(ground_num).value;
                                        if(groundNum = groundNum_Check){
                                            document.getElementById("reserveTime_"+reserveTime).disabled = true;
                                            document.getElementById("reserveTime_"+reserveTime).color = red;
                                        }
                                    }
                                </script>
                            </select>
                             ~
                            <select class="reseve_inputset" name="reserve_end" id="reserve_end" disabled="true">
                                <?php
                                $reserve_time_option = '';
                                for($i=0;$i<24;$i++){
                                    $time = $i.':59';
                                    $reserve_time_option = '<option value="'.$i.'">'.$time.'</option>';
                                    echo "$reserve_time_option";
                                }
                                ?>
                            </select>
                        </p>
                        <p><select>
                            <option>1</option>
                            <option disabled>2</option>
                        </select></p>
                        <p><input type="submit" value="예약"> </p>
                        </form>
                        <!-- 인풋했을때 중복 체크 -->
                    </div>
                </div>
            </div> 
        <div>
    </div>
</body>
</html>