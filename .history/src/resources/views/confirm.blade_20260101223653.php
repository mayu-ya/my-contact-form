@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm') }}">
@endsection

@section('content')
<div class="content">
    <h2 class="title">お問い合わせ内容確認</h2>
    <table class="table">
        <tr>
            <div class="table-title">
                <th class="table-title-name">お名前</th>
            </div>
            <td class="table-content"></td>
        </tr>
        <tr>
            <div class="table-title">
                <th class="table-title-email">メールアドレス</th>
            </div>
            <td class="table-content"></td>
        </tr>
        <tr>
            <div class="table-title">
                <th class="table-title-tel">電話番号</th>
            </div>
            <td class="table-content"></td>
        </tr>
        <tr>
            <div class="table-title">
                <th class="table-title-content">お問い合わせ内容</th>
            </div>
            <td class="table-content"></td>
        </tr>
    </table>
    <div class="table-button">
        <button class="table-button_submit" type="submit">送信</button>
    </div>
</div>
@endsection