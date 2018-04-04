@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <h6>Shipments component</h6>
        </div>
        <div class="col">
            <a class="btn btn-primary" href="{{  route('shipment-add') }}">Add</a>
        </div>
    </div>
    <shipments-index
            :shipments='{{ json_encode($shipments) }}'
            :csrf_token='{!! json_encode(csrf_token()) !!}'
    ></shipments-index>
@endsection