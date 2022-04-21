@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-12 col-sm-6">
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800 mt-5 text-center">Aplikasi Timbangan</h1>
            <p class="mb-4 text-center">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the 
            <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

            <div class="row justify-content-lg-between flex-md-fill">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <button type="button" class="btn btn-success mb-2">Tambah User</button>
                </div>
                <div class="col-lg-4 col-md-9 col-sm-8">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search...." name="search" value="{{ request('search') }}">
                        <button class="btn btn-primary" type="submit">Search</button>
                    </div>
                </div>
            </div>
            
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Pilih User</h6>
                    
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

        </div>
    </div>
@endsection