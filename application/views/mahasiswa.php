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
        <?= $this->session->flashdata('message'); ?>
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah data mahasiswa</button>

        <a class="btn btn-danger" href="<?= base_url('mahasiswa/print') ?>" target="_blank"><i class="fa fa-print"></i> Print</a>

        <a class="btn btn-warning" href="<?= base_url('mahasiswa/pdf') ?>" target="_blank"><i class="fa fa-file"></i> Export PDF</a>

        <div class="navbar-form navbar-right">
            <?= form_open('mahasiswa/search') ?>
            <input type="text" name="keyword" class="form-control" placeholder="Search">
            <button type="submit" class="btn btn-success">Cari</button>
            <?= form_close(); ?>
        </div>

        <table class="table table-bordered table-responsive">
            <tr>
                <th>NO</th>
                <th>NAMA MAHASISWA</th>
                <th>NIM</th>
                <th>TANGGAL LAHIR</th>
                <th>JURUSAN</th>
                <th>AKSI</th>
            </tr>
            <?php $no = 1;
            foreach ($mahasiswa as $mhs) :
            ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $mhs->nama ?></td>
                    <td><?= $mhs->nim ?></td>
                    <td><?= $mhs->tgl_lahir ?></td>
                    <td><?= $mhs->jurusan ?></td>
                    <td style="width: 10px;" onclick="javascript: return confirm('Anda yakin hapus?')"><?= anchor('mahasiswa/hapus/' . $mhs->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                    <td style="width: 10px;"><?= anchor('mahasiswa/edit/' . $mhs->id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
                    <td><?= anchor('mahasiswa/detail/' . $mhs->id, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA MAHASISWA</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= form_open_multipart('mahasiswa/tambah_aksi'); ?>
                    <div class="form-group">
                        <label>Nama Mahasiswa</label>
                        <input type="text" name="nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>NIM</label>
                        <input type="text" name="nim" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Jurusan</label>
                        <select class="form-control" name="jurusan">
                            <option>Sistem Informasi</option>
                            <option>Teknik Informasi</option>
                            <option>Teknik Komputer</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Nomor Telepon</label>
                        <input type="text" name="no_telp" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cencel</button>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>