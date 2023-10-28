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
                <a href="{{ route('dashboard_mhs') }}">
                    <img style="margin-left: -5px;" src="https://i.ibb.co/yBG6mSK/Simone-4.png" width="50" height="50" alt="">
                </a>
            </a>
        </div>

        {{-- navbar bagian kanan --}}
                {{-- logout --}}
        <ul class="nav navbar-right top-nav">
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-envelope"></i>
                <b class="caret"></b>
            </a>
                <ul class="dropdown-menu message-dropdown">
                    <li class="message-preview">
                    <a href="#">
                        <div class="media">
                        <span class="pull-left">
                            <img class="media-object" src="http://placehold.it/50x50" alt="">
                        </span>
                        <div class="media-body">
                            <h5 class="media-heading">
                            <strong>Mahasiswa</strong>
                            </h5>
                            <p class="small text-muted">
                            <i class="fa fa-clock-o"></i> Yesterday at 4:32 PM
                            </p>
                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                        </div>
                        </div>
                    </a>
                    </li>
                    <li class="message-preview">
                    <a href="#">
                        <div class="media">
                        <span class="pull-left">
                            <img class="media-object" src="http://placehold.it/50x50" alt="">
                        </span>
                        <div class="media-body">
                            <h5 class="media-heading">
                            <strong>Deepartemen</strong>
                            </h5>
                            <p class="small text-muted">
                            <i class="fa fa-clock-o"></i> Yesterday at 4:32 PM
                            </p>
                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                        </div>
                        </div>
                    </a>
                    </li>
                    <li class="message-preview">
                    <a href="#">
                        <div class="media">
                        <span class="pull-left">
                            <img class="media-object" src="http://placehold.it/50x50" alt="">
                        </span>
                        <div class="media-body">
                            <h5 class="media-heading">
                            <strong>Mahasiswa</strong>
                            </h5>
                            <p class="small text-muted">
                            <i class="fa fa-clock-o"></i> Yesterday at 4:32 PM
                            </p>
                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                        </div>
                        </div>
                    </a>
                    </li>
                    <li class="message-footer">
                    <a href="#">Read All New Messages</a>
                    </li>
                </ul>

                </li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bell"></i>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu alert-dropdown">
                    <li>
                    <a href="#">Alert Name <span class="label label-default">Alert Badge</span>
                    </a>
                    </li>
                    <li>
                    <a href="#">Alert Name <span class="label label-primary">Alert Badge</span>
                    </a>
                    </li>
                    <li>
                    <a href="#">Alert Name <span class="label label-success">Alert Badge</span>
                    </a>
                    </li>
                    <li>
                    <a href="#">Alert Name <span class="label label-info">Alert Badge</span>
                    </a>
                    </li>
                    <li>
                    <a href="#">Alert Name <span class="label label-warning">Alert Badge</span>
                    </a>
                    </li>
                    <li>
                    <a href="#">Alert Name <span class="label label-danger">Alert Badge</span>
                    </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                    <a href="#">View All</a>
                    </li>
                </ul>
                </li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-user"></i> Mahasiswa <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li>
                    <a href="/logout">
                        <i class="fa fa-fw fa-power-off"></i> Log Out </a>
                    </li>
                </ul>
                </li>
            </ul>
        <!-- .navbar-collapse -->
    </nav>


    {{-- konten --}}
    <div class="container">
        {{-- header --}}
        <div class="col-lg-12">
            <div class="header pt-0">
                <h1 class="page-header mt-0">
                    <a href="{{ route('update_mhs') }}">Update Data Diri</a>
                </h1>
            </div>
            {{-- path --}}
            <ol class="breadcrumb">
                <li class="active">
                    <a href="{{ route('dashboard_mhs') }}" >Dashboard / </a>
                    <a href="{{ route('update_mhs') }}" style="color: dodgerblue"
                        >Update Data Diri
                    </a>
                </li>
            </ol>
        </div>
    </div>

    <div class="container">
            <div class="row" style="margin-left: 5px; margin-right: 5px;">
                <form action=""></form>
                {{-- images --}}
                <div class="col-sm-2 images">
                    <div class="upload">
                        <img src="https://media.istockphoto.com/id/1337144146/vector/default-avatar-profile-icon-vector.jpg?s=612x612&w=0&k=20&c=BIbFwuv7FxTWvh5S3vB6bkT0Qv8Vn8N5Ffseq84ClGI=" alt="" width="160" height="160" class="rounded-circle">
                        <div class = "round">
                        <input type="file" name="gambar" id ="gambar" accept = ".jpg, .jpeg, .png">
                        </div>
                    </div>
                    <br>
                </div>

                <div class="disable col-sm-5 ">
                    <div class="form-floating m-3">
                        <label class="col-sm-4 " for="nim">NIM</label>
                        <input class="col-sm-8" type="text" class="form-control" placeholder="{{ $attribute->nim }}" id="nim" disabled>
                    </div>

                    <div class="form-floating mt-3">
                        <label class="col-sm-4 " for="angkatan">Angkatan</label>
                        <input class="col-sm-8" type="text" class="form-control" id="angkatan" placeholder="{{ $attribute->angkatan }}" disabled>
                    </div>

                    <div class="form-floating mb-3">
                        <label class="col-sm-4" for="nama">Nama Lengkap</label>
                        <input class="col-sm-8" type="text" class="form-control" id="nama">
                    </div>

                    <div class="form-floating mb-3">
                        <label class="col-sm-4 " for="email">Email</label>
                        <input class="col-sm-8" type="email" class="form-control" id="email">
                    </div>

                    <div class="form-floating mb-3">
                        <label class="col-sm-4 " for="provinsi">Provinsi</label>
                        <input class="col-sm-8" type="text" class="form-control" id="provinsi">
                    </div>

                    <div class="form-floating mb-3">
                        <label class="col-sm-4 " for="kota">Kota</label>
                        <input class="col-sm-8" type="text" class="form-control" id="kota">
                    </div>
                </div>

                <div class="able col-sm-5">
                    <div class="form-floating mb-2">
                        <label class="col-sm-4 " for="status">Status</label>
                        <input class="col-sm-8" type="status" class="form-control" id="status">
                    </div>

                    <div class="form-floating mb-3">
                        <label class="col-sm-4 " for="fakultas">Fakultas</label>
                        <input class="col-sm-8" type="fakultas" class="form-control" id="Fakultas">
                    </div>

                    <div class="form-floating mb-3">
                        <label class="col-sm-4 " for="departemen">Departemen</label>
                        <input class="col-sm-8" type="departemen" class="form-control" id="departemen">
                    </div>

                    <div class="form-floating mb-3">
                        <label class="col-sm-4 " for="jalur masuk">Jalur Masuk</label>
                        <input class="col-sm-8"  class="form-control" id="jalur masuk">
                    </div>

                    <div class="form-floating mb-3">
                        <label class="col-sm-4 " for="alamat">Alamat</label>
                        <textarea class="col-sm-8" name="alamat" class="form-control" id="alamat" cols="30" rows="5"></textarea>
                    </div>
                </div>
                {{-- </div> --}}
            </div>

            <div class="mt-3">
                <button type="submit" name="submit" value="submit" class="btn btn-primary btn-block" type="button">Simpan</button>
            </div>
    </div>


</body>
@endsection

