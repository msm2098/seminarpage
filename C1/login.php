<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>로그인</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
</head>

<body>
<?php
require_once ("nav.php");
?>
<section class="vh-100 d-flex align-items-center bg-dark">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-50">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="card border-0">
                    <div class="card-body p-5">
                        <h2 class="text-uppercase text-center mb-5">로그인</h2>

                        <form method="post" action="loginaction.php" class="needs-validation" novalidate>
                            <div class="form-floating mb-4">
                                <input type="text" name="userid" id="user_id" class="form-control form-control-lg" placeholder="ID" aria-describedby="checkid" required>
                                <label class="form-label" for="user_id">아이디</label>
                                <div id="checkid" class="invalid-feedback">
                                    아이디을 입력 해주세요.
                                </div>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" name = "userpw" id="user_pw" class="form-control form-control-lg" placeholder="PW" aria-describedby="checkpw" required>
                                <label class="form-label" for="user_id">비밀번호</label>
                                <div id="checkpw" class="invalid-feedback">
                                    비밀번호를 입력 해주세요.
                                </div>
                            </div>

                            <div class="d-flex justify-content-center">
                                <input type="submit" class="btn btn-dark btn-lg" value="로그인">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
require_once ("footer.php");
?>
<style>
    .card {
        max-width: 400px;
        margin: 0 auto; /* 추가된 부분 */
    }

    .card-body {
        padding: 2rem;
    }
</style>
</body>

</html>
