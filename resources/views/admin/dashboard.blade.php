@extends('layouts.admin.main')

@section('title')
    Dashboard
@endsection

@section('content')
<section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-plus-square"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                        <h4>Total Gejala</h4>
                        </div>
                        <div class="card-body">
                        {{$gejalas}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="fas fa-medkit"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                        <h4>Penyakit</h4>
                        </div>
                        <div class="card-body">
                        {{$penyakits}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="far fa-file"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                        <h4>Reports</h4>
                        </div>
                        <div class="card-body">
                        1,201
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="fas fa-circle"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                        <h4>Online Users</h4>
                        </div>
                        <div class="card-body">
                        47
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-9"></div>
            <div class="col-3"></div>
        </div>
    </div>
</section>
@endsection