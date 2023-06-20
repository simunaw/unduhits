@extends('layouts.backend')

@section('content')
    <div class="content">
        <!-- Page Content -->
        <!-- Hover Table -->
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Edit Data</h3>
            </div>
            <div class="block-content">
                <form action="/admin/minitab/ringkasanMinitab/updateMinitab/{{$ringkasan->id}}" method="POST" >
                    @method('PUT')
                    @csrf
                    <div class="form-group row">
                        <label class="col-12">Ringkasan</label>
                        <div class="col-12">
                            <textarea id="js-ckeditor" name="ringkasan">{{$ringkasan->ringkasan}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <button type="submit" name=submit value="Update" class="btn btn-alt-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
            <!-- END Hover Table -->
    </div>
@endsection