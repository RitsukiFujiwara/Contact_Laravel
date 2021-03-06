@extends('layouts.app')

@section('content')
<div class="container">
@if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <p>index</p>
                <table>
                    <thead>
                        <tbody>
                            @foreach($contacts as $contact)
                            <tr>
                                <th>{{ $contact -> id}}</th>
                                <td>{{ $contact -> username}}</td>
                                <td>{{ $contact -> gender}}</td>
                                <td><a href="{{ route('contact.show',['id' => $contact->id ]) }}">詳細を見る</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </thead>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
