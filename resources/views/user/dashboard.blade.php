@extends('layouts.default')
@section('content')
@include('partials.cover')

    <!-- Intro Sejarah Kedungsalam -->
    <div id="intro" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="text-container">
                        <div class="section-title" >
                            <!-- logo -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-flag-fill" viewBox="0 0 16 16">
                                <path d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12.435 12.435 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A19.626 19.626 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a19.587 19.587 0 0 0 1.349-.476l.019-.007.004-.002h.001"/>
                            </svg>
                             SEJARAH
                        </div>
                        <h2>Sejarah Desa Kedungsalam</h2>
                        <p>Dahulu kala, sekitar tahun 1800-an di suatu tempat yang masih berupa hutan belantara, belum terdapat satu manusia pun yang menempati hutan belantara tersebut. Lalu setelah Perang Diponegoro melawan penjajah Belanda, tempat tersebut kedatangan manusia satu per satu yang menyelamatkan diri dari penjajah Belanda yang membuka hutan tersebut sebagai pemukiman sementara.</p>
                        <div class="testimonial-author">
                            <a class="btn-solid-lg page-scroll" href="{{ url('/Article') }}">Baca Selengkapnya >></a>
                        </div>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-7">
                    <div class="image-container">
                        <img class="img-fluid" src="/img/Sejarah.jpg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of intro -->

