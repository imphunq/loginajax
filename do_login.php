<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "banhang";
	$conn= mysqli_connect($servername,$username,$password,$dbname) or die('Ket noi deo thanh cong');
	mysqli_set_charset($conn,"utf8");
	// die(md5($_POST['password']));
	// die(md5(1));
	if(isset($_POST['name'])&&isset($_POST['password']))
	{
		$username = $_POST['name'];
		$password = md5($_POST['password']);
		// die($password);
		$sql = "SELECT * FROM user WHERE username='$username' AND password = '$password'";
		$query = mysqli_query($conn,$sql);
		$row = mysqli_num_rows($query);

		if($row>0)
		{
			$array = array('success'=>1,'messages'=>"Dang nhap thanh cmn cong");
		}
		else{
			$array = array('success'=>0,'messages'=>"Dang nhap that cmn bai");
		}
		echo json_encode($array);
		
	}
?>