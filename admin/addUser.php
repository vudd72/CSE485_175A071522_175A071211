<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 

    if(isset($_POST['input_cre_Email']) and isset($_POST['input_cre_Name']) and isset($_POST['input_cre_Pass'])){
        $email = $_POST['input_cre_Email'];
        $name = $_POST['input_cre_Name'];
        $pass = $_POST['input_cre_Pass'];

        $conn = mysqli_connect('localhost','root','','dbposts');
        if(!$conn){
            die('ERROR'.mysqli_connect_error());
            echo 'Lỗi';
        }
        else{
            $passhash = password_hash($pass, PASSWORD_DEFAULT, ['cost' => 12]);
            echo $email;
            echo $name;
            echo $passhash;
            $sql = "insert into users values (null,'".$email."','".$passhash."', N'".$name."', 2)";
            $result = mysqli_query($conn, $sql);
            if($result == 0){
				echo 'Đăng ký thất bại, vui lòng đăng lý lại !';
                
            }
            else{
                echo 'Đăng ký tài khoản người dùng thành công !';
                echo '<a href="index.php">Quay lại trang đăng nhập</a>';
            }
        }
        mysqli_close($conn);
    }
?>
</body>
</html>

    