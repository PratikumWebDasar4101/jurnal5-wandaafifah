<?php
$komen = $_POST["komen"];

if (strlen($komen)<5) {
	echo "komentar >5!";
	echo "<br><a href='komentar.php'>RE-Comment</a>";

}else{
	echo $komen . "<br><br>";
	echo "panjang komentar : ". strlen($komen);
}
?>