@extends('layouts/defaultAdmin')

@section('content')
            <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Artikel Wisata</h4>
                                <div class="tambah">
                                    <a href="{{ url('/addArtikel') }}">
                                        <button type="button" class="btn btn-rounded btn-primary">Tambah</button>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered verticle-middle table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th scope="col">Judul</th>
                                                <th scope="col">Penulis</th>
                                                <th scope="col">Isi</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                @foreach ($data as $item)
                                                <tr>
                                                    <td>{{ $item->judul }}</td>
                                                    <td>{{ $item->penulis }}</td>
                                                    <td>{{ $item->konten }}</td>
                                                    <td><span><a href="{{route('update', ['id' => $item->id])}}" class="mr-4" data-toggle="tooltip"
                                                            data-placement="top" title="Edit"><i
                                                                class="fa fa-pencil color-muted"></i> </a>
                                                            <a
                                                            href="{{route('delete', ['id' => $item->id])}}" data-toggle="tooltip"
                                                            data-placement="top" title="Close"><i
                                                                class="fa fa-close color-danger"></i></a></span>
                                                    </td>
                                                </tr>
                                                    
                                                @endforeach
                                        </tbody>
                                    </table>
                                </div>
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