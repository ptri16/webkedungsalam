@extends('layouts.defaultAdmin')

@section('content')
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-lg-12">  
                        <h4>Edit Artikel</h4>
                        <span>Silahkan mengisi data dibawah ini!</span>
                        <form action="/artikel/edit" method="get" class="form-artikel" style="margin-top:30px;">
                            @foreach ($data as $item)
                                <div class="form-group">
                                    <input type="text" class="form-control input-default" id="judul" name="judul" placeholder="Judul Artikel" value="{{ $item -> judul }}" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control input-default" id="penulis" name="penulis" placeholder="Penulis" value="{{ $item -> penulis }}" required>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="konten" name="konten" rows="3" placeholder="Isi Artikel" value="{{ $item->konten }}" required></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="summernote"></div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" style="padding:5px 15px 5px 15px;">Submit</button>
                                </div>
                                <input type="hidden" name="id" value="{{ $item->id }}">
                            @endforeach
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
@endsection