<?php
    session_start();
    $is_logged = $_SESSION['is_logged'];
    if($is_logged =='YES'){
        $user_id = $_SESSION['userid'];
        $message = $user_id.'님 로그인 했습니다.';
    } else {
        $message = '로그인이 실패했습니다.';
    }

    var_dump($_SESSION);
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
        echo $message;
    ?>
</body>
</html>