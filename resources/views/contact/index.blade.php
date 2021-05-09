@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <form action="/post" method="post">
                 {{ csrf_field() }}
                    <label>氏名</label><input type="text" name="username" id="">
                    <label>メールアドレス</label><input type="text" name="email" id="">
                    <label>電話番号</label><input type="text" name="tel" id="">
                    <label>性別</label><input type="text" name="gender" id="">
                    <label>内容</label><input type="text" name="text" id="">
                    <input type="submit" name="submit" value="送信">
                </form>
        </div>
    </div>
</div>
@endsection