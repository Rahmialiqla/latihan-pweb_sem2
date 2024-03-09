<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form method="post" action="#">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nama Customer</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="tv"> 
        <label for="radio_0" class="custom-control-label">Televis</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="kulkas"> 
        <label for="radio_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_2" type="radio" class="custom-control-input" value="mesincuci"> 
        <label for="radio_2" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="quantity" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>




<?php

  $nama=$_POST['nama'];
  $option=$_POST['radio'];
  $quantity=$_POST['jumlah'];
  






if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai yang dipilih dari radio button
    $option = $_POST['radio'];
    // Mengambil nilai jumlah yang dimasukkan
    $quantity = intval($_POST['jumlah']);

    // Menampilkan hasil sesuai dengan pilihan dan jumlah
    if ($option == 'tv') {
        $result = $quantity * 4200000; // contoh perhitungan sederhana
        
    } elseif ($option == 'kulkas') {
        $result = $quantity * 3100000; // contoh perhitungan sederhana
        
    } elseif ($option == 'mesincuci') {
        $result = $quantity * 3800000; // contoh perhitungan sederhana
        
    } 
}



  //cetak hasil dari php di atas
  echo "<br/>nama = " . $nama;
  echo "<br/>nama produk = " . $option;
  echo "<br/>jumlah = " . $quantity;
  echo "<br/>Hasil = " . $result;
?>

</body>
</html>