@extends('template') @section('content') <div id="wrapper">
  <!-- Navigation -->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" style="display: flex; align-items: center;">
        <img style="margin-left: 10px;" src="https://i.ibb.co/yBG6mSK/Simone-4.png" width="50" height="50" alt="">
        <span style="margin-left: 5px;"></span>
      </a>
    </div>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav side-nav">
        <li>
          <a href="{{ route('dashboard_opt') }}">
            <i class="fa fa-fw fa-dashboard"></i> Dashboard </a>
        </li>
        <li class="active">
          <a href="{{ route('generate') }}">
            <i class="fa fa-fw fa-tasks"></i> Generate Akun Mahasiswa </a>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </nav>
  <div id="page-wrapper">
    <div class="container-fluid">
      <!-- Page Heading -->
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header"> Generate </h1>
          <ol class="breadcrumb">
            <li class="active">
              <i class="fa fa-dashboard"></i> <a href="{{ route('dashboard_opt') }}">Dashboard/</a> <i class="fa fa-tasks"></i> <a href="{{ route('generate') }}"></a>Generate Akun Mahasiswa
            </li>
          </ol>
        </div>
      </div>
      <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined" rel="stylesheet">
        <form action="{{ route('generate') }}" class="form-container" enctype='multipart/form-data' method="POST">
            @csrf
            <div class="upload-files-container">
            <div class="drag-file-area">
                <span class="material-icons-outlined upload-icon"> file_upload </span>
                <img href="https://assets.dryicons.com/uploads/icon/svg/6234/0a00ab7d-2cf8-432f-8b4e-54ffd56015b2.svg">
                <h3 class="dynamic-message"> Drag & Drop file here </h3>
            </div>
            <span class="cannot-upload-message">
                <span class="material-icons-outlined">error</span> Please select a file first <span class="material-icons-outlined cancel-alert-button">cancel</span>
            </span>
            <div class="file-block">
                <div class="file-info">
                <span class="material-icons-outlined file-icon">description</span>
                <span class="file-name"></span> | <span class="file-size"></span>
                </div>
                <span class="material-icons remove-file-icon">delete</span>
                <div class="progress-bar"></div>
            </div>
            <label class="label">
                <div class="browse-files">
                    <input type="file" name="file" id ="file" accept = ".csv" onchange="previewImage()">
                {{-- <span class="browse-files-text browse"> select file from device</span> --}}
                </div>
            </label>

            {{-- SUBMIT FILE --}}
            <button type="submit" name="submit" value="submit" class="btn btn-primary btn-block" type="button">Submit</button>
            </div>

            <br>
            <br>
        </form>

        <form action="{{ route('import') }}" method="POST">
            @csrf
            {{-- GENERATE --}}
            <button type="submit" name="submit" value="submit" class="btn btn-primary btn-block" type="button">GENERATE</button>
        </form>


      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
    </div> @endsection
