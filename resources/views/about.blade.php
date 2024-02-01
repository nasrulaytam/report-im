@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('About') }}</h1>

    <div class="row justify-content-center">

        <!-- Profil Singkat -->
        <div class="col-lg-12">

            <div class="card shadow mb-4">

                <div class="card-body">

                    <div class="row">
                        <div class="col-lg-12 mb-1">
                            <div class="text-justify">
                                <h2 class="font-weight-bold">Profil Singkat</h2>
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-lg-8 mb-1">
                            <div class="text-justify">
                                <h5>
                                    <b>PT PNM Investment Management (PNM-IM)</b> adalah perusahaan manajer investasi yang bergerak di bidang
                                    pengelolaan reksa dana dan jasa penasihat investasi di industri pasar modal.
                                </h5>

                                <br>

                                <h5>
                                    PNM-IM memiliki izin sebagai Manajer Investasi berdasarkan Surat Keputusan BAPEPAM No. Kep-01/PM/MI/1998
                                    tertanggal 27 Januari 1998. Perseroan juga memiliki ijin sebagai Penasihat Investasi berdasarkan Keputusan
                                    Dewan Komisioner Otoritas Jasa Keuangan Nomor: KEP-16/D.04/2019 tanggal 2 April 2019.
                                </h5>

                                <br>

                                <h5>
                                    Sebagai anak usaha dengan mayoritas sahamnya (99,98%) dimiliki oleh  PT Permodalan Nasional Madani (PNM),
                                    Perseroan juga mengemban misi khusus untuk mendukung misi PT PNM dalam memberdayakan sektor usaha mikro kecil - menengah
                                    dan koperasi (UMKMK) di Indonesia. <b> PT. Permodalan Nasional Madani</b> adalah perusahaan yang didirikan oleh Pemerintah
                                    pada 1 Juni 1999 melalui Peraturan Pemerintah RI No.38/1999  tanggal 29 Mei 1999. Pada 2021 PNM berubah status menjadi anak usaha
                                    PT Bank Rakyat Indonesia Tbk (Persero) sebagai Holding BUMN Ultra Mikro.
                                </h5>

                            </div>
                        </div>

                        <div class="col-lg-4"> <!-- Bagian kanan untuk gambar -->
                            <img src="{{ asset('img/sample1.jpeg') }}" alt="Profil Singkat" style="width: 100%">
                        </div>

                        <div class="col-lg-12 mb-1">
                            <div class="text-justify">
                                <h5>
                                    <b>“Rasa AMAN sebagai jaminan untuk tumbuh bersama”</b>. Kepercayaan dan rasa aman dari investor merupakan nilai dasar dan faktor terpenting
                                    yang selalu dipegang teguh dalam aktivitas bisnis kelola dana dan jasa investasi. Nilai ini terbukti telah mampu memberikan fondasi
                                    yang kuat untuk membangun rekam jejak dan pengalaman panjang lebih dari 20 tahun sebagai manajer investasi terkemuka di Indonesia.
                                </h5>

                                <br>

                                <h5>
                                    Dengan didukung oleh tim investasi yang berpengalaman dan profesional di bidang pasar modal, Perseroan mampu membuktikan diri sebagai
                                    manajer investasi yang handal dan terpercaya dan menjadi manajer investasi terkemuka di Indonesia.
                                </h5>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>

        <!-- Visi Misi -->
        <div class="col-lg-12">

            <div class="card shadow mb-4">

                <div class="card-body">

                    <div class="row">
                        <div class="col-lg-12 mb-1">
                            <div class="text-justify">
                                <h2 class="font-weight-bold">Visi & Misi</h2>
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-lg-12 mb-1">
                            <div class="text-justify">

                                <div class="text-align: center">
                                    <img src="{{ asset('img/visimisi.jpg') }}" alt="Visi Misi" style="width: 70%; display: block; margin: 0 auto;">
                                </div>

                                <br><br>

                                <h5>
                                    Menjadi perusahaan manajer investasi terkemuka dalam mendukung program ekonomi kerakyatan,
                                    pengembangan sektor riil dan sektor keuangan.
                                </h5>

                                <br>

                                <h5>
                                    Untuk mencapai <b>Visi</b> itu, Perseroan mewujudkannya ke dalam <b>Misi</b> sebagai berikut :
                                </h5>

                                <h5>
                                    1. Menyediakan produk investasi yang kompetitif bagi nasabah
                                    <br>
                                    2. Mendukung upaya fund raising dari Pasar Modal maupun Pasar Uang untuk mendukung sektor riil termasuk UMKMK
                                    <br>
                                    3. Menjadi Perusahaan yang sehat dan berdaya saing tinggi sehingga dapat memberikan manfaat optimal bagi stakeholder
                                </h5>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!-- Tim Manajemen -->
        <div class="col-lg-12">

            <div class="card shadow mb-4">

                <div class="card-body">

                    <div class="row">
                        <div class="col-lg-12 mb-1">
                            <div class="text-justify">
                                <h2 class="font-weight-bold">Tim Manajemen</h2>
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-lg-12 mb-1">
                            <div class="text-center">
                                <h3 class="font-weight-bold">Dewan Komisaris</h3>
                            </div>
                        </div>
                    </div>

                    <br>


                    <div class="row">
                        <div class="col-lg-12 mb-1">
                            <div class="text-center">
                                <div class="" style="">
                                    <img src="{{ asset('img/komisaris1.png') }}">
                                    <br><br>
                                    <h4 class="font-weight-bold">Arief Mulyadi</h4>
                                    <span class="text-muted">Komisaris Utama</span>
                                </div>

                                <div class="row">
                                    <div class="col-md-6" style="margin-bottom: 50px">
                                        <img src="{{ asset('img/komisaris2.png') }}">
                                        <br><br>
                                        <h4 class="font-weight-bold">Bagus Rumbogo</h4>
                                        <span class="text-muted">Komisaris Independen</span>
                                    </div>

                                    <div class="col-md-6" style="margin-bottom: 50px">
                                        <img src="{{ asset('img/komisaris3.png') }}">
                                        <br><br>
                                        <h4 class="font-weight-bold">Tjatur H. Priyono</h4>
                                        <span class="text-muted">Komisaris</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br><br>

                    <div class="row">
                        <div class="col-lg-12 mb-1">
                            <div class="text-center">
                                <h3 class="font-weight-bold">Direksi</h3>
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-lg-12 mb-1">
                            <div class="text-center">
                                <div class="" style="">
                                    <img src="{{ asset('img/direksi1.png') }}">
                                    <br><br>
                                    <h4 class="font-weight-bold">Bambang Siswaji</h4>
                                    <span class="text-muted">Direktur Utama</span>
                                </div>

                                <div class="row">
                                    <div class="col-md-6" style="margin-bottom: 50px">
                                        <img src="{{ asset('img/direksi2.png') }}">
                                        <br><br>
                                        <h4 class="font-weight-bold">Solahuddin</h4>
                                        <span class="text-muted">Direktur</span>
                                    </div>

                                    <div class="col-md-6" style="margin-bottom: 50px">
                                        <img src="{{ asset('img/direksi3.png') }}">
                                        <br><br>
                                        <h4 class="font-weight-bold">Ade Santoso Djajanegara</h4>
                                        <span class="text-muted">Direktur</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!-- Struktur Organisasi -->
        <div class="col-lg-12">

            <div class="card shadow mb-4">

                <div class="card-body">

                    <div class="row">
                        <div class="col-lg-12 mb-1">
                            <div class="text-justify">
                                <h2 class="font-weight-bold">Struktur Organisasi</h2>
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-lg-12 mb-1">
                            <div class="text-justify">

                                <div class="align-items: center">
                                    <img src="{{ asset('img/struktur.jpeg') }}" alt="Struktur Organisasi" style="width: 70%; display: block; margin: 0 auto;">
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>

@endsection
