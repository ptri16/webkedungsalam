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
                                    <a href="tambahartikel.html">
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
                                                <th scope="col">Tanggal</th>
                                                <th scope="col">Isi</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Pantai Ngliyep  </td>
                                                <td> Bahrum Nisar</td>
                                                <td>Jun 28,2018</td>
                                                <td>bla bla bla</td>
                                                <td><span><a href="editartikel.html" class="mr-4" data-toggle="tooltip"
                                                            data-placement="top" title="Edit"><i
                                                                class="fa fa-pencil color-muted"></i> </a><a
                                                            href="javascript:void()" data-toggle="tooltip"
                                                            data-placement="top" title="Close"><i
                                                                class="fa fa-close color-danger"></i></a></span>
                                                </td>
                                            </tr>
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