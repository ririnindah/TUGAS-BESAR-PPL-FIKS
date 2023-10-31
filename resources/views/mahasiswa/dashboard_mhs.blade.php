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
          <a href="{{ route('dashboard_mhs') }}">
              <img style="margin-left: -5px;" src="https://i.ibb.co/yBG6mSK/Simone-4.png" width="50" height="50" alt="">
          </a>
        </a>
    </div>

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
                <i class="fa fa-user"></i> {{ $attribute -> nama }} <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                <li>
                <a href="/logout">
                    <i class="fa fa-fw fa-power-off"></i> Log Out </a>
                </li>
            </ul>
            </li>
        </ul>

    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav side-nav">
        <li class="active">
            <a href="{{ route('dashboard_mhs') }}">
                <i class="fa fa-fw fa-dashboard"></i> Dashboard
            </a>
        </li>
        <li>
          <a href="">
            <i class="fa fa-fw fa-columns"></i> IRS </a>
        </li>
        <li>
          <a href="">
            <i class="fa fa-fw fa-file-text-o"></i> KHS </a>
        </li>
        <li>
          <a href="">
            <i class="fa fa-fw fa-tasks"></i> PKL </a>
        </li>
        <li>
          <a href="">
            <i class="fa fa-fw fa-newspaper-o"></i> Skripsi </a>
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
            <h1 class="page-header">
                <a href="{{ route('dashboard_mhs') }}" >Dashboard</a>
            </h1>

          <ol class="breadcrumb">
            <li class="active">
                <a href="{{ route('dashboard_mhs') }}" >Dashboard</a>
            </li>
          </ol>
        </div>
      </div>
      <!-- /.row -->
      <!-- /.row -->
      <div class="row">
        <div class="col-lg-11">
          <section>
            {{-- container detail --}}
            <div class="card1">
              <div class="card ">

                {{-- PROFILE PICTURE --}}
                @if ($attribute->foto != null)
                    {{-- jika melakukan update foto --}}
                    <div class="left-container  text-center" style="max-height: 350px; overflow:hidden;">
                        <br><br>
                        <img src="{{ asset('storage/' . $attribute->foto) }}" class=" imgpr rounded" alt="{{ $attribute->nama }}">
                    </div>
                @else
                    {{-- jika tdk upadate foto --}}
                    <div class="left-container">
                        <br><br>
                        <img class="imgpr" src="https://media.istockphoto.com/id/1337144146/vector/default-avatar-profile-icon-vector.jpg?s=612x612&w=0&k=20&c=BIbFwuv7FxTWvh5S3vB6bkT0Qv8Vn8N5Ffseq84ClGI=" alt="{{ $attribute->nama }}">
                    </div>
                @endif

                <div class="right-container">
                  <table>
                    {{-- button edit --}}
                    <a href="{{ route('update_mhs') }}" class="edit-button btn">
                        <i class="fa fa-edit"> Edit</i>
                    </a>

                    <br>
                    <tr>
                      <td>Nama</td>
                      <td>&nbsp;:&nbsp;</td>
                      <td class="value">{{ $attribute->nama }}</td>
                    </tr>
                    <tr>
                      <td>NIM</td>
                      <td>&nbsp;: </td>
                      <td class="value">{{ $attribute->nim }}</td>
                    </tr>
                    <tr>
                      <td>Email</td>
                      <td>&nbsp;: </td>
                      <td class="value">{{ $attribute->email }}</td>
                    </tr>
                    <tr>
                      <td>Status</td>
                      <td>&nbsp;: </td>
                      <td class="value"> {{ $attribute->status }}</td>
                    </tr>
                  </table>
                </div>

              </div>
          </section>


        </div>
      </div>
      <br>


      <div class="panel panel-red">
        <div class="panel-heading">
          <div>
            <i class="fa fa-fw fa-columns fa-3x"></i>
          </div>
        </div>
        <a href="{{ route('irs') }}">
          <div class="panel-footer">
            <span class="pull-left">IRS</span>
            <span class="pull-right">
              <i class="fa fa-arrow-circle-right"></i>
            </span>
            <div class="clearfix"></div>
          </div>
        </a>
      </div>
      <div class="panel panel-red">
        <div class="panel-heading">
          <div>
            <i class="fa fa-fw fa-file-text-o fa-3x"></i>
          </div>
        </div>
        <a href="">
          <div class="panel-footer">
            <span class="pull-left">KHS</span>
            <span class="pull-right">
              <i class="fa fa-arrow-circle-right"></i>
            </span>
            <div class="clearfix"></div>
          </div>
        </a>
      </div>
      <div class="panel panel-red">
        <div class="panel-heading">
          <div>
            <i class="fa fa-fw fa-tasks fa-3x"></i>
          </div>
        </div>
        <a href="">
          <div class="panel-footer">
            <span class="pull-left">PKL</span>
            <span class="pull-right">
              <i class="fa fa-arrow-circle-right"></i>
            </span>
            <div class="clearfix"></div>
          </div>
        </a>
      </div>
      <div class="panel panel-red">
        <div class="panel-heading">
          <div>
            <i class="fa fa-fw 	fa-newspaper-o fa-3x"></i>
          </div>
        </div>
        <a href="">
          <div class="panel-footer">
            <span class="pull-left">Skripsi</span>
            <span class="pull-right">
              <i class="fa fa-arrow-circle-right"></i>
            </span>
            <div class="clearfix"></div>
          </div>
        </a>
      </div>
    </div>
    <br>
    <br>
  </div>
  <!-- /.row -->
</div>
<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
</div> @endsection
