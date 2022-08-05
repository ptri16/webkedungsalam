@extends('layouts.defaultAdmin')

@section('content')        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-lg-12">  
                        <h4>Tambah Admin Baru</h4>
                        <span>Silahkan mengisi data dibawah ini!</span>
                        <form action="" class="form-artikel" style="margin-top:30px;">
                            <div class="form-group">
                                <input type="text" class="form-control input-default" id="nama" placeholder="Nama Admin" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control input-default" id="email" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control input-default" id="nomorhp" placeholder="Nomor Handphone" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control input-default" id="password" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control input-default" id="kpassword" placeholder="Konfirmasi Password" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" style="padding:5px 15px 5px 15px;">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->   
@endsection
