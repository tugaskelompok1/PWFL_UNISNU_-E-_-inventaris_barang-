<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Form Tambah Barang</h1>
    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>
    <form action="" method="post">
        <div class="form-group row">
            <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
            <div class="col-sm-10">
                <input type="teks" class="form-control" id="nama_barang" name="nama_barang">
                <small class="form-text text-danger"><?= form_error('nama_barang'); ?></small>
            </div>
        </div>
        <div class="form-group row">
            <label for="kode_item" class="col-sm-2 col-form-label">Kode Item</label>
            <div class="col-sm-10">
                <input type="teks" class="form-control" id="kode_item" name="kode_item">
                <small class="form-text text-danger"><?= form_error('kode_item'); ?></small>
            </div>
        </div>
        <div class="form-group row">
            <label for="merk" class="col-sm-2 col-form-label">Merk</label>
            <div class="col-sm-10">
                <input type="teks" class="form-control" id="merk" name="merk">
                <small class="form-text text-danger"><?= form_error('merk'); ?></small>
            </div>
        </div>
        <div class="form-group row">
            <label for="jenis_barang" class="col-sm-2 col-form-label">Jenis Barang</label>
            <div class="col-sm-10">
                <input type="teks" class="form-control" id="jenis_barang" name="jenis_barang">
                <small class="form-text text-danger"><?= form_error('jenis_barang'); ?></small>
            </div>
        </div>
        <div class="form-group row">
            <label for="Bahan" class="col-sm-2 col-form-label">Bahan</label>
            <div class="col-sm-10">
                <input type="teks" class="form-control" id="bahan" name="bahan">
                <small class="form-text text-danger"><?= form_error('bahan'); ?></small>
            </div>
        </div>
        <div class="form-group row">
            <label for="warna" class="col-sm-2 col-form-label">Warna</label>
            <div class="col-sm-10">
                <input type="teks" class="form-control" id="warna" name="warna">
                <small class="form-text text-danger"><?= form_error('warna'); ?></small>
            </div>
        </div>
        <div class="form-group row">
            <label for="tahun" class="col-sm-2 col-form-label">Tahun</label>
            <div class="col-sm-10">
                <input type="teks" class="form-control" id="tahun" name="tahun">
                <small class="form-text text-danger"><?= form_error('tahun'); ?></small>
            </div>
        </div>
        <div class="form-group row">
            <label for="harga" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-10">
                <input type="teks" class="form-control" id="harga" name="harga">
                <small class="form-text text-danger"><?= form_error('harga'); ?></small>
            </div>
        </div>
        <div class="form-group row">
            <label for="nama_bidang" class="col-sm-2 col-form-label">Nama Bidang</label>
            <div class="col-sm-10">
                <input type="teks" class="form-control" id="nama_bidang" name="nama_bidang">
                <small class="form-text text-danger"><?= form_error('nama_bidang'); ?></small>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </div>
    </form>

</div>
<!-- /.container-fluid -->

</div>