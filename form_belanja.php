<!DOCTYPE html>
<html lang="en">
<body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container">
<div class="py-5 text-lelf">
    <h2>Belanja Online</h2>
</div>
<form method="post" action="form_belanja.php">
  <div class="form-group row">
    <label for="costumer" class="col-4 col-form-label"><strong>Costumer</strong></label> 
    <div class="col-8">
      <input id="costumer" name="costumer" placeholder="Nama Costumer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4"><strong>Pilih Produk</strong></label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas"> 
        <label for="produk_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin cuci"> 
        <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label"><strong>Jumlah</strong></label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="kirim" type="submit" class="btn btn-success">Kirim</button>
    </div>
  </div>
</form> 
<?php
    $kirim = isset ($_POST['kirim']) ? $_POST['kirim'] : '';
    $costumer = isset ($_POST['costumer']) ? $_POST['costumer'] : '';
    $produk = isset ($_POST['produk']) ? $_POST['produk'] : '';
    $jumlah = isset ($_POST['jumlah']) ? $_POST['jumlah'] : '';

    echo 'Nama Costumer : '.$costumer;
    echo '<br/>Produk Pilihan : '.$produk;
    echo '<br/>Jumlah Produk : '.$jumlah;
?>
</div>

</body>
</html>