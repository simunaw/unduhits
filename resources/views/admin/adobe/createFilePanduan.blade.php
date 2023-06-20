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
                <form action="/admin/adobe/filedownload/store" method="POST" enctype='multipart/form-data'>
                    @csrf
                    <div class="form-group row">
                        <label class="col-12" >Nama File Panduan</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="nama_file_panduan" placeholder="Nama File Panduan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">File Panduan</label>
                        <div class="col-md-9">
                            <input type="file" class="form-control" name="namaFiles" placeholder="File Panduan..">
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

</main>
@endsection