@extends('layouts.app')

@section('content')
    <form method="post" action="{{route('shipment-store')}}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name</label>
            <input id="name" name="name" type="text">
        </div>
        <div class="form-group">
            <input type="submit" value="Add">
        </div>
    </form>
@endsection