<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="">
</head>
<body>
    <form action="inputRegis.php" method="post" accept-charset="utf-8">
        <label for="Formregis">Username</label>
          </br>
        <input type="text" name="name" value="" placeholder="username">
          </br>
        <label for="">Password</label>
          </br>
        <input type="password" name="password" value="" placeholder="password">
          </br>
        <label for="">Email</label>
          </br>
        <input type="text" name="email" value="" placeholder="email">
          </br>
        <label for="">Tanggal Lahir</label>
          </br>
          <input type="date" name="tgl" value="" placeholder="tgl-lahir">
          </br>
        <label for="">No HP</label>
          </br>
        <input type="text" name="nohp" value="" placeholder="nomor HP">
          </br>
        <!-- <label for="">Foto Profil</label>
          </br>
        <input type="file" name="picture" value="" placeholder="">
          </br> -->
        <input type="submit" name="submitRegis" value="Send">
    </form>
</body>
</html>