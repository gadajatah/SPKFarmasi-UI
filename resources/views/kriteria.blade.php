@extends('layouts.base')
@section('title', 'SPK iF')
@section('title-2', 'Pengolahan Kriteria')
@section('title-3', 'Kriteria')
@section('content')
<div class="col-xl-12 col-lg-12">
    <div class="col-lg-12">
        <div class="card mb-4">
            {{-- <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">DataTables with Hover</h6>
            </div> --}}
            <div class="table-responsive p-3">
                <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                        <tr>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Brand</th>
                            <th>Dipersitas</th>
                            <th>Fitur</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Timbangan Digital Analitic</td>
                            <td>2.400.000</td>
                            <td>Indonesia</td>
                            <td>Terbaru</td>
                            <td>Digital</td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" class="btn btn-warning"><i class="fas fa-eye"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="btn btn-danger"><i class="fas fa-edit"></i></a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>Timbangan  kodok</td>
                            <td>700.000</td>
                            <td>Malaysia</td>
                            <td>Sangat Jadul</td>
                            <td>Manual</td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" class="btn btn-warning"><i class="fas fa-eye"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="btn btn-danger"><i class="fas fa-edit"></i></a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>Byological Safety</td>
                            <td>1.300.000</td>
                            <td>Jerman</td>
                            <td>Menjaga Tubuh</td>
                            <td>Kurang Modern</td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" class="btn btn-warning"><i class="fas fa-eye"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="btn btn-danger"><i class="fas fa-edit"></i></a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>Cetakan Kapsul</td>
                            <td>500.000</td>
                            <td>Indonesia</td>
                            <td>Mencetak Kapsul</td>
                            <td>Terbaru</td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" class="btn btn-warning"><i class="fas fa-eye"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="btn btn-danger"><i class="fas fa-edit"></i></a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection