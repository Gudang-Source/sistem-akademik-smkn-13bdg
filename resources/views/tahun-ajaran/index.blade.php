@extends('master')

@section('content')
<!-- end messages session pop-up -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tahun Ajaran
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tahun Ajaran</a></li>
        <li class="active">Lihat Data Tahun Ajaran</li>
      </ol>
    </section>

<!-- notification session -->
@if(session('message'))      
  <!-- sweet alert -->
<link rel="stylesheet" href="/css/sweetalert.css">
<!-- sweet alert -->
<script src="/js/sweetalert.js"></script>
<script>
    swal("{!! session('message') !!}", "", "success");
</script>
@endif
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Tahun Ajaran</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <form action="#">
            <div>
              @if(Auth()->user()->role == '2')
            <a href="#" style="margin: 10px 10px;" data-toggle="modal" class="btn btn-success ajax" data-target="#add"><i class="fa fa-plus"></i> Tambah Tahun Ajaran</a>
            @endif
            </div>
            <div>
              <input type="submit" id="actions" value="Hapus" hidden>
            </div>
            <table id="example" class="table table-bordered table-hover table-responsive">
              <thead>
                <tr>
                  <td>#</td>
                  <td>Tahun Sekarang</td>
                  @if(Auth()->user()->role == '2')
                  <td>Aksi</td>
                  @endif
                </tr>
              </thead>
              <tbody>
                <tr>
                  @foreach($tahun as $x)
                  <td>
                      <input type="checkbox" name="checked[]" id="option-1">
                  </td>
                  <td>{{ $x->tahun }}</td>
                  @if(Auth()->user()->role == '2')
                  <td>
                    <div class="btn-group">
                    <a data-toggle="modal" data-target="#edit{{$x->id}}" class="btn btn-default  text-yellow"><i class="fa fa-pencil"></i></a>
                    <a href="#" data-toggle="modal" class="btn btn-default text-red" data-target="#delete{{$x->id}}"><i class="fa fa-trash"></i></a>
                    </div>
                  </td>
                  @endif
                </tr>
                  @endforeach
              </tbody>
            </table>
          </form>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        </div>
        <!-- /.box-footer-->
      </div>

    </section>
    <!-- /.content -->
  </div>

@include('tahun-ajaran.create')
@endsection
