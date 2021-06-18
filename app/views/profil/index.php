<main id="main" class="main-page">

<!-- ======= Speaker Details Sectionn ======= -->
<section id="speakers-details">
  <div class="container">
    <div class="section-header">
      <h2>Data Profil</h2>
    </div>

    <div class="row">
      <div class="col-md-6">
        <img src="<?= BASEURL;?>/assets/img/irene.png" alt="Speaker 1" class="img-fluid">
      </div>

      <div class="col-md-6">
        <!-- <div class="details"> -->
          <ul>
            <li class="details"><?= $data['akun']['nama']; ?></li> <br><br>
            <li class="details"><?= $data['akun']['email']; ?></li> <br><br>
            <li class="details"><?= $data['akun']['password']; ?></li> <br><br>
            <li class="details"><?= $data['akun']['usia']; ?></li> <br><br>
            <li class="details"><?= $data['akun']['kota']; ?></li> <br><br>
            <li class="details"><?= $data['akun']['pekerjaan']; ?></li> <br><br>
          </ul>
        </div>
      </div>

    </div>
  </div>

</section>

</main><!-- End #main -->