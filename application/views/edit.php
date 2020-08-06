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
        <?php foreach ($mahasiswa as $mhs) : ?>
            <?= form_open_multipart('mahasiswa/update'); ?>
            <div class="form-group">
                <label>Nama mahasiswa</label>
                <input type="hidden" name="id" class="form-control" value="<?= $mhs->id; ?>">
                <input type="text" name="nama" class="form-control" value="<?= $mhs->nama; ?>">
            </div>
            <div class="form-group">
                <label>NIM</label>
                <input type="text" name="nim" class="form-control" value="<?= $mhs->nim; ?>">
            </div>
            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" class="form-control" value="<?= $mhs->tgl_lahir; ?>">
            </div>
            <div class="form-group">
                <label>Jurusan</label>
                <select class="form-control" name="jurusan">
                    <option <?php if ($mhs->jurusan == 'Sistem Informasi') echo 'selected'; ?>> Sistem Informasi</option>
                    <option <?php if ($mhs->jurusan == 'Teknik Informasi') echo 'selected'; ?>> Teknik Informasi</option>
                    <option <?php if ($mhs->jurusan == 'Teknik Komputer') echo 'selected'; ?>> Teknik Komputer</option>
                </select>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control" value="<?= $mhs->alamat; ?>">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?= $mhs->email; ?>">
            </div>
            <div class="form-group">
                <label>Nomor Telepon</label>
                <input type="text" name="no_telp" class="form-control" value="<?= $mhs->no_telp; ?>">
            </div>
            <div class="form-group">
                <label>Upload Foto</label>
                <input type="file" name="foto" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <?= form_close(); ?>
        <?php endforeach; ?>
    </section>
</div>