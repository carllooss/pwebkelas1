<?php
$nama = $_REQUEST['nama']; //request bisa masuk ke get ataupun post
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$umur = $_REQUEST['umur'];
$jeniskelamin = $_REQUEST['jeniskelamin'];
$kewarganegaraan = $_REQUEST['kewarganegaraan'];
$alamat = $_REQUEST['alamat'];
echo "Nama : $nama <br>";
echo "Umur : $umur <br>";
echo "Email : $email <br>";
echo "Password : $password <br>";
echo "Jenis Kelamin : $jeniskelamin <br>";
echo "Kewarganegaraan : $kewarganegaraan <br>";
echo "Alamat : $alamat <br>";