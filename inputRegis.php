<?php 
  include 'connect.php';
  if (isset($_POST['submitRegis'])) {
    $nama = $_POST['name'];
    $password = md5($_POST['password']);
    $email = $_POST['email'];
    $tanggal = $_POST['tgl']; 
    $nohp = $_POST['nohp'];
    // $foto = $_POST['picture'];
    if($db->query("INSERT INTO member (nama,password,email,tgllahir,nohp) VALUES ('$nama','$password', '$email','$tanggal','$nohp')")){
      echo 'Berhasil';
    }else{
      echo 'Gagal';
    }
    // header('Location: formLoginUser.php');
  }
 ?>