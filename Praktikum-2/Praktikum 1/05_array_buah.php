<?php
$ar_buah = ["Pepaya", "Mangga", "Pisang", "Jambu"];
// Cetak buah ke index 2
echo $ar_buah[2];
// Cetak Jumlah Buah
echo '<br/>Jumlah Buah' . count($ar_buah);
// Cetak seluruh buah
echo '<ol>';
foreach ($ar_buah as $buah) {
    echo '<li>' . $buah . '</li>';
}
echo '</ol>';
// tambahkan buah
$ar_buah[] = "Durian";
// hapus buah index ke 1
unset($ar_buah[1]);
// ubah buah index ke 2 menjadi Manggis
$ar_buah[2] = "Manggis";
// cetak seluruh buah dengan index nya
echo '<ul>';
foreach ($ar_buah as $k => $v) {
    echo '<li> buah index - ' . $k . ' adalah ' . $v . '</li>';
}
echo '</ul>';
