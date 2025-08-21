<section class="bg-light text-dark d-flex align-items-center" style="height: 60vh;">
  <div class="container text-center">
    <h1 class="display-3 fw-bold">Selamat Datang 👋</h1>
    <p class="lead mt-3 mb-4">
      Halo, nama saya <?= $data['nama']; ?>.
    </p>
    <a href="<?= BASEURL ?>" class="btn btn-primary btn-lg me-2">Home</a>
    <a href="<?= BASEURL ?>/mahasiswa" class="btn btn-warning btn-lg me-2">Mahasiswa</a>
    <a href="<?= BASEURL ?>/about" class="btn btn-outline-secondary btn-lg">About</a>
  </div>
</section>