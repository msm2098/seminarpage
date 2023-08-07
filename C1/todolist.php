<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="utf-8">
    <title>ToDoList</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script type="text/javascript" src="../js/bootstrap.bundle.js"></script>
</head>
<body class="bg-dark">
<?php
session_start();
require("nav.php");
include ('dbinfo.php');
$tname = $_SESSION['uid']."todo";
$tdinit = "CREATE TABLE if NOT EXISTS $tname (id INT NOT NULL AUTO_INCREMENT,content varchar(100),complete BOOL,PRIMARY KEY(id));";
$tdprint = "SELECT * FROM $tname ORDER BY id DESC limit 0,10;";
mysqli_query($tdcon,$tdinit);
if($_SESSION['name']){
    echo $tname;

}else{
    echo "<script> alert('로그인후 이용 해주세요.')</script>";
    echo "<script> window.location.href=('login.php')</script>";
}

if(isset($_POST['content'])){
    $content = $_POST['content'];
    $query = "INSERT INTO $tname (content,complete) VALUES ('$content',0); ";
   $result= mysqli_query($tdcon,$query);
}



?>
<p id="test"></p>
<section class="vh-100 d-flex align-items-center bg-dark">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-9 col-xl-7">
                <div class="card rounded-3">
                    <div class="card-body p-4">
                        <h4 class="card-header text-center my-3 pb-3">투두리스트</h4>
                        <form class="rd-flex justify-content-center align-items-center mb-4" method = 'post' action="<?php echo $_SERVER['PHP_SELF'];?>">
                            <div class="d-flex flex-row align-items-center">
                                <div class="input-group input-group-lg">
                                    <input class="form-control"  name="content" placeholder="오늘의 할일을 적어보세요!"/>
                                    <button type='submit' class="btn btn-dark"">입력</button>
                                </div>
                            </div>
                        </form>
                        <table class="table table-sm table table-striped" >
                            <thead class="table-light">
                            <tr>

                                <th class="text-center" scope="col">할 일</th>
                                <th class="text-center" scope="col">수행 여부</th>
                                <th class="text-center" scope="col">수정하기</th>
                            </tr>
                            </thead>
                            <?php
                                $result = mysqli_query($tdcon,$tdprint);
                                while($list = mysqli_fetch_array($result)) {
                                    $complete = null;
                                    if($list['complete']==0){
                                        $complete = "<div class='badge bg-danger text-wrap fs-5 rounded-pill'>진행중</div>";
                                    }else{
                                        $complete = "<div class='badge bg-success text-wrap fs-5 rounded-pill'>진행완료</div>";
                                    }
                            ?>
                            <tbody>
                                <tr>

                                    <td class="text-center "><div class="badge bg-light text-black text-wrap fs-5 border border-dark" ><?php echo $list['content'];?></div></td>
                                    <td class="text-center "><?php echo $complete?></td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                                            <a class="btn btn-danger" id = "delete-btn" href="tddelete.php?idx=<?php echo $list['id'];?>">삭제</a>
                                            <a   class="btn btn-success" id = "finishBtn" href="tdcomplete.php?idx=<?php echo $list['id'];?>" >완료</a>
                                    </td>
                                </tr>
                            </tbody>
                            <?php } ?>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
require_once("footer.php");
?>

</body>
</html>
