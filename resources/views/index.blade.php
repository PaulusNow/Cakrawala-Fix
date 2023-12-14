@extends('layouts.main')

@section('container')
<!-- My CSS -->
<link rel="stylesheet" href="css/index.css">

<!-- Card #1-->
<div class="container-fluid">
  <div class="row">
    <div class="col-6 d-flex flex-column justify-content-center gap-2" style="background-color: #f6f7f7b6; height:60vh">
      <h1 style="font-size: 2.5rem; color: #000ca6; font-weight:600" class="ms-4">Nikmati Pengalaman Perjalanan Terbaik dengan kami</h1>
      <p class="ms-4">CAKRAWALA TRANS menyediakan jasa serta solusi transportasi <br>terbaik untuk pengalaman perjalanan terbaik Anda</p>
      <a href="#selengkapnya" class="btn rounded-pill shadow ms-4" style="background-color: #fe8730; width:25%; color:white">Selengkapnya</a>
    </div>
    <div class="col-6 d-flex flex-column" style="background-image: url(/asset/img_card.png); background-repeat: no-repeat; background-size:cover">
    </div>
  </div>
</div>
<!-- End Card #1-->


<!-- Card #2 -->

<div class="container-fluid d-flex align-items-center justify-content-center p-5">
  <div class="row">
    <div class="col-12 text-center">
      <h1 style="font-size: 2.5rem; font-weight: 900; color:#000ca6">PILIH KENDARAAN BERSAMA KAMI</h1>
      <p style="font-size: 1.5rem; font-weight: normal;">Kami menawarkan beragam layanan dan jenis kendaraan yang dapat disesuaikan dengan kebutuhan Anda, mulai dari sewa kendaraan jangka pendek dan panjang untuk keperluan operasional bisnis hingga sewa mobil harian dengan pengemudi maupun lepas kunci sesuai dengan kebutuhan pribadi Anda</p>
    </div>
  </div>
</div>


{{-- <div class="cardinfo">
  <h1 id="section2">pilih kendaraan bersama kami</h1>
</div>
<div class="cardisi">
  <p>Kami menawarkan beragam layanan dan jenis kendaraan yang dapat disesuaikan dengan kebutuhan Anda, mulai dari sewa kendaraan jangka pendek dan panjang untuk keperluan operasional bisnis hingga sewa mobil harian dengan pengemudi maupun lepas kunci sesuai dengan kebutuhan pribadi Anda</p>
</div>
<!-- End Card #2 --> --}}

<!-- Card Isi -->

<div class="container-fluid d-flex justify-content-between">
  <div class="card text-center border-0 m-3" style="width: 60rem;">
    <h1 class="card-title" style="color: #000ca6">MPV</h1>
    <img src="asset/mobil1.png" class="card-img-top" alt="...">
    <div class="card-body d-flex flex-column align-items-center">
      <h5 class="card-title">Toyota</h5>
      <p class="card-text">Mobil berjenis MPV yang diproduksi oleh Toyota yang dirancang untuk mampu mengangkut 7 orang penumpang</p>
      <a href="/pesan" class="btn" style="background-color : #000ca6; color: white">Sewa Sekarang</a>
    </div>
  </div>

  <div class="card text-center border-0 m-3" style="width: 60rem;">
    <h1 class="card-title" style="color: #000ca6">TRAVEL</h1>
    <img src="asset/hiace 3.png" class="card-img-top" alt="..." style="height: 20rem">
    <div class="card-body d-flex flex-column align-items-center">
      <h5 class="card-title">Toyota</h5>
      <p class="card-text">Mobil travel yang memiliki ruangan serta kenyamanan cukup, keleluasaan kabin Toyota Hiace yang mampu memuat hingga 16 penumpang</p>
      <a href="/pesan" class="btn" style="background-color : #000ca6; color: white">Sewa Sekarang</a>
    </div>
  </div>
</div>


<div class="btnarmada">
  <a href="/produk">Lihat Semua Armada <img src="asset/arrow.png" alt=""></a>
</div>

<div class="review">
  <h1>Pencapaian Kami Untuk <br> Memberikan Layanan Terbaik</h1>
</div>

<div class="reviewcon">
  <div class="reviewcard">
    <div class="reviewcardcontent">
      <h1>Louis Maxi</h1>
      <img src="asset/user1.png" alt="...">
      <div class="star-icon">
        <i class="fa-solid fa-star" style="color: #ffc800;"></i>
        <i class="fa-solid fa-star" style="color: #ffc800;"></i>
        <i class="fa-solid fa-star" style="color: #ffc800;"></i>
        <i class="fa-solid fa-star" style="color: #ffc800;"></i>
        <i class="fa-solid fa-star" style="color: #ffc800;"></i>
      </div>
      <p>Pelayanan sangat ramah, supir handal segala medan</p>
    </div>
  </div>
  <div class="reviewcard">
    <div class="reviewcardcontent">
      <h1>Yoseph Hakim</h1>
      <img src="asset/user2.png" alt="...">
      <div class="star-icon2">
        <i class="fa-solid fa-star" style="color: #ffc800;"></i>
        <i class="fa-solid fa-star" style="color: #ffc800;"></i>
        <i class="fa-solid fa-star" style="color: #ffc800;"></i>
        <i class="fa-solid fa-star" style="color: #ffc800;"></i>
        <i class="fa-solid fa-star" style="color: #ffc800;"></i>
      </div>
      <div class="testimoni1">
        <p>Harga termasuk jauh lebih murah dari pada rentcar lain, mantap pokoknya</p>
      </div>
    </div>
  </div>
  <div class="reviewcard">
    <div class="reviewcardcontent">
      <h1>Aldo</h1>
      <img src="asset/user3.png" alt="...">
      <div class="star-icon3">
        <i class="fa-solid fa-star" style="color: #ffc800;"></i>
        <i class="fa-solid fa-star" style="color: #ffc800;"></i>
        <i class="fa-solid fa-star" style="color: #ffc800;"></i>
        <i class="fa-solid fa-star" style="color: #ffc800;"></i>
        <i class="fa-solid fa-star" style="color: #ffc800;"></i>
      </div>
      <span>Mobil bisa lepas kunci, sangat recomended</span>
    </div>
  </div>
</div>

@endsection