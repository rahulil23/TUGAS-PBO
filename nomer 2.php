

<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  
<h2>Menentukan Bilangan deret aritmatika</h2>

<form method="post" action="">
   <h3>nilai awal </h3>
    <input type="text" name="awal" placeholder="Masukkan nilai awal">
    <h3>nilai beda<h3>
    <input type="text" name="beda" placeholder="Masukkan nilai beda">
    <h3>suku ke N<h3>
    <input type="text" name="suku" placeholder="Masukkan nilai suku ke">
    <br><br> 
    <input type="submit" name="submit" value="ENTER">
</form>
<br>

<?php

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $awal = $_POST['awal'];
         $beda = $_POST['beda'];
         $suku = $_POST['suku'];
         $var=0;
         echo"deret dari bilangan di atas yaitu : ";
         for ($i=0; $i < $suku; $i++) {
            echo $awal +=$var;
            echo ", ";
            $var=$beda;
         }
      }
   ?>

</body>
</html>
   