<?php
session_start();
$bno = $_GET['idx'];
$title = $_POST['title'];
$content = $_POST['content'];
$date = date('Y-m-d');
$con = mysqli_connect("localhost","root","opph@548263","seminar") or die("Cant access DB");
$query = "UPDATE board set title = '$title',content='$content',date='$date' where id='$bno';";
$result = mysqli_query($con,$query);
$str1=<<<EOT
<script>window.location.href='read.php?idx=
EOT;
$str2=<<<EOT2
'</script>
EOT2;


if($result) {
    echo "<script>alert('게시글이 수정 되었습니다.')</script>";
    echo ($str1.$bno.$str2);
}else {
    echo "<script>alert('작성 실패.')</script>";
    echo "<script>window.location.href='modify.php'</script>";

}


?>
