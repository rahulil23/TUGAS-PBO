<!-- Nama   : Muhammad Rahulil -->
<!-- NIM    : 20051397043 -->
<!-- Kelas  : 2020A - D4 Manajemen Informatika -->
<!-- Praktikum 6 -->

<?php 
    require_once 'No 1.php';
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
    <div class="container">
        <h2 class="text-center">Praktikum 6</h2>
        <div class="row">
            <div class="col-5 mx-auto border p-3 mt-2">
                <h4 class="text-center">Soal 1</h4>
                <?= $truck->getMaxLoad(); ?> <br>
                <?= $truck->addBox(3000); ?> <br>
                <?= $truck->addBox(1000); ?> <br>
                <?= $truck->addBox(6000); ?> <br>
                <?= $truck->addBox(8000); ?> <br>
                <?php 
                echo "Butuh Bahan Bakar " . $truck->calcFuelNeeds() . ' Liter'. '<br>';
                ?>
                <br>
                <?= $riverBarge->addBox(3000); ?> <br>
                <?= $riverBarge->addBox(1000); ?> <br>
                <?= $riverBarge->addBox(6000); ?> <br>
                <?= $riverBarge->addBox(8000); ?> <br>
                <?= $riverBarge->addBox(9000); ?> <br>
                <?php 
                echo 'Maksimal muatan Perahu ' . $riverBarge->getMaxLoad() . '<br>';
                echo "Butuh Bahan Bakar " . $riverBarge->calcFuelNeeds() . ' Liter';
                ?>
            </div>
        </div>
    </div>
</body>

</html>