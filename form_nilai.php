<!DOCTYPE html>
<html>
<body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container">
<div class="py-5 text-lelf">
    <h1>Form Nilai Siswa</h1>
  </div>
<form method='POST' action='nilai_siswa.php'>
        <div class="form-group row">
      <label for="naleng" class="col-4 col-form-label">Nama Lengkap</label> 
        <div class="col-8">
         <input id="naleng" name="naleng" placeholder="Nama Lengkap" type="text" class="form-control">
        </div>
    </div>
      <div class="form-group row">
       <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
      <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="DDP">Dasar- dasar Pemograman</option>
        <option value="BDI">Basis Data I</option>
        <option value="WEB1">Pemograman Web</option>
      </select>
      </div>
      </div>
      <div class="form-group row">
       <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
        <div class="col-8">
          <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
      </div>
     </div>
      <div class="form-group row">
        <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
          <div class="col-8">
           <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
        </div>
      </div>
    <div class="form-group row">
      <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas</label> 
        <div class="col-8">
          <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control">
        </div>
    </div> 
    <div class="form-group row">
      <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Kirim</button>
      </div>
    </div>
</form>
</div>
</body>
</html>