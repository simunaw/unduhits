@extends('layouts.backend')

@section('content')
    <div class="content">
        <!-- Page Content -->
        <!-- Hover Table -->
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Ubah File Installer</h3>
            </div>
            <div class="block-content">
                <form action="/admin/microsoft/filedownloadMicrosoft/updateMicrosoftFI/{{$file_installer->id}}" method="POST" enctype='multipart/form-data'>
                    @method('PUT')
                    @csrf
                    <div class="form-group row">
                        <label class="col-12" >Nama</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="nama_file_installer" value="{{$file_installer->nama_file_installer}}"placeholder="Nama File">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12" >Size</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="size" value="{{$file_installer->size}}"placeholder="Size">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">Url Link</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="file_download">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-9">
                        <td>{{$file_installer->file_download}}</td>
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