<!-- Destinasi -->
<div id="projects" class="filter">
		<div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title"><div class="fas fa-map-marker-alt"></div> DESTINASI</div>
                    <h2>Beberapa Destinasi Wisata yang Disediakan</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- Filter -->
                    <div class="button-group filters-button-group">
                        <a class="button is-checked" data-filter="*"><span>SEMUA</span></a>
                        <a class="button" data-filter=".goa"><span>WISATA GOA</span></a>
                        <a class="button" data-filter=".pantai"><span>WISATA PANTAI</span></a>
                        <a class="button" data-filter=".situs"><span>WISATA SITUS</span></a>
                    </div> <!-- end of button group -->
                    <div class="grid">
                        <div class="element-item pantai">
                            <a class="popup-with-move-anim" href="#project-1"><div class="element-item-overlay"><span>Pantai Ngliyep</span></div><img src="/img/Ngliyep.jpg" alt="alternative"></a>
                        </div>
                        <div class="element-item pantai">
                            <a class="popup-with-move-anim" href="#project-2"><div class="element-item-overlay"><span>Pantai Pasir Panjang</span></div><img src="/img/PP.jpg" alt="alternative"></a>
                        </div>
                        <div class="element-item goa">
                            <a class="popup-with-move-anim" href="#project-3"><div class="element-item-overlay"><span>Goa Lo-Bangi</span></div><img src="/img/Goa.jpg" alt="alternative"></a>
                        </div>
                        <div class="element-item situs">
                            <a class="popup-with-move-anim" href="#project-4"><div class="element-item-overlay"><span>Sendang Kamulyan</span></div><img src="/img/KolamSendang.jpg" alt="alternative"></a>
                        </div>
                    </div> <!-- end of grid -->
                    <!-- end of filter -->
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
		</div> <!-- end of container -->
    </div> <!-- end of filter -->
    <!-- end of projects -->

    <!-- Destinasi Wisata -->
    <!-- Lightbox -->
    <div id="project-1" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="/img/Ngliyep.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Pantai Ngliyep</h3>
                <hr class="line-heading">
                <h6>Tentang</h6>
                <p>Pantai Ngliyep adalah sebuah pantai di pesisir selatan yang terletak di tepi Samudra Hindia.</p>
                <p>Ngliyep berasal dari kata liyep-liyep yang berarti mengantuk atau tertidur. Suasana pantai yang sejuk, tenang, dan rileks dapat membuat pengunjung yang melihat pantai ini akan mengantuk.</p>
                <a class="btn-solid-reg" href="{{ url('/NgliyepArticle') }}">Selengkapnya</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">Kembali</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-2" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="/img/PP.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Pantai Pasir Panjang</h3>
                <hr class="line-heading">
                <h6>Tentang</h6>
                <p>Sesuai dengan namanya, Pantai Pasir Panjang memiliki panjang sekitar 700 meter untuk satu area. Pantai ini terletak satu garis dengan Pantai Ngliyep yang sudah lebih dulu menjadi destinasi wisata utama di Malang.</p>
                <p>Sembari menikmati pemandangan hamparan pasir putih yang luas, pengunjung juga dapat piknik dan menikmati makanan ikan bakar yang dijual disekitar pantai.</p>
                <a class="btn-solid-reg" href="{{ url('/PapanArticle') }}">Selengkapnya</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">Kembali</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-3" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="/img/Goa.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Goa Lo-Bangi</h3>
                <hr class="line-heading">
                <h6>Tentang</h6>
                <p>Goa Bangi merupakan tempat wisata baru potensial yang bukan hanya memanjakan mata dengan keindahan cekungan batunya, tetapi juga menantang adrenalin karena pengunjung akan melewati chamber yang semakin dalam terjal dan jalan yang berlumpur.</p>
                <a class="btn-solid-reg" href="{{ url('/GoaArticle') }}">Selengkapnya</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">Kembali</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-4" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="/img/KolamSendang.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Sendang Kamulyan</h3>
                <hr class="line-heading">
                <h6>Tentang</h6>
                <p>Artikel Belum Tersedia</p>
                <a class="btn-solid-reg" href="{{ url('/SendangArticle') }}">Selengkapnya</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">Kembali</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->
    <!-- end of project lightboxes -->


    <!-- Paket Wisata -->
    <div id="services" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box2-fill" viewBox="0 0 16 16">
                            <path d="M3.75 0a1 1 0 0 0-.8.4L.1 4.2a.5.5 0 0 0-.1.3V15a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4.5a.5.5 0 0 0-.1-.3L13.05.4a1 1 0 0 0-.8-.4h-8.5ZM15 4.667V5H1v-.333L1.5 4h6V1h1v3h6l.5.667Z"/>
                        </svg>
                         PAKET WISATA
                    </div>
                    <h2>Beberapa Paket Wisata yang Kami<br>Sediakan untuk Anda</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="/img/Ngliyep_Sendang.jpg" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Paket Wisata Pantai</h3>
                            <p>Perfect for fresh ideas or young startups, this package will help get the business off the ground</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Environment and competition</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Designing the marketing plan</div>
                                </li>
                            </ul>
                            <p class="price">Starting at <span>$199</span></p>
                        </div>
                        <div class="button-container">
                            <a class="btn-solid-reg popup-with-move-anim" href="#paket-1">Selengkapnya</a>
                        </div> <!-- end of button-container -->
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="/img/Goa-paket.jpg" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Paket Wisata Goa</h3>
                            <p>Use this service pack to give your company the necessary impulse to become an industry leader</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Business strategy planning</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Taking the planned actions</div>
                                </li>
                            </ul>
                            <p class="price">Starting at <span>$299</span></p>
                        </div>
                        <div class="button-container">
                            <a class="btn-solid-reg popup-with-move-anim" href="#paket-2">Selengkapnya</a>
                        </div> <!-- end of button-container -->
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="/img/Lengkap.jpg" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Paket Lengkap</h3>
                            <p>You already are a reference point in your industry now you need to learn about acquisitions</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Maintaining the leader status</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Acquisitions the right way</div>
                                </li>
                            </ul>
                            <p class="price">Starting at <span>$299</span></p>
                        </div>
                        <div class="button-container">
                            <a class="btn-solid-reg popup-with-move-anim" href="#paket-3">Selengkapnya</a>
                        </div> <!-- end of button-container -->
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of Paket Wisata -->


    <!-- Paket Wisata Lightbox -->
    <!-- Lightbox -->
    <div id="paket-1" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="/img/Ngliyep_Sendang.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Paket Wisata Pantai</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                <a class="btn-solid-reg" href="{{ url('/booking') }}">Pesan</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">Kembali</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="paket-2" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="/img/Goa-paket.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Paket Wisata Goa</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                <a class="btn-solid-reg" href="{{ url('/booking') }}">Pesan</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">Kembali</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="paket-3" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="/img/Lengkap.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Paket Wisata Lengkap</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                <a class="btn-solid-reg" href="{{ url('/booking') }}">Pesan</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">Kembali</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->
    <!-- end of Paket Wisata Lightbox -->
    

    <!-- FAQ -->
	<div id="details" class="accordion">
		<div class="area-1">
		</div><!-- end of area-1 on same line and no space between comments to eliminate margin white space --><div class="area-2">
            
            <!-- Accordion -->
            <div class="accordion-container" id="accordionOne">
                <h2>FAQ</h2>
                <div class="item">
                    <div id="headingOne">
                        <span data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" role="button">
                            <span class="circle-numbering">1</span><span class="accordion-title">Apakah wisata dapat diakses menggunakan kendaraan roda 4?</span>
                        </span>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionOne">
                        <div class="accordion-body">
                        Tentu saja, wisata dapat diakses menggunakan kendaraan roda 2 maupun 4.
                        </div>
                    </div>
                </div> <!-- end of item -->
            
                <div class="item">
                    <div id="headingTwo">
                        <span class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" role="button">
                            <span class="circle-numbering">2</span><span class="accordion-title">Apakah ada pembatasan jumlah pengunjung pada tempat wisata tertentu?</span>
                        </span>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionOne">
                        <div class="accordion-body">
                        Pembatasan jumlah pengunjung dilakukan sebagai upaya mencegah penularan virus corona. Pengunjung diharap datang sesuai jam operasional wisata dan melakukan reservasi.
                        </div>
                    </div>
                </div> <!-- end of item -->
            
                <div class="item">
                    <div id="headingThree">
                        <span class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" role="button">
                            <span class="circle-numbering">3</span><span class="accordion-title">Apakah terdapat larangan dan aturan khusus pada tempat wisata tertentu?</span>
                        </span>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionOne">
                        <div class="accordion-body">
                        Tidak ada larangan khusus, tetapi pengunjung wajib menjaga sopan santun dan kebersihan kawasan wisata. Pengunjung diharap melakukan reservasi sebelum berkunjung.
                        </div>
                    </div>
                </div> <!-- end of item -->
            </div> <!-- end of accordion-container -->
            <!-- end of accordion -->

		</div> <!-- end of area-2 -->
    </div> <!-- end of accordion -->
    <!-- end of details 1 -->

    <!-- About -->
    <div id="about" class="counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-xl-6">
                    <div class="image-container">
                        <img class="img-fluid" src="/img/faq2.jpg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-7 col-xl-6">
                    <div class="text-container">
                        <div class="section-title">TENTANG</div>
                        <h2>Tentang Website Wisata Kedungsalam</h2>
                        <p>Website ini merupakan website hasil kerjasama antara perangkat desa Kedungsalam dan Mahasiswa KKN Kelompok 18 FILKOM UB</p>
                    </div> <!-- end of text-container -->      
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of counter -->
    <!-- end of about -->
@endsection

    