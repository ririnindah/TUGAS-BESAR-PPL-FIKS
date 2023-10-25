@extends('template') @section('content') 
<div id="wrapper">
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
      </a>
    </div>
    <!-- Top Menu Items -->
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
                    <strong>Operator</strong>
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
                    <strong>Operator</strong>
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
                    <strong>Operator</strong>
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
          <i class="fa fa-user"></i> Operator <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li>
            <a href="#">
              <i class="fa fa-fw fa-power-off"></i> Log Out </a>
          </li>
        </ul>
      </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav side-nav">
        <li class="active">
          <a href="{{ route('dashboard_opt') }}">
            <i class="fa fa-fw fa-dashboard"></i> Dashboard </a>
        </li>
        <li>
          <a href="{{ route('generate') }}">
            <i class="fa fa-fw fa-tasks"></i> Generate Akun Mahasiswa </a>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </nav>
  <div id="page-wrapper">
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav side-nav">
        <li class="active">
          <a href="{{ route('dashboard_opt') }}">
            <i class="fa fa-fw fa-dashboard"></i> Dashboard </a>
        </li>
        <li>
          <a href="{{ route('generate') }}">
            <i class="fa fa-fw fa-tasks"></i> Generate Akun Mahasiswa </a>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
    </nav>

      <!-- Isi Dashboard -->
    <div id="page-wrapper">
      <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
            <ol class="breadcrumb">
              <li class="active">
                <i class="fa fa-dashboard"></i> Dashboard
              </li>
            </ol>
          </div>
        </div>
        <!-- /.row -->
        <!-- /.row -->
        <div class="row">
          <div class="col-lg-11">
            <section>
              <div class="card1">
                <div class="card ">
                  <div class="left-container">
                    <br>
                    <br>
                    <img class="imgpr" src="https://media.istockphoto.com/id/1337144146/vector/default-avatar-profile-icon-vector.jpg?s=612x612&w=0&k=20&c=BIbFwuv7FxTWvh5S3vB6bkT0Qv8Vn8N5Ffseq84ClGI=" alt="Profile Image">
                  </div>
                  <div class="right-container">
                    <table>
                      <button class="edit-button">
                        <i class="fa fa-edit">Edit</i>
                        <!-- Ikon pensil dari Font Awesome -->
                      </button>
                      <br>
                      <tr>
                        <td class="label">Nama :</td>
                        <td class="value">Opt</td>
                      </tr>
                      <tr>
                        <td class="label">NIP :</td>
                        <td class="value">0854</td>
                      </tr>
                      <tr>
                        <td class="label">Email :</td>
                        <td class="value">XXXXXXXXXX</td>
                      </tr>
                      <tr>
                        <td class="label">Status :</td>
                        <td class="value"> Aktif</td>
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
              <i class="fa fa-fw fa-tasks fa-3x"></i>
            </div>
          </div>
          <a href="{{ route('generate') }}">
            <div class="panel-footer">
              <span class="pull-left">Generate Akun Mahasiswa</span>
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
  </div>
</div>
</div> @endsection