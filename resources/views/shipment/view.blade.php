@extends('layouts.app')

@section('content')
    <a href="{{  route('shipment') }}">< All</a>
    <div class="h6">Shipment {{ $shipment->id }}</div>
    <p>Created at: {{ $shipment->created_at }}</p>
@endsection