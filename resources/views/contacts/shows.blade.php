@extends('layouts.main')

@section('container')
    <main class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-title">
                            <div class="d-flex align-items-center">
                                <h2 class="mb-0">Details Contact</h2>
                            </div>
                        </div>
                        <div class="card-body">
                            <p>Name : {{ $contact['name'] }}</p>
                            <p>Phone : {{ $contact['phone'] }}</p>
                            <p>Email : {{ $contact['email'] }}</p>
                            <div class="align-items-start">
                                <a href="{{ route('contacts.index3') }}">Back To All Contacts</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
