@extends('layouts.app')
@section('content')
<div class="text-center">
  <div class="text-xl mb-4 mt-4">
    <h1>マイショップ</h1>
  </div>

  @if($shops->isEmpty())
    <p>ショップはありません</p>
  @else
    @foreach($shops as $shop)
    <a href="{{ route('shops.show', $shop->id) }}" class="underline">{{ $shop->name }}<br></a>
    @endforeach
  @endif
</div>
@endsection