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
    <!-- My Style -->
    <link rel="stylesheet" href="css/seeall.css">
</head>

<body>
     <?php require_once 'delPost.php' ?>
    <div class="title" style="text-align: center; margin: 30px 0px; display: flex;">
        <a href="home.php" style="width: 10%; font-size: 12px;">Quay lại trang chủ</a>
        <h1 class="text-info" style="width: 92%;">Hiển thị tất cả các bài viết</h1>
    </div>
    <div class="container-fluid listPost">
        <div class="row">
            <?php
            $conn = mysqli_connect('localhost','root','','dbposts');
            mysqli_set_charset($conn, 'UTF8');
            if(!$conn){
                die('Have a error'.mysqli_connect_error());
            }else{
                $query = 'select idpost, datepost, username, title, content
                    from posts, users
                    where posts.iduser=users.iduser';
            ?>
            <table class="table .table-responsive">
                <thead>
                    <th>Mã bài viết</th>
                    <th>Ngày viết</th>
                    <th>Người viết</th>
                    <th>Tiêu đề</th>
                    <th>Nội dung bài viết</th>
                    <th></th>
                </thead>
                <tbody>
                <?php
                $result = mysqli_query($conn, $query);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td>
                            <?php echo $row['idpost']; ?>
                        </td>
                        <td>
                            <?php echo $row['datepost']; ?>
                        </td>
                        <td>
                            <?php echo $row['username']; ?>
                        </td>
                        <td>
                            <?php echo $row['title']; ?>
                        </td>
                        <td>
                            <!-- <?php //echo $row['content']; ?> -->
                            <?php 
								$str_bv = $row['content']; 
								echo mb_substr($str_bv, 0, 50, "utf-8")."...";
							?>
                        </td>
                        <td>
                            <a href="seeall.php?delete=<?php echo $row['idpost']; ?>" class="btn btn-danger btn-del">Delete</a>
                        </td>
                    </tr>
                    <?php
                    }
                }
            }
            mysqli_close($conn);
                ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- <script>
        $('.btn-del').click(function(){

        });
    </script> -->
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
</body>

</html>