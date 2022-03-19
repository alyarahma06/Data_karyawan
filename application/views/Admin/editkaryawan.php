
<!DOCTYPE html>
<html>
<head>
    <title>Halaman input data karyawan</title>
</head>
<body>
<h2 style="padding: 1px 20px;">Input Data Karyawan</h2>
<form action="<?= base_url('Admin/editdata');?>" method="POST">
<table style="padding: 1px 20px;">
    <tr>
        <td>NIK</td>
        <td>:</td>
        <td><input type="text" name="NIK" placeholder="NIK" value="<?= $data[0]->NIK?>"></td>
    </tr>
    <tr>
        <td>Nama Karyawan</td>
        <td>:</td>
        <td><input type="text" name="nama_karyawan" placeholder="NamaKaryawan" value="<?= $data[0]->nama_karyawan?>"></td>
    </tr>
    <tr>
        <td>Jabatan</td>
        <td>:</td>
        <td><input type="text" name="jabatan" placeholder="Jabatan" value="<?= $data[0]->jabatan?>"></td>
    </tr>
    <tr>
        <td>Tanggal Masuk</td>
        <td>:</td>
        <td><input type="date" name="tgl_masuk" placeholder="TanggalMasuk" value="<?= $data[0]->tgl_masuk?>" ></Ld>
    </tr>
    <tr>
        <td>Divisi</td>
        <td>:</td>
        <td><input type="text" name="divisi" placeholder="Divisi" value="<?= $data[0]->divisi?>" ></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td><input type="submit" name="simpan" value="Simpan"></td>
    </tr>
</table>
</form>

</body>
</html>
