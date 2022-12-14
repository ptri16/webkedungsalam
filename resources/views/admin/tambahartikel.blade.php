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
                        <form action="/artikel/add" method="POST" class="form-artikel" style="margin-top:30px;">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control input-default" id="judul" name="judul" placeholder="Judul Artikel" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-default" id="penulis" name="penulis" placeholder="Penulis" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="konten" rows="3" placeholder="Isi Artikel" name="konten" required></textarea>
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