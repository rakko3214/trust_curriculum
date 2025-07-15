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
    @if (Auth::id() == $shop->user_id)
    <form action="{{ route('shops.destroy', $shop->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="underline">削除</button>
    </form>
    <a href="{{ route('shops.edit', $shop->id) }}" class="underline">編集</a>
    @endif
@endsection