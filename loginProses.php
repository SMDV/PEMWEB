<?php 
  session_start();
  include 'connect.php';
  if(isset($_POST['submitLogin'])){
      $nama=$_POST['name'];
      $password=md5($_POST['password']);
      $query="SELECT * FROM member where nama='$nama' AND password='$password'";
      $data=$db->query($query);
      // $value=$data->fetch_object();
      // if($value->password == $password){
      //   $_SESSION['status']="success";
      //   echo "login berhasil";
      // }else{
      //   $_SESSION['status']="failed";
      //   echo "login gagal";
      // }
      if($data->num_rows){
           $_SESSION['status']="success";
           $value=$data->fetch_object();
           $_SESSION['userid']=$value->id;
           header("Location:home.php");
      }
      else{
          session_destroy();
          header("Location:home.php");
      }
  }
 ?>