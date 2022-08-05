@extends('layouts.defaultAdmin')

@section('content')
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-lg-12">  
                        <h4>Buat Artikel Baru</h4>
                        <span>Silahkan mengisi data dibawah ini!</span>
                        <form action="" class="form-artikel" style="margin-top:30px;">
                            <div class="form-group">
                                <input type="text" class="form-control input-default" id="judul" placeholder="Judul Artikel" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-default" id="penulis" placeholder="Penulis" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-default" id="penulis" placeholder="Isi Artikel" required>
                            </div>
                            <div class="form-group">
                                <div class="summernote"></div>
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