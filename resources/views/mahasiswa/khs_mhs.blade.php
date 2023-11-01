@extends('layout.index')
@extends('partials.navbar')
@section('container')

    {{-- breadcrumbs --}}
    <div class="col-lg-12">
        <div class="header pt-0">
            <h1 class="page-header update mt-0">
                <a href="{{ route('khs') }}">Kartu Hasil Studi (KHS)</a>
            </h1>
        </div>
        {{-- path --}}
        <ol class="breadcrumb">
            <li class="active">
                <a href="{{ route('dashboard_mhs') }}" >Dashboard / </a>
                <a href="{{ route('khs') }}" style="color: dodgerblue"
                    >Kartu Hasil Studi (KHS)
                </a>
            </li>
        </ol>
    </div>

    <div class="container">
        <h4>Scan KHS</h4>
        <div class="scan-irs">

            {{-- container import --}}
        </nav>
        <div id="page-wrapper">
          <div class="container-fluid">
            <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined" rel="stylesheet">
            <form class="form-container" enctype='multipart/form-data'>
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
                  <span class="browse-files">
                    <input type="file" class="default-file-input" />
                    <span class="browse-files-text browse"> select file from device</span>
                  </span>
                </label>
                <button type="button" class="upload-button"> Submit </button>
                <br>
                <a href="{{ route('import') }}">
                    <button type="button" class="upload-button"> Upload </button>
                </a>
              </div>
            </form>

          </div>

        </div>
    </div>

    <div class="container">
        <h4>KHS Saya</h4>
    </div>

@endsection
