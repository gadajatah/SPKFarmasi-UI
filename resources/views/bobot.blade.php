@extends('layouts.base')
@section('title', 'SPK iF')
@section('title-2', 'Pemberian Bobot')
@section('title-3', 'Bobot')
@section('content')
<div class="col-xl-12 col-lg-12">
    <div class="card mb-4">
        <div class="container">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Hasil Perhitungan Yang Anda Input</h6>
            </div>
            <div class="card-body">
              <form>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-3 col-form-label">Recommended 1</label>
                  <div class="col-sm-9">
                    <input type="name" class="form-control" id="inputEmail3" placeholder="Byological Safety">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-3 col-form-label">Recommended 2</label>
                  <div class="col-sm-9">
                    <input type="name" class="form-control" id="inputPassword3" placeholder="Timbangan Digital Analytic">
                  </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Recommended 3</label>
                    <div class="col-sm-9">
                      <input type="name" class="form-control" id="inputPassword3" placeholder="Cetakan Kapsul">
                    </div>
                  </div>
              </form>
            </div>
        </div>
    </div>
</div>
@endsection