
@extends('layouts.main')

@include('layouts.navbar')

@section('container')
    <h1>Contact App</h1>
    <div>
        {{-- hyperlink yg mengarah ke halaman lain memanggil nama route yg dituju --}}
        <a href='{{ route('contacts.index3') }}'>All Contacts</a>
    </div>
@endsection
