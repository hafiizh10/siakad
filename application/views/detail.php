<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Data mahasiswa
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Data mahasiswa</li>
        </ol>
    </section>

    <section class="content">
        <h4><strong>DETAIL DATA mahasiswa</strong></h4>
        <table class="table">
            <tr>
                <th>Nama Lengkap</th>
                <td><?= $detail->nama ?></td>
            </tr>
            <tr>
                <th>NIM</th>
                <td><?= $detail->nim ?></td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td><?= $detail->tgl_lahir ?></td>
            </tr>
            <tr>
                <th>Jurusan</th>
                <td><?= $detail->jurusan ?></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td><?= $detail->alamat ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?= $detail->email ?></td>
            </tr>
            <tr>
                <th>Nomor Telepon</th>
                <td><?= $detail->no_telp ?></td>
            </tr>
            <tr>
                <td>Foto</td>
                <td><img src="<?= base_url(); ?>assets/foto/<?= $detail->foto; ?>" width="150" height="150"></td>
            </tr>
        </table>
        <a href="<?= site_url('mahasiswa') ?>" class="btn btn-primary">Kembali</a>
    </section>
</div>