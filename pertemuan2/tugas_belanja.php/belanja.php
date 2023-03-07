<?php require_once "proses.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
</head>
<body>
  <div class="container col-12" style="display: flex; padding: 2vw;">
    <div class="col-8">
      <h2>
          Belanja online
      </h2>
    
      <hr>
      
      <form action="belanja.php" method="POST" >
        <div class="form-group row">
          <label for="nama_cs" class="col-4 col-form-label">Nama  Customer</label> 
          <div class="col-8">
            <input id="nama_cs" name="nama_cs" placeholder="Masukan Nama Customer" type="text" required="required" class="form-control">
          </div>
        </div>
    
        <div class="form-group row">
          <label class="col-4">Pilih Produk</label> 
          <div class="col-8">
            <div class="custom-control custom-radio custom-control-inline">
              <input name="product" id="product_0" type="radio" class="custom-control-input" value="TV"  required="required">
              <label for="product_0" class="custom-control-label">TV</label>
            </div>
    
            <div class="custom-control custom-radio custom-control-inline">
              <input name="product" id="product_1" type="radio" class="custom-control-input" value="Kulkas"  required="required">
              <label for="product_1" class="custom-control-label">Kulkas</label>
            </div>
    
            <div class="custom-control custom-radio custom-control-inline">
              <input name="product" id="product_2" type="radio" class="custom-control-input" value="Mesin Cuci" required="required"> 
              <label for="product_2" class="custom-control-label">Mesin Cuci</label>
            </div>
          </div>
        </div>
    
        <div class="form-group row">
          <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
          <div class="col-8">
            <input id="jumlah" name="jumlah" placeholder="Jumlah Pembelian" type="text" required="required" class="form-control" required="required">
          </div>
        </div> 
    
        <div class="form-group row">
          <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
    
      </form>
    </div>   

    <div class="col-4">
      <ul class="list-group">
        <li class="list-group-item active">Daftar Harga</li>
        <li class="list-group-item ">TV: 4.200.000 </li>
        <li class="list-group-item ">Kulkas: 3.100.00</li>
        <li class="list-group-item ">Mesin Cuci: 3.800.00</li>
        <li class="list-group-item active">Harga Berubah Setiap Saat</li>
       </ul>
    </div>
  </div>

  <hr>

  <div class="container">
    <table class="table table-bordered">
      <tr>
        <td>Nama Customer</td>
        <td>Produk</td>
        <td>Jumlah Produk</td>
        <td>Total Harga Produk</td>
      </tr>
  
  
    <tr>
      <td><?= $nama_customer; ?></td>
      <td><?= $pilih_produk ;?></td>
      <td><?= $jumlah; ?></td>
      <td><?= $format_harga_produk = "Rp." . number_format($harga_produk, 0, ',', '.'); ?></td>
    </tr>
    </table>
  </div>
  

</body>
</html>