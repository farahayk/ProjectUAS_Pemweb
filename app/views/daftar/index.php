    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">Daftar Akun</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Nama"/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Email"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Ulangi password"/>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>Saya menyetujui<a href="#" class="term-service"></a></label>
                        </div>
                        <div class="form-group">
                        <button type="submit" name="submit" id="submit" class="form-submit"><a href="<?= BASEURL; ?>/beranda" style="color:white;text-decoration:none">Daftar</a></button>
                            <!-- <input type="submit" name="submit" id="submit" class="form-submit" value="Daftar"/> -->
                        </div>
                    </form>
                    <p class="loginhere">
                        Sudah memiliki akun ? <a href="<?= BASEURL;?>/masuk" class="loginhere-link">Masuk sekarang</a>
                    </p>
                </div>
            </div>
        </section>

    </div>