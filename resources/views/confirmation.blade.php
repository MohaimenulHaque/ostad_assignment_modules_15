@extends('frontend.templete')
@section('title', 'Confirmation')

@section('mainContent')

    <div class="container">

        <div class="m-4 p-4">
            
            <h2 >Form Submitted Successfully!</h2>

            @if(session('formData'))
                <p><strong>Name:</strong> {{ session('formData.name') }}</p>
                <p><strong>Email:</strong> {{ session('formData.email') }}</p>
                <p><strong>Message:</strong> {{ session('formData.message') }}</p>
            @endif

            <a href="{{ route('contact') }}">Go Back</a>

        </div>

    </div>

@endsection