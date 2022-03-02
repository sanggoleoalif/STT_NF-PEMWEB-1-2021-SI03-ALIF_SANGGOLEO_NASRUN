<!DOCTYPE html>
<html>

<body>
    <?php
    $tims = ["asep", "agus", "ali", "rapli"];
    array_pop($tims);
    foreach ($tims as $person) {
        echo $person . '<br/>';
    }
    ?>
</body>
//array pop digunakan untuk menghilangkan elemen akhir dari array

</html>