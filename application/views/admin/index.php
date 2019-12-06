<?php if ($this->session->flashdata('flash')) : ?>
  <div class="row">
    <div class="col-md-6">
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Barang <strong> Berhasil!</strong> <?= $this->session->flashdata('flash'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>
<?php endif; ?>
<div class="container-fluid">

  <!-- Page Heading -->

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
      <div class="row mt-3">
        <div class="col-md-6">
          <a href="<?= base_url(); ?>admin/tambah" class="btn btn-primary">Tambah Mahasiswa</a>
        </div>
      </div>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nama Barang</th>
              <th>Kode Item</th>
              <th>merk</th>
              <th>Jenis barang</th>
              <th>Bahan</th>
              <th>Warna</th>
              <th>Tahun</th>
              <th>Harga</th>
              <th>Nama Bidang</th>
              <th>Opsi</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Nama Barang</th>
              <th>Kode Item</th>
              <th>merk</th>
              <th>Jenis barang</th>
              <th>Bahan</th>
              <th>Warna</th>
              <th>Tahun</th>
              <th>Harga</th>
              <th>Nama Bidang</th>
              <th>Opsi</th>
            </tr>
          </tfoot>
          <tbody>
            <?php foreach ($barang as $b) : ?>
              <tr>
                <td><?= $b['nama_barang']; ?></td>
                <td><?= $b['kode_item']; ?></td>
                <td><?= $b['merk']; ?></td>
                <td><?= $b['jenis_barang']; ?></td>
                <td><?= $b['bahan']; ?></td>
                <td><?= $b['warna']; ?></td>
                <td><?= $b['tahun']; ?></td>
                <td><?= $b['harga']; ?></td>
                <td><?= $b['nama_bidang']; ?></td>
                <td> <a href="<?= base_url(); ?>admin/hapus/<?= $b['id']; ?> " class="badge badge-danger float-right" onclick="return confirm('yakin ?');">Hapus</a>
                  <a href="<?= base_url(); ?>admin/ubah/<?= $b['id']; ?> " class="badge badge-success float-right">Ubah</a></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>