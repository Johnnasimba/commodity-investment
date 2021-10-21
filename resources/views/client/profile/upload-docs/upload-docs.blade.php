@extends('layouts.mainLayout')
@section('content')
    @include('components.header.client-header')
    {{-- classes are inherited from edit details --}}
    <div class="cp-wrapper">
        <div class="cp-name-container">
            <h3 >Upload documents</h3>
        </div>
        <div class="cp-upload-documents-container">
            <div class="cp-edit-details-container">
                {{-- <h4 class="cp-edit-title">Tell us more about your self</h4> --}}
                <form action="{{ route('details') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- ID/Passport --}}
                    <div class="form-group">
                        <label for="id-or-passport" >ID/Passport</label>
                        <div class="input-with-span">
                            <input type="file"  name="id-or-passport" required>
                            @if ($errors->has('id-or-passport'))
                                <p class="text-danger">{{ $errors->first('id-or-passport') }} Invalid file</p>
                            @endif
                        </div>
                    </div>
                    {{-- Proof of address --}}
                    <div class="form-group">
                        <label for="proof-of-address" >Proof of address</label>
                        <div class="input-with-span">
                            <input type="file"  name="proof-of-address" required>
                            @if ($errors->has('proof-of-address'))
                                <p class="text-danger">{{ $errors->first('proof-of-address') }} Invalid file</p>
                            @endif
                        </div>
                    </div>
                    {{-- Bank statement --}}
                    <div class="form-group">
                        <label for="bank-statement" >Bank statement</label>
                        <div class="input-with-span">
                            <input type="file"  name="bank-statement" required>
                            @if ($errors->has('bank-statement'))
                                <p class="text-danger">{{ $errors->first('bank-statement') }} Invalid file</p>
                            @endif
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <input type="submit">
                    </div>
                   
                </form>
             </div>
          
        </div>

    </div>
@endsection