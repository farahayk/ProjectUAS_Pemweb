<main id="main" class="main-page">

<!-- ======= Speaker Details Sectionn ======= -->
<section id="speakers-details">
  <div class="container">
    <div class="section-header">
      <h2>Data Profil</h2>
    </div>

    <div class="row">
      <div class="col-md-6">
        <img src="http://localhost/ProjectUAS_Pemweb/public/assets/img/speakers/papuma.jpg" alt="Speaker 1" class="img-fluid">
      </div>

      <div class="col-md-6">
        <div class="details">
          <?php foreach ($data['user'] as $user) : ?>
          <h2><?= $user['nama'];?></h2>
          <?php endforeach; ?>
          <?php foreach ($data['user'] as $user) : ?>
          <p><?= $user['email'];?></p>
          <?php endforeach; ?>
        </div>
      </div>

    </div>
  </div>

</section>

</main><!-- End #main -->