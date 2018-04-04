@extends('layouts.app')

@section('content')
    <a href="{{  route('shipment') }}">< All</a>
    <form method="POST" action="{{route('shipment-put')}}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="form-group">
            <label for="name">Name</label>
            <input id="name" name="name" value="{{ $shipment->name }}" type="text">
            <input type="hidden" name="id" value="{{ $shipment->id }}">
        </div>
        <div class="form-group">
            <input type="submit" value="Save">
        </div>
    </form>
@endsection