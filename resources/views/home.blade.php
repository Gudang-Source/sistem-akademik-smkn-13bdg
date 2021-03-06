@extends('master')

@section('content')
<!-- Notify sweet alert-->

@if(session('message'))      
      <!-- sweet alert -->
    <link rel="stylesheet" href="/css/sweetalert.css">
    <!-- sweet alert -->
    <script src="/js/sweetalert.js"></script>
    <script>
        swal("{!! session('message') !!}", "", "success");
    </script>
@endif
<!-- end Notify sweet alert -->
@if(session('messageerror'))      
      <!-- sweet alert -->
    <link rel="stylesheet" href="/css/sweetalert.css">
    <!-- sweet alert -->
    <script src="/js/sweetalert.js"></script>
    <script>
        swal("{!! session('messageerror') !!}", "", "error");
    </script>
@endif


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Timeline
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">User profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- =========================================================== -->

      <div class="row center-block">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-purple">
            <span class="info-box-icon"><i class="fa fa-clock-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">JAM</span>
              <span class="info-box-number" id="clock"></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-aqua">
            <span class="info-box-icon"><i class="fa fa-user-md"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Jumlah Guru</span>
              <span class="info-box-number">{{ $gurucount }}</span>

              <div class="progress">
                <div class="progress-bar" style="width: {{ $gurucount }}%"></div>
              </div>
                  <span class="progress-description">
                    70% Increase in 30 Days
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-green">
            <span class="info-box-icon"><i class="fa fa-user"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Jumlah Siswa</span>
              <span class="info-box-number">{{ $siswascount }}</span>

              <div class="progress">
                <div class="progress-bar" style="width: {{ $siswascount }}%"></div>
              </div>
                  <span class="progress-description">
                    70% Increase in 30 Days
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-yellow">
            <span class="info-box-icon"><i class="fa fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Semua Akun</span>
              <span class="info-box-number">{{ $allcount }}</span>

              <div class="progress">
                <div class="progress-bar" style="width: {{ $allcount }}%"></div>
              </div>
                  <span class="progress-description">
                    70% Increase in 30 Days
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <div class="col-md-12">
              <!-- USERS LIST -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Akun yang baru terdaftar hari ini</h3><span class="label label-info">{{ date('jS F Y',strtotime($sekarang)) }}</span>

                  <div class="box-tools pull-right">
                    <span class="label label-danger">{{ $siswa->count() }} @if($siswa->count() > 1) New Account(s) @else New Account @endif</span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table table-responsive table-striped table-hover">
                    <thead>
                      <tr>
                        <td><b>No</b></td>
                        <td><b>Username</b></td>
                        <td><b>Nama Asli</b></td>
                        <td><b>Tanggal register</b></td>
                        <td><b>Kapan</b></td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <!-- Variable -->
                        <?php $no = 1; ?>
                        <!-- End Variable -->
                        @foreach($siswa as $in)
                          <td>{{ $no }}</td>
                          <td>{{ $in->username }}</td>
                          <td>{{ $in->name }}</td>
                          <td>{{ $in->created_at->format('l jS \\of F Y h:i:s A') }}</td>
                          <td>{{ $in->created_at->diffForHumans() }}</td>
                      </tr>
                        <?php $no++; ?>
                        @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="javascript:void(0)" class="uppercase">View All Users</a>
                </div>
                <!-- /.box-footer -->
              </div>
              <!--/.box -->
            </div>

        <div class="col-md-12">
              <!-- USERS LIST -->
              <div class="box box-solid box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Panel request verifikasi akun siswa</h3>

                  <div class="box-tools pull-right">
                    <span class="label label-danger">
                      @if($accs->count() > 1) {{ $accs->count() }} New Account(s) @elseif($accs->count() == 1) One Account requested  @else Tidak ada permohonan verifikasi @endif</span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table table-responsive table-striped table-hover">
                    <thead>
                      <tr>
                        <td><b>No</b></td>
                        <td><b>Username</b></td>
                        <td><b>Nama Asli</b></td>
                        <td><b>Request pada</b></td>
                        <td><b>Aksi</b></td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <!-- Variable -->
                        <?php $no = 1; ?>
                        <!-- End Variable -->
                        @foreach($accs as $in)
                          <td>{{ $no }}</td>
                          <td>{{ $in->username }}</td>
                          <td>{{ $in->name }}</td>
                          <td>{{ $in->created_at->format('l jS \\of F Y h:i:s A') }}</td>
                          <td>{{ $in->created_at->diffForHumans() }}</td>
                          <td><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#edit{{$in->id}}"><i class="fa fa-check"></i> Verifikasi</a></td>
                      </tr>
                        <?php $no++; ?>
                        @endforeach
                    </tbody>
                  </table>
                  <!--
                  <ul class="users-list clearfix">
                    @foreach($accs as $in)
                    <li>
                      <a data-toggle="modal" data-target="#edit{{$in->id}}" class="users-list-name" href="#">
                        <img 
                            @if($in->photo == 'Not Setting' || $in->photo == NULL) 
                              src="https://s17.postimg.org/bfpk18wcv/default.jpg" 
                            @else 
                              src="{{ url('uploadgambar') }}/{{ $in->photo }}" 
                            @endif 
                            class="img-thumbnail" width="45" height="30" title="{{ $in->name }}'s photo profile">
                      </a>
                      <a data-toggle="modal" data-target="#edit{{$in->id}}" class="users-list-name" href="#">{{ $in->name }}</a>
                      <span class="users-list-date">{{date('D-M-Y', strtotime($in->created_at)) }}</span>
                    </li>
                    @endforeach
                  </ul>
                -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="javascript:void(0)" class="uppercase">View All Users</a>
                </div>
                <!-- /.box-footer -->
              </div>
              <!--/.box -->
            </div>
            <!-- /.col -->
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@endsection
