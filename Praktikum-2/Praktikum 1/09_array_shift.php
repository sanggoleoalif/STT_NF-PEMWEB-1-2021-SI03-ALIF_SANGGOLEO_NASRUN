<!DOCTYPE html>
<html>

<body>
    <?php
    $tims = ["asep", "agus", "ali", "rapli"];
    array_shift($tims);
    foreach ($tims as $person) {
        echo $person . '<br/>';
    }
    ?>
</body>
// array shift digunakan untuk menghapus array pertama

</html>