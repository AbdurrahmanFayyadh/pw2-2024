<?php
  $runcandel = [
    [
      "id" => "1", 
      "nama" => "Fruit's Name",
      "warna" => '<input type="color" name="" id="" value="#0000">',
      "stok" => "12",
      "harga" => "₿120605M",
      "deskripsi" => "Dawg, if u want to buy it, just choose wht color do u want!😪🙏",
  
    ],
    [
      "id" => "2", 
      "nama" => "Fruit's Name",
      "warna" => '<input type="color" name="" id="" value="#CD9285">',
      "stok" => "12",
      "harga" => "₿120605M",
      "deskripsi" => "Dawg, if u want to buy it, just choose wht color do u want!😪🙏",

    ],
    [
      "id" => "3", 
      "nama" => "Fruit's Name",
      "warna" => '<input type="color" name="" id="" value="#23D38D">',
      "stok" => "12",
      "harga" => "₿120605M",
      "deskripsi" => "Dawg, if u want to buy it, just choose wht color do u want!😪🙏",
    ],
    [
      "id" => "4", 
      "nama" => "Fruit's Name",
      "warna" => '<input type="color" name="" id="" value="#FF5733">',
      "stok" => "12",
      "harga" => "₿120605M",
      "deskripsi" => "Dawg, if u want to buy it, just choose wht color do u want!😪🙏",
    ],
    [
      "id" => "5", 
      "nama" => "Fruit's Name",
      "warna" => '<input type="color" name="" id="" value="#D323CB">',
      "stok" => "12",
      "harga" => "₿120605M",
      "deskripsi" => "Dawg, if u want to buy it, just choose wht color do u want!😪🙏",
    ],
    
  ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        <?php
         foreach ($runcandel as $melvinger)  {
        ?>
        <tr>            
            <td><?= $melvinger["id"] ?></td>
            <td><?= $melvinger["nama"] ?></td>
            <td><?= $melvinger["warna"] ?></td>
            <td><?= $melvinger["stok"] ?></td>
            <td><?= $melvinger["harga"] ?></td>
            <td><?= $melvinger["deskripsi"] ?></td>
        </tr>
        <?php
         }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>