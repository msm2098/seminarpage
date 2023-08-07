<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="utf-8">
    <title>회원가입</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
</head>
<body>
<?php
require_once ("nav.php");
?>
<section class = "vh-100">
    <div class="mask d-flex align-items-center h-100 bg-dark">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-50">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">
                            <h2 class="text-uppercase text-center mb-5">회원가입</h2>

                            <form method="post" action="signupaction.php" class="needs-validation" novalidate>
                                <div class="form-floating mb-4">
                                    <input type="text" name="username" id="user_name" class="form-control form-control-lg" placeholder="이름" aria-describedby="checkname" required >
                                    <label class="form-label" for="user_name">이름</label>
                                    <div id = "checkname" class="invalid-feedback">
                                        이름을 입력 해주세요.
                                    </div>
                                </div>
                                <div class="form-floating mb-4">
                                    <input type="text" name="userid" id="user_id" class="form-control form-control-lg" placeholder="ID" aria-describedby="checkid" required>
                                    <label class="form-label" for="user_id">아이디</label>
                                    <div id = "checkid" class="invalid-feedback">
                                        아이디을 입력 해주세요.
                                    </div>
                                </div>
                                <div class="form-floating mb-4">
                                    <input type="password" id="user_pw" class="form-control form-control-lg" placeholder="PW" aria-describedby="checkpw" required>
                                    <label class="form-label" for="user_id">비밀번호</label>
                                    <div id = "checkpw" class="invalid-feedback">
                                        비밀번호를 입력 해주세요.
                                    </div>
                                </div>
                                <div class="form-floating mb-4">
                                    <input type="password" name="userpw" id="user_pw_check" class="form-control form-control-lg" placeholder="Repeat your PW" aria-describedby="checkpwpw" required >
                                    <label class="form-label" for="user_id">비밀번호 확인</label>
                                    <div id = "checkpwpw" class="invalid-feedback">
                                        비밀번호를 다시 입력 해주세요.
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <input type="submit" class="btn btn-dark  btn-lg gradient-custom-4" value="회원가입">
                                </div>

                            </form>
                        </div>
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

                // 비밀번호 필드와 확인 필드의 값을 가져옴
                const password = form.querySelector('#user_pw').value;
                const confirmPassword = form.querySelector('#user_pw_check').value;
                const confirmPasswordField = form.querySelector('#user_pw_check');

                // 비밀번호 일치 여부 확인
                if (password !== confirmPassword) {
                    // 일치하지 않으면 유효성 검사 실패
                    event.preventDefault();
                    event.stopPropagation();

                    // 비밀번호 불일치 메시지 변경
                    confirmPasswordField.setCustomValidity('비밀번호가 일치하지 않습니다.');

                    // 비밀번호 확인 필드에 에러 스타일 추가
                    confirmPasswordField.classList.add('is-invalid');
                } else {
                    // 일치하면 유효성 검사 성공
                    confirmPasswordField.setCustomValidity('');

                    // 비밀번호 확인 필드에서 에러 스타일 제거
                    confirmPasswordField.classList.remove('is-invalid');
                    confirmPasswordField.classList.add('is-valid');
                }

                form.classList.add('was-validated');
            }, false);
        });
    })();

</script>
</html>