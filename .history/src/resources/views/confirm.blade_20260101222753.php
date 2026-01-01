@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm') }}">
@endsection

@section('content')
<div class="content">
    <h2 class="title">お問い合わせ内容確認</h2>
    <div class="table-button">
        <button class="table-button_submit" type="submit">送信</button>
    </div>
</div>
@endsection