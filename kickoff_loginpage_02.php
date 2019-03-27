<?php
    $conn = mysqli_connect('localhost','root','dlwoals12','kickoff');
    $sql = "SELECT * FROM user_infomations";
    $result = mysqli_query($conn, $sql);
    
    $status = "";
    while($row = mysqli_fetch_array($result)) {
        if($_POST['userID'] == $row['userid']){
            if($_POST['userPW'] == $row['userpw']){
                $status = $row['userid']."님 로그인되었습니다.";
                $_SESSION['is_logged'] = 'YES';
                $_SESSION['userid'] = $row['userid'];
                header('Location:kickoff_loginpage_03.php');
                break;
            } else {
                $status = $row['userid']."님 비밀번호를 확인해주세요.";
                $_SESSION['is_logged'] = 'NO';
                $_SESSION['userid'] = '';
                header('Location:kickoff_loginpage_03.php');
                break;
            }
        }
            $status = "아이디를 확인해주세요.";
    }
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
    <?php
    echo $status;
    ?>
</body>
</html>