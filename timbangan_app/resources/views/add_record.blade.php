@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-12 col-md-10">
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800 mt-5 text-center">Buat Rekaman</h1>
            <p class="mb-4 text-center">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the 
            <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>
            
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Buat Rekaman</h6>
                </div>
                <div class="card-body">
                    <form method="" action="">
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" class="form-control id="judul" name="judul" value="{{ old('judul') }}">
                            @error('judul_kasus')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="judul" class="form-label">Deskripsi</label>
                            <input type="text" class="form-control id="description" name="description" value="{{ old('description') }}">
                            @error('judul_kasus')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="timbangan" class="form-label">Timbangan : </label>
                            <select class="form-select" name="timbanga">
                                <option value=""> Timbangan 1</option>
                                <option value=""> Timbangan 2</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Buat Rekaman </button>
                    </form>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

        
    </div>
@endsection