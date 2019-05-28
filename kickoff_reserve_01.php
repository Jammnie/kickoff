<?php
    $conn = mysqli_connect('localhost','root','dlwoals12','kickoff');
    session_start();
    $user_id = $_SESSION['userid'];
    $userindex = (int)$_SESSION['userindex'];
    $login_stat = '';
    if($_SESSION['is_logged'] == 'YES'){
        $login_stat = '로그아웃';
    } else { 
       $login_stat = '로그인';
    }
    //int 형으로 형변환
    $_POST['ground_num']=(int)$_POST['ground_num'];
    $_POST['reserve_start'] = (int)$_POST['reserve_start'];
    $_POST['reserve_end'] = (int)$_POST['reserve_end'];
    // var_dump($_POST);
    // echo "<br><h2>".$userindex."<br>".$user_id."</h2>";    

    // 화면에 값을 출력하여 알아보기 위해
    $ground_num = $_POST['ground_num'];
    $reservation_date = $_POST['reserve_date'];
    $reservation_time = $_POST['reserve_start'];
    $reservation_end = $_POST['reserve_end'];
    // 예약상황이 중복되었는지 확인
    // DB에 같은 구장 같은 날짜 같은 시간에 예약이 되어있다면
    // 중복메시지를 출력, DB에 저장하지 않는다.
    $sql = "SELECT*FROM ground_index_reservations WHERE ground_reservation_date = $reservation_date";
    $reserved = mysqli_query($conn,$sql);
    $row_reserved_check = mysqli_fetch_array($reserved);
    while($row_reserved_check){
        if($row_reserved_check['ground_num'] = $ground_num ){
            for($i=$reservation_time;$i <= $reservation_end;$i++){
                if($i=$row_reserved_check['ground_reservation_time']){
                    echo "<script>goback();</script>";
                    break;
                }
            }
        }
    }
?> 
<script>
    function goback(){
        window.history.back();
    }
    </script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h2></h2>
        <h1>이용시 주의사항</h1>

        <?php
        echo "<p><a href='kickoff_groundIntro_01.php?groundid=1'>돌아가기</a></p>";
        ?>
        <form action="kickoff_reserve_02.php" method="POST">
            <input type="hidden" name="ground_num" value="<?=$ground_num?>">
            <input type="hidden" name="reserve_date" value="<?=$reservation_date?>">
            <input type="hidden" name="reserve_start" value="<?=$reservation_time?>">
            <input type="hidden" name="reserve_end" value="<?=$reservation_end?>">
            <input type="button" value="예약취소">
            <input type="submit" value="예약하기">
        </form>
    </div>
</body>
</html>