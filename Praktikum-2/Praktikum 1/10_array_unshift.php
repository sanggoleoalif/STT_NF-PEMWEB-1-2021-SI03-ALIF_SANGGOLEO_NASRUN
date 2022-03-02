<!DOCTYPE html>
<html>

<body>
    <?php
    $tims = ["asep", "agus", "ali", "rapli"];
    array_unshift($tims);
    foreach ($tims as $person) {
        echo $person . '<br/>';
    }
    ?>
</body>
// array unshift digunakan untuk menambah 1 atau lebih elemen baru kedalam awalan array.

</html>