
<!DOCTYPE html>
<html>
<head>
    <title>Data Karyawan</title>
</head>
<body>
   <div style="margin: 0 auto; width: 90%">
       <h2 align="center">Halaman Daftar Karyawan</h2>
       <a href="<?= base_url('Admin/inputDataKaryawan'); ?>">Tambah Data</a>

       <table border="1" cellpadding="0" width="100%">
          <tr align="center" bgcolor="#E9967A">
              <td>No</td>
              <td>NIK</td>
              <td>Nama Karyawan</td>
              <td>Jabatan</td>
              <td>Tanggal Masuk</td>
              <td>Divisi</td>
              <td>Aksi</td>
            </tr>
            <?php foreach($datakaryawan as $karyawan) :?>
              <?php if(!empty($karyawan)) :?>
                
              <tr align="center">
              <td><?= $no++ ?></td> 
              <td><?= $karyawan->NIK ?></td>
              <td><?= $karyawan->nama_karyawan ?></td>
              <td><?= $karyawan->jabatan ?></td>
              <td><?= $karyawan->tgl_masuk ?></td>
              <td><?= $karyawan->divisi ?></td>
              <td>
                <a href="<?= base_url('Admin/editkaryawan').'?NIK='.$karyawan->NIK; ?>">Edit</a>
                <a href="<?= base_url('Admin/hapusdata').'?NIK='.$karyawan->NIK; ?>">Hapus</a>
              </td>
              </tr>
            <?php else :?>
              <tr>
                 <td colspan="7" align="center">Data Kosong</td>
              </tr>
            <?php endif ;?>
           <?php endforeach ;?>
          </table>
          <br>
      <a href="cetak.php" target="blank" >Cetak</a>
      </div>
</body>
</html>
           
