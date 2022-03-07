<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Latihan Form Processing</title>
</head>
<body>

        <div class="m-5 border border-succes p-4 rounded">
            <form method="Get" autocomplete="off" action='form_nilai.php' >
            <div class="form-group row">
                <label for="text" class="col-4 col-form-label">Nama Lengkap</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-address-book-o"></i>
                    </div>
                    </div> 
                    <input id="text" name="nama" placeholder="Masukan Nama Lengkap" type="text" class="form-control" required="required">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="select" class="col-4 col-form-label">Mata Kuliah</label> 
                <div class="col-8">
                <select id="select" name="matkul" class="custom-select">
                    <option value="">Pilih Matkul</option>
                    <option value="basis_data">Basis Data</option>
                    <option value="php">PHP</option>
                    <option value="ddp">Dasar - Dasar Pemerograman</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="text2" class="col-4 col-form-label">Nilai UTS</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                    </div> 
                    <input id="text2" name="nilai_uts" placeholder="Masukan Nilai UTS" type="number" required="required" class="form-control">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="text3" class="col-4 col-form-label">Nilai UTS</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                    </div> 
                    <input id="text3" name="nilai_uas" placeholder="Masukan nilai UAS" type="number" class="form-control" required="required">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="text1" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                    </div> 
                    <input id="text1" name="nilai_tugas" placeholder="Masukan Nilai Tugas/Praktikum" type="number" class="form-control" required="required">
                </div>
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
            </form> 
        </div>

        <div class="m-5 border border-success p-4 rounded">
            <?php
                if(isset($_GET['submit'])){
                    $nama = $_GET['nama'];
                    $matkul = $_GET['matkul'];
                    $nilai_uts = $_GET['nilai_uts'];
                    $nilai_uas = $_GET['nilai_uas'];
                    $nilai_tugas = $_GET['nilai_tugas'];
                    $nilai_akhir = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;
                    echo "Nama Lengkap : $nama <br>";
                    echo "Mata Kuliah : $matkul <br>";
                    echo "Nilai UTS : $nilai_uts <br>";
                    echo "Nilai UAS : $nilai_uas <br>";
                    echo "Nilai Tugas/Praktikum : $nilai_tugas <br>";
                    echo "Nilai Akhir : $nilai_akhir <br>";
                }?>
            
    
        </div>

</body>
</html>