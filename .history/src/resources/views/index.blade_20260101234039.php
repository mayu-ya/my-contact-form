@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="content">
    <div class="form-title">
        <h2 class="form-title-con">お問い合わせ</h2>
    </div>
    
    <form class="form" action="/contacts/confirm" method="post">
        @csrf
        <div class="form-content">
            <div class="form-content-name">
                <span class="form-content-name_na">お名前</span>
                <span class="form-content_re">必須</span>
            </div>
            <div class="form_create">
                <input type="text" name="name" placeholder="テスト太郎">
            </div>
        </div>
        <div class="form-content">
            <div class="form-content-email">
                <span class="form-content-email_em">メールアドレス</span>
                <span class="form-content_re">必須</span>
            </div>
            <div class="form_create">
                <input type="text" name="email" placeholder="test@example.com">
            </div>
        </div>
        <div class="form-content">
            <div class="form-content-tel">
                <span class="form-content-tel_te">電話番号</span>
                <span class="form-content_re">必須</span>
            </div>
            <div class="form_create">
                <input type="text" name="tel" placeholder="09012345678">
            </div>
        </div>
        <div class="form-content">
            <div class="form-content-text">
                <span class="content-text_co">お問い合わせ内容</span>
            </div>
            <div class="form-text_create">
                <textarea name="text" placeholder="資料をいただきたいです"></textarea>
            </div>

        </div>

        <div class="form-button">
            <button class="form-button_create">作成</button>
        </div>
    </form>
</div>
@endsection