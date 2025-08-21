<div class="container my-5">
  <div class="card shadow-lg border-0 rounded-4">
    <div class="card-body p-5">
      <div class="row align-items-center">
        <!-- Foto -->
        <div class="col-md-4 text-center mb-3 mb-md-0">
          <img src="<?= BASEURL ?>/img/foto-revo.jpg" alt="Foto Revo" 
               class="img-fluid shadow" style="max-width: 200px;">
        </div>
        <!-- Teks -->
        <div class="col-md-8 text-center text-md-start">
          <h1 class="display-5 fw-bold text-primary">About Me</h1>
          <hr class="w-25 mb-4 ms-md-0 mx-auto">
          <p class="lead">
            Halo, nama saya <span class="fw-bold text-success"><?= $nama ?></span>, 
            hobi saya <span class="fw-bold text-info"><?= $hobi ?></span>, 
            umur saya <span class="fw-bold text-danger"><?= $umur ?></span> tahun.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
