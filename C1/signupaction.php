<?php
    $user_name = $_POST['username'];
    $user_id=$_POST['userid'];
    $user_pw=$_POST['userpw'];
    include ('dbinfo.php');
    $query = "INSERT INTO users (name,user_id,user_pw) values ('$user_name','$user_id','$user_pw')";


    $id = mysqli_real_escape_string($con, $user_id);
    $checkquery = " SELECT * FROM users  WHERE user_id  = '$user_id' ";
    $ret = mysqli_query($con,$checkquery);

    $check = mysqli_num_rows($ret);
            if($check>0){
                echo"<script> alert ('이미 존재 하는 사용자 입니다.') </script>";
                echo"<script>window.location.href='signup.php'</script>";
                exit(0);
            }else{
                $result = mysqli_query($con,$query);
                if($result) {
                    echo"<script> alert ('회원가입성공') </script>";
                    echo "<script>window.location.href='index.php'</script>";
                    mysqli_close();
                }else{

                }
            }

?>
