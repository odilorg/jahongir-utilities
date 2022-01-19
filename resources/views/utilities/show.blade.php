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
            <div class="container mt-5">
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
                {{ $sana }}
            </div>
            <div class="mt-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Ob'ekt Nomi va manzili</th>
                            <th scope="col">O'lchagich turi</th>
                            <th scope="col">O'lchagich raqami</th>
                            <th scope="col">Oldingi ko'rsatgich</th>
                            <th scope="col">Oxirgi ko'rsatgich</th>
                            <th scope="col">Farqi m3</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"></th>
                            <td></td>
                            <td></td>

                            <td>{{ $utility->counter_new }}</td>
                            <td>{{ $utility->counter_old }}</td>
                            <td>{{ $utility->counter_difference }}</td>
                        </tr>

                    </tbody>
                </table>
                <div class="row justify-content-around mb-3">
                    <div class="col-4 font-weight-bold">
                        Sp "Jaxongir travel"
                    </div>
                    <div class="col-4 font-weight-bold">
                        @switch($utility->utility_category)
                        @case('Gaz')
                        Samarqandshahargaz
                        @break

                        @case('Suv Oqova')
                        Suvoqova
                        @break
                        @endswitch
                    </div>
                </div>
                <div class="row">
                    <div class=" col-6 mt-2">Javobgar shahs: Jahangirov Z.Sh.</div>
                    <div class=" col-6 mt-2">Qabul qiluvchi: ____________________</div>
                </div>
                <div class="row">
                    <div class=" col-6 mt-2">Imzo ____________________</div>
                    <div class=" col-6 mt-2">Imzo ____________________</div>
                </div>
                <div class="row">
                    <div class=" col-6 mt-2">Sana {{ date('d/m/Y', strtotime($utility->report_date)) }}</div>
                    <div class=" col-6 mt-2">Sana {{ date('d/m/Y', strtotime($utility->report_date)) }}</div>
                </div>
                <div class="row">
                    <div class=" col-6 mt-2">Muhr: ________________</div>
                    <div class=" col-6 mt-2">Muhr: ________________</div>
                </div>
            </div>
        </div>
        <hr class="mt-5">
        <div class="container-fluid" style="margin-top: 180px;">
            <div class="container mt-5">
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
                {{ $sana }}
            </div>
            <div class="mt-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Ob'ekt Nomi va manzili</th>
                            <th scope="col">O'lchagich turi</th>
                            <th scope="col">O'lchagich raqami</th>
                            <th scope="col">Oldingi ko'rsatgich</th>
                            <th scope="col">Oxirgi ko'rsatgich</th>
                            <th scope="col">Farqi m3</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"></th>
                            <td></td>
                            <td></td>

                            <td>{{ $utility->counter_new }}</td>
                            <td>{{ $utility->counter_old }}</td>
                            <td>{{ $utility->counter_difference }}</td>
                        </tr>

                    </tbody>
                </table>
                <div class="row justify-content-around mb-3">
                    <div class="col-4 font-weight-bold">
                        Sp "Jaxongir travel"
                    </div>
                    <div class="col-4 font-weight-bold">
                        @switch($utility->utility_category)
                        @case('Gaz')
                        Samarqandshahargaz
                        @break

                        @case('Suv Oqova')
                        Suvoqova
                        @break
                        @endswitch
                    </div>
                </div>
                <div class="row">
                    <div class=" col-6 mt-2">Javobgar shahs: Jahangirov Z.Sh.</div>
                    <div class=" col-6 mt-2">Qabul qiluvchi: ____________________</div>
                </div>
                <div class="row">
                    <div class=" col-6 mt-2">Imzo ____________________</div>
                    <div class=" col-6 mt-2">Imzo ____________________</div>
                </div>
                <div class="row">
                    <div class=" col-6 mt-2">Sana {{ date('d/m/Y', strtotime($utility->report_date)) }}</div>
                    <div class=" col-6 mt-2">Sana {{ date('d/m/Y', strtotime($utility->report_date)) }}</div>
                </div>
                <div class="row">
                    <div class=" col-6 mt-2">Muhr: ________________</div>
                    <div class=" col-6 mt-2">Muhr: ________________</div>
                </div>
            </div>
        </div>
    </section>

</div>





@endsection
