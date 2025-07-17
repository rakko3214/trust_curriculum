@extends('layouts.app')

@section('content')
<div class="text-center">
    <div class="mb-4">
        @auth
          <a href="{{ route('shops.create') }}" class="underline">新しいショップを作成</a>
        @endauth
    </div>
    <div class="mb-4">
        @auth
          <a href="{{ route('shops.mine') }}" class="underline">マイショップ</a>
        @endauth
    </div>
    <div class="mb-4">
      <hi>ショップ一覧</h1>
    </div>
<br>
        @foreach ($shops as $shop)  
          <a href="{{ route('shops.show', $shop->id) }}" class="underline">{{ $shop->name }}<br></a>
        @endforeach
</div>
@endsection