<!DOCTYPE html>
<meta >
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Praktikum</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <style>
            body { 
                -webkit-box-shadow: 11px 10px 44px 0px rgba(0,0,0,0.75);
                -moz-box-shadow: 11px 10px 44px 0px rgba(0,0,0,0.75);
                box-shadow: 11px 10px 44px 0px rgba(0,0,0,0.75);
            }
            .title {
                color: #32CD32;
                font-size: 40px;
                font-weight: bold;
            }
        </style>
    </head>
    <body class="container mt-5">
    <form class="form-horizontal container" method="GET" action="array_siswa.php">
    <fieldset>

    <!-- Form Name -->
    <legend class="pt-5 text-center title">Form Siswa</legend>
    <hr>
    
    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-4 control-label" for="textinput">Nama Lengkap</label>  
    <div class="col-md-5">
    <input id="nama" name="nama" size="30" type="text" placeholder="Nama Lengkap" class="form-control input-md" required="">  
    </div>
    </div>
    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-4 control-label" for="nim">NIM</label>  
    <div class="col-md-5">
    <input id="nim" name="nim" size="30" type="text" placeholder="NIM Mahasiswa" class="form-control input-md" required="">  
    </div>
    </div>

    <!-- Select Basic -->
    <div class="form-group">
    <label class="col-md-4 control-label" for="matkul" name="matkul">Mata Kuliah</label>
    <div class="col-md-4">
        <select id="matkul" name="matkul" class="form-control">
        <option value="DDP">Dasar Dasar Pemrograman</option>
        <option value="BD1">Basis Data 1</option>
        <option value="WEB">Pemrograman Web Lanjutan</option>
        </select>
    </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-4 control-label" for="nilaiuts">Nilai UTS</label>  
    <div class="col-md-3">
    <input id="nilaiuts" size="10" name="nilaiuts" type="text" placeholder="sebutkan nilai UTS" class="form-control input-md">
    </div>
    </div>
    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-4 control-label" for="nilaiuas">Nilai UAS</label>  
    <div class="col-md-3">
    <input id="nilaiuas" name="nilaiuas" type="text" placeholder="sebutkan nilai UAS" class="form-control input-md">
    </div>
    </div>
    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-4 control-label" for="nilaiprak">Nilai Praktikum/Tugas</label>  
    <div class="col-md-3">
    <input id="nilaiprak" name="nilaiprak" type="text" placeholder="sebutkan nilai Praktikum atau Tugas" class="form-control input-md">
    </div>
    </div>
    <input type="submit" value="submit" name="submit">
    </fieldset>
    </form>
    <br>
    </body>
</html>