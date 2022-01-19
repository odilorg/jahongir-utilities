@extends('admin.layouts.layout')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Kommunal hisobotni yaratish</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Kommunal hisobotni yaratish</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('utilities.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>Hisobot Sanasi</label>
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input type="text" value="{{ old('report_date') }}" name="report_date" class="form-control @error('report_date')
                        {{ 'is-invalid' }} @enderror datetimepicker-input" data-target="#reservationdate" />
                                        <div class="input-group-append" data-target="#reservationdate"
                                            data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                    @error('report_date')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectRounded0">Kommunal Hisobotni tanlang</label>
                                    <select class="custom-select rounded-0" name="utility_category" id="exampleSelectRounded0">
                                      <option>Gaz</option>  
                                      <option>Elekr</option>  
                                      <option>Suv Oqova</option>  
                                    </select>
                                  </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ko'rsatgich ohiri</label>
                                    <input type="text" value="{{ old('counter_new') }}" name="counter_new" class="form-control  @error('counter_new')
                     {{ 'is-invalid' }} @enderror " id="inputError" placeholder="Ko'rsatgich ohiri">
                                    @error('counter_new')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ko'rsatgich oldingi</label>
                                    <input type="text" value="{{ old('counter_old') }}" name="counter_old" class="form-control @error('counter_old')
                  {{ 'is-invalid' }} @enderror" id="exampleInputEmail1" placeholder="Ko'rsatgich oldingi">
                                    @error('counter_old')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <button type="submit">Submit</button>
                            </form>
                        </div>
                    </div>


                </div>
                <!-- /.col-md-6 -->



            </div>
            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>



@endsection
