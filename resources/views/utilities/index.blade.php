@extends('admin.layouts.layout')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Utilities</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Utilities</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <div>
                            <a class="btn btn-info btn-sm" href="{{ route('utilities.create') }}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Kommunal Hisobotni Yarating
                            </a>
                        </div>
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>Sana</th>
                                    <th>Kommunal Nomi</th>
                                    <th>Hisoblagich Ohiri</th>
                                    <th>Hisoblagich Oldingi</th>
                                    <th>Farqi</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($utilities as $item )
                                <tr>
                                    <td>{{ $item->report_date }}</td>
                                    <td>{{ $item->utility_category }}</td>
                                    <td>{{ $item->counter_new }}</td>
                                    <td>{{ $item->counter_old }} </span></td>
                                    <td>{{ $item->counter_difference }}</td>


                                    <td><a class="btn btn-primary btn-sm" href="utilities/{{ $item->id }}">
                                            <i class="fas fa-folder">
                                            </i>
                                            View
                                        </a>
                                        <a class="btn btn-info btn-sm" href="utilities/{{ $item->id }}/edit">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a>
                                        <form action="/utilities/{{ $item->id }}" method="post" class="float-left">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash">
                                                </i>
                                                Delete
                                            </button>




                                        </form>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->

        <!-- /.row -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>





@endsection
