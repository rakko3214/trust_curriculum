@extends('layouts.app')
@section('content')
<div class="text-center">
    <div class="text-xl mb-4">
        <h1>{{ $shop->user->name }}のショップ</h1>
    </div>
    @if (Auth::id() == $shop->user_id)
    <form action="{{ route('shops.destroy', $shop->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="underline">削除</button>
    </form>
    <a href="{{ route('shops.edit', $shop->id) }}" class="underline">編集</a>
    <a href="{{ route('products.export', $shop->id) }}" class="underline">CSV出力</a>
    @endif
    <div class="mb-4">
        ショップ名 <br>
        {{ $shop->name }}
    </div>
    <div class="mb-4">
        説明 <br>
        {{ $shop->description }}
    </div>

    @if (Auth::id() == $shop->user_id)
      <a href="{{ route('products.create', $shop->id) }}" class="underline">商品作成</a>
    @endif
    <div class="flex text-xl mt-4 mb-4">
        <h1>商品一覧</h1>
    </div>

    @foreach($products as $product)
      <div class="mb-4 flex">
      <a href="{{route('products.show', $product->id)}}" class="underline">{{$product->name}}</a>
      <p>商品価格</p>
      <p>{{$product->price}}円</p>
      <p>在庫</p>
      @if($product->stock <= 0)
        <p>SOLD OUT</p>
      @else
        <p>{{$product->stock}}個</p>
      @endif
      </div>
    @endforeach
</div>
@endsection