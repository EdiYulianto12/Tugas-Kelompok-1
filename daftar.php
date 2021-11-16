<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tabel Anggota</title>
   <link rel="stylesheet" type="text/css" href="style.css"><meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<br>
  <?php 
$koneksi=new mysqli("localhost","root","","kelompok1");
$sql="SELECT * FROM `anggota`";
$q=$koneksi->query($sql);
$rekord=$q->fetch_array();
?>
<br>
  <div class="container">
  <font style="font-size: 50px;"><CENTER>Daftar Anggota </CENTER></font>
            <br>
            <br>  

  <table border="1" cellpadding="10" cellspacing="0" class="table table-bordered table-striped" >
    <thead>
      <tr style="background-color: lightblue;">
        <th>NPM</th>
        <th>Nama Anggota  </th>
      
      </tr>
    </thead>
    <tbody><?php do { ?>
      <tr>
        <td><?php echo $rekord['NPM'];?></td>
        <td><?php echo $rekord['Nama'];?></td>
        
      </tr><?php } while($rekord =$q->fetch_array());?>
    </tbody>
  </table>
</div>

</body>
</html>
