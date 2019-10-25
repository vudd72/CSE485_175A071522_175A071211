<!doctype html>
<html lang="en">

<head>
    <title>Đăng nhập</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- my style -->
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div class="container-fluid front-login">
        <div class="row row-intro">
            <div class="col-md-12 intro">
                <img src="imgs/logo_ntt.png" alt="">
                <p class="announce">Nếu bạn chưa có tài khoản, đăng ký tại đây.</p>
            </div>
        </div>
        <div class="row row-form">
            <div class="col-md-12 login">
                <h3>ĐĂNG NHẬP TRANG QUẢN TRỊ</h3>
                <form role="form" method="POST" id="loginForm" action="check_login.php">
                    <div class="form-group">
                        <label for="inputEmail">Email : </label>
                        <input type="text" class="form-control" id="input_log_Email" name="input_log_Email" />
                    </div>
                    <div class="form-group">
                        <label for="inputPass">Mật khẩu : </label>
                        <input type="password" class="form-control" id="input_log_Pass" name="input_log_Pass" />
                    </div>
                    <button type="submit" class="btn btn-success submit-login">
                        ĐĂNG NHẬP
                    </button>
                    <div class="link">
                        <a href="" id="forgotPass">quên mật khẩu</a>
                    </div>
                </form>
            </div>
            <div class="col-md-12 create">
                <h3>ĐĂNG KÝ TÀI KHOẢN NGƯỜI DÙNG</h3>
                <form role="form" method="POST" id="loginForm" action="addUser.php">
                    <div class="form-group">
                        <label for="inputEmail">Email : </label>
                        <input type="text" class="form-control" id="input_cre_Email" name="input_cre_Email" />
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Họ và tên : </label>
                        <input type="text" class="form-control" id="input_cre_Name" name="input_cre_Name" />
                    </div>
                    <div class="form-group">
                        <label for="inputPass">Mật khẩu : </label>
                        <input type="password" class="form-control" id="input_cre_Pass" name="input_cre_Pass" />
                    </div>
                    <button type="submit" class="btn btn-success submit-create-acc">
                        ĐĂNG KÝ TÀI KHOẢN
                    </button>
                    <div class="link">
                        <a href="" id="returnLogin">quay lại trang đăng nhập</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
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
    <script src="js/login.js"></script>
</body>

</html>