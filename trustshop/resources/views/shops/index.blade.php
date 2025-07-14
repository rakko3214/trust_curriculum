@extends('layouts.app')

@section('content')
    <div>
        @auth
          <a href="{{ route('shops.create') }}" class="underline">新しいショップを作成</a>
        @endauth
        <div>
          <hi>ショップ一覧</h1>
        </div>
    </div>
<br>
        @foreach ($shops as $shop)  
          <a href="{{ route('shops.show', $shop->id) }}" class="underline">{{ $shop->name }}<br></a>
        @endforeach
@endsection