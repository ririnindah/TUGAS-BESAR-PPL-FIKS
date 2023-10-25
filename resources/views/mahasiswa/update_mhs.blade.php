@extends('template')
@section('content')
<body id="update">
    

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" style="display: flex; align-items: center;">
                <img style="margin-left: 10px;" src="https://i.ibb.co/yBG6mSK/Simone-4.png" width="50" height="50" alt="">
            </a>
        </div>
        <!-- .navbar-collapse -->
    </nav>

    <div style="margin-left: 20px; margin-right:20px;">
  <div class="row">
    <div class="col-10">
    <div class="container">
        <div>
            <div class="upload">
                <img src="https://media.istockphoto.com/id/1337144146/vector/default-avatar-profile-icon-vector.jpg?s=612x612&w=0&k=20&c=BIbFwuv7FxTWvh5S3vB6bkT0Qv8Vn8N5Ffseq84ClGI=" alt="" width="200" height="200" class="rounded-circle">
                <div class = "round">
                <input type="file" name="gambar" id ="gambar" accept = ".jpg, .jpeg, .png">
                </div>
            </div>
            </div>
            <br>
          <!-- Konten card pertama di sini -->
       
      </div>
    </div>
    <div class="col-9">
      <div class="container">
        <div class="card-body">
        <form method="post">
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nim">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="status" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="status">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="fakultas" class="col-sm-2 col-form-label">Fakultas</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="fakultas">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="departemen" class="col-sm-2 col-form-label">Departemen</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="departemen">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="angkatan" class="col-sm-2 col-form-label">Angkatan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="angkatan">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="jalur_masuk" class="col-sm-2 col-form-label">Jalur Masuk</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="jalur_masuk">
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="form-group row">
                <label for="provinsi" class="col-sm-2 col-form-label">Provinsi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="provinsi">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="kab/kota" class="col-sm-2 col-form-label">Kab/Kota</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="kab/kota">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="alamat"class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                <textarea name="alamat" id="alamat" rows="3" class="form-control"></textarea>
                </div>
            </div>
            <br>
            <div class="text-right">
            <button type="submit" name="submit" value="submit" class="btn btn-primary float-left">Simpan</button>
            </div> 
        </form>
        </div>
      </div>
    </div>
  </div>
</body>
@endsection

