@extends('layouts.app')
@section('content')



<style>
input {
    background-color: white !important;
}
</style>

<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Edit Societe</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('UpdateSociete') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1"> Raison Sociale </label>
                    <input type="text" name="raisonSociale" class="form-control asd" id="exampleFormControlInput1"
                        value="{{$societes->raisonSociale}}" required>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1"> identifiantFiscale </label>
                    <input type="text" name="identifiantFiscale" class="form-control" id="exampleFormControlInput1"
                        value="{{$societes->identifiantFiscale}}" required>

                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1"> periode </label>
                    <input type="text" name="periode" class="form-control" id="exampleFormControlInput1"
                        value=" {{$societes->periode}}" required>

                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1"> ICE </label>
                    <input type="text" name="ICE" class="form-control" id="exampleFormControlInput1"
                        value="{{$societes->ICE}}" required>

                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1"> regime </label>
                    <input type="text" name="regime" class="form-control" id="exampleFormControlInput1"
                        value=" {{$societes->regime}}" required>
                </div>
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Valider</button>
                </div>
            </form>
        </div>
    </div>
    @endsection