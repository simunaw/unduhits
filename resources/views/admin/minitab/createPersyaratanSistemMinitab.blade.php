@extends('layouts.backend')

@section('content')
    <div class="content">
        <!-- Page Content -->
        <!-- Hover Table -->
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Tambah Persyaratan SIstem</h3>
            </div>
            <div class="block-content">
            <form action="/admin/minitab/spesifikasiMinitab/storeMinitabPS" method="POST" >
                @csrf
                    <div class="form-group row">
                        <label class="col-12">Peryaratan Sistem</label>
                        <div class="col-12">
                            <textarea id="js-ckeditor" name="persyaratan_sistem"></textarea>
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