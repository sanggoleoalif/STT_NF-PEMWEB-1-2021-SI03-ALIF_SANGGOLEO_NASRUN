<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.2.2/css/fixedHeader.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Hasil BMI</title>
</head>

<body>
    <div class="container-fluid">
        <div class="container d-flex justify-content-center py-5">
            <div class="col-md-12 col-12 p-3">
                <?php
                require_once 'class_bmi.php';

                $daftarPasien = array(
                    1 =>
                    array(1, '2022-01-30', 'P001', 'Ahmad', 'L', 69.8, 169, 24.7, 'Kelebihan Berat Badan'),
                    array(2, '2022-01-10', 'P002', 'Rina', 'P', 55.3, 165, 20.3, 'Normal (Ideal)'),
                    array(3, '2022-01-11', 'P003', 'Lutfi', 'L', 45.2, 171, 15.4, 'Kekurangan Berat Badan')
                );

                $submit = $_POST['submit'];
                $gender = $_POST['kelamin'];
                $nama = $_POST['nama'];
                $tmp_lahir = $_POST['tmpt'];
                $tgl_lahir = $_POST['tgl'];
                $berat = $_POST['bb'];
                $tinggi = $_POST['tb'];
                $email = $_POST['email'];

                $pasienBaru = new BMIPasien(count($daftarPasien) + 1, $nama, $tmp_lahir, $tgl_lahir, $email, $gender, $tinggi, $berat);
                $pasienBaru->bmi = $pasienBaru->nilaiBMI();

                array_push($daftarPasien, array($pasienBaru->id, $pasienBaru->tanggal, $pasienBaru->kode, $pasienBaru->nama, $pasienBaru->gender, $pasienBaru->berat, $pasienBaru->tinggi, $pasienBaru->bmi, $pasienBaru->statusBMI($pasienBaru->bmi)));
                echo "<h1 class='fw-bold text-center'>BMI Anda adalah <span class='text-primary'>{$pasienBaru->bmi}</span></h1>";
                echo "<h1 class='fw-bold text-center'>Status BMI Anda adalah <span class='text-primary'>{$pasienBaru->statusBMI($pasienBaru->bmi)}</span></h1>";
                ?>


                <table class="example display nowrap table-striped table-bordered table" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Periksa</th>
                            <th>Kode Pasien</th>
                            <th>Nama Pasien</th>
                            <th>Gender</th>
                            <th>Berat (kg)</th>
                            <th>Tinggi (cm)</th>
                            <th>Nilai BMI</th>
                            <th>Status BMI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($daftarPasien as $pasien) {
                            echo "<tr>";
                            echo "<td>" . $pasien[0] . "</td>";
                            echo "<td>" . $pasien[1] . "</td>";
                            echo "<td>" . $pasien[2] . "</td>";
                            echo "<td>" . $pasien[3] . "</td>";
                            echo "<td>" . $pasien[4] . "</td>";
                            echo "<td>" . $pasien[5] . "</td>";
                            echo "<td>" . $pasien[6] . "</td>";
                            echo "<td>" . $pasien[7] . "</td>";
                            echo "<td>" . $pasien[8] . "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.2.2/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var table = $('.example').DataTable({
                responsive: true
            });

            new $.fn.dataTable.FixedHeader(table);
        });
    </script>
</body>

</html>