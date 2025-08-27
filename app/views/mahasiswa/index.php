<div class="container mt-5">
  <div class="row">
    <div class="col-lg-8 mx-auto">
      <?php Flasher::flash(); ?>

      <!-- Tombol Tambah -->
      <button type="button" class="btn btn-primary shadow-sm mb-3 tombolTambahData"
        data-bs-toggle="modal" data-bs-target="#formModal">
        <i class="bi bi-person-plus me-1"></i> Tambah Data Mahasiswa
      </button>

      <!-- Input Search -->
      <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post" class="input-group mb-3 shadow-sm">
        <input type="text" class="form-control" name="keyword" id="searchMahasiswa" placeholder="Cari nama mahasiswa..." autocomplete="off">
        <button class="btn btn-outline-primary" type="submit" id="tombolCari">
          <i class="bi bi-search"></i>
        </button>
      </form>


      <!-- Card Daftar Mahasiswa -->
      <div class="card shadow-sm border-0 rounded-3">
        <div class="card-header bg-primary text-white fw-semibold">
          <i class="bi bi-people me-2"></i> Daftar Mahasiswa
        </div>
        <ul class="list-group list-group-flush">
          <?php foreach ($data['mhs'] as $mhs) : ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <span class="fw-medium"><?= htmlspecialchars($mhs['nama']); ?></span>
              <div class="d-flex gap-2">
                <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>"
                  class="badge bg-primary text-decoration-none px-2 py-1 shadow-sm">Detail</a>
                <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>"
                  class="badge bg-success text-decoration-none px-2 py-1 shadow-sm tampilModalUbah"
                  data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id']; ?>">Ubah</a>
                <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>"
                  class="badge bg-danger text-decoration-none px-2 py-1 shadow-sm"
                  onclick="return confirm('Yakin mau hapus?')">Hapus</a>
              </div>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- Modal Form -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content shadow-lg border-0 rounded-3">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title fw-semibold" id="formModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
        <input type="hidden" name="id" id="id">
        <div class="modal-body">
          <div class="mb-3">
            <label for="nama" class="form-label fw-medium">Nama Mahasiswa</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama">
          </div>
          <div class="mb-3">
            <label for="nim" class="form-label fw-medium">NIM</label>
            <input type="number" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label fw-medium">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email">
          </div>
          <div class="mb-3">
            <label for="jurusan" class="form-label fw-medium">Jurusan</label>
            <select class="form-select" id="jurusan" name="jurusan">
              <option value="Teknik Gulali">Teknik Gulali</option>
              <option value="Sastra Hewan">Sastra Hewan</option>
              <option value="Statistika">Statistika</option>
              <option value="Pendidikan Hutan">Pendidikan Hutan</option>
              <option value="Teknologi Kayu">Teknologi Kayu</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary" id="tombolSubmit">
            <i class="bi bi-save me-1"></i> Simpan Data
          </button>
        </div>
      </form>
    </div>
  </div>
</div>