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
                                <h4 class="card-title">Paket Wisata</h4>
                                <div class="tambah">
                                    <a href="{{ url('/addWisata') }}">
                                        <button type="button" class="btn btn-rounded btn-primary">Tambah</button>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Display</h4>
                                <div class="table-responsive">
                                    <table class="table table-bordered verticle-middle table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Kategori</th>
                                                <th scope="col">Benefit</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $item)
                                                <tr>
                                                <td>{{ $item -> id }}</td>
                                                <td>{{ $item -> Nama }}</td>
                                                <td>{{ $item -> Kategori }}</td>
                                                <td>{{ $item -> Benefit }}</td>
                                                <td><span>
                                                    <a href="{{route('upWisata', ['id' => $item->id])}}" class="mr-4" data-toggle="tooltip"
                                                            data-placement="top" title="Edit"><i class="fa-solid fa-minus"></i> </a>
                                                    </span>
                                                </td>
                                                
                                            </tr> 
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Data</h4>
                                <div class="table-responsive">
                                    <table class="table table-bordered verticle-middle table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Kategori</th>
                                                <th scope="col">Keterangan</th>
                                                <th scope="col">Benefit</th>
                                                <th scope="col">Harga</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $item)
                                                <tr>
                                                <td>{{ $item -> Nama }}</td>
                                                <td>{{ $item -> Kategori }}</td>
                                                <td>{{ $item -> Keterangan }}</td>
                                                <td>{{ $item -> Benefit }}</td>
                                                <td>Rp.{{ number_format($item->Harga) }}</td>
                                                <td><span>
                                                    <a href="{{route('upWisata', ['id' => $item->id])}}" class="mr-4" data-toggle="tooltip"
                                                            data-placement="top" title="Edit"><i
                                                                class="fa fa-pencil color-muted"></i> </a>
                                                    <a
                                                            href="{{route('delWisata', ['id' => $item->id])}}" class="mr-4" data-toggle="tooltip"
                                                            data-placement="top" title="Close"><i
                                                                class="fa fa-close color-danger"></i></a>
                                                    
                                                    <a href="{{route('disWisata', ['id' => $item->id])}}"  data-toggle="tooltip"><i class="fa-solid fa-check"></i></a>
                                                    </span>
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