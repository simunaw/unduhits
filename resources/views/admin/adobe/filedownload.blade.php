@extends('layouts.backend')

@section('content')
    <div class="content">
        <!-- Page Content -->
        <!-- Hover Table -->
        <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">File Panduan</h3>
                </div>
                <div class="block-content">
                    <a href="/admin/adobe/filedownload/create" class="btn btn-md btn-success mb-3">TAMBAH FILE PANDUAN</a>
                    <table class="table table-hover table-vcenter">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 50px;">#</th>
                                <th class="d-none d-sm-table-cell" style="width: 30%;">Nama File Panduan</th>
                                <th class="d-none d-sm-table-cell" style="width: 40%;">File Panduan</th>
                                <th class="text-center" style="width: 100px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($file_panduan as $pd)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$pd->nama_file_panduan}}</td>
                                <td>{{$pd->namapanduan}}</td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button  type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit">
                                            <a href="/admin/adobe/filedownload/edit/{{$pd->id}}" >
                                                <i style="color:#3A8CBD"class="fa fa-pencil"></i>
                                            </a>
                                        </button>
                                        <form action="/admin/adobe/filedownload/destroy/{{$pd->id}}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Delete">
                                                <i style="color:#EF5350" class="fa fa-times"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            <!-- END Hover Table -->
    </div>
    <!-- END Page Content -->

@endsection
            