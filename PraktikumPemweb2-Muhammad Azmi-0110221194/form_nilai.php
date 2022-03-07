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
                    <input id="text" name="nama" placeholder="Masukan Nama Lengkap Anda" type="text" class="form-control" required="required">
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
                    <option value="ddp">DDP</option>
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
                    <input id="text3" name="nilai_uas" placeholder="Masukan nilai uas" type="number" class="form-control" required="required">
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
                            $nama_matkul = $_GET['matkul'];
                            $nilai_uts = $_GET['nilai_uts'];
                            $nilai_uas = $_GET['nilai_uas'];
                            $nilai_tugas = $_GET['nilai_tugas'];
                            $nilai_akhir = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;
                            if ($nilai_akhir > 90) {
			    $grade = "A+";
			} elseif($nilai_akhir > 80){
			    $grade = "A";
			} elseif($nilai_akhir > 70){
			    $grade = "B+";
			} elseif($nilai_akhir > 60){
 			   $grade = "B";
			} elseif($nilai_akhir > 50){
			    $grade = "C+";
			} elseif($nilai_akhir > 40){
			    $grade = "C";
			} elseif($nilai_akhir > 30){
			    $grade = "D";
			} elseif($nilai_akhir > 20){
			    $grade = "E";
			} else {
			    $grade = "F";
			}                        
                          
                        
                        }?>
                     <?php if(isset($_GET['submit'])){?>
                    <div class="m-3 alert-success p-3">
                     <p>Nama Lengkap : <?= $nama?> </p>
                     <p>Mata Kuliah : <?= $nama_matkul?></p>
                     <p>Nilai UTS : <?= $nilai_uts?></p>
                     <p>Nilai UAS : <?= $nilai_uas?></p>
                     <p>Nilai Tugas/Praktikum : <?= $nilai_tugas?></p>
                     <p>Nilai Akhir : <?= $nilai_akhir?></p>
                     <p>Grade : <?= $grade?></p>
                   </div>
                   <?php }else{
                    } ?>
            </div>
         </div>
      </div>
   </body>
</html>