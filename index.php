<!DOCTYPE html>
<html lang="id-ID">
  <head>
    <meta charset="utf-8">
    <title>BMTLoop</title>
    <link tipy="text/css" rel="stylesheet" href="style.css">
  </head>
  <body>
    <!-- NOTE: Ini adalah project pertama saya tentang website komunitas music-->

    <!-- NOTE: Membungkus Header dan Nav di dalam satu box -->
    <div id="contheadnav">
      <div id="headnavleft">
        <!-- NOTE: Hanya untuk memisahkan background -->
      </div>
      <div id="headnavright">
        <!-- NOTE: Hanya untuk memisahkan background -->
      </div>

      <!-- NOTE: Contener Ngambang -->
      <div id="headnavcont">
        <div id="fixheader">
          <!-- NOTE: Ini adalah Bagian Header Website -->
          <div id="header">
            <h1>BMTLoop</h1>
          </div>

          <!-- NOTE: Ini adalah bagian navigasi -->
          <div id="nav">
            <ul>
                <li><a href="#">Tentang</a></li>
                <li><a href="#">Komunitas</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Toko</a></li>
                <li><a href="#">Kontak</a></li>
                <li class="disablemenu"><a href="#">Daftar</a></li>
                <li class="red">
                  <a href="">login</a>
                  <div id="contlogin">
                    <form action="">
                    <label for="usermail">email</label>
                    <input type="email" id="usermail" placeholder="email@domain.com">
                    <label for="userpass">Password</label>
                    <input type="password" id="userpass" placeholder="password">
                    <div id="cbcont">
                      <input type="checkbox" id="checkbox" value="">
                      <label for="checkbox">ingat saya</label>
                    </div>
                    <div id="subinlog">
                      <div id="subpendek">
                        <input type="submit" value="login">
                      </div>
                      <div id="subpanjang">
                        <a href="">Lupa Password?</a>
                      </div>
                    <div>
                    </form>
                  </div>
                </li>
                <li class="disablemenu"><a href="#">Logout</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- NOTE: Ini adalah bagian main beranda website untuk form daftar -->
    <div id="main">
      <div id="maincont">
        <!-- NOTE: Saya Menambahkan sedikit ulasan singkat mengenai Website -->
        <div id="ajakan">
          <h3>Selamat Datang</h3>
          <p>Bagi kamu yang punya hobi bermusik, dan ingin punya karya sendiri, daftar yuk di BMTLoop, dan share hasil karya kamu.</p>
        </div>
        <div id="formdaftar">
          <!-- NOTE: Ini adalah form untuk pendaftaran user -->
          <h3>Daftarkan diri anda di sini</h3>
          <form class="forcont" action="" method="post">
            <div class="lblone">
              <label for="nama_depan">Nama Depan</label>
            </div>
            <div class="inone">
              <input type="text" placeholder="Nama Depan" id="nama_depan" required>
            </div>
            <div class="lblone">
              <label for="nama_belakang">Nama Belakang</label>
            </div>
            <div class="inone">
              <input type="text" placeholder="Nama Belakang" id="nama_belakang" required>
            </div>
            <div class="lbltwo">
              <label for="tanggal_lahir">Tgl/</label>
            </div>
            <div class="lbltwo">
              <label for="bulan_lahir">Bln/</label>
            </div>
            <div class="lbltwo">
              <label for="tahun_lahir">Thn Lahir</label>
            </div>
            <div id="stanggal">
              <select class="tgl" name="tanggal" id="tanggal_lahir">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
              </select>
              <select class="bln" name="Bulan Lahir" id="bulan_lahir">
                <option value="Januari">Januari</option>
                <option value="Februari">Februari</option>
                <option value="Maret">Maret</option>
                <option value="April">April</option>
                <option value="Mei">Mei</option>
                <option value="Juni">Juni</option>
                <option value="Juli">Juli</option>
                <option value="Agustus">Agustus</option>
                <option value="September">September</option>
                <option value="Oktober">Oktober</option>
                <option value="November">November</option>
                <option value="Desember">Desember</option>
              </select>
              <select class="thn" name="Tahun Lahir" id="tahun_lahir">
                <option value="1980">1980</option>
                <option value="1981">1981</option>
                <option value="1982">1982</option>
                <option value="1983">1983</option>
                <option value="1984">1984</option>
                <option value="1985">1985</option>
                <option value="1986">1986</option>
                <option value="1987">1987</option>
                <option value="1988">1988</option>
                <option value="1989">1989</option>
                <option value="1990">1990</option>
                <option value="1991">1991</option>
              </select>
            </div>
            <div class="lbltree">
              <label for="jenis_kelamin">Jenis Kelamin</label>
            </div>
            <div id="jeniskelamin">
              <select name="Jenis Kelamin" id="jenis_kelamin">
                <option value="Laki-Laki" >Laki-Laki</option>
                <option value="Perempuan" >Perempuan</option>
              </select>
            </div>
            <div class="lblone">
              <label for="email">Email</label>
            </div>
            <div class="inone">
              <input type="email" id="email" placeholder="email@domain.com" required>
            </div>
            <div class="lblone">
              <label for="password">Password</label>
            </div>
            <div class="inone">
              <input type="password" id="password" required>
            </div>
            <div class="lblone">
              <label for="conf_password">Konfirmasi Password</label>
            </div>
            <div class="inone">
              <input type="password" id="conf_password" required>
            </div>
            <div id="inceksub">
              <div class="incek">
                <input type="checkbox" id="checked" required>
              </div>
              <div id="lblincek">
                <label for="checked"><sapan>Saya setuju mendaftarkan diri serta taat pada <a href="#">aturan</a> website ini.</span></label>
              </div>
              <div id="insub">
                <input type="submit" value="Daftar">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- FIXME: Ini adalah video review -->
    <div id="review">
      <div id="revcont">
        <video autoplay>
          <source src="https://datrosumendong.github.io/media/review.mp4" type="video/mp4">
        </video>
        <div id="viewtxt">
          <h3>Review BMTLoop</h3>
          <p>Jika masih ragu untuk daftarkan diri silahkan tonton video berikut hingga selesai, dijamin gak akan nyesel guys, banyak belajar ya banyak tahu.</p>
        </div>
      </div>
    </div>

    <!-- NOTE: Ini adalah List sebelum footer -->
    <div class="menfooter">
      <div class="menfocont">
        <div class="menone">
          <h2>BMTLoop</h2>
          <ul>
            <li><a href="">Tentang BMTLoop</a></li>
            <li><a href="">Aturan Pengguna</a></li>
            <li><a href="">Kebijakan & Privasi</a></li>
            <li><a href="">Identitas Brand</a></li>
          </ul>
        </div>
        <div class="menone">
          <h2>Toko</h2>
          <ul>
            <li><a href="">Cara Belanja</a></li>
            <li><a href="">Pembayaran</a></li>
            <li><a href="">Cara Pengiriman</a></li>
            <li><a href="">Keamanan</a></li>
          </ul>
        </div>
        <div class="menone">
          <h2>Form Diskusi</h2>
          <ul>
            <li><a href="">Tentang Form Diskusi</a></li>
            <li><a href="">Aturan dalam Berdiskusi</a></li>
            <li><a href="">Hasil Karya</a></li>
            <li><a href="">Artis BMTLoop</a></li>
          </ul>
        </div>
        <div class="menone">
          <h2>Kontak Admin</h2>
          <ul>
            <li><a href="">Datros Sumendong</a></li>
            <li><a href="">dsumendong@gmail.com</a></li>
            <li><a href="">+62822-9311-0414</a></li>
            <li><a href="">Jl. Lokongbanua No. 2D, Kel. Akesimbeka Kec. Siau Timur Kab. Kepl. SITARO</a></li>
          </ul>
        </div>
      </div>
    </div>

    <!-- NOTE: Saya akan menambahkan navigasi sebelum footer untuk media sosial -->
    <div class="medmenu">
      <div class="medmenucont">
        <h1>BMTLoop</h1>
        <div class="tmedmenicon">
          <span class="icon">
            <img src="https://datrosumendong.github.io/icon/ggl.png" alt="Google Plus">
            <img src="https://datrosumendong.github.io/icon/ins.png" alt="Instagram">
            <img src="https://datrosumendong.github.io/icon/ytb.png" alt="Youtube">
            <img src="https://datrosumendong.github.io/icon/twt.png" alt="Twitter">
            <img src="https://datrosumendong.github.io/icon/fb.png" alt="Facebook">
          </span>
          <p>Temukan BMTLoop di</p>
        </div>
      </div>
    </div>
    <footer>
      <p> &#169 Copyright 2018 by. Datros Sumendong <?php require_once "db.php"; ?></p>
    </footer>
  </body>
</html>
