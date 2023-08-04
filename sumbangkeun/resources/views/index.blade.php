
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumbangkeun - Indonesia's Fundraising Platform</title>
    <link rel="icon" href="https://70867a2ef4c36f4d1885-185a360f54556c7e8b9c7a9b6e422c6e.ssl.cf6.rackcdn.com/dev/file/2021-02-04/2HbvboE32kaW.svg" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
        font-family: Arial, Helvetica, sans-serif;
        background-color: aliceblue;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: black;
        text-align: left;
        display: block;
        }

        a {
            text-decoration: none;
            color: aliceblue!important;
            font-weight: bolder;
        }

        a:hover {
            text-decoration: none;
            color: black;    
        }

        .nav-link {
            color: #83B341!important;
            font-weight: 700!important;
            font-size: 1.1rem;
            letter-spacing: 1px;
        }

        .nav-link:hover {
            color: #008953!important;;
        }

        .navbar {
            box-shadow: 1px 1px 5px #83B341;
        }

        .nav-item {
            margin-left: 15%;
        }
        .navbar-toggler-icon {
            background-color: aliceblue;
            border-radius: 1;
            border-color: #83B341;
        }

        .btn-outline-success {
            background-color: #83B341;
            border-color: #83B341;
            color: aliceblue;
        }

        .btn-outline-success:hover {
            background-color: #83B341!important;
        }

        .form-control{
            background-color: aliceblue;
            border: none;
        }

        .carousel img{
            margin-top: 3%;
            width: inherit;
            height: inherit;
            border-radius: 25px;
        }

        .judul {
            border-bottom: solid 5px #83B341;
        }

        input[type=submit] {
            background-color:#008953;
            border: none;
            border-radius: 5px;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin: 2em;
            cursor: pointer;
            margin-left: 75%
        }

        input[type=reset] {
            background-color: aliceblue;
            border: 1px solid black;
            border-radius: 5px;
            color: black;
            padding: 16px 32px;
            text-decoration: none;
            margin: 2em;
            cursor: pointer;
        }
    </style>
</head>
<body>


<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top p-3" style="background-color: black;">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="https://70867a2ef4c36f4d1885-185a360f54556c7e8b9c7a9b6e422c6e.ssl.cf6.rackcdn.com/dev/file/2021-02-04/2HbvboE32kaW.svg"; style="max-width: 50px; max-height: 50px; margin-right: 5px;">Sumbangkeun
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Donasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Saldo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Blog </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost:8000/donaturcrud" target="_blank">CRUD</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <i style="font-size:24px; color: aliceblue;" class="fa">&#xf002;</i>
        <input class="form-control mr-sm-2" type="search" placeholder="Cari" style="width: 25%; background-color: black;">
        <a href="#" class="btn btn-outline-success my-2 my-sm-0" role="button" aria-pressed="true">Masuk</a>
        <a href="#" class="btn btn-outline-success my-2 my-sm-0" role="button" aria-pressed="true" style="margin-left: 5%; margin-right:0%; background-color: #008953;">Daftar</a>
     </form>
    </div>
  </div>
</nav>

<div class="container">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="margin-top: 6%;">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <a href="#">
          <img class="d-block w-100" src="https://70867a2ef4c36f4d1885-185a360f54556c7e8b9c7a9b6e422c6e.ssl.cf6.rackcdn.com/file/2021-04-27/wUTMdjfoIEDp.jpg" alt="banner1" style="width: inherit; height: 250px;">
        </a>
        </div>
    <div class="carousel-item">
        <a href="#">
          <img class="d-block w-100" src="https://70867a2ef4c36f4d1885-185a360f54556c7e8b9c7a9b6e422c6e.ssl.cf6.rackcdn.com/file/2021-04-22/hRzeyVmxqoXA.jpg" alt="banner2" style="width: inherit; height: 250px;">
        </a>
        </div>
    </div>

    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="row mt-5">
    <div class="judul mb-2 w-100">
      <h3 class="article px-3 font-weight-bold">Campaign Penggalangan Dana Pilihan</h3>
    </div>
  </div>
  
  <div class="row">
  @foreach($penggalang as $n)
     <div  class="card mt-3" style="width: 18rem; margin-left: 6%;">
       <img src="{{ $n->url }}" class="card-img-top">
       <div class="card-body">
         <h5 class="card-title"> {{ $n->judul }}</h5>
         <p class="card-text"> {{ $n->nama }} </p>
       </div>
       <ul class="list-group list-group-flush">
         <li class="list-group-item"> Kategori : {{ $n->kategori }}</li>
         <li class="list-group-item"> Membutuhkan Rp.{{ $n->biaya }}</li>
         <a href="#"><button class="btn btn-outline-success mt-3" type="submit" style="background-color: #008953; width: 100%;">Detail</button></a>
         <a href="http://localhost:8000/transaksi"><button class="btn btn-outline-success mt-1 mb-3" type="submit" style="background-color: #006000; width: 100%;">Donasi Sekarang</button></a>
       </ul>
     </div>
     @endforeach
   </div>

   <div class="row mt-5">
    <div class="judul mb-2 w-100">
      <h3 class="article px-3 font-weight-bold">Donasi ke Yayasan di Indonesia</h3>
    </div>
  </div>

  <div class="row">
  @foreach($yayasan as $n)
     <div  class="card mt-3" style="width: 18rem; margin-left: 6%;">
       <img src="{{ $n->url }}" class="card-img-top">
       <div class="card-body">
         <h5 class="card-title"> {{ $n->nama }}</h5>
         <p class="card-text"> {{ $n->alamat->alamat_name }} </p>
       </div>
       <ul class="list-group list-group-flush">
         <li class="list-group-item"> {{ $n->deskripsi }}</li>
         <a href="#"><button class="btn btn-outline-success mt-3" type="submit" style="background-color: #008953; width: 100%;">Detail</button></a>
         <a href="http://localhost:8000/transaksi"><button class="btn btn-outline-success mt-1 mb-3" type="submit" style="background-color: #006000; width: 100%;">Donasi Sekarang</button></a>
       </ul>
     </div>
     @endforeach
   </div>

</body>
</html>
