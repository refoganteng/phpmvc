<div class="container mt-4">

  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6">

      <button type="button" class="btn btn-primary shadow-sm mb-3 tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
        <i class="bi bi-person-plus me-1"></i> Tambah Data Mahasiswa
      </button>

      <h3 class="mb-3 fw-semibold text-primary border-bottom pb-2">Daftar Mahasiswa</h3>
      <ul class="list-group shadow-sm rounded">
        <?php foreach ($data['mhs'] as $mhs) : ?>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <span class="fw-medium"><?= $mhs['nama']; ?></span>
            <div class="d-flex gap-2">
              <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge bg-primary text-decoration-none px-2 py-1 shadow-sm">Detail</a>
              <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge bg-success text-decoration-none px-2 py-1 shadow-sm tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id']; ?>">Ubah</a>
              <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge bg-danger text-decoration-none px-2 py-1 shadow-sm" onclick="return confirm('yakin?')">Hapus</a>
            </div>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>




<!-- formModal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content shadow-lg border-0 rounded-3">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title fw-semibold" id="formModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
        <input type="hidden" name="id" id="id">
        <div class="modal-body">
          <div class="form-group mb-3">
            <label for="nama" class="form-label fw-medium">Nama Mahasiswa</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>
          <div class="form-group mb-3">
            <label for="nim" class="form-label fw-medium">NIM</label>
            <input type="number" class="form-control" id="nim" name="nim">
          </div>
          <div class="form-group mb-3">
            <label for="email" class="form-label fw-medium">Email</label>
            <input type="text" class="form-control" id="email" name="email">
          </div>
          <div class="form-group mb-3">
            <label for="jurusan" class="form-label fw-medium">Jurusan</label>
            <select class="form-select" id="jurusan" name="jurusan">
              <option value="Teknik Gulali">Teknik Gulali</option>
              <option value="Sastra Hewan">Sastra Hewan</option>
              <option value="Statistika">Statistika</option>
              <option value="Pendidikan Hutan">Statistika</option>
              <option value="Teknologi Kayu">Statistika</option>
            </select>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary" id="tombolSubmit"><i class="bi bi-save me-1"></i> Tambah Data</button>
        </div>
      </form>
    </div>
  </div>
</div>