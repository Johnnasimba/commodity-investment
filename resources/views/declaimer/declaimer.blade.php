@extends('layouts.mainLayout')
@section('content')
    @include('components.header.client-header')
    {{-- All class names for cdivent profile begins with "cp" meaning 'cdivent-profile' --}}
    <div class="declaimer-wrapper">
       <div class="declaimer-container">
           <h2 class="declaimer-title">DECLAIMER</h2>
           <iframe width="800" height="500" src="https://www.youtube-nocookie.com/embed/b2xmKQTLL9E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
           <a href="/client">skip</a>
       </div>
    </div>
@endsection