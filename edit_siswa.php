<?php
include 'koneksi.php';
  if (isset($_GET['id'])) {
    $id = ($_GET["id"]);
    $query = "SELECT * FROM siswa WHERE nisn='$id'";
    $result = mysqli_query($koneksi, $query);
    if(!$result){
      die ("Query Error: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
    }
    $data = mysqli_fetch_assoc($result);
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='siswa.php';</script>";
       }
  } else {
    echo "<script>alert('Masukkan data nisn.');window.location='siswa.php';</script>";
  }         
  ?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: red;
      }
    h2 {
        text-transform: uppercase;
        color: red;
      }
    h3 {
        text-transform: uppercase;
        color: red;
      }
    h5 {
        text-transform: uppercase;
        color:#999999;
      }
    button {
          background-color: red;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: grey;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    a {
          background-color: red;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
    }
    </style>
  </head>
<body>
 
  <?php
  
  include ('header.php');
?>
      <center>
  
        <h2>Edit Data Siswa</h2>
      <center>
      <form method="POST" action="proses_editsiswa.php" enctype="multipart/form-data" >
      <section class="base">
          <input name="nisn" value="<?php echo $data['nisn']; ?>"  hidden />
          <div>
          <label>nis</label>
         <input type="text" name="nis" value="<?php echo $data['nis']; ?>" required=""/>
        </div>
        <div>
          <label>nama</label>
         <input type="text" name="nama" value="<?php echo $data['nama']; ?>" required=""/>
        </div>
         <div>
          <label>id_kelas</label>
         <input type="text" name="id_kelas" value="<?php echo $data['id_kelas']; ?>" required=""/>
        </div>
         <div>
          <label>Alamat</label>
         <input type="text" name="alamat" value="<?php echo $data['alamat']; ?>" required=""/>
        </div>
        <div>
          <label>No_telp</label>
         <input type="text" name="no_telp" value="<?php echo $data['no_telp']; ?>" required=""/>
        </div>
         <div>
          <label>Id_Spp</label>
         <input type="text" name="id_spp" value="<?php echo $data['id_spp']; ?>" required=""/>
        </div>
      
           </select>
          
      </div>
        <div>
         <button type="submit">Simpan Perubahan</button>
        </div>
        </section>
      </form>
</body>
</html>