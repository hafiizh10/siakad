<!DOCTYPE html>
<html lang="en">

<head></head>

<body>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>NAMA MAHASISWA</th>
            <th>NIM</th>
            <th>TANGGAL LAHIR</th>
            <th>JURUSAN</th>
            <th>EMAIL</th>
            <th>NOMOR TELEPON</th>
        </tr>
        <?php $no = 1;
        foreach ($mahasiswa as $mhs) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $mhs->nama ?></td>
                <td><?= $mhs->nim ?></td>
                <td><?= $mhs->tgl_lahir ?></td>
                <td><?= $mhs->jurusan ?></td>
                <td><?= $mhs->email ?></td>
                <td><?= $mhs->no_telp ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>