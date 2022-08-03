@extends('layouts.additional')

@section('content')
    <!-- Form -->
    <div id="form" class="form">
        <div class="container">
            <div class="judul">
                <h1>FORM PEMESANAN<h1>
            </div>
            <div class="form">
                <form action="" data-toggle="validator" data-focus="false">
                    <div class="form-group">
                        <input type="text" class="form-control-input" id="cname" required>
                        <label class="label-control" for="cname">Nama</label>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control-input" id="cemail" required>
                        <label class="label-control" for="cemail">Email</label>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control-input" id="cnumber" required>
                        <label class="label-control" for="cnumber">Nomor Handphone</label>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <select class="form-control form-control-lg" id="cpaket" required style="font-size:15px;">
                            <option>------- Pilih Paket Wisata -------</option>
                            <option>Paket A Wisata Pantai</option>
                            <option>Paket B Wisata Pantai</option>
                            <option>Paket C Wisata Pantai</option>
                            <option>Paket A Wisata Goa</option>
                            <option>Paket B Wisata Goa</option>
                            <option>Paket C Wisata Goa</option>
                            <option>Paket A Wisata Lengkap</option>
                            <option>Paket B Wisata Lengkap</option>
                            <option>Paket C Wisata Lengkap</option>
                        </select>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <input type="date" class="form-control-input" id="cdate" required>
                        <label class="label-control" for="cdate">Tanggal Booking</label>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control-input" id="ctpeserta" required>
                        <label class="label-control" for="ctpeserta">Jumlah Orang</label>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control-input" id="ctpeserta" required>
                        <label class="label-control" for="ctpeserta">Jumlah Orang</label>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <select class="form-control form-control-lg" id="cbayar" required style="font-size:15px;">
                            <option>------- Pilih Metode Pembayaran -------</option>
                            <option>BNI-</option>
                            <option>BRI-</option>
                            <option>BCA-</option>
                            <option>GO-PAY - </option>
                            <option>DANA-</option>
                            <option>MANDIRI-</option>
                        </select>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group" >
                        <div class="drop-file">
                            <span class="btn-file">Browser File</span>
                            <span class="name-file">or Drag and Drop Files</span>
                            <input type="file" class="input-text" multiple>
                        </div>
                    </div>
                    <div class="form-group">
                            <button type="submit" class="form-control-submit-button">PESAN</button>
                    </div>
                </form>
            </div>
        </div> <!-- end of form -->
    </div><!-- end of form -->
@endsection