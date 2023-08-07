<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="utf-8">
    <title>게시판</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.bundle.js"></script>
</head>
<body>
<?php
session_start();
require_once ('nav.php');

include ('dbinfo.php');
$bno = $_GET['idx'];
$hitq = "SELECT * FROM board WHERE id ='$bno';";

$hit = mysqli_fetch_array(mysqli_query($con,$hitq));
$hit= $hit['hit'] +1 ;
$hitu = "UPDATE board SET hit = '$hit' WHERE id = '$bno';";
$fet = mysqli_query($con,$hitu);
$boardq = "SELECT * FROM board WHERE id='$bno';";
$board = mysqli_fetch_array(mysqli_query($con,$boardq));
?>
<section class="vh-100 bg-dark">
    <div class="align-items-center h-100 bg-dark">
        <div class="container">
                <div class="card">
                    <div class="card-body p-5">
                        <div>
                            <h2>제목 : <?php echo $board['title']; ?></h2>
                        </div>
                        <div id = user_info>
                          작성자 : <?php echo $board['user']," ";?>
                        </div>
                        <div>
                            <a>date : <?php echo $board['date']; ?></a>
                            <p class="float-end">조회수:<?php echo $board['hit']; ?></p>
                        </div>
                        <div>
                            <hr>
                        </div>
                        <div>
                            <?php echo nl2br($board['content']);?>
                        </div>
                    </div>
                </div>
            <div>
                &nbsp;
            </div>
            <?php
            if($board['user']==$_SESSION['uid']){
                $str1=<<<EOT
                <div class="btn-group float-end">
                <a class="btn btn-outline-light" href="list.php" >목록으로</a>
                <a class="btn btn-outline-light" href="modify.php?idx=
EOT;
                ?>
            <?php
            $str2=<<<EOT2
            ">수정</a>
                <a class="btn btn-outline-light" href="delete.php?idx=
EOT2;
            ?>
                <?php
                $str3=<<<EOT3
                ">삭제</a>   
            </div>
EOT3;
                echo ($str1.$board['id'].$str2.$board['id'].$str3);
            }else {
                echo ('<div class="btn-group float-end">
                <a class="btn btn-outline-light" href="list.php" >목록으로</a>');
            }
            ?>
            </div>
        </div>
</section>
</body>
</html>