@extends('layouts.base')
@section('title', 'SPK iF')
@section('title-2', 'Pengolahan Nilai Kriteria')
@section('title-3', 'Nilai Kriteria')
@section('content')
<div class="col-xl-12 col-lg-12">
    <div class="card mb-4">
        <div class="container">
                {{-- <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Horizontal Form</h6>
                </div> --}}
                <div class="card-body">
                  <form>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Nilai Kriteria</label>
                      <div class="col-sm-9">
                        <input type="name" class="form-control" id="inputEmail3" placeholder="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">Id Nilai Kriteria</label>
                      <div class="col-sm-9">
                        <input type="name" class="form-control" id="inputPassword3" placeholder="">
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Nilai Kriteria</label>
                        <div class="col-sm-9">
                          <input type="name" class="form-control" id="inputPassword3" placeholder="">
                        </div>
                      </div>
                    <div class="form-group row">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Create</button>
                      </div>
                    </div>
                  </form>
                </div>
            </div>
    </div>
</div>
@endsection