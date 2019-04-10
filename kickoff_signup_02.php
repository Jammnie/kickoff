<?php
    $conn = mysqli_connect("localhost","root","dlwoals12","kickoff");
    $userid = $_POST['userid'];
    $userpw = $_POST['userpw'];
    
    //echo ''.$_POST['userid'].'아이디'.$_POST['userpw'].'비밀번호'.$userpw.'123'.$_POST['userpw'];
    if($_post['userpw'] == $_post['userpw_confirm']){
        $sql = "INSERT INTO ground_user_infomations(userid, userpw, created) VALUES('{$_POST['userid']}','{$_POST['userpw']}', NOW())";
        $result = mysqli_query($conn, $sql);
        if($result === false){
            echo mysqli_error($conn);
        } else {
            echo $userid.'님 회원가입이 되었습니다';
        }
    } else {
        echo '비밀번호를 확인해주세요.';
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
    
</body>
</html>