@extends('layouts.backend')

@section('content')
<div class="content">
    <!-- Page Content -->
    <!-- Hover Table -->
    <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Fitur</h3>
            </div>
            <div class="block-content">
                <a href="/admin/adobe/spesifikasi/create" class="btn btn-md btn-success mb-3">TAMBAH FITUR</a>
                <table class="table table-hover table-vcenter">
                    <thead>
                        <tr>
                            <th style="width: 50px;">#</th>
                            <th>Fitur</th>
                            <th class="text-center" style="width: 100px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($fitur as $f)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$f->fitur}}</td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <button  type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit">
                                        <a href="/admin/adobe/spesifikasi/edit/{{$f->id}}" >
                                            <i style="color:#3A8CBD"class="fa fa-pencil"></i>
                                        </a>
                                    </button>
                                    <form action="/admin/adobe/spesifikasi/destroy/{{$f->id}}" method="POST">
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
            <div class="block-header block-header-default">
                <h3 class="block-title">Persyaratan Sistem</h3>
            </div>
            <div class="block-content">
                <a href="/admin/adobe/spesifikasi/createPS" class="btn btn-md btn-success mb-3">TAMBAH PERSYARATAN SISTEM</a>
                <table class="table table-hover table-vcenter">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 50px;">#</th>
                            <th>Persyaratan Sistem</th>
                            <th class="text-center" style="width: 100px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($persyaratan_sistem as $p)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$p->persyaratan_sistem}}</td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <button  type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit">
                                        <a href="/admin/adobe/spesifikasi/editPS/{{$p->id}}" >
                                            <i style="color:#3A8CBD"class="fa fa-pencil"></i>
                                        </a>
                                    </button>
                                    <form action="/admin/adobe/spesifikasi/destroyPS/{{$p->id}}" method="POST">
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