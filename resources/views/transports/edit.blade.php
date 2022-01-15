@extends('admin.layouts.layout')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Create Transport</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Create Transport</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
      

     
        <div class="container-fluid ">
          <form action="{{ route('transports.store') }}" method="POST">
            @csrf
            <div class="card card-primary bs-form-wrappe">
                <div class="card-header">
                    <h3 class="card-title">Transport Detals</h3>
                </div> <!-- /.card-body -->
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleSelectRounded0">Choose Tour Group</label>
                        <select class="custom-select rounded-0" name="tour_id" id="exampleSelectRounded0">
                          @foreach ($tourgroups as $tourgroup )
                          <option  value="{{ $tourgroup->id }}">{{ $tourgroup->tourgroup_name }}</option>  
                          @endforeach
                          
                          
                        </select>
                      </div>
                    <div class="form-group">
                        <label for="exampleSelectRounded0">Choose Transport type</label>
                        <select class="custom-select rounded-0" name="transport_type" id="exampleSelectRounded0">
                            <option value="Auto">Auto</option>
                            <option value="Air">Air</option>
                            <option value="Train">Train</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" value="Sedan" type="radio" name="auto_type">
                            <label class="form-check-label">Sedan</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" value="Mini Bus" type="radio" name="auto_type">
                            <label class="form-check-label">Mini Bus</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" value="Bus" type="radio" name="auto_type">
                            <label class="form-check-label">Bus</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Car extra features</label>
                        <input type="text" value="{{ old('car_extra_features') }}" name="car_extra_features" class="form-control @error('car_extra_features')
              {{ 'is-invalid' }} @enderror" id="exampleInputEmail1" placeholder="Car Extra">
                        @error('car_extra_features')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="card card-success ">
                <!--start here -->
                <div class="card-header ">
                    <h3 class="card-title">Itinarary</h3>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleSelectRounded0">Choose Transport type</label>
                    <select class="custom-select rounded-0" name="pickup_or_dropoff_or_marshrut[]" id="exampleSelectRounded0">
                        <option value="Pickup">Pickup</option>
                        <option value="Dropoff">Dropoff</option>
                        <option value="Marshrut">Marshrut</option>
                    </select>
                </div>
                    <div class="form-group ">
                        <label>Date and time:</label>
                        <div class="input-group date" >
                            <input type="datetime-local" 
                                name="pickup_or_dropoff_date_time[]">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>From</label>
                                <input type="text" class="form-control" name="pickup_or_dropoff_from[]" placeholder="From">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>To</label>
                                <input type="text" class="form-control" name="pickup_or_dropoff_to[]" placeholder="TO">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Deiver Name</label>
                                <input type="text" class="form-control" name="driver_name[]" placeholder="Driver Name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Driver Tel</label>
                                <input type="text" class="form-control" name="driver_tel[]" placeholder="Driver Tel">
                            </div>
                        </div>
                    </div>
                </div> <!-- /.card-body -->
            </div>
            <button type="button" class="btn btn-block btn-success bs-add-button">Add itinarary</button>


            <button  type ="submit" class="btn btn-block btn-primary">Submit</button>

          </form> <!-- /.card-body -->
        </div>
</div><!-- /.container-fluid -->
</section>

<!-- Main content -->

<!-- /.content -->
</div>
<!-- add jqury to add inputs for itinarary -->




@endsection
