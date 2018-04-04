@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <h6>Shipments component</h6>
        </div>
        <div class="col">
            <a href="{{  route('shipment-add') }}">Add</a>
        </div>
    </div>
    <shipments-index
            :shipments='{{ json_encode($shipments) }}'></shipments-index>
@endsection