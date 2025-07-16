@extends('layouts.app')
@section('content')
    <h2 class="text-xl mb-4">商品作成</h2>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="hidden" name="shop_id" value="{{ $shop->id }}">
    <div class="mb-4">
      <label for="name">商品名</label>
      <input type="text" name="name" id="name" value="{{ old('name', $product->name) }}" required class="rounded">
    </div>
    <div class="mb-4">
      <label for="description">説明</label>
      <textarea name="description" id="description" required class="rounded w-full">{{ old('description', $product->description) }}</textarea>
    </div>
    <div class="mb-4 flex">
      <label for="price">価格</label>
      <input type="text" name="price" id="price" value="{{ old('price', $product->price) }}" required class="rounded">
      <p>円</p>
    </div>
    <div class="mb-4">
      <label for="stock">在庫</label>
      <input type="text" name="stock" id="stock" value="{{ old('stock', $product->stock) }}" required class="rounded">
    </div>
    <button type="submit" class="underline">
    更新
    </button>
  </form>
@endsection