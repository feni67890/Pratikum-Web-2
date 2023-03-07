<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body class="row">
<div class="col-8">
    <h2>Belanja Online</h2>
    <hr>

<form>
  <div class="form-group row">
    <label for="Customer" class="col-4 col-form-label">Masukan nama customer</label> 
    <div class="col-8">
      <input id="Customer" name="Customer" placeholder="Masukan Nama" type="text" required="required" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="product" class="col-4 col-form-label">Pilih Produk</label> 
    <div class="col-8">
      <select id="product" name="product" class="custom-select" required="required">
        <option value="TV">TV</option>
        <option value="KULKAS">KULKAS</option>
        <option value="MESIN CUCI">MESIN CUCI</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah " class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah " name="jumlah " placeholder="Jumlah Pembeli" type="text" class="form-control" required="required">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</div> 
<div class="col-4">
    <ul class="list-group">
        <li class="list-group-item active">Daftar Harga</li>
        <li class="list-group-item">Tv: 4.200.00</li>
        <li class="list-group-item">Kulkas: 3.100.00</li>
        <li class="list-group-item">Mesin C: 3.800.000</li>
        <li class="list-group-item active">Harga Dapat Berubah Setiap Saat</li>
    </ul>
</div>
<div>
  <hr class="col-12">
</div>
</body>
</html>