@extends('layouts.app')

@section('content')
    <a class="btn btn-primary" href="{{  route('shipment') }}">< All</a>
    <div class="h6">Shipment {{ $shipment->id }} <a class="btn btn-primary" href="{{ route('shipment-edit', $shipment->id) }}"><i class="fa fa-pencil-square" aria-hidden="true"></i></a></div>
    <p>Created at: {{ $shipment->created_at }}</p>
@endsection