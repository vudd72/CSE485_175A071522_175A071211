<?php
	session_start();

    // echo $_SESSION['iduser'];
    // echo $_POST['addContent'];

    if(isset($_POST['addCode']) and
    isset($_SESSION['iduser']) and 
    isset($_POST['addTitle']) and
    isset($_POST['addDate']) and
    isset($_POST['addContent']) ){
    	$code = $_POST['addCode'];
    	$iduser = $_SESSION['iduser'];
    	$title = $_POST['addTitle'];
    	$date = $_POST['addDate'];
    	$content = $_POST['addContent'];
    	$conn = mysqli_connect('localhost','root','','dbposts');
    	if(!$conn){
    		die("ERROR".mysqli_connect_error());
    	}else{
    		$sql = "insert into posts values ('".$code."','".$iduser."','".$date."', N'".$title."', N'".$content."')";
    		$result = mysqli_query($conn, $sql);

            if ($result == 0) { 
                echo 'Thêm bài viết thất bại, vui lòng thử lại';
            }
            else {
                echo 'Thêm bài viết thành công';
            }
    	}
    	mysqli_close($conn);
    }
?>