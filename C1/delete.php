<?php
include ('dbinfo.php');
$bno = $_GET['idx'];
$sql = mysqli_query($con,"delete from board where id='$bno';");
?>
<script type="text/javascript">alert("게시글이 삭제되었습니다.");</script>
<script>window.location.href='list.php'</script>";
