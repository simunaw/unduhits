@extends('layouts.userlayaout')

@section('content')

    <!-- Page Content -->
    <div class="content">
        <!-- Search -->

        <!-- END Search -->

        <div style="background-color:#F0F2F5;" class="block shadow-none">
                <a href="/">Produk Lisensi </a>
                <i class="fa fa-angle-right "></i>
                <a > Adobe</a>
        </div>
        <!-- Results -->
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-3">
                <div class="block">
                    <div class="block-content py-5">
                            <a class="block-rounded" >
                                <img style= "width: 200px; height: 200px;"  class="img-responsive center-block d-block mx-auto mt-15 mb-15" src="assets/media/photos/adobe-logo-492427.png" alt="">
                            </a>
                            <div class="ml-20">
                                <div class="border-b">
                                    <p class="font-size-lg font-w700  mb-0">
                                        Adobe
                                    </p>
                                    <p class="font-size-sm  font-w600 text-op  mb-0">
                                        Company: Adobe Inc.
                                    </p>
                                </div>
                                <br>
                                <div class="ml-15 mb-20">
                                    <a href="https://www.adobe.com/id_en/creativecloud.html?sdid=WKRCJ9VF&mv=search&ef_id=CjwKCAjwtcCVBhA0EiwAT1fY74TX1e_0hDiKnJ73yDTW4ZaNo6t-v0_kOgK5KKx6GKw_y6h8H2G0ABoCthcQAvD_BwE:G:s&s_kwcid=AL!3085!3!447025602704!e!!g!!adobe!636853869!31669464044&gclid=CjwKCAjwtcCVBhA0EiwAT1fY74TX1e_0hDiKnJ73yDTW4ZaNo6t-v0_kOgK5KKx6GKw_y6h8H2G0ABoCthcQAvD_BwE" target="_blank">
                                        <button style="" type="button" class="btn btn-success shadow min-width-150 ">
                                        <i class="fa fa-globe mr-5"></i>Visit Website
                                        </button>
                                    </a>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="block">
                    <div class="block-content">
                        <div class="block">
                            <ul style="border-width: 2px !important; border-color: #26C6DA !important;" class="nav nav-pills nav-justified border-b" data-toggle="tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active " href="#search-ringkasan">Ringkasan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#search-filedownload">File Download</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#search-spesifikasi">Spesifikasi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#search-preview">Preview</a>
                                </li>
                            </ul>
                            <div class="block-content block-content-full tab-content overflow-hidden">
                                <!-- Ringkasan-->
                                <div class="tab-pane fade show active" id="search-ringkasan" role="tabpanel">
                                    <div class="row items-push">
                                        <div class="col-lg-12 border-b">
                                            <h4 class="h5 mb-5">
                                                <a class="font-size-md  font-w700">Adobe</a>
                                            </h4>
                                            @foreach($ringkasan as $r)
                                                <p> {!! html_entity_decode($r->ringkasan) !!}</p>
                                            @endforeach
                                            <p>Informasi tentang Adobe Creative Cloud, silakan kunjungi <a href="https://www.adobe.com/id_en/creativecloud.html" target="_blank">www.adobe.com/id_en/creativecloud.html</a></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Classic -->

                                <!-- Photos -->
                                <div class="tab-pane fade" id="search-filedownload" role="tabpanel">
                                    <div class="row items-push">
                                        <!-- <div class="col-lg-12 border-b">
                                            <h4 class="h5 mb-5">
                                                <a class="font-size-md  font-w700">File Panduan</a>
                                            </h4>
                                            @foreach($file_panduan as $pd)
                                            <a href="/download/{{$pd->id}}">
                                                <i class="fa fa-file-pdf-o" style="color:red"></i>
                                                <div style="display:inline-block;" class="text">
                                                    <p>{{$pd->nama_file_panduan}}</p>
                                                </div>
                                            </a>
                                            <br>
                                            @endforeach
                                        </div> -->
                                        <div class="col-lg-12 border-b">
                                            <h4 class="h5 mb-5">
                                                <a class="font-size-md  font-w700">File Installer</a>
                                            </h4>
                                            <p>Informasi tentang file download Adobe Creative Cloud, silakan kunjungi <a href="https://www.adobe.com/id_en/creativecloud.html" target="_blank">www.adobe.com/id_en/creativecloud.html</a></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Photos -->

                                <!-- Spesifikasi -->
                                <div class="tab-pane fade " id="search-spesifikasi" role="tabpanel">
                                    <div class="row items-push">
                                        <!-- <div class="col-lg-12 border-b">
                                            <h4 class="h5 mb-5">
                                                <a class="font-size-md  font-w700">Persyaratan Sistem</a>
                                            </h4>
                                            @foreach($persyaratan_sistem as $p)
                                                <p> {!! html_entity_decode($p->persyaratan_sistem) !!}</p>
                                            @endforeach
                                        </div> -->
                                        <div class="col-lg-12 border-b">
                                            <!-- <h4 class="h5 mb-5">
                                                <a class="font-size-md  font-w700">Fitur</a>
                                            </h4>
                                                @foreach($fitur as $f)
                                                <p> {!! html_entity_decode($f->fitur) !!}</p>
                                                @endforeach -->
                                                <p>Informasi tentang fitur dan spesifikasi perangkat lunak Adobe Creative Cloud , silakan kunjungi <a href="https://helpx.adobe.com/creative-cloud/system-requirements.html" target="_blank">helpx.adobe.com/creative-cloud/system-requirements.html</a></p>
                                        </div>

                                    </div>
                                </div>
                                <!-- END Users -->

                                <!-- Preview -->
                                <div class="tab-pane fade active" id="search-preview" role="tabpanel">
                                    <div class="js-slider slick-nav-black slick-dotted-inner slick-dotted-white show active" data-dots="true" data-arrows="true">
                                        @foreach($preview as $p)
                                            <div>
                                                <p class="font-size-base font-400  mb-0" style="text-align:center"><strong>{{$p->nama_gambar}}</strong></p>
                                                <img class="img-fluid center-block mx-auto border" style="" src="{{ asset('assets/media/preview/'.$p->namaFiles) }}" alt="" title="">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <!-- END Results -->
    </div>
    <!-- END Page Content -->
@endsection
