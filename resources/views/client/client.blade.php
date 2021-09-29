@extends('layouts.mainLayout')
@section('content')
    @include('components.header.client-header')
    {{-- All css on here begins with "clp" which stands for "Client Landing Page". All this is done to avoid css conflicts--}}
    <div class="clp-wrapper">
        <div class="clp-page-name-container">
            <div class="clp-name-container">
                <h3>Dashboard</h3>
            </div>
            <div class="clp-main-deposit-button">
                <a href="http://">DEPOSIT</a>
            </div>

        </div>
    </div>
    
@endsection