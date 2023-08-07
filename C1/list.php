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
    require_once ("nav.php");
?>

<section class="vh-100 bg-dark">
    <div class="container">
    <table class="table table-hover table-striped  table-dark ">
        <thead>
            <tr>
                <th scope="col">작성자</th>
                <th class="text-center" scope="col">제목</th>
                <th class="text-end" scope="col">작성일</th>
                <th class="text-end" scope="col">조회수</th>
            </tr>
        </thead>

        <?php
        include ('dbinfo.php');
        $query = "SELECT * FROM board ORDER BY id DESC limit 0,10";
        $result = mysqli_query($con,$query);
        while($board = mysqli_fetch_array($result)){
            $title = $board['title'];
            if(strlen($title)>30){
                $title=str_replace($board["title"],mb_substr($board["title"],0,30,"utf-8")."...",$board["title"]);
            }
        ?>
        <tbody>
        <tr>
            <td><?php echo $board['user']; ?></td>
            <td class="text-center"><a href="read.php?idx=<?php echo $board["id"];?>"> <?php echo $board['title']; ?> </a></td>
            <td class="text-end"><?php echo $board['date']; ?></td>
            <td class="text-end"><?php echo $board['hit']; ?></td>
        </tr>
        </tbody>
        <?php } ?>
    </table>
        <div>
            <form method="post" action="write.php">
                <input class="btn btn-outline-light float-end" type="submit" value="글쓰기">
            </form>
        </div>
    </div>
</section>
<?php require_once("footer.php");?>
</body>
</html>