@extends('layouts.app')
@section('content')
  <h2 class="text-xl mb-4">ショップ作成</h2>

  <form action="{{ route('shops.update', $shop->id) }}" method="POST">
    @csrf
    @method('PUT')
  <div>
    <label for="name">ショップ名</label>
    <input type="text" name="name" id="name" value="{{ old('name', $shop->name) }}" required class="rounded border">
  </div>

  <div class="mt-4">
    <label for="description">説明</label>
    <textarea name="description" id="description" rows="4" class="w-full rounded border px-3 py-2">{{ old('description', $shop->description) }}</textarea>
  </div>

  <button type="submit" class="mt-4 rounded underline">
    更新する
  </button>
  </form>
@endsection