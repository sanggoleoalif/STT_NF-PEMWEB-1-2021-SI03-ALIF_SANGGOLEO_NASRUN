<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <h2 class="m-3">Form Nilai Siswa</h2>
    <hr>
    <div class="d-flex justify-content-center w-100">
        <form class="w-50" method="GET" action="form_nilai.php">
            <div class="form-group row">
                <label for="" class="col-4 col-form-label d-flex justify-content-end font-weight-bold">Nama Lengkap</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-address-book"></i>
                            </div>
                        </div>
                        <input id="" name="nama" placeholder="Nama Lengkap" type="text" required="required" class="form-control" aria-describedby="HelpBlock">
                    </div>
                    <span id="HelpBlock" class="form-text text-muted">Masukan nama lengkap anda.</span>
                </div>
            </div>
            <div class="form-group row">
                <label for="select1" class="col-4 col-form-label d-flex justify-content-end font-weight-bold">Mata Kuliah</label>
                <div class="col-8">
                    <select id="select1" name="matkul" class="custom-select" required="required" aria-describedby="select1HelpBlock">
                        <option value="DDP">Dasar-Dasar Pemrogaman</option>
                        <option value="BDI">Basis Data I</option>
                        <option value="WEB1">Pemrogaman Web</option>
                    </select>
                    <span id="select1HelpBlock" class="form-text text-muted">Masukan mata kuliah anda.</span>
                </div>
            </div>
            <div class="form-group row">
                <label for="text2" class="col-4 col-form-label d-flex justify-content-end font-weight-bold">Nilai UTS</label>
                <div class="col-8">
                    <input id="text2" name="nilai_uts" type="text" class="form-control" required="required" aria-describedby="text2HelpBlock">
                    <span id="text2HelpBlock" class="form-text text-muted">Masukan nilai uts anda.</span>
                </div>
            </div>
            <div class="form-group row">
                <label for="text3" class="col-4 col-form-label d-flex justify-content-end font-weight-bold">Nilai UAS</label>
                <div class="col-8">
                    <input id="text3" name="nilai_uas" type="text" class="form-control" required="required" aria-describedby="text3HelpBlock">
                    <span id="text3HelpBlock" class="form-text text-muted">Masukan nilai uas anda.</span>
                </div>
            </div>
            <div class="form-group row">
                <label for="text1" class="col-4 col-form-label d-flex justify-content-end font-weight-bold">Nilai Tugas/Praktikum</label>
                <div class="col-8">
                    <input id="text1" name="nilai_tugas" type="text" class="form-control" required="required" aria-describedby="text1HelpBlock">
                    <span id="text1HelpBlock" class="form-text text-muted">Masukan nilai tugas/praktikum anda.</span>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="proses" type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
    <?php
    $proses = $_GET['proses'];
    $nama_siswa = $_GET['nama'];
    $mata_kuliah = $_GET['matkul'];
    $nilai_uts = $_GET['nilai_uts'];
    $nilai_uas = $_GET['nilai_uas'];
    $nilai_tugas = $_GET['nilai_tugas'];

    echo 'Proses : ' . $proses;
    echo '<br/>Nama : ' . $nama_siswa;
    echo '<br/>Mata Kuliah : ' . $mata_kuliah;
    echo '<br/>Nilai UTS : ' . $nilai_uts;
    echo '<br/>Nilai UAS : ' . $nilai_uas;
    echo '<br/>Nilai Tugas Praktikum : ' . $nilai_tugas;
    ?>
</body>

</html>