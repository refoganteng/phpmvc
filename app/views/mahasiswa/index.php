<div class="container mt-5">
  <div class="row">
    <div class="col-6">
      <h3 class="mb-4">Daftar Mahasiswa</h3>

      <?php foreach ($data['mhs'] as $mhs): ?>
        <div class="card mb-3 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title text-primary"><?= $mhs['nama']; ?></h5>
            
            <div class="row mb-1">
              <div class="col-4 fw-bold">NIM</div>
              <div class="col-8">: <?= $mhs['nim']; ?></div>
            </div>
            <div class="row mb-1">
              <div class="col-4 fw-bold">Email</div>
              <div class="col-8">: <?= $mhs['email']; ?></div>
            </div>
            <div class="row mb-1">
              <div class="col-4 fw-bold">Jurusan</div>
              <div class="col-8">: <?= $mhs['jurusan']; ?></div>
            </div>
            
          </div>
        </div>
      <?php endforeach; ?>

    </div>
  </div>
</div>
