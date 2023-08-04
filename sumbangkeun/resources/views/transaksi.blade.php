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
    <a class="navbar-brand" href="http://localhost:8000/index">
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


    <h1 style="text-align: center; color: #008953; margin-top: 7%;">Konfirmasi Pembayaran</h1>
    <div class="card mb-3 mt-3 ml-5 mr-5">
        <div class="card-body">
            <form>          
                <h5 style="color: #008953;"><strong> Jumlah Uang yang Anda Donasikan</strong></h5>
                <div class="form-group row">
                    <div class="col-sm-12">
                      <input type="username" class="form-control" id="inputuname" placeholder="Masukkan Nominal">
                    </div>
                </div>
                <h5 style="color: #008953;"><strong> Masukkan Password</strong></h5>
                <div class="form-group row">
                  <div class="col-sm-12">
                    <input type="password" class="form-control" id="inputpw" placeholder="Masukkan Password">
                  </div>                
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <input type="submit" value="Lanjutkan Pembayaran" style="margin-left: 0;">
                    </div>
                </div>                    
            </form>
        </div>
      </div>

</body>
</html>