<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use frontend\assets\AppAsset;

$this->title = 'Katalog Buku';
$this->params['breadcrumbs'][] = $this->title;
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
          <!-- ***** Serach Start ***** -->
          <!-- ***** Menu Start ***** -->
          <ul class="nav">
            <li class="scroll-to-section"><?= Html::a('Beranda', ['/site/index']) ?></li>
            <li class="scroll-to-section"><?= Html::a('Katalog Buku', ['/site/about'], ['class' => 'active']) ?></li>
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
              <div class="search-input">
                <fieldset>
                  <input class="form-control form-control-lg" type="text" placeholder="Cari Buku" id='cari_buku'
                    name="cari" value="<?= (!empty($_GET['search']) ? $_GET['search'] : "") ?>" autofocus>
                  <!-- <input type="name" name="name" id="cari_buku" placeholder="Nama" autocomplete="on" required> -->
                </fieldset>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container my-5 d-flex justify-content-center">
  <div class="card col-10">
    <div class="card-body">
      <table class="table" id="tabel">
        <thead>
          <tr>
            <th scope="col">KODE BUKU</th>
            <th scope="col">JUDUL</th>
            <th scope="col">KATEGORI</th>
            <th scope="col">PENGARANG</th>
            <th scope="col">PENERBIT</th>
            <th scope="col">TAHUN TERBIT</th>
          </tr>
        </thead>
        <tbody>

        </tbody>
      </table>
    </div>
  </div>
</div>
<?php

// $dataBuku = (new \yii\db\Query())->select(['*'])
//   ->from('buku')
//   ->where(["kd_buku" => 'BK-001'])
//   ->all();

$allDataBuku = [];

?>
<footer>
  <div class="container">
    <div class="col-lg-12">
      <p>Copyright © 2024 Ferfustakaan. All rights reserved. &nbsp;&nbsp;&nbsp;</p>
    </div>
  </div>
</footer>

<script>
  let judul;
  let judulBuku;
  let kategoriBuku;
  let kodeBuku;
  let penerbitBuku;
  let pengarangBuku;
  let tahunTerbit;

  let dataBuku;


  document.getElementById('cari_buku').addEventListener("keyup", function () {
    var tabel = document.getElementById('tabel');
    var rowCount = tabel.rows.length;
    for (let i = rowCount - 1; i > 0; i--) {
      tabel.deleteRow(i)
    }

    
    if (this.value != "") {
      
      data = this.value

      $.ajax({
        url: "/advanced/advanced/frontend/web/index.php?r=site%2Fabout",
        method: 'GET',
        data: {
          search: data
        },
        success: function(response){
          url = 'http://localhost/advanced/advanced/frontend/web/index.php?r=site%2Fabout'+ '&search=' + data;
          history.pushState({},'', url)       
        }
      })

      dataBuku = <?=  json_encode((new \yii\db\Query())->select(['*'])
              ->from('buku')
              ->andFilterWhere(['like', 'kd_buku', (!empty($_GET['search']) ? $_GET['search'] : "")])
              ->all()) ?>;

      console.log(dataBuku);

      dataBuku.forEach(findBuku);
      function findBuku(buku) {
        let judul = buku.kd_buku;
        if (judul.includes("")) {
          judulBuku = buku.judul;
          kategoriBuku = buku.kategori;
          kodeBuku = buku.kd_buku;
          penerbitBuku = buku.penerbit;
          pengarangBuku = buku.pengarang;
          tahunTerbit = buku.tahun_terbit;

          var tabel = document.getElementById('tabel');
          var row = tabel.insertRow(1);
          var cell1 = row.insertCell(0);
          var cell2 = row.insertCell(1);
          var cell3 = row.insertCell(2);
          var cell4 = row.insertCell(3);
          var cell5 = row.insertCell(4);
          var cell6 = row.insertCell(5);

          cell1.innerHTML = kodeBuku;
          cell2.innerHTML = judulBuku;
          cell3.innerHTML = kategoriBuku;
          cell4.innerHTML = pengarangBuku;
          cell5.innerHTML = penerbitBuku;
          cell6.innerHTML = tahunTerbit;
        }
      }
    } else {
      dataBuku = <?= json_encode($allDataBuku); ?>;
      dataBuku.forEach(findBuku);
      function findBuku(buku) {
        let judul = buku.judul;
        if (judul.includes("")) {
          judulBuku = buku.judul;
          kategoriBuku = buku.kategori;
          kodeBuku = buku.kd_buku;
          penerbitBuku = buku.penerbit;
          pengarangBuku = buku.pengarang;
          tahunTerbit = buku.tahun_terbit;

          var tabel = document.getElementById('tabel');
          var row = tabel.insertRow(1);
          var cell1 = row.insertCell(0);
          var cell2 = row.insertCell(1);
          var cell3 = row.insertCell(2);
          var cell4 = row.insertCell(3);
          var cell5 = row.insertCell(4);
          var cell6 = row.insertCell(5);

          cell1.innerHTML = kodeBuku;
          cell2.innerHTML = judulBuku;
          cell3.innerHTML = kategoriBuku;
          cell4.innerHTML = pengarangBuku;
          cell5.innerHTML = penerbitBuku;
          cell6.innerHTML = tahunTerbit;
        }
      }
    }
    // console.log(document.getElementById('cari_buku').value);
  })



</script>