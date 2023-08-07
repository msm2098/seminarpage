<?php

    $user_id = $_POST['userid'];
    $user_pw = $_POST['userpw'];
    include ('dbinfo.php');
    $query = "SELECT * FROM users WHERE user_id = '".$user_id."' and user_pw = '".$user_pw."';";

    $result = mysqli_query($con,$query);
    $row=mysqli_fetch_array($result);
    if($row!=null){
        session_start();
        $_SESSION['name'] = $row[1];//세션 유지
        $_SESSION['uid'] = $row[2];
        echo"<script>window.location.href='index.php'</script>";

    }else{
        echo" <script> alert('아이디 또는 비밀번호를 확인 해주세요.')</script>";
        echo"<script>window.location.href='login.php'</script>";
    }
    mysqli_close($con);

?>