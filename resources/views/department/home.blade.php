@extends('layouts/master')

@section('title')
    Department
@endsection

@section('content-header')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">{{$title}}</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Department</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
@endsection

@section('content')

{{-- <h3>{{$subtitle}}</h3> --}}
{{-- <p>{{$content}}</p> --}}
{{-- <h4>Daftar karyawan</h4> --}}
{{-- @foreach ($employees as $employee)
  
  <p> Name : {{ $employee->first_name }} {{ $employee->last_name }}</p>
@endforeach --}}
<section class="content">
  <div class="container-fluid">
    
    <div class="row">
      <div class="col-md-3">
        <a href="/department/create">
          <button class="btn btn-block btn-primary">Tambah Data</button>
        </a>
      </div>
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">{{$subtitle}}</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-condensed">
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th style="width: 40px">Label</th>
                  </tr>
                  @foreach ($employees as $employee)
                    <tr>
                      <td>#</td>
                      <td>{{$employee->first_name}}</td>
                      <td>{{$employee->last_name}}</td>
                      <td>
                        EDIT | DELETE
                      </td>
                    </tr>
                  @endforeach                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
      </div>
    </div>
  </div>
</section>


@endsection