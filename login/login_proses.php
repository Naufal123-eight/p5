<?php 
include "../config/koneksi.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

$CHECK=mysqli_query($koneksi,"SELECT * FROM admin WHERE username = '$username' AND password = '$password'");
$CHECK2=mysqli_query($koneksi,"SELECT * FROM petugas WHERE username = '$username' AND password = '$password'");
$CHECK3=mysqli_query($koneksi,"SELECT * FROM petugas_pendataan WHERE username = '$username' AND password = '$password'");

if(mysqli_num_rows($CHECK)==1){
	while ($row = mysqli_fetch_array($CHECK)){
	session_start();
	$_SESSION['username'] 	= $row['username'];
	$_SESSION['nama'] 		= $row['nama'];
	$_SESSION['level'] 		=  "Admin";
    $_SESSION['login']      = true;

?>

<script>alert("Selamat datang <?= $row['nama']; ?> Di Aplikasi Pendataan Kesehatan P5");
window.location.href="../index.php"</script>
<?php	
	}
}
elseif (mysqli_num_rows($CHECK2)==1) {
	while ($row = mysqli_fetch_assoc($CHECK2)) {
		session_start();
		$_SESSION['username'] = $row['username'];
		$_SESSION['nama']	  = $row['nama'];
		$_SESSION['level']	  = "Petugas Registrasi";
		$_SESSION['login']	  = true;
	
?>
<script>alert("Selamat datang <?= $row['nama']; ?> Di Aplikasi Pendataan Kesehatan P5");
window.location.href="../index.php"</script>
<?php 
	}
}elseif (mysqli_num_rows($CHECK3)==1) {
	while ($row = mysqli_fetch_assoc($CHECK3)) {
		session_start();
		$_SESSION['username'] = $row['username'];
		$_SESSION['nama']	  = $row['nama'];
		$_SESSION['level']	  = "Petugas Pendataan";
		$_SESSION['login']	  = true;

?>
<script>alert("Selamat datang <?= $row['nama']; ?> Di Aplikasi Pendataan Kesehatan P5");
window.location.href="../index.php"</script>
<?php 
	}
}else {
	echo '<script>alert("Masukan Username Dan Password Dengan Benar!!!");
	window.location.href="login.php"</script>';
}
?>