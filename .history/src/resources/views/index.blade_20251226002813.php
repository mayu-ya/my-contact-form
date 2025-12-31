@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="form-content">
    <div class="form-title">
        <h2 class="form-title-con">お問い合わせ</h2>
    </div>
    
    <form class="form">
        <div class="form-name">
            <div class="form-name-content">
                <span class="form-name-content_name">お名前</span>
                <span class="form-name-content_re">必須</span>
            </div>
            <div class="form-name_create">
                <input type="text" name="name" value="テスト太郎">
            </div>
        </div>

        <div class="form-button">
            <button class="form-button_create">作成</button>
        </div>
    </form>
</div>
@endsection