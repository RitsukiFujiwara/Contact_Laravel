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

                <p>edit</p>
                
                
                <form method="GET" action="{{ route('contact.update', ['id' => $contact->id]) }}">
                @csrf
                <label>氏名</label><input type="text" name="username" value="{{ $contact->username}}">
                    <br>
                    <label>メールアドレス</label><input type="text" name="email" value="{{ $contact->email}}">
                    <br>
                    <label>電話番号</label><input type="text" name="tel" value="{{ $contact->tel}}">
                    <br>
                    <label>性別</label><input type="text" name="gender" value="{{ $contact->gender}}">
                    <br>
                    <label>内容</label><input type="text" name="text" value="{{ $contact->text}}">
                    <br>
                    <button>更新</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
