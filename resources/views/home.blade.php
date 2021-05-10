@extends('layouts.app')

@section('content')
<div class="container">
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

                <form method="POST" action="{{route('contact.store')}}">
                @csrf
                    <label>氏名</label><input type="text" name="username" id="">
                    <br>
                    <label>メールアドレス</label><input type="text" name="email" id="">
                    <br>
                    <label>電話番号</label><input type="text" name="tel" id="">
                    <br>
                    <label>性別</label><input type="text" name="gender" id="">
                    <br>
                    <label>内容</label><input type="text" name="text" id="">
                    <br>
                    <input type="submit" name="submit" value="送信">
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
