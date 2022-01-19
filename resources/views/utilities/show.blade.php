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
        <div class="container">


            <div class="row justify-content-end">
                <div class="col-4 border font-weight-bold">
                    Mijoz
                </div>
                <div class="col-4 border ">
                    SP "jaxongir travel"
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-4 border  font-weight-bold">
                    Shartnoma
                </div>
                <div class="col-4 border ">
                    @switch($utility->utility_category)
                    @case('Gaz')
                    С-II-93 ID 46042
                    @break
                    @case('Elekr')
                    4247
                    @break
                    @case('Suv Oqova')
                    9900064058
                    @break
                    @endswitch
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-4 border  font-weight-bold">
                    X/r
                </div>
                <div class="col-4 border ">
                    20208000404734557001
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-4 border  font-weight-bold">
                    Bank Nomi
                </div>
                <div class="col-4 border ">
                    АО "ASAKA" БАНК
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-4 border  font-weight-bold">
                    Bank Kodi
                </div>
                <div class="col-4 border ">
                    MFO 00264
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-4 border  font-weight-bold">
                    INN:
                </div>
                <div class="col-4 border ">
                    300965341
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-4 border  font-weight-bold">
                    Manzil:
                </div>
                <div class="col-4 border ">
                    Samarqand sh., Chirokchi 4
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-4 border  font-weight-bold">
                    Tel:
                </div>
                <div class="col-4 border ">
                    91 555 08 08
                </div>
            </div>
        </div>
        <div class="text-center mt-3 font-weight-bold">
            @switch($utility->utility_category)
            @case("Gaz")
            Sarflanga Gaz bo'yicha hisobot
            @break
            @case('Elekr')
            Sarflanga Elekt bo'yicha hisobot
            @break
            @case('Suv Oqova')
            Sarflanga Suv va Oqova bo'yicha hisobot
            @break
            @endswitch
        </div>
        <div class="text-center mt-1 font-weight-bold">
            Za {{ $utility->report_date }}
        </div>
        <!-- /.row -->

        <!-- /.row -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>





@endsection
