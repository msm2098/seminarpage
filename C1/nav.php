<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand " href="index.php">Seminar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="list.php">게시판</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="todolist.php">ToDoList</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
            </ul><?php
            if (!isset($_SESSION['name'])){
                echo ('<form method="post" action="login.php">
                    <input type="submit" class="btn btn-outline-light m-2" value="로그인">
                </form>
                <form method="post" action="signup.php">
                    <input type="submit" class="btn btn-outline-light m-2" value="회원가입">
                </form>');
            }else{
                $name=$_SESSION['name'];
                echo('<ul class="navbar-nav flex-row flex-wrap ms-md-auto">
                <li class="nav-item dropdown">
                    <a role="button" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="true" data-bs-display="static">');
                echo "$name";
                echo('</a>
                            <ul class="dropdown-menu dropdown-menu-lg-end">
                                <li><a class="dropdown-item" href="mylist.php">내게시글</a></li>
                                <li><a class="dropdown-item" href="#">정보수정</a></li>
                                <li><a class="dropdown-item" href="logout.php">로그아웃</a></li>
                            </ul>
                        </li>
                    </ul>');
            }

            ?>
        </div>
    </div>
</nav>