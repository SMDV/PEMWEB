<?php 
session_start();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Buat Iklan</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/">
 </head>
 <body class="w3-main">
  <div style="background: url('bBody2.jpg');background-size: cover;background-position: center;" class="w3-container">
    <h1 class="w3-text-white" style="margin-left: 200px"><b>Buat Iklan</b></h1>
  </div>
  <div class="w3-container w3-light-grey">
    <form class="w3-container" action="inputIklan.php" method="post" accept-charset="utf-8" id="iklanform" style="margin:20px 200px 0px 200px">
          <label for="Formregis">Judul Iklan</label>
            </br>
          <input class="w3-input" type="text" name="namaJudul" value="" placeholder="nama judul" required>
            </br>
          <label>Harga</label>
            </br>
          <input class="w3-input" type="text" name="harga" value="" placeholder="harga" required>
            </br>
          <label for="">Kategori</label>
            </br>  
          <input class="w3-input" list="kategori" name="jeniskategori" required>
            <datalist id="kategori">
              <option value="Keyboard">
              <option value="Mouse">
              <option value="Monitor">
              <option value="Headset">
              <option value="CPU">
            </datalist>
            </br>
            <label>Deskripsi</label>
            </br>
            <textarea class="w3-input" rows="4" cols="50" name="comment" form="iklanform" placeholder="Enter text here..."></textarea>
            </br>
            <input class="w3-input" type="submit" name="submitIklan" value="Send">
    </form>
  </div>   
 </body>
 </html>