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
      <!-- <div class="details">
        <table>
          <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?= $data['akun']['nama']; ?></td>
          </tr>
          <tr>
            <td>Email</td>
            <td>:</td>
            <td><?= $data['akun']['email']; ?></td>
          </tr>
          <tr>
            <td>Password</td>
            <td>:</td>
            <td><?= $data['akun']['password']; ?></td>
          </tr>
          <tr>
            <td>Usia</td>
            <td>:</td>
            <td><?= $data['akun']['usia']; ?></td>
          </tr>
          <tr>
            <td>Kota</td>
            <td>:</td>
            <td><?= $data['akun']['kota']; ?></td>
          </tr>
          <tr>
            <td>Pekerjaan</td>
            <td>:</td>
            <td><?= $data['akun']['pekerjaan']; ?></td>
          </tr>
        </table> -->
        <div class="details">
          <ul>
            <li><?= $data['akun']['nama']; ?></li>
            <li><?= $data['akun']['email']; ?></li>
            <li><?= $data['akun']['password']; ?></li>
            <li><?= $data['akun']['usia']; ?></li>
            <li><?= $data['akun']['kota']; ?></li>
            <li><?= $data['akun']['pekerjaan']; ?></li>
          </ul>
        </div>
      </div>

    </div>
  </div>

</section>

</main><!-- End #main -->