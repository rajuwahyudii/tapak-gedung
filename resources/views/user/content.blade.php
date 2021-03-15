@extends('layouts.user')

@section('content')
<div class="container">
    <h3 class="mt-5">{{$content->judul}}</h3>
    <hr class="mb-5">
    {!! $content->kontent !!}
</div>
    
@endsection