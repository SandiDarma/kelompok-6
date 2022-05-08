<!DOCTYPE html>
<head>
    <title>Kirim Data Form PHP</title>
	<center><h1> Hasil Data </h1><center>
</head>
<?php
if(isset($_POST['simpan'])){
echo '<table>';
echo '<table align="center" border="1" cellpadding="6" cellspacing="4">' ;
echo '<tr><td>'.'NIM: '.'</td><td>'.$_POST['nim'].'</td></tr>';
echo '<tr><td>'.'Nama : '.'</td><td>'.$_POST['nama'].'</td></tr>';
echo '<tr><td>'.'Alamat: '.'</td><td>'.$_POST['alamat'].'</td></tr>';
echo '<tr><td>'.'Tanggal Lahir: '.'</td><td>'.$_POST['tgl_lhr'].'</td></tr>';
echo '<tr><td>'.'Jenis Kelamin: '.'</td><td>'.$_POST['jns_klmin'].'</td></tr>';
echo '<tr><td>'.'Agama: '.'</td><td>'.$_POST['faith'].'</td></tr>';
echo '</table>';
}
?>

<a class="cta" href="web2.html"><button>finish</button></a>