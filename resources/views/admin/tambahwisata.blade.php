@extends('layouts.defaultAdmin')

@section('content')
            <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-lg-12">  
                        <h4>Tambah Paket Wisata</h4>
                        <span>Silahkan mengisi data dibawah ini!</span>
                        <form action="/wisata/add" method="POST" class="form-artikel" style="margin-top:30px;">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control input-default" id="nama" placeholder="Nama Paket" name="nama">
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="kategori" id="kategori" name="kategori" required>
                                    <option value="none" selected disabled hidden>------ Select Kategori ------</option>
                                    <option value="goa">Goa</option>
                                    <option value="pantai">Pantai</option>
                                    <option value="lengkap">Lengkap</option>
                                    <option value="lainnya">Lainnya</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="summernote"></div>
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control input-default" id="harga" placeholder="Harga" name="harga">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="Keterangan" rows="3" placeholder="Keterangan" required name="keterangan"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-default" id="benefit" placeholder="Benefit" name="benefit">
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