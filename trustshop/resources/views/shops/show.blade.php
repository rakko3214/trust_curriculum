@extends('layouts.app')
@section('content')
    <div class="text-xl mb-4">
        <h1>{{ $shop->user->name }}のショップ</h1>
    </div>
    <div class="mb-4">
        ショップ名 <br>
        {{ $shop->name }}
    </div>
    <div class="mb-4">
        説明 <br>
        {{ $shop->description }}
    </div>

@endsection