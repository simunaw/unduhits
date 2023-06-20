@extends('layouts.backend')

@section('content')
    <div class="content">
        <!-- Page Content -->
        <!-- Hover Table -->
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Tambah</h3>
            </div>
            <div class="block-content">
                <form action="/admin/adobe/preview/store" method="POST" enctype='multipart/form-data'>
                    @csrf
                    <div class="form-group row">
                        <label class="col-12" >Nama Gambar</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="nama_gambar" placeholder="Nama Gambar">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">File Gambar</label>
                        <div class="col-md-9">
                            <input type="file" class="form-control" name="namaFiles" placeholder="Pendiri..">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <button type="submit" name=submit value="Save" class="btn btn-alt-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
            <!-- END Hover Table -->
    </div>
    <!-- END Page Content -->

@endsection