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

    // $sql = "SELECT*FROM ground_index_reservations WHERE reservation_index = 1";
    // $result = mysqli_query($conn, $sql);
    // $row = mysqli_fetch_array($result);

    // var_dump($row);
    $_POST['ground_num']=(int)$_POST['ground_num'];
    $_POST['reserve_start'] = (int)$_POST['reserve_start'];
    $_POST['reserve_end'] = (int)$_POST['reserve_end'];
    var_dump($_POST);
    echo "<br><h2>".$userindex."<br>".$user_id."</h2>";

    $ground_num = $_POST['ground_num'];
    $reservation_date = $_POST['reserve_date'];
    $reservation_time = $_POST['reserve_start'];
    $reservation_end = $_POST['reserve_end'];
    echo "<br><h2>".$ground_num."<br>".
    $reservation_time."<br>".
    $reservation_end."<br></h2>";

    while($reservation_time <= $reservation_end){
        $sql = "INSERT INTO ground_index_reservations(ground_num, ground_reservation_date, ground_reservation_time, ground_reservation_stat, ground_reservation_user_index, ground_reservation_created) VALUES($ground_num, '$reservation_date', $reservation_time, 1, $userindex, now())";
        // $sql = "INSERT INTO ground_index_reservations (ground_num, ground_reservation_date, ground_reservation_time, ground_reservation_stat, ground_reservation_user_index, ground_reservation_created)
        // VALUES ($ground_num_1, $reservation_date, $rese, 1, $userindex, NOW())";
        $result = mysqli_query($conn, $sql);

        $reservation_time++;
    }

    

    echo "<p><a href='kickoff_groundIntro_01.php?groundid=1'>돌아가기</a></p>";
    
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>