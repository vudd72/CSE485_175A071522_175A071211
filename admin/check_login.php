<?php 
	if (isset($_POST['input_log_Email']) and isset($_POST['input_log_Pass'])) {
		$email = $_POST['input_log_Email'];
		$pass = $_POST['input_log_Pass'];	

		$conn = mysqli_connect('localhost','root','','dbposts');
		mysqli_set_charset($conn, 'UTF8');
		if (!$conn) {
			die("ERROR".mysqli_connect_error());
		}else{
			$sql = "select * from users where email='".$email."'";
			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result)>0){
				$row = mysqli_fetch_assoc($result);
				if (password_verify($pass, $row['pass'])) {
					session_start();
					$_SESSION['iduser'] = $row['iduser'];
					$_SESSION['username'] = $row['username'];
					// header("Location: http://vudd72.000webhostapp.com/admin/home.php");
					header("Location: https://localhost/175A071522_175A071211/admin/home.php");
					// exit();

				}
				else{
					header("Location: https://localhost/175A071522_175A071211/admin/index.php");
				}
			}
		}
	}
	
 ?>