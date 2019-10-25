
<?php 
    session_start();
    $NameOfUser = $_SESSION[username];
?>

<!doctype html>
<html lang="en">

<head>
    <title>Trang quản trị - Trường đại học Nguyễn Tất Thành</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">


                        <a class="navbar-brand" href="#">
                            <img src="imgs/logo_ntt.png" alt="">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Trang chủ <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Giới thiệu</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="seeall.php">Bài viết</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Liên hệ - góp ý</a>
                                </li>
                            </ul>
                            <form class="form-inline">
                                <input class="form-control mr-sm-2" type="text" />
                                <button class="btn btn-primary my-2 my-sm-0" type="submit">
                                    Tìm kiếm
                                </button>
                            </form>
                        </div>

                    </nav>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-md-3 method-left">
                    <div class="hello">Xin chào</div>
                    <div class="info">
                        <div class="avatar">
                        </div>
                        <span class="username">
                            <?php 
                                echo $NameOfUser;
                            ?>
                        </span>
                        <a href="#">đăng xuất</a>
                    </div>
                    <div class="btn-group-vertical">
                        <button type="button" class="btn btnAdd">Thêm bài viết</button>
                        <button type="button" class="btn btnUpdate">Sửa bài viết</button>
                        <button type="button" class="btn btnDelete">Xóa bài viết</button>
                    </div>
                </div>
                <div class="col-xs-12 col-md-9 content-right">
                    <div class="titlePage">
                        <!-- this is content via js -->
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="addPost"> 
                                <!-- form add post -->
                                <form role="form" method="post" id="addForm" action="addPost.php">
                                    <div class="form-group">
                                        <label for="exampleInputCode">
                                            Mã bài viết
                                        </label>
                                        <input type="text" class="form-control" id="addCode" name="addCode" />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputTitle">
                                            Tiêu đề
                                        </label>
                                        <input type="text" class="form-control" id="addTitle" name="addTitle"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputDate">
                                            Ngày viết - định dạng (yyyy/mm/dd)
                                        </label>
                                        <input type="text" class="form-control" id="addDate" name="addDate" />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputContent">
                                            Nội dung
                                        </label>
                                        <textarea class="form-control" rows="7" id="addContent" name="addContent"></textarea>
                                    </div>
                                    <div class="form-group">

                                        <label for="exampleInputFile">
                                            Thêm ảnh
                                        </label>
                                        <input type="file" class="form-control-file" id="addFile" />
                                        <p class="help-block">
                                            <!-- input info help in here -->

                                        </p>
                                    </div>
                                    <button type="submit" class="btn btn-primary submit-add">
                                        Thêm bài viết
                                    </button>
                                </form>
                            </div>
                            <div class="updatePost">
                                <!-- form update post -->
                                <form role="form" method="post" id="updateForm" action="updatePost.php">
                                    <div class="form-group">
                                        <label for="exampleInputCode">
                                            Mã bài viết cần sửa
                                        </label>
                                        <input type="text" class="form-control" id="upCode" name="upCode" />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputTitle">
                                            Tiêu đề
                                        </label>
                                        <input type="text" class="form-control" id="upTitle" name="upTitle" />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputDate">
                                            Ngày viết - định dạng (mm/dd/yyyy)
                                        </label>
                                        <input type="text" class="form-control" id="upDate" name="upDate" />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputContent">
                                            Nội dung
                                        </label>
                                        <textarea class="form-control" rows="7" id="upContent" name="upContent"></textarea>
                                    </div>
                                    <div class="form-group">

                                        <label for="exampleInputFile">
                                            Thêm ảnh
                                        </label>
                                        <input type="file" class="form-control-file" id="upFile" />
                                        <p class="help-block">
                                            <!-- input info help in here -->

                                        </p>
                                    </div>
                                    <button type="submit" class="btn btn-primary submit-update">
                                        Sửa bài viết
                                    </button>
                                </form>
                            </div>
                            <div class="updatePost">
                                <!-- form delete post -->
                                <form role="form" method="get" id="deleteForm" action="delPost.php">
                                    <div class="form-group">
                                        <label for="exampleInputCode">
                                            Mã bài viết cần xóa
                                        </label>
                                        <input type="text" class="form-control" id="delCode" name="delete" />
                                    </div>
                                    <button type="submit" class="btn btn-primary submit-del">
                                        Xóa bài viết
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <script src="js/direc.js"></script>
</body>

</html>
