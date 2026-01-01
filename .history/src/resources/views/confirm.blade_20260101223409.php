@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm') }}">
@endsection

@section('content')
<div class="content">
    <h2 class="title">お問い合わせ内容確認</h2>
    <table class="table">
        <tr>
            <th class="table-title">お名前</th>
            <td class="table-content"></td>
        </tr>
        <tr>
            <th class="table-title">メールアドレス</th>
            <td class="table-content"></td>
        </tr>
        <tr>
            <th class="table-title">電話番号</th>
            <td class="table-content"></td>
        </tr>
        <tr>
            <th class="table-title">お問い合わせ内容</th>
            <td class="table-content"></td>
        </tr>
    </table>
    <div class="table-button">
        <button class="table-button_submit" type="submit">送信</button>
    </div>
</div>
@endsection