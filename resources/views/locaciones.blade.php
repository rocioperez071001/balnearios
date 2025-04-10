@extends('layouts.app')

@section('title','Locaciones')

@section('content')
<a href="{{ url('/') }}#h2" class="collage-item">
    <img src="{{ asset('img/ixmiquilpan.jpg') }}" alt="Ixmiquilpan">
    <div class="collage-caption">Ixmiquilpan</div>
</a>

<a href="{{ url('/') }}#h3" class="collage-item">
    <img src="{{ asset('img/cardonal.jpg') }}" alt="Cardonal">
    <div class="collage-caption">Cardonal</div>
</a>

<a href="{{ url('/') }}#h4" class="collage-item">
    <img src="{{ asset('img/chilcuautla.jpg') }}" alt="Chilcuautla">
    <div class="collage-caption">Chilcuautla</div>
</a>

<a href="{{ url('/') }}#h5" class="collage-item">
    <img src="{{ asset('img/alfajayucan.jpg') }}" alt="Alfajayucan">
    <div class="collage-caption">Alfajayucan</div>
</a>
@endsection
