@extends('layout.template')

@section('content')
<div class="home" id="home">
    @include('partials.home-sections.about')
    @include('partials.home-sections.portfolio')
    @include('partials.home-sections.resume')
</div>
@endsection