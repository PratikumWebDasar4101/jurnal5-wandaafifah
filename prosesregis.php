<?php
	$nim =$_POST['nim'];
	$nama =$_POST['nama'];
	$email =$_POST['email'];
	$reinput = "<br><a href='registrasi.php'> RE-INPUT</a>";
	$enter = "<br>";
	if(strlen($nama) > 10){
		echo"maksimal 25 karakter";
		echo $reinput;
		echo $enter;
	}
	if(!is_numeric($nim) || strlen((string)$nim) > 10){
		echo "nim harus berjumlah 10 karakter";
		echo $reinput;
		echo $enter;
	}
	if(!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9]+\.[a-zA-Z.]{2,5}$/",$email)){
		echo "format salah";
		echo $reinput;
		echo $enter;
	}else{
		header("Location: komentar.php");
	}
?>
