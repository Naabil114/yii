<?php

/** @var yii\web\View $this */

use frontend\assets\AppAsset;
use yii\bootstrap5\Html;

$this->title = 'Ferfustakaan';
AppAsset::register($this);

?>
<?php $this->head() ?>

<div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="#" class="logo">
                        <h1>Ferfustakaan</h1>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Serach Start ***** -->
                    <div class="search-input">
                      <form id="search" action="#">
                        <input type="text" placeholder="Cari..." id='searchText' name="searchKeyword" onkeypress="handle" />
                        <i class="fa fa-search"></i>
                      </form>
                    </div>
                    <!-- ***** Serach Start ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li class="scroll-to-section"><a href="#top" class="active">Beranda</a></li>
                      <li class="scroll-to-section"><a href="#courses">VISI & MISI</a></li>
                      <li class="scroll-to-section"><?= Html::a('Katalog Buku',['/site/about'])?></li>
                      <li class="scroll-to-section"><a href="#contact">Saran</a></li>
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-carousel owl-banner">
            <div class="item item-1">
              <div class="header-text">
                <span class="category">Koleksi Lengkap</span>
                <h2>Jangan Anggurin Seri Baru Buku Favorit</h2>
                <p>Koleksi buku perpustakaan lengkap mulai dari buku sejarah, buku pelajaran, novel, komik, hingga manga tersedia di sini.</p>
              </div>
            </div>
            <div class="item item-2">
              <div class="header-text">
                <span class="category">Sunyi dan Bersih</span>
                <h2>Suasana Tenang Fokus Dalam Literasi.</h2>
                <p>Tempat nyaman bersih dan tenang membuat pengunjung betah untuk membaca langsung di perpustakaan.</p>
              </div>
            </div>
            <div class="item item-3">
              <div class="header-text">
                <span class="category">Cocok untuk Belajar</span>
                <h2>Tersedia Meeting Table Untuk Berdiskusi</h2>
                <p>Menyediakan Meeting Table untuk pengunjung yang ingin berdiskusi atau bahkan mengerjakan projek.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<section id="courses">
  <div class="section about-us pt-5">
    <div class="container">
      <div class="row">
      <div class="col-lg-5 align-self-center">
          <div class="section-heading">
            <h6>About Us</h6>
            <h2>VISI</h2>
            <p>Perpustakaan ini berkomitmen untuk menjadi pusat ilmu pengetahuan yang menyediakan koleksi lengkap dan mendukung literasi. Kami bertujuan untuk menjadi ruang komunitas yang inklusif dan terus berinovasi dalam layanan perpustakaan. Melalui integrasi teknologi, kami meningkatkan aksesibilitas dan pengalaman pengguna.</p>
          </div>
        </div>
        <div class="col-lg-6 offset-lg-1">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Menjadi Sumber Ilmu Pengetahuan Terdepan
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Perpustakaan ini bertujuan menjadi pusat sumber ilmu yang menyediakan koleksi lengkap dan terkini untuk mendukung pembelajaran dan penelitian.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Mendorong Budaya Literasi
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                mendorong masyarakat agar lebih gemar membaca dan menulis, sehingga meningkatkan literasi dan pengetahuan umum.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Menjadi Ruang Komunitas yang Inklusi  
              </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                Perpustakaan ini berambisi menjadi ruang yang terbuka untuk semua kalangan, mendukung pertukaran ide dan budaya.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Inovasi Layanan Perpustakaan
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                Kami berupaya untuk terus berinovasi dalam memberikan layanan perpustakaan yang efektif dan menyenangkan.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section about-us">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-1">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne">
                Menyediakan Akses Informasi yang Mudah dan Cepat
                </button>
              </h2>
              <div id="collapseOne1" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                Kami berkomitmen untuk menyediakan akses ke berbagai sumber informasi secara efisien, baik secara fisik maupun digital.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo">
                Mendukung Pendidikan Sepanjang Hayat
                </button>
              </h2>
              <div id="collapseTwo2" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                Perpustakaan ini berupaya untuk mendukung pendidikan sepanjang hayat melalui penyediaan sumber belajar yang beragam dan relevan dengan kebutuhan masyarakat.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree3" aria-expanded="false" aria-controls="collapseThree">
                Memfasilitasi Penelitian dan Pengembangan
                </button>
              </h2>
              <div id="collapseThree3" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                Kami bertekad untuk menyediakan fasilitas dan sumber daya yang mendukung kegiatan penelitian dan pengembangan.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour4" aria-expanded="false" aria-controls="collapseFour">
                Mengintegrasikan Teknologi dalam Layanan
                </button>
              </h2>
              <div id="collapseFour4" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                Misi kami adalah mengintegrasikan teknologi terkini untuk memperkaya pengalaman pengguna dan meningkatkan aksesibilitas koleksi.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <div class="section-heading">
            <h6>About Us</h6>
            <h2>MISI</h2>
            <p>menyediakan akses informasi yang mudah dan mendukung pendidikan sepanjang hayat. Kami berdedikasi untuk memfasilitasi penelitian dan pengembangan serta mengintegrasikan teknologi terkini dalam layanan kami. Tujuan kami adalah untuk memperkaya pengalaman pengguna dan memperluas akses ke sumber belajar.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  <div class="section fun-facts">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="wrapper">
            <div class="row d-flex justify-content-evenly">
              <div class="col-lg-3 col-md-6">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="150000" data-speed="1000"></h2>
                   <p class="count-text ">Pengunjung</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="1000" data-speed="1000"></h2>
                  <p class="count-text ">Buku</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section testimonials">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="owl-carousel owl-testimonials">
            <div class="item">
              <p>“ Semakin banyak Anda membaca, semakin banyak hal yang akan Anda ketahui. Semakin banyak yang Anda pelajari, semakin banyak tempat yang akan Anda kunjungi. ”</p>
              <div class="author">
                <span class="category">Penulis</span>
                <h4>Dr. Seuss</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <div class="section-heading">
            <h2>Masih Enggan Untuk Membaca?</h2>
            <p>Kunjungi Perpustakaan mulailah hal baru yang lebih produktif serta menyenangkan.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

<section id="contact">
  <div class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6  align-self-center">
          <div class="section-heading">
            <h6>Contact Us</h6>
            <h2>Layanan Non-Stop</h2>
            <p>Beri tahu kami berupa saran, kritik, masukan, atau bahkan anda dapat melakukan permintaan buku yang dapat kami adakan.</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="contact-us-content">
            <form id="contact-form" action="" method="">
              <div class="row">
                <div class="col-lg-12">
                  <fieldset>
                    <input type="name" name="name" id="name" placeholder="Nama" autocomplete="on" required>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Email" required="">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <textarea name="message" id="message" placeholder="Pesan"></textarea>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <a id="linkWa" href="https://wa.me/+6285643785183"><button type="button" class="orange-button">Kirim Pesan</button></a>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2024 Ferfustakaan. All rights reserved. &nbsp;&nbsp;&nbsp;</p>
      </div>
    </div>
  </footer>
  <script>
    document.getElementById('message').onkeyup = function(){

      let name = document.getElementById('name').value;
      let email = document.getElementById('email').value;
      let message = document.getElementById('message').value;
      document.getElementById('linkWa').setAttribute("href", `https://wa.me/+6285643785183?text=Nama : ${name}%0aEmail : ${email}%0aPesan : ${message}`)
    }
  </script>