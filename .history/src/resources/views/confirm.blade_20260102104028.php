@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class="content">
    <h2 class="title">お問い合わせ内容確認</h2>
    
    <table class="table" border="1">
        <tr>
            <div class="table-title">
                <th class="table-title-header">お名前</th>
            </div>
            <div class="table-content">
                <td class="table-content-name">
                    <input type="text" name="name" value="{{ $contact['name'] }}" readonly>
                </td>
            </div>
        </tr>
        <tr>
            <div class="table-title">
                <th class="table-title-header">メールアドレス</th>
            </div>
            <div class="table-content">
                <td class="table-content-email">
                    <input type="text" name="email" value="{{ $contact['email'] }}" readonly>
                </td>
            </div>
        </tr>
        <tr>
            <div class="table-title">
                <th class="table-title-header">電話番号</th>
            </div>
            <div class="table-content">
                <td class="table-content-tel">
                    <input type="text" name="tel" value="{{ $contact['tel'] }}" readonly>
                </td>
            </div>
        </tr>
        <tr>
            <div class="table-title">
                <th class="table-title-header">お問い合わせ内容</th>
            </div>
            <div class="table-content">
                <td class="table-content-content">
                    <input type="text" name="text" value="{{ $contact['text'] }}" readonly>
                </td>
            </div>
        </tr>
    </table>
    <div class="table-button">
        <button class="table-button_submit" type="submit">送信</button>
    </div>
</div>
@endsection