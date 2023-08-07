<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="utf-8">
    <title>Seminar</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.bundle.js"></script>
</head>
<body>
<?php
session_start();
require_once ("nav.php");
?>
<section class = "vh-100">
    <div class="align-items-center h-100 bg-dark">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-50">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">
                            <h2 class="text-uppercase mb-5">글쓰기</h2>
                            <form method="post" action="writeaction.php" class="needs-validation" novalidate>
                                <div class="form-floating mb-4">
                                    <input type="text" name="title" id="Title"class="form-control form-control-lg" placeholder="제목" aria-describedby="checktitle" required >
                                    <label class="form-label" for="Title">제목</label>
                                    <div id = "checktitle" class="invalid-feedback">
                                        제목을 입력 해주세요.
                                    </div>
                                </div>
                                <div class="form-floating mb-4">
                                    <textarea type="text" style="height: 450px;" id="Content" name="content" class="form-control form-control-lg" placeholder="내용" aria-describedby="checkcontent" required></textarea>
                                    <label class="form-label" for="Content">내용</label>
                                    <div id = "checkcontent" class="invalid-feedback">
                                        내용을 입력 해주세요.
                                    </div>
                                </div>
                                <!---<div class="col-sm-1">
                                    <input type="password" id="password" name="pw" class="form-control form-control-sm" placeholder="비밀번호">
                                </div>--->
                                <div>
                                    <input class="btn btn-dark float-end" type="submit" value="작성">
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

</body>
<script>
    (() => {
        'use strict';

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation');

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated')
            }, false);
        });
    })();

</script>
</html>
