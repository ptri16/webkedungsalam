@extends('layouts/defaultAdmin')

@section('content')
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <p class="mb-0">Selamat menikmati hari ini!</p>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic Datatable</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Nomor Handphone</th>
                                                <th>Paket</th>
                                                <th>Jumlah</th>
                                                <th>Bukti Pembayaran</th>
                                                <th>Tanggal Booking</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($user as $item)
                                            <tr>
                                                <td>{{ $item->Nama }}</td>
                                                <td>{{ $item->Email }}</td>
                                                <td>{{ $item->HP }}</td>
                                                <td>{{ $item->Paket }}</td>
                                                <td>{{ $item->JumlahOrang }}</td>
                                                <td>{{ $item->image }}</td>
                                                <td>{{ $item->TanggalPesanan }}</td>
                                                
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Nomor Handphone</th>
                                                <th>Paket</th>
                                                <th>Jumlah</th>
                                                <th>Bukti Pembayaran</th>
                                                <th>Tanggal Booking</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-xxl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Todo</h4>
                            </div>
                            <div class="card-body px-0">
                                <div class="todo-list">
                                    <div class="tdl-holder">
                                        <div class="tdl-content widget-todo2 mr-4">
                                            <ul id="todo_list">
                                                <li><label><input type="checkbox"><i></i><span>Get up</span><a href='#'
                                                            class="ti-trash"></a></label></li>
                                                <li><label><input type="checkbox" checked><i></i><span>Stand up</span><a
                                                            href='#' class="ti-trash"></a></label></li>
                                                <li><label><input type="checkbox"><i></i><span>Don't give up the
                                                            fight.</span><a href='#' class="ti-trash"></a></label></li>
                                                <li><label><input type="checkbox" checked><i></i><span>Do something
                                                            else</span><a href='#' class="ti-trash"></a></label></li>
                                                <li><label><input type="checkbox" checked><i></i><span>Stand up</span><a
                                                            href='#' class="ti-trash"></a></label></li>
                                                <li><label><input type="checkbox"><i></i><span>Don't give up the
                                                            fight.</span><a href='#' class="ti-trash"></a></label></li>
                                            </ul>
                                        </div>
                                        <div class="px-4">
                                            <input type="text" class="tdl-new form-control" placeholder="Write new item and hit 'Enter'...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12 col-xxl-6 col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="year-calendar"></div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
@endsection