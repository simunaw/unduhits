@extends('layouts.backend')

@section('content')
    <div class="content">
        <!-- Page Content -->
        <!-- Hover Table -->
        <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Ringkasan</h3>
                </div>
                <div class="block-content">
                    <a href="/admin/minitab/ringkasanMinitab/createMinitab" class="btn btn-md btn-success mb-3">TAMBAH RINGKASAN</a>
                    <table class="table table-hover table-vcenter">
                        <thead>
                            <tr>
                                <th style="width: 50px;">#</th>
                                <th>Nama</th>
                                <th class="d-none d-sm-table-cell" style="width: 50%;">Ringkasan</th>
                                <th class="text-center" style="width: 100px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($ringkasan as $r)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                @foreach ($software as $s)
                                <td>{{$s->nama_software}}</td>
                                @endforeach
                                <td>{{$r->ringkasan}}</td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button  type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit">
                                            <a href="/admin/minitab/ringkasanMinitab/editMinitab/{{$r->id}}" >
                                                <i style="color:#3A8CBD"class="fa fa-pencil"></i>
                                            </a>
                                        </button>
                                        <form action="/admin/minitab/ringkasanMinitab/destroyMinitab/{{$r->id}}" method="POST">
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
