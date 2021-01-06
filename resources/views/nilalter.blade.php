@extends('layouts.base')
@section('title', 'SPK iF')
@section('title-2', 'Pengolahan Nilai Alternatif')
@section('title-3', 'Nilai Alternatif')
@section('content')
<div class="col-xl-12 col-lg-12">
    <div class="card mb-4">
        <div class="card mb-4">
            {{-- <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">DataTables with Hover</h6>
            </div> --}}
            <div class="table-responsive p-3">
                <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                        <tr>
                            <th>No</th>
                            <th>Kriteria</th>
                            <th>Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Cetakan Kapsul</td>
                            <td>76</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Timbangan Digital Analitic</td>
                            <td>90</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Byological Safety</td>
                            <td>85</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection