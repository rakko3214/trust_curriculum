@extends('layouts.app')
@section('content')
<div class="text-center">
    @if (Auth::id() == $product->user_id)
    <div class="mb-4">
      <form action="{{ route('products.destroy', $product->id) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="underline">削除</button>
      </form>
      <a href="{{ route('products.edit', $product->id) }}" class="mb-4 underline">編集</a>
    </div>
    @endif

    <div class="text-xl mb-4">
      <h1>商品名</h1>
      <h2>{{$product->name}}</h2>
    </div>

    @if($product->description!==null)
    <div class="text-xl mb-4">
        <h1>商品説明</h1>
    </div>
    <p>{{$product->description}}</p>
    @endif

    <div class="text-xl mb-4">
      <h1>在庫</h1>
    </div>

    <div class="mb-4">
      <p>{{$product->stock}}</p>
    </div>

    @if($product->stock <= 0)
      <p>SOLD OUT</p>
    @else
      <form action="{{ route('products.purchase', $product->id) }}" method="POST">
        @csrf
        <button type="submit" class="underline">購入</button>
      </form>
    @endif
</div>
@endsection