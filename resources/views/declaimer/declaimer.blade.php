@extends('layouts.mainLayout')
@section('content')
    @include('components.header.client-header')
    {{-- All class names for cdivent profile begins with "cp" meaning 'cdivent-profile' --}}
    <div class="declaimer-wrapper">
       <div class="declaimer-container">
           <h2>DECLAIMER</h2>

           <a href="/client">skip</a>
       </div>
    </div>
@endsection