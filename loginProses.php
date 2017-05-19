<?php 
  session_start();
  include 'connect.php';
  if(isset($_POST['submitLogin'])){
      $nama=$_POST['name'];
      $password=md5($_POST['password']);
      echo "$nama";
      echo "$password";
      $data=$db->query("SELECT * FROM member WHERE nama==$nama AND password==$password");
      echo 'test';
      while($value=$data->fetch_object()){
          echo $value->nama;
      }
      if(true){
        $_SESSION['status']="success";
        echo "login berhasil";
      }else{
        $_SESSION['status']="failed";
        echo "login gagal";
      }
  }
 ?>