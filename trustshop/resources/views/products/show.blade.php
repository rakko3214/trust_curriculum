@extends('layouts.app')
@section('content')
<div class="text-center">
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
    @if($product->stock <= 0)
      <p>SOLD OUT</p>
    @else
      <p>購入</p>
    @endif
</div>
@endsection