<!DOCTYPE html>
<html>
<head>
    <title>Halaman input data karyawan</title>
</head>
<body>
<h2 style="padding: 1px 20px;">Input Data Karyawan</h2>
<form action="<?= base_url('Admin/inputdata');?>" method="POST">
<table style="padding: 1px 20px;">
    <tr>
        <td>NIK</td>
        <td>:</td>
        <td><input type="text" name="NIK" placeholder="NIK"></td>
    </tr>
    <tr>
        <td>Nama Karyawan</td>
        <td>:</td>
        <td><input type="text" name="nama_karyawan" placeholder="Nama Karyawan"></td>
    </tr>
    <tr>
        <td>Jabatan</td>
        <td>:</td>
        <td><input type="text" name="jabatan" placeholder="Jabatan"></td>
    </tr>
    <tr>
        <td>Tanggal Masuk</td>
        <td>:</td>
        <td><input type="date" name="tgl_masuk" placeholder="Tanggal Masuk" ></Ld>
    </tr>
    <tr>
        <td>Divisi</td>
        <td>:</td>
        <td><input type="text" name="divisi" placeholder="Divisi" ></td>
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
