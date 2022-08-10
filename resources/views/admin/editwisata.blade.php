@extends('layouts.defaultAdmin')

@section('content')
     <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-lg-12">  
                        <h4>Edit Paket Wisata</h4>
                        <span>Silahkan mengisi data dibawah ini!</span>
                        <form action="" class="form-artikel" style="margin-top:30px;">
                            @csrf
                            @foreach ($data as $item)
                                <div class="form-group">
                                <input type="text" class="form-control input-default" id="nama" placeholder="Nama Paket" name="nama" value="{{ $item->Nama }}">
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="kategori" id="kategori" name="kategori" required value="{{ $item -> Kategori }}">
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
                                <input type="number" class="form-control input-default" id="harga" placeholder="Harga" name="harga" value="{{ $item -> Harga }}">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="Keterangan" rows="3" placeholder="Keterangan" required name="keterangan" value={{ $item -> Keterangan }}></textarea>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-default" id="benefit" placeholder="Benefit" name="benefit" value="{{ $item->Benefit }}">
                            </div>
                            @endforeach
                            
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