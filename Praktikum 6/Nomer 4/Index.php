<!-- Nama   : Muhammad Rahulil -->
<!-- NIM    : 20051397043 -->
<!-- Kelas  : 2020A - D4 Manajemen Informatika -->
<!-- Praktikum 6 -->

<?php 
    require_once 'No 4.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
    <title>Praktikum 6</title>
</head>
<body>
        <h2 class="text-center">Praktikum 6</h2>
        <div class="container">
  <div class="row">
  <h4 class="text-center">Soal 3</h4>
    <div class="col mx-auto border p-3 mt-2">
                <?= $riverBarge2->getMaxLoad(); ?> <br>
                <?= $riverBarge2->addBox(12000); ?> <br>
                <?= $riverBarge2->addBox(15000); ?> <br>
                <?= $riverBarge2->addBox(1000); ?> <br>
                <?= $riverBarge2->addBox(3000); ?> <br>
                <?= $riverBarge2->dock(); ?> <br>
                <?= $riverBarge2->cruise(); ?> <br>
                <?= $riverBarge2->calcFuelNeeds(); ?> <br>
    </div>
    <div class="col mx-auto border p-3 mt-2">
                <?= $seaPlane->getMaxLoad(); ?> <br>
                <?= $seaPlane->addBox(12000); ?> <br>
                <?= $seaPlane->addBox(8000); ?> <br>
                <?= $seaPlane->addBox(3000); ?> <br>
                <?= $seaPlane->dock(); ?> <br>
                <?= $seaPlane->cruise(); ?> <br>
                <?= $seaPlane->takeOff(); ?> <br>
                <?= $seaPlane->fly(); ?> <br>
                <?= $seaPlane->land(); ?> <br>
                <?= $seaPlane->calcFuelNeeds(); ?> <br>
    </div>
    <div class="col mx-auto border p-3 mt-2">
                <?= $helicopter->getMaxLoad(); ?> <br>
                <?= $helicopter->addBox(8000); ?> <br>
                <?= $helicopter->addBox(2000); ?> <br>
                <?= $helicopter->addBox(3000); ?> <br>
                <?= $helicopter->takeOff(); ?> <br>
                <?= $helicopter->fly(); ?> <br>
                <?= $helicopter->land(); ?> <br>
                <?= $helicopter->calcFuelNeeds(); ?> <br>
    </div>
  </div>
</div>
</body>

</html>