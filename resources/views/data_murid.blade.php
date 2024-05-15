<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Laravel</title>
</head>
<body>
@extends('layouts.app')
@section ('content')

<div class="container mt-4">
<h2>Data Siswa RPL C</h2>
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="img/zahro.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">ZAHRO ANISATAMA</h5>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">NIS : 00009876543211</li>
            <li class="list-group-item">Jurusan : Rekayasa Perangkat Lunak</li>
            <li class="list-group-item">Alamat : Desa Kedungsigit, Kecamatan Karangan, Trenggalek, Jawa Timur</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img/titis.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">TITIS EKAWATI DEWI</h5>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">NIS : 00009876543212</li>
            <li class="list-group-item">Jurusan : Rekayasa Perangkat Lunak</li>
            <li class="list-group-item">Alamat : Desa Pule, Kecamatan Pule, Trenggalek, Jawa Timur</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img/Sinta.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">SINTA SUWITO PUTERI</h5>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">NIS : 00009876543213</li>
            <li class="list-group-item">Jurusan : Rekayasa Perangkat Lunak</li>
            <li class="list-group-item">Alamat : Desa Sambirejo, Kecamatan Trenggalek, Trenggalek, Jawa Timur</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="container mt-3 row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="img/amel.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">SHERLYTA AMELYA</h5>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">NIS : 00009876543214</li>
            <li class="list-group-item">Jurusan : Rekayasa Perangkat Lunak</li>
            <li class="list-group-item">Alamat : Desa Tenggaren, Kecamatan Tugu, Trenggalek, Jawa Timur</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img/nandito.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">NANDITO BAGUS ARIA DITAMA</h5>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">NIS : 00009876543215</li>
            <li class="list-group-item">Jurusan : Rekayasa Perangkat Lunak</li>
            <li class="list-group-item">Desa Kerjo, Kecamatan Karangan, Trenggalek, Jawa Timur</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img/sisca.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">SISCA SIWI ANGGRAINI</h5>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">NIS : 00009876543216</li>
            <li class="list-group-item">Jurusan : Rekayasa Perangkat Lunak</li>
            <li class="list-group-item">Alamat : Desa Banaran, Kecamatan Tugu, Trenggalek, Jawa Timur</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="container mt-3 row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="img/mige.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">SAMUEL MIGE HARYANTO</h5>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">NIS : 00009876543217</li>
            <li class="list-group-item">Jurusan : Rekayasa Perangkat Lunak</li>
            <li class="list-group-item">Alamat : Desa Karangan, Kecamatan Karangan, Trenggalek, Jawa Timur</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img/nikolas.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">NIKOLAS MAULANA AZIZ SAPUTRA</h5>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">NIS : 00009876543218</li>
            <li class="list-group-item">Jurusan : Rekayasa Perangkat Lunak</li>
            <li class="list-group-item">Alamat : Desa Suruh, Kecamatan Suruh, Trenggalek, Jawa Timur</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img/pras.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">PRASETYA KURNIA AGUSTIAN</h5>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">NIS : 00009876543219</li>
            <li class="list-group-item">Jurusan : Rekayasa Perangkat Lunak</li>
            <li class="list-group-item">Alamat : Desa Nglinggis, Kecamatan Tugu, Trenggalek, Jawa Timur</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="container mt-3 row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="img/kikik.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">OCTAVIAN RISKY PRASETYO</h5>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">NIS : 00098765432110</li>
            <li class="list-group-item">Jurusan : Rekayasa Perangkat Lunak</li>
            <li class="list-group-item">Alamat : Desa Sumberingin, Kecamatan Karangan, Trenggalek, Jawa Timur</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img/niko.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">NICO ADRIAN ALDIANSYAH</h5>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">NIS : 00098765432111</li>
            <li class="list-group-item">Jurusan : Rekayasa Perangkat Lunak</li>
            <li class="list-group-item">Alamat : Desa Sukorejo, Kecamatan Gandusari, Trenggalek, Jawa Timur</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img/Rengga.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">RENGGA ALDANU IMAN DZUKRONI</h5>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">NIS : 00098765432112</li>
            <li class="list-group-item">Jurusan : Rekayasa Perangkat Lunak</li>
            <li class="list-group-item">Alamat : Desa Dermosari, Kecamatan Tugu, Trenggalek, Jawa Timur</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="container mt-3 row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="img/rama.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">RAMA BAGUS WINARDI</h5>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">NIS : 00098765432113</li>
            <li class="list-group-item">Jurusan : Rekayasa Perangkat Lunak</li>
            <li class="list-group-item">Alamat : Desa Sambirejo, Kecamatan Trenggalek, Trenggalek, Jawa Timur</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img/bobot.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">SATRIO BOBOT</h5>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">NIS : 00098765432114</li>
            <li class="list-group-item">Jurusan : Rekayasa Perangkat Lunak</li>
            <li class="list-group-item">Alamat : Desa Ngares, Kecamatan Trenggalek, Trenggalek, Jawa Timur</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img/pirlo.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">PIRLO YASRILIALDI</h5>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">NIS : 00098765432115</li>
            <li class="list-group-item">Jurusan : Rekayasa Perangkat Lunak</li>
            <li class="list-group-item">Alamat : Desa Sukosari, Kecamatan Trenggalek, Trenggalek, Jawa Timur</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="container mt-3 row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="img/yudi.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">YUDI ANDIKA</h5>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">NIS : 00098765432116</li>
            <li class="list-group-item">Jurusan : Rekayasa Perangkat Lunak</li>
            <li class="list-group-item">Alamat : Desa Gondanglegi, Kecamatan Prambon, Trenggalek, Jawa Timur</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img/ripandi.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">RIFANDI AHMAD KHOIRUNNIZAR</h5>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">NIS : 00098765432117</li>
            <li class="list-group-item">Jurusan : Rekayasa Perangkat Lunak</li>
            <li class="list-group-item">Alamat : Desa Tanggaran, Kecamatan Pule, Trenggalek, Jawa Timur</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img/riyan.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">RIYAN DWI ANDIKA</h5>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">NIS : 00098765432118</li>
            <li class="list-group-item">Jurusan : Rekayasa Perangkat Lunak</li>
            <li class="list-group-item">Alamat : Desa Sukosari, Kecamatan Trenggalek, Trenggalek, Jawa Timur</li>
        </ul>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
</body>
</html>