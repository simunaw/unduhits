@extends('layouts.backend')

@section('content')
    <div class="content">
        <!-- Page Content -->
        <!-- Hover Table -->
        <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Preview</h3>
                </div>
                <div class="block-content">
                    <a href="/admin/labview/previewLabview/createLabview" class="btn btn-md btn-success mb-3">TAMBAH GAMBAR</a>
                    <table class="table table-hover table-vcenter">
                        <thead>
                            <tr>
                                <th style="width: 50px;">#</th>
                                <th>Nama Gambar</th>
                                <th class="d-none d-sm-table-cell" style="width: 60%;">Gambar</th>
                                <th class="text-center" style="width: 100px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($preview as $p)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$p->nama_gambar}}</td>
                                <td>
                                    <img style="width: 160px" src="{{ asset('assets/media/preview/'.$p->namaFiles) }}" alt="" title="">
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button  type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit">
                                            <a href="/admin/labview/previewLabview/editLabview/{{$p->id}}" >
                                                <i style="color:#3A8CBD"class="fa fa-pencil"></i>
                                            </a>
                                        </button>
                                        <form action="/admin/labview/previewLabview/destroyLabview/{{$p->id}}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button onclick="return confirm('Are you sure?')"  type="submit" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Delete">
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
            </div>
            <!-- END Hover Table -->
    </div>
    <!-- END Page Content -->

@endsection