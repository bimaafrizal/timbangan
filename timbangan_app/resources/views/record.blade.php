@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-10">
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800 mt-5 text-center">Rekaman</h1>
            <p class="mb-4 text-center">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the 
            <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

            <div class="row ">
                <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-end align-content-end flex-wrap">
                    <form action="" method="GET">
                        @csrf
                        <button  class="btn btn-danger mb-2">Stop</button>
                    </form>
                </div>
            </div>
            
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Hasil Rekaman</h6>
                    
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jam</th>
                                    <th>Berat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>System Architect</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div> 
    </div>
@endsection