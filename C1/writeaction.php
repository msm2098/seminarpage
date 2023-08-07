<?php
    session_start();
    $name = $_SESSION['name'];
    if(!isset($_SESSION['name'])){
        echo"<script>alert('로그인후 이용 해주세요.')</script>";
        echo"<script>window.location.href='login.php'</script>";
    }else{
        $title = $_POST['title'];
        $content = $_POST['content'];
        $date = date('Y-m-d');
        $uid= $_SESSION['uid'];
        $query = "INSERT INTO board (title,user,content,date) values ('$title','$uid','$content','$date')";
        include ('dbinfo.php');
        $result = mysqli_query($con,$query);
        if($result) {
            echo "<script>alert('작성 성공.')</script>";
            echo "<script>window.location.href='list.php'</script>";
        }else {
            echo "<script>alert('작성 실패.')</script>";
            echo "<script>window.location.href='write.php'</script>";

        }
    }
?>