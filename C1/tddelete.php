<?php
include ('dbinfo.php');
session_start();
$tname = $_SESSION['uid']."todo";
$id = $_GET['idx'];
$query = "DELETE FROM $tname where id ='$id'; ";
$getcontent = "SELECT * FROM $tname WHERE id ='$id';";
$gtcontent = mysqli_query($tdcon,$getcontent);
$content_result = mysqli_fetch_array($gtcontent);
$content = $content_result['content'];



$result= mysqli_query($tdcon,$query);
echo "<script>alert('$content 삭제 완료. ')</script>";
echo "<script>window.location.href='todolist.php'</script>";
?>

