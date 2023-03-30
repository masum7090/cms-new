@extends('layouts.collegeMaster')

@section('content')

<div class="content-wrapper">
    <form class="form-sample" action="{{route('store_abc')}}" method="POST">
        @csrf

        <input type="number" name="a"/>
        <button type="submit">Submit</button>
    </form>
</div>

@endsection
