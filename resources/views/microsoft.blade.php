@extends('layouts.userlayaout')

@section('content')

    <!-- Page Content -->
    <div class="content">
        <!-- Search -->

        <!-- END Search -->

        <div style="background-color:#F0F2F5;" class="block shadow-none">
                <a href="/">Produk Lisensi </a>
                <i class="fa fa-angle-right "></i>
                <a > Microsoft</a>
        </div>
        <!-- Results -->
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-3">
                <div class="block">
                    <div class="block-content py-5">
                            <a class="block-rounded" >
                                <img style= "width: 184px; height: 184px;"  class="img-responsive center-block d-block mx-auto mt-15 mb-15"src="assets/media/photos/microsoft.png" alt="">
                            </a>
                            <div class="ml-20">
                                <div class="border-b">
                                    <p class="font-size-lg font-w700  mb-0">
                                        Microsoft
                                    </p>
                                    <p class="font-size-sm  font-w600 text-op  mb-0">
                                        Company: Microsoft Corporation
                                    </p>
                                </div>
                                <br>
                                <div class="ml-15 mb-20">
                                    <a href="https://www.microsoft.com/id-id" target="_blank">
                                        <button style="" type="button" class="btn btn-success shadow min-width-150 ">
                                            <i class="fa fa-globe mr-5"></i>
                                            Visit Website
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
                            <ul style="border-width: 2px !important; border-color: #4EB5BA !important;" class="nav nav-pills nav-justified border-b" data-toggle="tabs" role="tablist">
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
                                                <a class="font-size-md  font-w700">Microsoft</a>
                                            </h4>
                                            @foreach($ringkasan as $r)
                                                <p> {!! html_entity_decode($r->ringkasan) !!}</p>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <!-- END Classic -->

                                <!-- Photos -->
                                <div class="tab-pane fade" id="search-filedownload" role="tabpanel">
                                    <div class="row items-push">
                                        <div class="col-lg-12 border-b">
                                            <h4 class="h5 mb-5">
                                                <a class="font-size-md  font-w700">File Installer</a>
                                            </h4>
                                            <table class="table table-borderless table-hover table-vcenter">
                                            <thead class="thead-light">
                                                    <tr>
                                                        <th>Nama</th>
                                                        <th class="d-none d-sm-table-cell">Ukuran</th>
                                                        <th class="text-center" style="width: 80px;">Download</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($file_installer as $fi)
                                                    </tr>
                                                    <td>{{$fi->nama_file_installer}}</td>
                                                    <td>{{$fi->size}} GB</td>
                                                        <td class="text-center">
                                                            <div class="btn-group">
                                                                @if(session()->get('id_token') == null)
                                                                <a href="/auth">
                                                                    <button style="color:#3F9CE8" type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Download">
                                                                        <i class="fa fa-download"></i>
                                                                    </button>
                                                                </a>
                                                                @else
                                                                <a href="/downloadInstaller/{{$fi->id}}"  target="_blank">
                                                                    <button style="color:#3F9CE8" type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Download">
                                                                        <i class="fa fa-download"></i>
                                                                    </button>
                                                                @endif

                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- END File Download -->

                                <!-- Spesifikasi -->
                                <div class="tab-pane fade" id="search-spesifikasi" role="tabpanel">
                                    <div class="row items-push">
                                        <div class="col-lg-12 border-b">
                                                <h4 class="h5 mb-5">
                                                    <a class="font-size-md  font-w700">Persyaratan Sistem</a>
                                                </h4>
                                                @foreach($persyaratan_sistem as $p)
                                                    <p> {!! html_entity_decode($p->persyaratan_sistem) !!}</p>
                                                @endforeach

                                        </div>
                                        {{-- <div class="col-lg-12 border-b">
                                            <h4 class="h5 mb-5">
                                                <a class="font-size-md  font-w700">Fitur</a>
                                            </h4>
                                                @foreach($fitur as $f)
                                                <p> {!! html_entity_decode($f->fitur) !!}</p>
                                                @endforeach
                                        </div> --}}
                                    </div>
                                </div>
                                <!-- END Spesifikasi -->

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
                                <!-- END Projects -->
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
